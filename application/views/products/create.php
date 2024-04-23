<!-- ============================================================== -->
           <!-- Start right Content here -->
           <!-- ============================================================== -->
           <div class="main-content">

               <div class="page-content">
                   <div class="container-fluid">
                     <div class="row">
                                                 <div class="col-lg-12">
                                                     <div class="card">
                                                         <div class="card-header">
                                                             <h4 class="card-title">add products</h4>
                                                             <p class="card-title-desc">farmers  adding product list</p>
                                                         </div>
                                                         <!-- end card header -->

                                                         <div class="card-body">
                                                             <div>
                                                                 <h5 class="card-title mb-4">add products</h5>
                                                                  <?php echo form_open_multipart('products/store',$attributes); ?>
                                                                 <form id="pristine-valid-example"  method="post">
                                                                     <input type="hidden"/>
                                                                     <div class="row">
                                                                         <div class="col-xl-4 col-md-6">
                                                                             <div class="form-group mb-3">
                                                                                 <label>product name</label>
                                                                                 <input type="text" id="name"   name="name" placeholder="Please Enter  product  name" class="form-control" />
                                                                             </div>
                                                                           <div class="col-xl-4 col-md-6">
                                                                             <div class="form-group mb-3">
                                                                                 <label>quantity</label>
                                                                                 <input type="text"  id="size"  name="size" placeholder="Please Enter  quantity of goods" class="form-control" />
                                                                             </div>
                                                                         </div>

                                                                         </div>
                                                                         <div class="col-xl-4 col-md-6">
                                                                             <div class="form-group mb-3">
                                                                                 <label>Amount</label>
                                                                                 <input type="number" id="amount"  name="amount"  required data-pristine-required-message="Please Enter   the amount" class="form-control" />
                                                                             </div>
                                                                         </div>
                                                                         <div class="col-xl-4 col-md-6">
                                                                             <div class="form-group mb-3">
                                                                                 <label>Date</label>
                                                                                 <input type="date"  id="date"  name="date"  placeholder="Enter  the date  today" class="form-control" />
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <!-- end row -->


                                                                     <div class="form-group">
                                                                       <button type="reset" class="btn btn-warning btn-rounded waves-effect waves-light">Delet</button>

                                           <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>

                                                                     </div>
                                                                 </form>
                                                             </div>
                                                             <!-- end card -->
                       </div>
                       <!-- end col -->
                   </div>
                   <!-- end row -->
               </div> <!-- container-fluid -->
           </div>
           <!-- End Page-content -->
