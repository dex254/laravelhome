<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                      <div class="row">
                           <div class="col-xl-6">
                               <div class="card">
                                   <div class="card-header">
                                       <h4 class="card-title">Add Brokers to your famers list</h4>
                                       <p class="card-title-desc">Brokers of farm produce are added   to this list.</p>
                                   </div>
                                   <?php echo form_open_multipart('contacts/store',$attributes); ?>
                                   <div class="card-body">
                                       <form class="needs-validation" novalidate>
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="mb-3">
                                                       <label class="form-label" for="validationCustom01">full name</label>
                                                       <input type="text" class="form-control" id="name" placeholder="full name name" name="name">
                                                       <div class="valid-feedback"><span class="help-block"><?php echo form_error('name'); ?></span>
                                                           Looks good!
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="mb-3">
                                                       <label class="form-label" for="validationCustom02">id number</label>
                                                       <input type="text" class="form-control" id="idnumber" placeholder="Last name" name="idnumber">
                                                       <div class="valid-feedback"><span class="help-block"><?php echo form_error('idnumber'); ?></span>
                                                           Looks good!
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-md-4">
                                                   <div class="mb-3">
                                                       <label class="form-label" for="validationCustom03">email</label>
                                                       <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                                       <div class="invalid-feedback"><span class="help-block"><?php echo form_error('email'); ?></span>
                                                           Please provide a valid email.
                                                       </div><span class="help-block"><?php echo form_error('email'); ?></span>
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="mb-3">
                                                       <label class="form-label" for="validationCustom04">contact number</label>
                                                       <input type="number" class="form-control" id="phone" placeholder="contact number" name="phone">
                                                       <div class="invalid-feedback">
                                                           Please provide a valid telephone number
                                                       </div>
                                                   </div>
                                                   <button type="reset" class="btn btn-danger waves-effect btn-label waves-light"><i class="bx bx-block label-icon"></i> cancel</button>
                                                    <button type="submit" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> save</button>

                                               </div>



                                       </form>
                                   </div>
                               </div>
                               <!-- end card -->
                           </div> <!-- end col -->
                         </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
