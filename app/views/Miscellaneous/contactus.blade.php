@extends('Layouts.layout')
@section('pagestylesheet')
  <link href="/css/bootstrap/css/jquery-ui.css" rel="stylesheet">
@stop
@section('content')

<div class="container main-container headerOffset">
<div class="main container">
    <div class="col-md-5 col-sm-7 col-xs-12">
      <form  role="form" id="support" method="post" enctype="multipart/form-data" action="/feedbacks/store">
        <div class="form-group">
          <h3 class="heading">Submit a request/feedback/complaint</h3>
        </div>
      <div class="form-group">
        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
          <label for="feedback_email">
                    Email
                <span class="required">*</span>
                </label>
                <input type="text" class="form-control"  placeholder="Email" name="feedback_email" id="feedback_email">
      </div>
      <div class="form-group">
          <label for="feedback_subject">
                    Subject
                    <span class="required">*</span>
                </label>
                <input type="text" class="form-control"  placeholder="Subject of the issue" name="feedback_subject" id="feedback_subject">
      </div>
      <div class="form-group">
          <label for="feedback_description">
                    Description
                    <span class="required">*</span>
                </label>
                <textarea rows="5" class="form-control"  placeholder="Tell us more about the issue." name="feedback_description" id="feedback_description"></textarea>
      </div>
      <div class="form-group">
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

                    feedback_description: {
                        validators: {
                            notEmpty: {
                                message: 'The description is required and cannot be empty'
                            }
                    }},

                }
            });
            
            
        });
    </script>
@stop