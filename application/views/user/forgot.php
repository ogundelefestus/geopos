

<body class="pb-0">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

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
                                    <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url('userfiles/company/') . $this->config->item('logo'); ?>"  style="max-height: 10rem;" alt="logo"></a>
                                </h3>

                                <h4 class="text-muted text-center font-18"><b>Reset Password</b></h4>

                                <div class="p-3">

                                    <div id="notify" class="alert alert-success" style="display:none;">
                                        <div class="message"></div>
                                    </div>
                                    <form id="data_form" class="form-horizontal m-t-20">

                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $this->lang->line('link to reset your password') ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" id="user-email"  name="email" type="email" required placeholder="<?php echo $this->lang->line('Your Email') ?>">
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button  id="submit-data"  class="btn btn-primary btn-block waves-effect waves-light" type="submit"><?php echo $this->lang->line('Recover Password') ?></button>

                                                <input type="hidden" id="action-url" value="user/send_reset">
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

<script type="text/javascript">
    //universal create
    $("#submit-data").on("click", function (e) {
        e.preventDefault();
        $(this).text("Processing...");
        $(this).prop('disabled', true);
        var o_data = $("#data_form").serialize();
        var action_url = $('#action-url').val();
        addObject(o_data, action_url);
    });

    function addObject(action, action_url) {


        jQuery.ajax({

            url: '<?php echo base_url() ?>' + action_url,
            type: 'POST',
            data: action + '&<?=$this->security->get_csrf_token_name(); ?>=<?=$this->security->get_csrf_hash(); ?>',
            dataType: 'json',
            success: function (data) {
                if (data.status == "Success") {
                    $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                    $("#notify").removeClass("alert-danger").addClass("alert-success").fadeIn();
                    $("html, body").scrollTop($("body").offset().top);
                    $("#data_form").remove();


                } else {
                    $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                    $("#notify").removeClass("alert-success").addClass("alert-danger").fadeIn();
                    $("html, body").scrollTop($("body").offset().top);
                    $('#submit-data').prop('disabled', false);
                    $('#submit-data').text("Retry");

                }

            },
            error: function (data) {
                $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                $("#notify").removeClass("alert-success").addClass("alert-warning").fadeIn();
                $("html, body").scrollTop($("body").offset().top);

            }
        });


    }
</script>