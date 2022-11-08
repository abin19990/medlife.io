<?Php 
error_reporting(0);
session_start();
require_once('header.php'); 

if($_SESSION['type']=="Doctor")
{
    $did =$_SESSION['uid'];
}
else
{
    $did =$_REQUEST['id'];
}



$dctrlist=$db->doctorDetailsAdmin($did,$_SESSION['type']);
$dr=$db->getObject($dctrlist);

if(isset($_POST['update']))
{
    $update=$db->update($_POST, $did);
}

if(isset($_POST['book']))
{
$db->aappointment($_POST, $did,$_SESSION['uid']);

}
if(isset($_POST['dlt']))
{
    $dltid = $_POST['dltc'];
  
    $db->appointmentdelete($_POST,$dltid,$did );
  


}

//addhospitttal
if(isset($_POST['addhospitttal']))
{
  
$db->addhospitttalDoctor($_POST, $did,$_SESSION['uid']);

}
if(isset($_POST['updatestatus']))
{
    
$db->patientpointmentStatusupdate($_POST, $did,$_SESSION['uid']);

}
$daa=$db->hospitalDetails($_SESSION['uid']);
$da=$db->getObject($daa);


?>
<?Php require_once('menu.php') ?> 
            <div class="page-inner">
                <div class="page-title">
                    <h3><?php echo $da->name; ?></h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#"><?php echo $da->name; ?></a></li>
                            <li><a href="#"><?php echo $dr->name;?></a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                    <div class="page-inner">
                <div class="profile-covers">
                    <div class="row">
                        <div class="col-md-3 profile-image" style="margin-top: 0px;">
                            <div class="profile-image-container">
                                <img src="<?php echo $dr->photo;?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 profile-info">
                            <div class=" profile-info-value">
                                <h3>1020</h3>
                                <p>Followers</p>
                            </div>
                            <div class=" profile-info-value">
                                <h3>1780</h3>
                                <p>Friends</p>
                            </div>
                            <div class=" profile-info-value">
                                <h3>260</h3>
                                <p>Photos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 user-profile" style="margin-top: 135px;">
                            <h3 class="text-center"><?php echo $dr->name;?></h3>
                            <p class="text-center"><?php echo $dr->department;?></p>
                            <hr>
                            <ul class="list-unstyled text-center">
                                <li><p><i class="fa fa-map-marker m-r-xs"></i><?php echo $dr->address;?></p></li>
                                <li><p><i class="fa fa-envelope m-r-xs"></i><a href="#"><?php echo $dr->email;?></a></p></li>
                                <li><p><i class="fa fa-link m-r-xs"></i><a href="#"><?php echo $dr->graduated;?></a></p></li>
                            </ul>
                            <hr>
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
                                            <input type="text" class="form-control" value="<?php echo $dr->name;?>" id="exampleInputEmail1" name="name" >
                                            <input type="hidden" class="form-control" value="<?php echo $dr->photo;?>" id="exampleInputEmail1" name="ph" >
                                        </div>
                                                        </div>

                                                        
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date of Brith</label>
                                            <input type="" class="form-control" value="<?php echo $dr->dob;?>" id="exampleInputPassword1" name="dob">
                                        </div>
                                        </div>


                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Number</label>
                                            <input type="text" class="form-control" value="<?php echo $dr->contact;?>" id="exampleInputPassword1" name="contact">
                                        </div>
                                        </div>



                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" class="form-control" value="<?php echo $dr->address;?>" id="exampleInputPassword1" name="address" >
                                        </div>
                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" value="<?php echo $dr->email;?>" id="exampleInputPassword1" name="mail" >
                                        </div>
                                        </div>

                                        

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Qualification</label>
                                            <input type="text" class="form-control" value="<?php echo $dr->email;?>" id="exampleInputPassword1" name="quali" >
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Graduated from</label>
                                            <input type="text" class="form-control" value="<?php echo $dr->graduated;?>" id="exampleInputPassword1" name="grad">
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Expernice</label>
                                            <input type="TEXT" class="form-control" value="<?php echo $dr->experience;?>" id="exampleInputPassword1" name="exp">
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Add photo</label>
                                            <input type="file" class="form-control" value="" name="A1" >
                                        </div>
                                        </div>

                                         
                                        <div class="col-md-4">
                                                        <div class="form-group">
                                            
                                        <select class="form-control" name="depart">
                                            <option>-Department-</option>
                                            <?php echo $db->viewdepartment($dr->department); ?>
                                            

                                        </select>
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                                        <div class="form-group">
                                           
                                        <select class="form-control" name="count">
                                            <option>-Select Country-</option>
                                            <?php echo $db->viewCountry($dr->country); ?>

                                        </select>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-12">
                                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Other Details</label>
                                            
                                            <textarea class="form-control" name="details" rows="5"><?php echo $dr->extradetails;?></textarea>
                                        </div>
                                                       

                                                        </div>
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" name="update">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                        </div>
                        </form>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus m-r-xs"></i>Add availibility</button>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit"></i>Edit</button>
                            
                            
                            
                            
                            
                            
                            
                            <?php
                            if($_SESSION['type']=="Doctor")
                            {
                                   

                                ?>
                            

                            
                            
                            
                            
                            
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-plus"></i> Add Hspitals</button>
                        
                                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="mySmallModalLabel">Add Hospital</h4>
                                                        </div>
                                                        <form method="POST">
                                                        <div class="modal-body">
                                                        <select class="form-control" name="hospitalc" >
                                                        <option>-Select Hospital- </option>
                                                        <?php echo $db->viewHospitalListid(0); ?>
                                                        </select>
                                                         
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" name="addhospitttal">Save changes</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>





                                    <?php
                                    } 
                                      
                                    ?>










                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Add Availability</h4>
                                                            
                                                        </div>
                                                        

