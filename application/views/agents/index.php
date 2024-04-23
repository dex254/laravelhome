<div class="row">
  <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Buyers list</h4>

                                        <p class="card-title-desc">you can add more data here</p>
                                        <ul class="list-inline mb-0">
                            <a href="<?php echo base_url('index.php/agents/create/');?>">
                              <button type="button" class="btn btn-primary waves-effect waves-light">
                                     <i class="bx bx-smile font-size-16 align-middle me-2"></i> Add buyers
                                 </button></a>
                        </ul>
                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                  <tr>
                                 <th>#</th>
                                 <th>name</th>
                                 <th>product</th>
                                 <th>Quantity</th>
                                 <th>Contacts</th>
                                 <th>Action</th>

                             </tr>
                         </thead>
                         <tbody>
                           <?php $i=1; foreach ($agents as $contact): ?>
                             <tr>
                               <td><?php echo $i; $i++;?></td>
                               <td><?php echo $contact['name'];?></td>
                               <td><?php echo $contact['products'];?></td>
                               <td><?php echo $contact['size'];?></td>
                                <td><?php echo $contact['phone'];?></td>
                               <td>
                                 <a href="<?php echo base_url('index.php/agents/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                               </td>
                             </tr>
                           <?php endforeach ?>
                                                </tbody>
                                                </table>
                                              </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
