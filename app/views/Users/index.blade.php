@extends("Layouts.Admin.layout")
@section("content")
	<table class="table">
	    <thead>
	       <tr>
	          <th>S.No.</th>
	          <th>Name</th>
	          <th>Email ID</th>
	          <th>Contact No</th>
	          <th>Action</th>
	       </tr>
	    </thead>
	    <tbody>
	        <?php
	        	$i=0; 
	        	$view=1;
	        ?>
	        @foreach($users as $data)
	        <tr>
	            <td>{{++$i}}</td>
	            <td>{{$data->user_first_name.' '.$data->user_last_name}}</td>
	            <td>{{$data->email}}</td>
	            <td>{{$data->user_contact_no}}</td>
				<td>
					@if($data->user_subscription_token)
						<a href="{{$tableName}}/unsubscribe/{{$data->id}}">
							<button type="button" class="btn btn-info ">
								<span class="glyphicon glyphicon-remove"></span>
								Unsubscribe
							</button>
						</a>
					@else
						<a href="{{$tableName}}/subscribe/{{$data->id}}">
							<button id="subscribe-button" type="button" class="btn btn-success ">
								<span class="glyphicon glyphicon-open"></span>
								Subscribe
							</button>
						</a>
					@endif
				</td>
					<td>
					@if(isset($data->deleted_at))
						<a href="{{$tableName}}/enable/{{$data->id}}">
							<button type="button" class="btn btn-info " input type="submit" value="Button">
								<span class="glyphicon glyphicon-open"></span> 
								Enable
							</button>
						</a>
					@else
						<a href="{{$tableName}}/disable/{{$data->id}}">
							<button type="button" class="btn btn-warning ">
								<span class="glyphicon glyphicon-remove"></span> 
								Disable
							</button>
						</a>
					</td>
					@endif
					<td>
					<!-- Remove modal -->
					<button class="btn btn-danger" data-toggle="modal" data-target="#removeModal{{$data->id}}">
						<span class="glyphicon glyphicon-trash"></span>
						Remove
					</button>
					<div id="removeModal{{$data->id}}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">
										Remove permanently
									</h4>
								</div>
								<div class="modal-body">
									<p class="message">Do you want to remove the particular entry?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<a href="{{$tableName}}/delete/{{$data->id}}">
										<button type="button" class="btn btn-primary">
											Remove
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>
	       @endforeach
	    </tbody>
	 </table>
@stop