<div class="container">
<h1>Add Availibility</h1>
<div class="col-md-6">

<form method="POST">



<div class="form-group">

<?php
if($_SESSION['type']=="Hospital")
{
    ?>
    <input type="text" class="form-control" value="<?php echo $_SESSION['type']; ?>" placeholder="Hospital" name="hospital">

    <?php
}
else{

    ?>
     
<label for="Inputselect">Select Hospital</label>
<select class="form-control" name="hospital" >
<option>-Select Hospital- </option>
<?php echo $db->viewHospitalList(0); ?>
</select>
    <?Php
}
?>
<input type="hidden" class="form-control" value="<?php echo $dr->id;?>" placeholder="" name="drdid">
</div> 



<div class="form-group">
<label for="Inputselect">Select Day</label>
<select class="form-control" name="day" >
<option> -Select Day-</option>
<?php echo $db->viewDay(0); ?>
</select>
</div> 


<div class="form-group">
<label for="Inputselect">From  Time</label>
<input type="time" class="form-control" id="Email1" placeholder="Email" name="ftime" time>
</div> 

<div class="form-group">
<label for="Inputselect">To  Time</label>
<input type="time" class="form-control" id="Email1" placeholder="Email" name="totime">
</div> 

<div class="form-group">
<label for="Inputselect">To  Time</label>
<input type="number" class="form-control" id="Email1" placeholder="Email" name="tokens">
</div> 
<button  type="submit" class="btn btn-success " name="book">Add</button>
</div>

 

</form>
</div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                        
                        </div>
                        <div class="col-md-6 m-t-lg">
                        
                            <div class="profile-timeline">
                                <ul class="list-unstyled">
                                    <li class="timeline-item">
                                        <div class="panel panel-white">
                                            <div class="panel-body">
                                                
                                              <h1>Availability</h1> 
                                            </div>
                                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Hospital</th>
                                                <th>Day</th>
                                                <th>fromtime</th>
                                                <th>Totime</th>
                                                <th>Tokens</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                            $daa=$db->appointment($dr->id);
                                            while($da=$db->getObject($daa))
                                            {

                                          $i++;
                                            ?>
                                            <form method="POST">
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $da->hospital; ?></td>
                                                <td><?php echo $da->day; ?></td>
                                                <td><?php echo $da->fromtime; ?></td>
                                                <td><?php echo $da->totime; ?>
                                                <td><?php echo $da->tokens; ?>
                                                <input type="hidden" value="<?php echo $da->id;?>" name="dltc"></td>
                                            </td>
                                                <td><button type="submit" style="background: none ; border:none;" name="dlt"><i class="fa  fa-trash"></i> </button></td>
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
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 m-t-lg">
                            
                            
                        <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Appointments</h4>
                                </div>
                                <div class="panel-body">
                               
                                            <form method="POST">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>PatientName</th>
                                                <th></th>
                                                <th>Time</th>
                                                <th>Confirmation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=0;
                                            $die=$db->patientpointment($dr->id);
                                            while($da=$db->getObject($die))
                                            {

                                          $i++;
                                            ?>
                                            <form method="POST">
                                            <tr class="active">
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $da->pname; ?></td>
                                                <td><?php echo $da->hospital;?></td>
                                                <td><?php echo $da->time;?>
                                                <input type="hidden" value="<?php echo $da->id;?>" name="apid"></td>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($da->status==0)
                                                    {
                                                      ?>
                                                       <button type="submit" style="background: none ; border:none;" name="updatestatus">Confirm</button>
                                                      <?php
                                                    }
                                                    else{
                                                        ?>
                                          <button type="submit" style="background: none ; border:none;" name="">Confirmed</button>
                                                        <?php
                                                    }
                                                    ?>
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
                </div>
                
            </div><!-- Page Inner -->

                    
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
                
                <?Php require_once('footer.php') ?>             