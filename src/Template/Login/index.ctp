<?php $this->set('title', 'Login') ?>

<style>
    .login-body {
        background-image: url('<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/images/auth/bg-login.jpg');
        overflow-y:hidden;

    }
    #lo-engage-ext-container {
        visibility: none !important;
    }
    html, 
    body {
        height: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.0) 350px, rgba(0,0,0,0.0) 0%);
    }
    h3 {
        font-size: 19px;
    }
    .login-body {
        height: 100%;
    }
    .card-border {
        height: auto;
        /*background-color: #E3E4E5;*/
        background-color: transparent;
    }
    .vcenter{
        margin: 4% auto 3% auto !important;
        background-color: rgba(255,255,255,0.5);
    }
    .white-form {
        background-color: #ffffff !important;
        border-radius: 10px;
        padding: 20px;
    }
    @-moz-document url-prefix() {
        .login-body {
            overflow-y:scroll;
        }
        .vcenter{
            margin: 3% auto 4% auto !important; 
        }
    }
</style>


<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<section class="login-block login-body" style="margin: 0 auto;">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row"> 
            <div class="col-sm-12">
                <?php echo $this->Form->create(null,['class' => 'md-float-material form-material'], ['url' => ['controller' => 'login', 'action' => 'index' ]]); ?>

                <div class="auth-box card login-width vcenter">
                    <div class="card-border">
                        <div class="text-center p-t-5">              
                            <img src="<?php echo $this->request->webroot; ?>img/cedp.png" alt="logo.png" style="height: 90px;"/>              
                        </div>
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Sign In</h3>
                                </div>
                            </div>
                           <span style="color:red;text-align: center;font-weight:bold;padding-bottom: 5px"> <?php echo $this->Flash->render(); ?> </span>

                            <div class="white-form">
                                <label>User Id</label>
                                <div class="form-group form-primary">
                                    <input type="text" name="Username" class="form-control"  />
                                    <span class="form-bar"></span>
                                    <!--<label class="float-label">Your Email Address</label>-->
                                </div>

                                <label>Password</label>
                                <div class="form-group form-primary">
                                    <input type="password" name="Password" class="form-control"  />
                                    <span class="form-bar"></span>
                                    <!--<label class="float-label">Password</label>-->
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="<?php echo $this->Url->build(['controller' => 'login', 'action' => 'forgotpassword']); ?>" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>

                            </div><!--end of white-form-->
                            <div class="row m-t-30">
                                <div class="col-md-2"></div>
                                <div class="col-md-8" style="margin-top: -50px;">
                                    <button type="submit" class="btn btn-primary btn-round btn-md btn-block waves-effect waves-light text-center m-b-2">Sign in</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <!--<div class="col-md-12 text-center"><a href="<?php echo $this->Url->build(['controller' => 'Registration', 'action' => 'index']);?>"><b>Don't have an account? Create Now</b></a></div>-->
                                <div class="col-md-6 text-center">
                                    <div class="col-md-12 text-center">
                                        <img src="<?php echo $this->request->webroot; ?>img/home.png" alt="registration.png" style="width: 24%;" /> 
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a href="//www.memis.gov.bd"> <b>Back to Home</b></a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="col-md-12 text-center" style="font-size: 23px;">
                                        <a href="<?php echo $this->Url->build(['controller' => 'Registration', 'action' => 'index']);?>"><img src="<?php echo $this->request->webroot; ?>img/reg.png" alt="registration.png" style="width: 24%;" /></a> 
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a href="<?php echo $this->Url->build(['controller' => 'Registration', 'action' => 'index']);?>"><b>Register Now</b></a>
                                    </div>
                                </div>
                                <!--<div class="row">
<div class="col-md-12 text-center"><a href="#"><b>Back to Home</b></a></div>
</div>-->
                            </div>
                        </div><!--end card-block-->
                    </div>

                    <?php echo $this->Form->end(); ?>

                    <!-- end of form -->
                </div>

            </div>

        </div>


        </section>

    <div class="footer login-footer">
        <div class="container">
            <div class="col-md-12 text-center">
                <div class="footer-text">
                    <p>
                        Copyright © 2019 All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>