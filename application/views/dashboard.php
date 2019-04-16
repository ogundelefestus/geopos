 <script type="text/javascript">
    var dataVisits = [
        <?php $tt_inc = 0;foreach ($incomechart as $row) {
        $tt_inc += $row['total'];
        echo "{ x: '" . $row['date'] . "', y: " . intval(amountExchange_s($row['total'], 0, $this->aauth->get_user()->loc)) . "},";
    }
        ?>
    ];
    var dataVisits2 = [
        <?php $tt_exp = 0; foreach ($expensechart as $row) {
        $tt_exp += $row['total'];
        echo "{ x: '" . $row['date'] . "', y: " . intval(amountExchange_s($row['total'], 0, $this->aauth->get_user()->loc)) . "},";
    }
        ?>];

</script>
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

            <div class="topbar-left	d-none d-lg-block">
                <div class="text-center">

                    <a href="index.html" class="logo"><img src="<?= assets_url() ?>userfiles/theme/logo-header.png" height="20" alt="logo"></a>
                </div>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email-outline noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">367</span>
                                <h5>Messages</h5>
                            </div>
                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="<?= assets_url() ?>appassetsnew/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Charles M. Jones</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="<?= assets_url() ?>appassetsnew/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="<?= assets_url() ?>appassetsnew/images/users/user-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details">Luis M. Konrad<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="<?= assets_url() ?>appassetsnew/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Kendall E. Walker</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="<?= assets_url() ?>appassetsnew/images/users/user-6.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>David M. Ryan</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>
                            </div>


                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">84</span>
                                <h5>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-barcode-scan noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">84</span>
                                <h5>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url('userfiles/employee/thumbnail/' . $this->aauth->get_user()->picture) ?>" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                            <a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="list-inline-item">
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="ion-navicon"></i>
                        </button>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </nav>

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="page-title">Dashboard</h5>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat m-b-30">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-receipt float-right mb-0"></i>
                                </div>
                                <h6 class="text-uppercase mb-0"><?php echo $this->lang->line('today') . $this->lang->line('invoices') ?></h6>
                            </div>
                            <div class="card-body">
                                <div class="pb-4">
                                    <?php if ($todayin > 0){ ?>
                                        <span class="badge badge-success" style="font-size: 200%"> +<?= $todayin ?></span>
                                    <?php }elseif($todayin < 0) { ?>
                                        <span class="badge badge-danger" style="font-size: 200%"> -<?= $todayin ?></span>
                                    <?php }else{ ?>
                                        <span class="badge badge-dark" style="font-size: 200%"> <?= $todayin ?></span>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat m-b-30">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-format-list-bulleted float-right mb-0"></i>
                                </div>
                                <h6 class="text-uppercase mb-0"><?= $this->lang->line('this') . $this->lang->line('month') . $this->lang->line('invoices') ?></h6>
                            </div>
                            <div class="card-body">
                                <div class="pb-4">
                                    <?php if ($monthin > 0){ ?>
                                        <span class="badge badge-success" style="font-size: 200%"> +<?= $monthin ?></span>
                                    <?php }elseif($monthin < 0) { ?>
                                    <span class="badge badge-danger" style="font-size: 200%"> -<?= $monthin ?></span>
                                    <?php }else{ ?>
                                    <span class="badge badge-dark" style="font-size: 200%"> <?= $monthin ?></span>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat m-b-30">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart float-right mb-0"></i>
                                </div>
                                <h6 class="text-uppercase mb-0"><?= $this->lang->line('today') . $this->lang->line('sales') ?></h6>
                            </div>
                            <div class="card-body">
                                <div class="pb-4">
                                    <?php

                                    $todaysales = amountExchange($todaysales, 0, $this->aauth->get_user()->loc);
                                    if ($todaysales > 0){ ?>
                                        <span class="badge badge-success" style="font-size: 200%"> +<?= $todaysales ?></span>
                                    <?php }elseif($todaysales < 0) { ?>
                                        <span class="badge badge-danger" style="font-size: 200%"> -<?= $todaysales ?></span>
                                    <?php }else{ ?>
                                        <span class="badge badge-dark" style="font-size: 200%"> <?= $todaysales ?></span>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat m-b-30">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-format-list-bulleted-type float-right mb-0"></i>
                                </div>
                                <h6 class="text-uppercase mb-0"><?php echo $this->lang->line('this') . $this->lang->line('month') . $this->lang->line('sales') ?></h6>
                            </div>
                            <div class="card-body">
                                <div class="pb-4">
                                    <?php

                                    $monthsales = amountExchange($monthsales, 0, $this->aauth->get_user()->loc);
                                    if ($monthsales > 0){ ?>
                                        <span class="badge badge-success" style="font-size: 200%"> +<?= $monthsales ?></span>
                                    <?php }elseif($monthsales < 0) { ?>
                                        <span class="badge badge-danger" style="font-size: 200%"> -<?= $monthsales ?></span>
                                    <?php }else{ ?>
                                        <span class="badge badge-dark" style="font-size: 200%"> <?= $monthsales ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- end row -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title"><?php echo $this->lang->line('in_last _30') ?></h4>

                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li>
                                        <h4 class=""><b><?= amountExchange($todayinexp['credit'], 0, $this->aauth->get_user()->loc) ?></b></h4>
                                        <p class="text-muted m-b-0"><?php echo $this->lang->line('today') . $this->lang->line('income') ?></p>
                                    </li>
                                    <li>
                                        <h4 class=""><b><?= amountExchange($todayinexp['debit'], 0, $this->aauth->get_user()->loc) ?></b></h4>
                                        <p class="text-muted m-b-0"><?php echo $this->lang->line('today') . $this->lang->line('expenses') ?></p>
                                    </li>
                                    <li>
                                        <h4 class=""><b><?= amountExchange($todayprofit, 0, $this->aauth->get_user()->loc) ?></b></h4>
                                        <p class="text-muted m-b-0"><?php echo $this->lang->line('today') . $this->lang->line('Profit') ?></p>
                                    </li>
                                    <li>
                                        <h4 class=""><b><?= amountExchange($tt_inc - $tt_exp, 0, $this->aauth->get_user()->loc) ?></b></h4>
                                        <p class="text-muted m-b-0"><?php echo $this->lang->line('revenue') ?></p>
                                    </li>
                                </ul>

                               <!-- <div id="morris-area-example" style="height: 300px"></div>-->
                                <div id="products-sales" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-b-40">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Recent Buyers gg</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>

                                        </thead>
                                        <tbody>

                                        <?php
                                        if (isset($recent_buy[0]['csd'])) {
                                         foreach ($recent_buy as $item) {
                                             echo '
                                        <tr>
                                        <td><img class="media-object rounded-circle" src="' . base_url() . 'userfiles/customers/thumbnail/' . $item['picture'] . '"></td>
                                            <td>' . $item['name'] . ' ' . amountExchange($item['total'], 0, $this->aauth->get_user()->loc) . '</td>
                                            <td>' . $this->lang->line(ucwords($item['status'])) . '</td>
                                        </tr>';

                                        }
                                        } elseif ($recent_buy == 'sql') {

                                            }

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4"><?php echo $this->lang->line('recent_invoices') ?></h4>
                                <div class="heading-elements">
                                    <p><span class="float-right"> <a
                                                    href="<?php echo base_url() ?>invoices/create"
                                                    class="btn btn-primary btn-sm rounded"><?php echo $this->lang->line('Add Sale') ?></a>
                                <a
                                        href="<?php echo base_url() ?>invoices"
                                        class="btn btn-success btn-sm rounded"><?php echo $this->lang->line('Manage Invoices') ?></a>
                                <a
                                        href="<?php echo base_url() ?>pos_invoices"
                                        class="btn btn-info btn-sm rounded"><?php echo $this->lang->line('POS') ?></a></span>
                                    </p>
                                </div>
                                <br/><p><br/></p>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>

                                            <th><?php echo $this->lang->line('Invoices') ?>#</th>
                                            <th><?php echo $this->lang->line('Customer') ?></th>
                                            <th><?php echo $this->lang->line('Status') ?></th>
                                            <th><?php echo $this->lang->line('Due') ?></th>
                                            <th><?php echo $this->lang->line('Amount') ?></th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <?php

                                        foreach ($recent as $item) {
                                            $page = 'subscriptions';
                                            $t = 'Sub ';
                                            if ($item['i_class'] == 0) {
                                                $page = 'invoices';
                                                $t = '';
                                            } elseif ($item['i_class'] == 1) {
                                                $page = 'pos_invoices';
                                                $t = 'POS ';
                                            }
                                            echo '    <tr>
                                <td class="text-truncate"><a href="' . base_url() . $page . '/view?id=' . $item['id'] . '">' . $t . '#' . $item['tid'] . '</a></td>
                             
                                <td class="text-truncate"> ' . $item['name'] . '</td>
                                <td class="text-truncate"><span class="badge  st-' . $item['status'] . ' st-' . $item['status'] . '">' . $this->lang->line(ucwords($item['status'])) . '</span></td><td class="text-truncate">' . dateformat($item['invoicedate']) . '</td>
                                <td class="text-truncate">' . amountExchange($item['total'], 0, $this->aauth->get_user()->loc) . '</td>
                            </tr>';
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4  class="mt-0 header-title"><?php echo $this->lang->line('income') . ' vs ' . $this->lang->line('expenses') ?></h4>

                                <div id="salesbreakdown" class="card mt-2"
                                     data-exclude="xs,sm,lg">
                                <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group m-b-30">
                            <div class="card m-b-30 m-r-20 text-white" style="background-color: #333;border-color: #333;">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="primary"><?php $ipt = sprintf("%0.0f", ($tt_inc * 100) / $goals['income']); ?><?php echo ' ' . $ipt . '%' ?></h3><?= '<span class=" font-medium-1 display-block">' . date('F') . ' ' . $this->lang->line('income') . '</span>'; ?>
                                                <span class="font-medium-1"><?= amountExchange($tt_inc, 0, $this->aauth->get_user()->loc) . '/' . amountExchange($goals['income'], 0, $this->aauth->get_user()->loc) ?></span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="fa fa-money fa-2x float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $ipt ?>%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-30 m-r-20" style="border-color: #333;">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="red"><?php $ipt = sprintf("%0.0f", ($tt_exp * 100) / $goals['expense']); ?><?php echo ' ' . $ipt . '%' ?></h3><?= '<span class="font-medium-1 display-block">' . date('F') . ' ' . $this->lang->line('expenses') . '</span>'; ?>
                                                <span class="font-medium-1"><?= amountExchange($tt_exp, 0, $this->aauth->get_user()->loc) . '/' . amountExchange($goals['expense'], 0, $this->aauth->get_user()->loc) ?></span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="fa fa-external-link fa-2x red float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $ipt ?>%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-30  m-r-20 text-white" style="background-color: #333;border-color: #333;">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="blue"><?php $ipt = sprintf("%0.0f", ($monthsales * 100) / $goals['sales']); ?><?php echo ' ' . $ipt . '%' ?></h3><?= '<span class="font-medium-1 display-block">' . date('F') . ' ' . $this->lang->line('sales') . '</span>'; ?>
                                                <span class="font-medium-1"><?= amountExchange($monthsales, 0, $this->aauth->get_user()->loc) . '/' . amountExchange($goals['sales'], 0, $this->aauth->get_user()->loc) ?></span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="fa fa-flag-o fa-2x float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: <?= $ipt ?>%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-30" style="border-color: #333;">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="purple"><?php $ipt = sprintf("%0.0f", (($tt_inc - $tt_exp) * 100) / $goals['sales']); ?><?php echo ' ' . $ipt . '%' ?></h3><?= '<span class="font-medium-1 display-block">' . date('F') . ' ' . $this->lang->line('net_income') . '</span>'; ?>
                                                <span class="font-medium-1"><?= amountExchange($tt_inc - $tt_exp, 0, $this->aauth->get_user()->loc) . '/' . amountExchange($goals['netincome'], 0, $this->aauth->get_user()->loc) ?></span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="fa fa-inbox fa-2x float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: <?= $ipt ?>%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4><?php echo $this->lang->line('cashflow') ?></h4>
                                <p><?php echo $this->lang->line('graphical_presentation') ?></p>

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-toggle="tab"  aria-controls="tab1" id="base-tab2" href="#sales"
                                           aria-expanded="true" role="tab"><?php echo $this->lang->line('income') ?></a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab"  aria-controls="tab2" id="base-tab2" href="#transactions1" role="tab"><?php echo $this->lang->line('expenses') ?></a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                        <div id="dashboard-income-chart"></div>
                                    </div>
                                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                        <div id="dashboard-expense-chart"></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">

    </footer>


    <script type="text/javascript">
        $(window).on("load", function () {
            /********************************************
             *               PRODUCTS SALES              *
             ********************************************/
            var sales_data = [
                <?php foreach ($countmonthlychart as $row) {
                echo "{ y: '" . $row['date'] . "', sales: " . intval(amountExchange_s($row['total'], 0, $this->aauth->get_user()->loc)) . ", invoices: " . intval($row['ttlid']) . "},";
            } ?>
            ];
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            Morris.Area({
                element: 'products-sales',
                data: sales_data,
                xkey: 'y',
                ykeys: ['sales', 'invoices'],
                labels: ['sales', 'invoices'],
                behaveLikeLine: true,
                xLabelFormat: function (x) { // <--- x.getMonth() returns valid index
                    var day = x.getDate();
                    var month = months[x.getMonth()];
                    return day + ' ' + month;
                },
                resize: true,
                pointSize: 0,
                pointStrokeColors: ['#00B5B8', '#FA8E57', '#F25E75'],
                smooth: true,
                gridLineColor: '#E4E7ED',
                numLines: 6,
                gridtextSize: 14,
                lineWidth: 0,
                fillOpacity: 0.9,
                hideHover: 'auto',
                lineColors: ['#00B5B8', '#F25E75']
            });


        });
    </script>
    <script type="text/javascript">
        function drawIncomeChart(dataVisits) {
            $('#dashboard-income-chart').empty();
            Morris.Area({
                element: 'dashboard-income-chart',
                data: dataVisits,
                xkey: 'x',
                ykeys: ['y'],
                ymin: 'auto 40',
                labels: ['<?php echo $this->lang->line('Amount') ?>'],
                xLabels: "day",
                hideHover: 'auto',
                yLabelFormat: function (y) {
                    // Only integers
                    if (y === parseInt(y, 10)) {
                        return y;
                    } else {
                        return '';
                    }
                },
                resize: true,
                lineColors: [
                    '#00A5A8',
                ],
                pointFillColors: [
                    '#00A5A8',
                ],
                fillOpacity: 0.4,
            });
        }

        function drawExpenseChart(dataVisits2) {

            $('#dashboard-expense-chart').empty();
            Morris.Area({
                element: 'dashboard-expense-chart',
                data: dataVisits2,
                xkey: 'x',
                ykeys: ['y'],
                ymin: 'auto 0',
                labels: ['<?php echo $this->lang->line('Amount') ?>'],
                xLabels: "day",
                hideHover: 'auto',
                yLabelFormat: function (y) {
                    // Only integers
                    if (y === parseInt(y, 10)) {
                        return y;
                    } else {
                        return '';
                    }
                },
                resize: true,
                lineColors: [
                    '#ff6e40',
                ],
                pointFillColors: [
                    '#34cea7',
                ]
            });
        }

        drawIncomeChart(dataVisits);
        drawExpenseChart(dataVisits2);
        $('#dashboard-sales-breakdown-chart').empty();
        Morris.Donut({
            element: 'dashboard-sales-breakdown-chart',
            data: [{
                label: "<?php echo $this->lang->line('Income') ?>",
                value: <?= intval(amountExchange_s($tt_inc, 0, $this->aauth->get_user()->loc)); ?> },
                {
                    label: "<?php echo $this->lang->line('Expenses') ?>",
                    value: <?= intval(amountExchange_s($tt_exp, 0, $this->aauth->get_user()->loc)); ?> }
            ],
            resize: true,
            colors: ['#34cea7', '#ff6e40'],
            gridTextSize: 6,
            gridTextWeight: 400
        });
        $('a[data-toggle=tab').on('shown.bs.tab', function (e) {
            window.dispatchEvent(new Event('resize'));
        });
    </script>
</div>
<!-- End Right content here -->

</div>





<!-- jQuery  -->
<script src="<?= assets_url() ?>appassetsnew/js/jquery.min.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/bootstrap.bundle.min.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/modernizr.min.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/detect.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/fastclick.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/jquery.slimscroll.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/jquery.blockUI.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/waves.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/jquery.nicescroll.js"></script>
<script src="<?= assets_url() ?>appassetsnew/js/jquery.scrollTo.min.js"></script>

<!-- skycons -->
<script src="<?= assets_url() ?>appassetsnew/plugins/skycons/skycons.min.js"></script>

<!-- skycons -->
<script src="<?= assets_url() ?>appassetsnew/plugins/peity/jquery.peity.min.js"></script>


<script src="<?= assets_url() ?>appassetsnew/plugins/d3/d3.min.js"></script>
<script src="<?= assets_url() ?>appassetsnew/plugins/c3/c3.min.js"></script>

<script src="<?= assets_url() ?>appassetsnew/pages/c3-chart-init.js"></script>
<!-- dashboard -->

<!-- App js -->
<script src="<?= assets_url() ?>appassetsnew/js/app.js"></script>
