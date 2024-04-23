<div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">adding members to  Farmers Database</h4>
                                        <p class="card-title-desc">Farmers and business</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">

                                        <div>
                                            <h5 class="card-title mb-4">welcome user</h5>
                                              <?php echo form_open_multipart('users/store',$attributes); ?>
                                            <form id="pristine-valid-example" novalidate method="post">
                                                <input type="hidden"/>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>First Name</label>
                                                            <input type="text"  id="fname"   name="fname" placeholder="Please Enter a first name" class="form-control" />
                                                        </div><span class="help-block"><?php echo form_error('fname'); ?></span>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Last Name</label>
                                                            <input type="text"  id="lname"  name="lname" placeholder=""="Please Enter a last name" class="form-control"  />
                                                        </div><span class="help-block"><?php echo form_error('lname'); ?></span>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Username</label>
                                                            <input type="text"  id="username" placeholder=""="Please Enter a username" class="form-control"  name="username"/>
                                                        </div><span class="help-block"><?php echo form_error('username'); ?></span>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Email</label>
                                                            <input type="email" id="email"   name="email"  placeholder=""="Please Enter a Email" class="form-control"  />
                                                        </div><span class="help-block"><?php echo form_error('email'); ?></span>
                                                    </div>

                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Password (required)</label>
                                                            <input type="password" id="password"    name="password" placeholder=""="Please Enter a password" class="form-control"  />
                                                        </div><span class="help-block"><?php echo form_error('password'); ?></span>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Password Confirmation</label>
                                                            <input type="password" id="cpassword"  placeholder="conferm password" class="form-control"  name="cpassword" />
                                                        </div><span class="help-block"><?php echo form_error('cpassword'); ?></span>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>contact number</label>
                                                            <input type="number" id="phone"   class="form-control" name="phone"  />
                                                        </div><span class="help-block"><?php echo form_error('phone'); ?></span>
                                                    </div>
                                                </div>
                                                <!-- end row -->


                                                <div class="form-group">
                                                  <button type="reset" class="btn btn-danger waves-effect btn-label waves-light"><i class="bx bx-block label-icon"></i> cancel</button>
                                                   <button type="submit" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> save</button>

                                                </div>
                                            </form>
                                        </div>
















                   </div>
                         <!-- end col -->
                     </div>
                     <!-- end row -->
                 </div> <!-- container-fluid -->
             </div>
