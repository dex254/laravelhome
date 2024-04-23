<div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->
                       <div class="row">
                           <div class="col-12">
                               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                   <h4 class="mb-sm-0 font-size-18">Members List</h4>

                                   <div class="page-title-right">
                                       <ol class="breadcrumb m-0">
                                           <li class="breadcrumb-item"><a href="javascript: void(0);">Members info</a></li>
                                           <li class="breadcrumb-item active">Database users</li>
                                       </ol>
                                   </div>

                               </div>
                           </div>
                       </div>
                       <!-- end page title -->

                       <div class="row align-items-center">
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <h5 class="card-title"> List  users <span class="text-muted fw-normal ms-2">(62)</span></h5>
                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   <div>
                                       <ul class="nav nav-pills">
                                           <li class="nav-item">
                                               <a class="nav-link active" href="apps-contacts-list.html" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="apps-contacts-grid.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                           </li>
                                       </ul>
                                   </div>
                                   <div>
                                       <a href="<?php echo base_url('index.php/users/create/');?>" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                                   </div>

                               </div>

                           </div>
                       </div>
                       <!-- end row -->

                       <div class="table-responsive mb-4">
                           <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                               <thead>
                                 <tr>
                                   <th scope="col" style="width: 50px;">

                                   </th>

                                   <th >Name</th>
                                   <th >Username</th>
                                   <th >Phone Number</th>
                                   <th>status</th>
                                <th>Action</th>


                                 </tr>
                               </thead>
                               <tbody>
                                 <?php $i=1; foreach ($users as $user): ?>
                            <tr>

                                <td><?php echo $i; $i++;?></td>
                                <td><?php echo $user['fname'].' '.$user['lname'];?></td>
                                <td><?php echo $user['username'];?></td>
                                <td><?php echo $user['phone'];?></td>
                                <td><span><?php echo $user['status'];?></span></td>
                               <td>
                                 <a href="<?php echo base_url('index.php/users/view/'.$user['id']);?>"><i class="fa fa-eye"></i> View</a>
                                 <a href="<?php echo base_url('index.php/users/destroy/'.$user['id']);?>"><i class="fa fa-trash"></i> Delete</a>
                               </td>

                            </tr>
                              <?php endforeach ?>



                               </tbody>
                           </table>
                           <!-- end table -->
                       </div>
                       <!-- end table responsive -->

                   </div> <!-- container-fluid -->
               </div>
