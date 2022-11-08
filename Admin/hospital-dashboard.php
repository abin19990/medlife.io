
<?php
error_reporting(0);
session_start();
 
require_once('class/class.dbClass.php');
require_once('class/class.mainClass.php');
$db=new mainClass();

if(isset($_POST['btn']))
{
$db->addDoctordash($_POST,$_SESSION['uid']);

}

if(isset($_POST['dlt']))
{
    $db->deleteDoctor($_POST);


}

?>



<?Php require_once('header.php') ?>
<?Php require_once('menu.php') ?> 
            <div class="page-inner">
                <div class="page-title">
               
                                            
                    
                    <h3><?php echo $da->name; ?> </h3>

                    
                                           
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                          
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
                        <form  method="POST" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
                                        </div>
                                                        </div>

                                                        
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date of Brith</label>
                                            <input type="" class="form-control" id="exampleInputPassword1" name="dob">
                                        </div>
                                        </div>


                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Number</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="contact">
                                        </div>
                                        </div>



                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="address" >
                                        </div>
                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="mail" >
                                        </div>
                                        </div>

                                        

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Qualification</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="quali" >
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Graduated from</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="grad">
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Expernice</label>
                                            <input type="TEXT" class="form-control" id="exampleInputPassword1" name="exp">
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Add photo</label>
                                            <input type="file" class="form-control" name="A1" >
                                        </div>
                                        </div>

                                         
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            
                                        <select class="form-control" name="depart">
                                            <option>-Department-</option>
                                            <?php echo $db->viewdepartment(0); ?>

                                        </select>
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                           
                                        <select class="form-control" name="count">
                                            <option>-Select Country-</option>
                                            <?php echo $db->viewCountry(0); ?>

                                        </select>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-12">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Other Details</label>
                                            
                                            <textarea class="form-control" name="details" rows="5"></textarea>
                                        </div>
                                                       

                                                        </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" name="btn">Add Doctor</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                        </div>
                        </form>

                    
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
                                                    <th>Country</th>
                                                    <th>Location</th>
                                                    <th>View/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $i=1;
                                                $dctrlist=$db->doctorList($_SESSION['uid']);
                                                while($dr=$db->getObject($dctrlist))
                                                {
                                                  
                                                ?>

                                                <form  method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $i++; ?></th>
                                                    <td><?php echo $dr->name; ?></td>
                                                    <td><?php echo $dr->contact;?></td>
                                                    <td><?php echo $dr->email;?></td>
                                                    <td><?php echo $dr->country;?></td>
                                                    <td><?php echo $dr->department;?>
                                                    <input type="hidden" value="<?php echo $dr->id;?>" name="dlt"></td>
                                                    <td>
                                                        <a href="doctors-details.php?id=<?php echo $dr->id;?>"><i class="fa  fa-eye"></i></a> 
                                                        / 
                                                        
                                                        <button type="submit" style="background: none ; border:none;"><i class="fa  fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                </form>
                                                <?php
                                                }
                                                ?>
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