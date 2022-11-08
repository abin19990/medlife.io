<?php require_once('header.php') ?>
<?php require_once('menu.php');

$did =$_REQUEST['id'];
$dctrlist=$db->hospitalDetails($did);
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
                    <img  style=" width:100%" src="Admin/<?php echo $dr->photo;?>" alt="">
                    <h3 class="text-center"><?php echo $dr->name;?></h3>
                            <p class="text-center"><?php echo $dr->place;?></p>



                            <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>doctccccorslist</th>
                                                <th>department</th>
                                                <th>contact</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                            $daa=$db->doctorListFrontHospital($did);
                                            while($da=$db->getObject($daa))
                                            {

                                          $i++;
                                            ?>
                                           
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $da->name; ?></td>
                                                <td><?php echo $da->department; ?></td>
                                                <td><?php echo $da->contact; ?></td>
                                               
                                            </td>
                                                <td>
                                                
</div> 
<a href="viewdetails.php?id=<?php echo $da->id; ?>">View Details</a></td>
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