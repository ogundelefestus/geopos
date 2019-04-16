
<body class="fixed-left">
<span id="hdata"
      data-df="<?php echo $this->config->item('dformat2'); ?>"
      data-curr="<?php echo currency($this->aauth->get_user()->loc); ?>"></span>


<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="ion-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">

                <a href="index.html" class="logo"><img src="<?= base_url() ?>userfiles/theme/logo-header.png"
                                                       height="20" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="index.html" class="waves-effect">
                            <i class="dripicons-location"></i>
                            <span> <?php echo $this->lang->line('Business') . ' ' . $this->lang->line('Location') ?> </span>
                        </a>
                    </li>
                    <li class="waves-effect">
                        <a href="index.html" class="waves-effect">
                            <i class="dripicons-home"></i>
                        <span><?php $loc = location($this->aauth->get_user()->loc); echo $loc['cname']; ?></span>
                        </a>
                    </li>
                    <li><hr></li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="dripicons-view-thumb"></i>
                            <span> <?php echo $this->lang->line('Business') . '  '  ?><?php echo $this->lang->line('Settings') ?></span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="waves-effect">
                                <span><?php echo $this->lang->line('Business') . '  ' . $this->lang->line('Settings') ?></span>
                                </a>
                            </li>

                            <li><a href="<?php echo base_url(); ?>settings/language"><?php echo $this->lang->line('Localisation') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>webupdate"><?php echo $this->lang->line('Miscellaneous') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>restapi"><?php echo $this->lang->line('Advanced') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>settings/discship"><?php echo $this->lang->line('Billing') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>settings/tax"><?php echo $this->lang->line('Tax') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>units"><?php echo $this->lang->line('Products') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>paymentgateways/settings"><?php echo $this->lang->line('Payment Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>employee/auto_attendance"><?php echo $this->lang->line('CRM') . ' & ' . $this->lang->line('HRM') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>plugins/recaptcha"><?php echo $this->lang->line('Plugins') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>templates/email"><?php echo $this->lang->line('Templates') . ' ' . $this->lang->line('Settings') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>printer/add">POS Printers</a></li>
                        </ul>
                    </li>
                    <li><hr></li>
                    <li>
                        <a href="<?= base_url(); ?>dashboard/" class="waves-effect">
                            <i class="dripicons-meter"></i>
                            <span> <?= $this->lang->line('Dashboard') ?></span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-cart"></i>
                            <span><?php echo $this->lang->line('sales') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url(); ?>pos_invoices/create?v2=true"><?php echo $this->lang->line('pos sales') ?></a></li>
                            <li><a href="<?= base_url(); ?>invoices/create"><?php echo $this->lang->line('sales') ?></a></li>
                            <li><a href="<?= base_url(); ?>invoices/create"><?php echo $this->lang->line('Quotes') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>subscriptions"><?php echo $this->lang->line('Subscriptions') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>stockreturn/creditnotes"><?php echo $this->lang->line('Credit Notes'); ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i>
                            <span><?php echo $this->lang->line('Stock') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-suitcase"></i>
                            <span><?php echo $this->lang->line('CRM') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-to-do"></i>
                            <span><?= $this->lang->line('Project') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-line"></i>
                            <span><?= $this->lang->line('Accounts') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-ticket"></i>
                            <span><?php echo $this->lang->line('Promo Codes') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-pie"></i>
                            <span><?php echo $this->lang->line('Data & Reports') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-paperclip"></i>
                            <span><?php echo $this->lang->line('Miscellaneous') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-article"></i>
                            <span><?php echo $this->lang->line('HRM') ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-article"></i>
                            <span><?php echo $this->lang->line('Backup & Export') . '-' . $this->lang->line('Import'); ?> </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url(); ?>products/add"><?php echo $this->lang->line('Items Manager') ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory"><?php echo $this->lang->line('Product Categories'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>productcategory/warehouse"><?php echo $this->lang->line('Warehouses'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>products/stock_transfer"><?php echo $this->lang->line('Stock Transfer'); ?></a></li>
                            <li><a href="<?= base_url(); ?>purchase/create"><?php echo $this->lang->line('Purchase Order') ?></a></li>
                        </ul>
                    </li>





                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->