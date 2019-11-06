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
                <?php echo $this->Form->create(null,['class' => 'md-float-material form-material'], ['url' => ['controller' => 'Login', 'action' => 'forgotpassword' ]]); ?>
                <input type="hidden" name="FP_STEP" value="<?php echo $FP_STEP; ?>" />
                <div class="auth-box card login-width vcenter">
                    <div class="card-border">
                        <div class="text-center p-t-5">              
                            <img src="<?php echo $this->request->webroot; ?>img/logo.png" alt="logo.png" />              
                        </div>
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Forgot Password</h3>
                                </div>
                            </div>
                            <center class="h5"><?php echo $this->Flash->render(); ?></center>
<?php
        if ($FP_STEP === 0)
        {
?>
                            <div class="white-form">
                                    <div class="form-group row">
                                        <label for="MOBILE_NO" class="col-sm-4 col-form-label">Mobile Number<i style="color: red;">*</i></label>
                                        <div class="col-sm-2">
                                            <input type="text" name="COUNTRY_CODE" id="COUNTRY_CODE" class=" form-control text-right" value="880" readonly />     
                                        </div>
                                        <div class="col-sm-6">    
                                            <input type="text" name="MOBILE_NO" id="MOBILE_NO" maxlength="10"  class="form-control numbersOnly" required/>
                                        </div>
                                    </div>
                            </div>                            
<?php
        }
        else if ($FP_STEP === 1)
        {
?>
                            <input type="hidden" name="MOBILE_NO" value="<?php echo $MOBILE_NO; ?>" />
                            <div class="white-form">
                                    <div class="form-group row">
                                        <label for="FP_OTP" class="col-sm-4 col-form-label">OTP<i style="color: red;">*</i></label>
                                        <div class="col-sm-6">    
                                            <input type="text" name="FP_OTP" id="FP_OTP" maxlength="6"  class="form-control numbersOnly" required/>
                                        </div>
                                    </div>
                            </div>                                                       
<?php
        }
        else if ($FP_STEP === 2)
        {
?>
<script>
    $(document).ready(
            function() 
            {
                window.setTimeout(
                        function()
                        {
                            location.replace(bUrl+'Login/login',true);
                        },
                        3000
                );
            }
    );
</script>
<?php
        }
        /////////////////////////////
        if ($FP_STEP < 2)
        {
?>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-left float-left" style="font-size: 23px;">
                                        <a href="<?php echo $this->Url->build(['controller' => 'Login', 'action' => 'login']);?>" alt="Back to Login">Back to Login</a> 
                                    </div>
                                    <div class="col-md-8 text-right float-right">
                                        <button type="submit" class="btn btn-primary btn-round btn-md btn-block waves-effect waves-light text-center m-b-2">Recover Password</button>
                                    </div>
                                </div>
                            </div>

<?php
        }
?>
                        </div>
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
                        Copyright © 2018 All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>