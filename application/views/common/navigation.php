
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo base_url('index.php/dash/');?>">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">HOME</span>
                                </a>
                            </li>


                            <li>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li style="color:blue;">
                                        <a href="<?php echo base_url('index.php/users/');?>">
                                            <span data-key="t-calendar"><button type="button" class="btn btn-primary waves-effect waves-light">
                                                <i class="bx bx-smile font-size-16 align-middle me-2"></i> members
                                            </button></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('index.php/contacts/');?>">
                                            <span data-key="t-chat">
                                              <button type="button" class="btn btn-warning waves-effect waves-light">
                                                <i class="bx bx-error font-size-16 align-middle me-2"></i> Brokers
                                            </button></span>

                                        </a>
                                    </li>
                                    <li><a href="<?php echo base_url('index.php/bank/');?>" data-key="t-profile"> <button type="button" class="btn btn-dark waves-effect waves-light">
                                                                                    <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>products
                                                                                </button></a></li>


                                    <li><a href="<?php echo base_url('index.php/agents/');?>" data-key="t-user-list"><button type="button" class="btn btn-light waves-effect">
                                        <i class="bx bx-hourglass bx-spin font-size-16 align-middle me-2"></i>Farmers
                                    </button></a></li>





                                </ul>
                            </li>





















                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
