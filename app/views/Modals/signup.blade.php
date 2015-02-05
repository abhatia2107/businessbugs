@section("signup")
<div class="modal-dialog">
        <div class="modal-content">
            <form name="signUp" class="signUp" id="signUpForm" role="form" method="post" action="/users/signup/submit" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span onClick="refreshForm('#signUpForm')" aria-hidden="true" title="close">&times;</span>                
                    </button>
                    <h4 class="modal-title" id="myModalLabel1">Sign-Up</h4>
                    <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Already a member? Login</a>
                </div>
                <center><a href="/login/fb"><img height="40px" style="margin-top:14px;" src="/assets/images/signup-with-facebook.png"></a></center>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="user_first_name" class="col-sm-3 control-label ">First Name<span class="required">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                                <input type="text"   class="form-control " name="user_first_name"  id="user_first_name" value="@if(isset($userDetails)){{$userDetails->user_first_name}}@else{{Input::old('user_first_name')}}@endif">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="user_last_name"  class="col-sm-3 control-label ">Last Name</label>
                            <div class="col-sm-8">
                                <input type="text"  class="form-control " name="user_last_name"  id="user_last_name" value="@if(isset($userDetails)){{$userDetails->user_last_name}}@else{{Input::old('user_last_name')}}@endif">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label ">Email<span class="required">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="email"  placeholder="mymail@example.com" class="form-control " name="email"  id="email" value="@if(isset($userDetails)){{$userDetails->email}}@else{{Input::old('email')}}@endif">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="user_contact_no" class="col-sm-3 control-label ">Mobile Number<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control " name="user_contact_no"  id="user_contact_no" value="@if(isset($userDetails)){{$userDetails->user_contact_no}}@else{{Input::old('user_contact_no')}}@endif">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="user_location" class="col-sm-3 control-label ">City<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control " name="user_location"  id="user_location" value="@if(isset($userDetails)){{$userDetails->user_location}}@else{{Input::old('user_location')}}@endif">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label ">Password<span class="required">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control " name="password"  id="password">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="password_confirmation" class="col-sm-3 control-label ">Confirm Password<span class="required">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="password"   class="form-control " name="password_confirmation"  id="password_confirmation">
                            </div>
                        </div>
                    </div><br/>
                </div>
                <div class="modal-footer">
                    <div class="checkbox login-remember">
                        <label class="col-sm-6 control-label">
                            <input name="signup_terms"  value="forever" checked="checked" type="checkbox" required>
                            I agree to <a href="/terms">terms and conditions.</a>
                        </label>
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
     <script type="text/javascript">
            $(document).ready(function(){     
                $('.signUp').bootstrapValidator({
                    message: 'This value is not valid',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                        
                fields: {
                    user_first_name: {
                        message: 'The name is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 2,
                                message: 'The firstname must be more than 2 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+(?:(?:\\s+|-)[a-zA-Z]+)*$/,
                                message: 'The username can only consist of alphabets'
                            }
                        }
                    },
                    user_last_name: {
                        message: 'The last name is not valid',
                        validators: {


                            regexp: {
                                regexp: /^[a-zA-Z]+(?:(?:\\s+|-)[a-zA-Z]+)*$/,
                                message: 'The last name can only consist of alphabets'
                            }
                        }
                    },
                    user_location: {
                        message: 'City is not valid',
                        validators: {
                            notEmpty: {
                                message: 'City is required and cannot be empty',
                            },
                            stringLength: {
                                min: 2,
                                max: 25,
                                message: 'City must be more than 2 and less than 25 characters long'
                            },
                        }
                    },
                    password: {
                        message: 'The password is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The password is required and cannot be empty'
                            },
                            stringLength: {
                                min: 8,
                                max: 20,
                                message: 'The password must be more than 8 and less than 20 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9!@#$-%&_]+$/,
                                message: 'The password can only consist of alphabetical, number and following special symbol !,@,#,$,-,%,&,_'
                            }
                        }
                    },
                    password_confirmation: {
                        message: 'The password is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The password is required and cannot be empty'
                            },
                            stringLength: {
                                min: 8,
                                max: 20,
                                message: 'The password must be more than 8 and less than 20 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9!@#$-%&_]+$/,
                                message: 'The password can only consist of alphabetical, number and following special symbol !,@,#,$,-,%,&,_'
                            },
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm must be the same'
                            }
                        }
                    },
                    user_contact_no: {
                        message: 'The number is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The mobile number is required and cannot be empty'
                            },

                            regexp: {
                                regexp: /^[0-9]{10}$/,
                                message: 'The mobile number consists of 10 digits. Skip adding +91 or 0'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    signup_terms:{
                        validators: {
                            notEmpty: {
                                message: 'You need to agree to terms and conditions.'
                            }
                        }
                    }
                }
            });
        });
    </script>
@show