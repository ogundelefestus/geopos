<body class="pb-0">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div class="accountbg">

    <div class="content-center">
        <div class="content-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="card">
                            <div class="card-body">

                                <h3 class="text-center mt-0 m-b-15">
                                   <img src="<?php echo base_url('userfiles/company/') . $this->config->item('logo'); ?>" style="max-height: 10rem;" alt="logo">
                                </h3>

                                <h4 class="text-muted text-center font-18"><b><?php echo $this->lang->line('employee_login_panel') ?></b></h4>

                                <div class="p-2">

                                    <?php
                                    $attributes = array('class' => 'form-horizontal form-simple', 'id' => 'login_form');
                                    echo form_open('user/checklogin', $attributes);
                                    ?>
                                    <form class="form-horizontal m-t-20" action="index.html">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" required="" id="user-name"  name="username"
                                                       placeholder="<?php echo $this->lang->line('Your Email') ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" id="user-password" name="password"
                                                       placeholder="<?php echo $this->lang->line('Your Password') ?>">
                                            </div>
                                        </div>
                                        <?php if ($response) {
                                            echo '<div id="notify" class="alert alert-danger" >
                            <a href="#" class="close" data-dismiss="alert">&times;</a> <div class="message">' . $response . '</div>
                        </div>';
                                        } ?>
                                        <?php if ($this->aauth->get_login_attempts() > 1 && $captcha_on) {
                                            echo '<script src="https://www.google.com/recaptcha/api.js"></script>
									<fieldset class="form-group position-relative has-icon-left">
                                      <div class="g-recaptcha" data-sitekey="' . $captcha . '"></div>
                                    </fieldset>';
                                        } ?>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember_me">
                                                    <label class="custom-control-label" for="remember-me"><?php echo $this->lang->line('remember_me') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">Log In
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-sm-7 m-t-20">
                                                <a href="<?php echo base_url('user/forgot'); ?>" class="text-muted"><i
                                                            class="mdi mdi-lock"></i><?php echo $this->lang->line('forgot_password') ?>?</a>
                                            </div>
                                            <div class="col-sm-5 m-t-20">
                                                <a href="<?php echo base_url('crm'); ?>" class="text-muted"><i
                                                            class="mdi mdi-account-circle"></i> <?php echo $this->lang->line('customer_login') ?></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>

<!-- jQuery  -->
<script src="<?= assets_url(); ?>appassetsnew/js/jquery.min.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/bootstrap.bundle.min.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/modernizr.min.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/detect.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/fastclick.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/jquery.slimscroll.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/jquery.blockUI.js"></script>
<script src="<?= assets_url(); ?>appassetsnew/js/waves.js"></script>

<!-- App js -->
<script src="<?= assets_url(); ?>appassetsnew/js/app.js"></script>
