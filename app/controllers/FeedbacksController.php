<?php

class FeedbacksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /feedbacks
	 *
	 * @return Response
	 */
	public function index()
	{
		$feedbacks=Feedback::all();
		$tableName="$_SERVER[REQUEST_URI]";
		$count=$this->getCountForAdmin();
		$adminPanelListing=$this->adminPanelList;
		return View::make('Feedbacks.index',compact('feedbacks','tableName','count','adminPanelListing'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /feedbacks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Feedbacks.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 * POST /feedbacks
	 *
	 * @return Response
	 */
	public function store()
	{
		$credentials=Input::all();
		if (Auth::check())
		{
		    // The user is logged in...
		    $credentials['feedback_user_id']=Auth::id(); 
		}
		//dd($credentials);
		$validator = Validator::make($credentials, Feedback::$rulesAdmin);
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		$feedback=Feedback::create($credentials);
		$email=Lang::get('feedback.feedback_email');
		$name=Lang::get('feedback.feedback_email_name');
		$subject=$credentials['feedback_subject'];
		Mail::later(60,'Emails.feedback.sendFeedback', $credentials, function($message) use ($email,$name,$subject)
		{
			$message->to($email,$name)->subject($subject);
		});
		$email=$credentials['feedback_email'];
		$name="User";
		$subject=Lang::get('feedback.feedback_emailSubjectRecieved');
		Mail::later(60,'Emails.feedback.feedbackRecieved', $credentials, function($message) use ($email,$name,$subject)
		{
			$message->to($email,$name)->subject($subject);
		});
		return Redirect::to('/')->with('success',Lang::get('feedback.feedback_created'));
	}


	/**
	 * Display the specified resource.
	 * GET /feedbacks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$feedbackDetails=Feedback::find($id);
		if(!$feedbackDetails->feedback_read){
			$feedbackDetails->feedback_read=true;
			$feedbackDetails->save();
		}
		return View::make('Feedbacks.show',compact('feedbackDetails'));
	}

	public function read($id)
	{
		$feedback= Feedback::find($id);
		$feedback->feedback_read=true;
		$updated=$feedback->save();
		if ($updated) 
			return Redirect::to('/feedbacks')->with('success',Lang::get('feedback.feedback_read'));
		else
			return Redirect::to('/feedbacks')->with('failed',Lang::get('feedback.feedback_read_failed'));
	}

	public function unread($id)
	{
		$feedback= Feedback::find($id);
		$feedback->feedback_read=false;
		$updated=$feedback->save();
		if ($updated) 
			return Redirect::to('/feedbacks')->with('success',Lang::get('feedback.feedback_unread'));
		else
			return Redirect::to('/feedbacks')->with('failed',Lang::get('feedback.feedback_unread_failed'));
	}

	public function undone($id)
	{
		$feedback=User::onlyTrashed()->find($id);
		if($feedback){
			$feedbackDisabled=User::onlyTrashed()->find($id);
			if($feedbackDisabled){
				$feedbackDisabled->restore();	
				return Redirect::to('/feedbacks')->with('success',Lang::get('feedback.feedback_undone'));
			}
			else{
					return Redirect::to('/feedbacks')->with('failure',Lang::get('feedback.feedback_undone_failed'));
			}
		}
		else
			return Redirect::to('/feedbacks')->with('failure',Lang::get('feedback.feedback_not_exist'));
	}

	public function done($id)
	{
		// TO DO: delete() not updating deleted_at timestamps in table.
		$feedback=User::find($id);
		// dd($feedback);
		if($feedback){
			$deleted=$feedback->delete();
			return Redirect::to('/feedbacks')->with('success',Lang::get('feedback.feedback_done'));
		}
		else{
			return Redirect::back()->with('failure',Lang::get('feedback.feedback_done_failed'));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /feedbacks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$feedback=Feedback::find($id);
		$deleted=$feedback->forceDelete();
		if($deleted)
			return Redirect::to('/feedbacks')->with('success',Lang::get('feedback.feedback_deleted'));
		else
			return Redirect::to('/feedbacks')->with('failure',Lang::get('feedback.feedback_delete_failed'));
	}

}