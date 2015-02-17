@section("login")
<div class="modal-dialog login" >
    <div class="modal-content">
        <form name="login" class="login" id="loginForm" role="form" method="post" action="{{url('/users/login/submit')}}" enctype="multipart/form-data">
            <div class="modal-header">
                <div type="button" class="close" title="Close"  data-dismiss="modal">
                    <span onClick="refreshForm('#loginForm')" aria-hidden="true">&times;</span>
                </div>
                <h3 class="modal-title text-center" id="myModalLabel2">LogIn</h3>
            </div>
            <div class="modal-body">
                <div class="sign_up_opt text-center">
                    Not a member yet? <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Sign Up</a>
                </div>
                <input type="hidden" name="csrf_token" id="hiddenCSRF" value="{{ csrf_token() }}">
                <div class="form-group inner-addon">
                     <i class="glyphicon glyphicon-envelope left-addon glyph-left"></i>
                     <input type="email" placeholder="Enter Your E-Mail ID (mymail@mail.com)" class="form-control " name="email"  id="email" value="@if(isset($userDetails)){{$userDetails->email}}@else{{Input::old('email')}}@endif" aria-describedby="basic-addon1">
                </div>
                <div class="form-group inner-addon">
                    <i class="glyphicon glyphicon-lock left-addon glyph-left"></i>
                     <input type="password" class="form-control " name="password" placeholder="    Enter Your Password" id="password">
                </div>
                <div class="row">
                    <div class="form-group rememberMe col-md-12 col-sm-12 col-xs-12">                               
                        <label class="control-label">
                            <input name="remember"  value="forever" checked="checked" type="checkbox">
                            Remember Me 
                        </label>                                                             
                    </div>                
                    <div class="forgetPassword col-md-12 col-sm-12 col-xs-12">
                        <a href="/users/password/remind">Forgot Password?</a>
                    </div>
                </div>
                <div class="signin_button text-center"><button type="submit" class="btn btn-primary">LogIn</button></div>
            </div>
            <div class="modal-footer">                               
                <a href="{{url('/login/fb')}}"><img height="35px" src="/assets/images/login_facebook.png"></a>                
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" >
    $(document).ready(function(){
        
        $('.login').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {

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

                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                }
            }
        });
    });
</script>
@show