<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Brokers  info</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">contacts</a></li>
                                            <li class="breadcrumb-item active">info  List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="mb-4">
                                                    <a href="<?php echo base_url('index.php/contacts/create/');?>"><button type="button" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Brokers</button></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="d-flex align-items-center gap-1 mb-4">
                                                    <div class="input-group datepicker-range">
                                                        <input type="text" class="form-control flatpickr-input" data-input aria-describedby="date1">
                                                        <button class="input-group-text" id="date1" data-toggle><i class="bx bx-calendar-event"></i></button>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="table-responsive">
                                            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                                <thead>
                                                    <tr class="bg-transparent">
                                                        <th style="width: 30px;">

                                                        </th>

                                                        <th>Full name</th>
                                                        <th>id number</th>

                                                        <th>contact number</th>
                                                        <th>action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php $i=1; foreach ($contacts as $contact): ?>
                 <tr>
                     <td><?php echo $i; $i++;?></td>
                     <td><?php echo $contact['name'];?></td>
                     <td><?php echo $contact['idnumber'];?></td>
                     <td><?php echo $contact['phone'];?></td>
                     <td>
                       <a href="<?php echo base_url('index.php/users/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                     </td>
               </tr>
                 <?php endforeach ?>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table responsive -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End
