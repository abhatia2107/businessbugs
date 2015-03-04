@extends('Layouts.layout')
@section('pagestylesheet')
  <link href="/css/bootstrap/css/jquery-ui.css" rel="stylesheet">
@stop
@section('content')
<style type="text/css">
  .contact-heading{
    font:15px/1.5 Open Sans, Arial, sans-serif;
    font-weight: bold;
  }
  form{
    color:black;
  }
  .form-group label {
    color:black;
  }
sup{
  color:red;
}
</style>
<div class="container main-container headerOffset">
<div class="main container">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-5 col-sm-7 col-xs-12">
      <form  role="form" id="support" method="post" enctype="multipart/form-data" action="/feedbacks/store">
        <div class="form-group">
          <h3 class="contact-heading">Have a query? Or just want to tell us how awesome we are ?</h3>
          <h3 class="contact-heading">Drop in a line here or email contact@businessbugs.in</h3>
        </div>
      <div class="form-group text-center">
          <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
          <label for="feedback_name">
                    Your Name
                    <span class="required"><sup>*</sup></span>
                </label>
                <input type="text" class="form-control"  placeholder="Name" name="feedback_name" id="feedback_name">
      </div>
      <div class="form-group text-center">
          <label for="feedback_email">
                    Your Email
                <span class="required"><sup>*</sup></span>
                </label>
                <input type="text" class="form-control"  placeholder="Email" name="feedback_email" id="feedback_email">
      </div>
      <div class="form-group text-center">
          <label for="feedback_subject">
                    Subject
                    <span class="required"><sup>*</sup></span>
                </label>
                <input type="text" class="form-control"  placeholder="Subject of the message" name="feedback_subject" id="feedback_subject">
      </div>
      <div class="form-group text-center">
          <label for="feedback_message">
                    Your Message
                    <span class="required"><sup>*</sup></span>
                </label>
                <textarea rows="5" class="form-control" name="feedback_message" id="feedback_message"></textarea>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="box-content">
          <h6>Submit a request for assistance and we'll notify you as soon as possible.</h6>
      </div>
    </form>
    </div>
  </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>

@stop
@section('pagejavascript')
    <script src="/css/bootstrap/js/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#support').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    feedback_name: {
                        validators: {
                            notEmpty: {
                                message: 'Name is required and cannot be empty'
                            }
                    }},
                    feedback_email: {
                        validators: {
                            notEmpty: {
                                message: 'The email is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    feedback_subject: {
                        validators: {
                            notEmpty: {
                                message: 'The subject is required and cannot be empty'
                            }
                    }},

                    feedback_message: {
                        validators: {
                            notEmpty: {
                                message: 'The message is required and cannot be empty'
                            }
                    }},

                }
            });
            
            
        });
    </script>
@stop