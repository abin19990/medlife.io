<?Php require_once('header.php') ?>
<?Php require_once('menu.php') ?> 
            <div class="page-inner">
                <div class="page-title">
                    <h3>Hospital Name</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                          
                            <li class="active">Doctors [ 10 ]</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                    
                    <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                        <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-plus"></i> Add Doctor</button>
                        
                        </div>
                        
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myLargeModalLabel">Add Doctor</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                        <div class="row">
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Doctor Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" >
                                        </div>
                                                        </div>

                                                        
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date of Brith</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>


                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Number</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>



                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Location</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>

                                        

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Qualification</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Graduated from</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Expernice</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Add photo</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Other Details</label>
                                            
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                                       

                                                        </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success">Add Doctor</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                        </div>

                    
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                   
                                    <h4 class="panel-title">Doctors</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Email</th>
                                                    <th>Specilisation</th>
                                                    <th>Location</th>
                                                    <th>View/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>
                                                        <a href="doctors-details.php"><i class="fa  fa-eye"></i></a> 
                                                        / 
                                                        <i class="fa  fa-trash"></i> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td><a href="doctors-details.php"><i class="fa  fa-eye"></i></a> 
                                                        / 
                                                        <i class="fa  fa-trash"></i> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td><a href="doctors-details.php"><i class="fa  fa-eye"></i></a> 
                                                        / 
                                                        <i class="fa  fa-trash"></i> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->


                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
                
                <?Php require_once('footer.php') ?>             