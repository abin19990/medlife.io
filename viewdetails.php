
<?php require_once('header.php') ?>
<?php require_once('menu.php') ;
$did =$_REQUEST['id'];
$dctrlist=$db->doctorDetails($did,$_REQUEST['hs']);
$dr=$db->getObject($dctrlist);

if(isset($_POST['btnapp']))
{
   
$db->patientappointment($_POST,$did);

}

?>
<section class="content inner-pg blog-pg blog-single-pg clearfix">
		<!-- Breadcrumb Start -->
		<div class="breadcrumb-title clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="breadcrumb-left">
							<ol class="breadcrumb">
								<li>
									<a href="#">HOME</a>
								</li>
								<li class="active">BLOG & GOSSIP</li>
							</ol><!--/.breadcrumb-->
						</div><!--/.breadcrumb-left-->
					</div><!--/.col-sm-6 col-md-6-->
					<div class="col-sm-6 col-md-6">
						<div class="breadcrumb-right">
							<h5>Services</h5>
						</div>
					</div><!--/.col-sm-6 col-md-6-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
<div class="container">
			<!-- Inner Pages Start -->
			<div class="inner-content clearfix">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-9">
                    <img id="drimg" src="Admin/<?php echo $dr->photo;?>" style="width:300px ;" alt="">
                    <h3 class="text-center"><?php echo $dr->name;?></h3>
                            <p class="text-center"><?php echo $dr->department;?></p>


                            <script>
                                    $(document).ready(function(){
                                        $("#demo").click(function()
                                        {
                                            $(".appointment").toggle(1000);
                                        });

                                    });


                                    $(document).ready(function(){
                                        $("#drimg").click(function(){
                                          $("#drimg").animate({
                                            left: '250px',
                                            height: '+=150px',
                                            width: '+=150px'
                                          });
                                        });
                                      });


                                    </script>


                              <button id="demo">show appointment details</button>      
                              
                     


                            <table class="table table-bordered appointment" style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Hospital</th>
                                                <th>Day</th>
                                                <th>fromtime</th>
                                                <th>Totime</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                            $daa=$db->appointment($did);
                                            while($da=$db->getObject($daa))
                                            {

                                          $i++;
                                            ?>
                                           
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $da->hospital; ?></td>
                                                <td><?php echo $da->day; ?></td>
                                                <td><?php echo $da->fromtime; ?></td>
                                                <td><?php echo $da->totime; ?>
                                                <input type="hidden" value="<?php echo $da->id;?>" name="dltc"></td>
                                            </td>
                                                <td>
                                                <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Make an Appointment</h4>
      </div>
      <div class="modal-body">
      
  <div class="form-group">
    <label>Patient Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your email" name="email">
  </div>
  <div class="form-group">
    <label>Contact number</label>
    <input type="text" class="form-control" placeholder="Enter your contact number" name="contact">
  </div>
  <div class="form-group">
    <label>Place</label>
    <input type="text" class="form-control" placeholder="Enter your place " name="place">
  </div>
  <div class="form-group">
    <label>Time</label>
    <input type="time" class="form-control" placeholder=" " name="time">
    <input type="hidden" class="form-control" placeholder=" " name="aid" value="<?php echo $da->id; ?>">
  </div>

 <div class="form-group">
 <label>token</label>
<?php
$apy=$db->pationappTokenx($da->id);
while($tkn=$db->getObject($apy))
{
  $seletedToken .=$tkn->token.",";

}
$tkn = explode(",", $seletedToken);
 $tk=$da->tokens;
 
?>
 <select class="form-control" name="token">

<option value="test" >-Selecct Token Number</option>
<?php
for($i=1; $i<=$tk; $i++)
{
  if(!in_array($i,$tkn))
				{
        
?>
<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
<?php
}
}
?>







</select>
 </div>
  


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="btnapp">Confirm Appointment</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>

  </div>
  </form>
</div> 
                                                <button type="button" style="background:none; border:none;" data-toggle="modal" data-target="#myModal">Make an Appointment</button></td>
                                            </tr>
                                         
                                            
                                            <?php
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                            

					</div><!--/.col-sm-12 col-md-8 col-lg-9-->
					<div class="col-sm-12 col-md-4 col-lg-3">
						<!-- Sidebar Widget Start -->
						
					</div><!--/.col-sm-12 col-md-4 col-lg-3-->
				</div><!--/.row-->
			</div><!-- Inner Pages End -->
		</div>

</section>
<?php require_once('footer.php') ?>