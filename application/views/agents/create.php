<div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Buyers </h4>
                                        <p class="card-title-desc">bayers looking for  goods are  recorded here</p>
                                    </div>
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-5">
                                               <?php echo form_open_multipart('Agents/store',$attributes); ?>
                                                <div>
                                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form groups</h5>
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">name</label>
                                                            <input type="text"  id="name" name="name" class="form-control" >
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">product</label>
                                                                    <input type="text"  id="products"    name="products" class="form-control"  >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="formrow-email-input">Quantity</label>
                                                                        <input type="number"  id="size"    name="size"   placeholder="give in KG" class="form-control"  >
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-firstname-input">Contacts</label>
                                                                    <input type="number"   id="phone" name="phone" class="form-control" >
                                                                </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div>


                                                        <div class="form-group">


                                                        </div>
                                                        <div class="mt-4">
                                                          <button type="reset" class="btn btn-warning waves-effect waves-light">
                                                              <i class="bx bx-error font-size-16 align-middle me-2"></i> councel
                                                          </button>
                                                          <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                                                         <i class="bx bx-check-double font-size-16 align-middle me-2"></i> save
                                                                                                     </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                          </div>
             </div>
         </div>
     </div>
     <!-- end row -->

 </div> <!-- container-fluid -->
</div>
