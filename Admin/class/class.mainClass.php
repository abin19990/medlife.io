<?PHP
class mainClass extends dbClass{

	function viewCountry($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM med_country order by name asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['name'];
			if(in_array($co,$cont))
				{
		$country .="<option value='".$co."' selected>$co</option>";
				}
			else
				{
		$country .="<option value='".$co."'>$co</option>";
				}	
		}
		return $country;
	}
		
	function viewDay($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM `day` order by dy asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['dy'];
			if(in_array($co,$cont))
				{
		$country .="<option value='".$co."' selected>$co</option>";
				}
			else
				{
		$country .="<option value='".$co."'>$co</option>";
				}	
		}
		return $country;
	}

	function viewHospitalList($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM `hospitaldetails` order by name asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['name'];
			if(in_array($co,$cont))
				{
		$country .="<option value='".$co."' selected>$co</option>";
				}
			else
				{
		$country .="<option value='".$co."'>$co</option>";
				}	
		}
		return $country;
	}
	function viewHospitalListid($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM `hospitaldetails` order by name asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['name'];
		$hid=$row['uid'];
			if(in_array($co,$cont))
				{
		$country .="<option value='".$hid."' selected>$co</option>";
				}
			else
				{
		$country .="<option value='".$hid."'>$co</option>";
				}	
		}
		return $country;
	}
	function addDoctor($postArr)
	{
		$name = $postArr['name'];
		$contact = $postArr['contact'];
		$dob= $postArr['dob'];
		$quali = $postArr['quali'];
		$address = $postArr['address'];
		$mail = $postArr['mail'];
		$grad = $postArr['grad'];
		$experience = $postArr['exp'];
		$depart=$postArr['depart'];
		$count = $postArr['count'];
		$details = $postArr['details'];
		$pass = $postArr['pass'];
		
		

		$i1=$_FILES['A1']['name'];
		if($i1 !="")
		{
		$folder="doctor/";
		$img1=$_FILES['A1'];
		$file=$this->check_picture($img1,$folder);
			$file1=$folder.$file;
		}
		

 $sql ="INSERT INTO `login`( `email`, `password`, `type`, `status`) VALUES ('$mail','$pass','1','')";
$this->executeSql($sql);


            $res = $this->executeSql("SELECT MAX(id) as id FROM `login`"); 
        	$row = $this->getArray($res); 
        	$uid = $row['id'];



			$sql ="INSERT INTO `doctordetails`( `uid`, `name`, `dob`, `contact`,`country`, `qualification`, `address`, `email`,`department`, `graduated`, `experience`, `photo`, `extradetails`, `type`) VALUES('$uid','$name','$dob','$contact','$count','$quali','$address','$mail','$depart','$grad','$experience','$file1','$details','1')";
			$this->executeSql($sql);

session_start();
$_SESSION['success']="Successfully Registered. Please login to your account..";

$url="index.php";
$this->re_direct($url);

	}	
	function addHospital($postArr)
	{
  $name = $postArr['name'];
  $count = $postArr['count'];

  $address = $postArr['place'];
  $count = $postArr['count'];
  $pass = $postArr['pass'];
  $contact = $postArr['contact'];
  $details = $postArr['details'];
  
  $mail = $postArr['mail'];

  $i1=$_FILES['A1']['name'];
  if($i1 !="")
  {
  $folder="doctor/";
  $img1=$_FILES['A1'];
  $file=$this->check_picture($img1,$folder);
	  $file1=$folder.$file;
  }
  

$sql ="INSERT INTO `login`( `email`, `password`, `type`, `status`) VALUES ('$mail','$pass','2','')";
$this->executeSql($sql);

$res = $this->executeSql("SELECT MAX(id) as id FROM `login`"); 
$row = $this->getArray($res); 
$uid = $row['id'];

$sql ="INSERT INTO `hospitaldetails`( `uid`, `name`, `email`, `place`, `Country`, `contact`,`details`,photo) VALUES ('$uid','$name','$mail','$address','$count','$contact','$details','$file1')";
$this->executeSql($sql);
 
session_start();
$_SESSION['success']="Successfully Registered. Please login to your account..";

		$url="index.php";
		$this->re_direct($url);


	}

	function login($postArr)
	{
		$sql = "select * from login where email= '".$postArr['mail']."' and password =  '".$postArr['pass']."' ";
		$result = $this->executeSql($sql);
		if($this->getNumberRows($result)>0)
		{
			$row = $this->getArray($result);
			
			session_start();
			$_SESSION['uid']=$row['id'];
			$em=$row['mail'];
			$type=$row['type'];
			

			
		
			if($type=="1")
			{
				$_SESSION['type']="Doctor";
				$url="doctors-details.php";
				
			}
			if($type=="2")
			{
				$_SESSION['type']="Hospital";
			$url="hospital-dashboard.php";
			
			}
			if($type=="3")
			{
				$_SESSION['type']="Patient";

				$url="dashboard.php";

			}
			$this->re_direct($url);
		}
		else
		{
			$_SESSION['wrongpassword']="Wrong Password";
			$url="recover-password.php";
			$this->re_direct($url);

		}
						
		}

		function addDoctordash($postArr,$hid)
			{
		$name = $postArr['name'];
		$contact = $postArr['contact'];
		$dob= $postArr['dob'];
		$quali = $postArr['quali'];
		$address = $postArr['address'];
		$mail = $postArr['mail'];
		$grad = $postArr['grad'];
		$experience = $postArr['exp'];
		$depart=$postArr['depart'];
		$count = $postArr['count'];
		$details = $postArr['details'];
		
		

		$i1=$_FILES['A1']['name'];
		
		if($i1 !="")
		{
		$folder="doctor/";
		$img1=$_FILES['A1'];
		$file=$this->check_picture($img1,$folder);
			$file1=$folder.$file;
		}
				


		$sql ="INSERT INTO `doctordetails`( `uid`,hid, `name`, `dob`, `contact`,`country`, `qualification`, `address`, `email`,`department`, `graduated`, `experience`, `photo`, `extradetails`, `type`) VALUES('$uid','$hid','$name','$dob','$contact','$count','$quali','$address','$mail','$depart','$grad','$experience','$file1','$details','1')";
		$this->executeSql($sql);



 

session_start();
$_SESSION['success']="Successfully Registered. Please login to your account..";

$url="index.php";
$this->re_direct($url);

	}	

	

		function viewdepartment($cont)
		{
			$cont=explode("," ,$cont);
			$sql = "SELECT * FROM department order by departname asc";
			$result = $this->executeSql($sql);
			while($row = $this->getArray($result))
			{
			$co=$row['departname'];
				if(in_array($co,$cont))
					{
			 $depart .="<option value='".$co."' selected>$co</option>";
					}
				else
					{
			 $depart .="<option value='".$co."'>$co</option>";
					}	
			}
			return  $depart;
		}
			
 function doctorList($id)
 {
   $sql="select * from doctordetails where hid='$id'";
 return $this->executeSql($sql);
 }
	

 function doctorListFrontHospital($id)
 {
  $sql="select * from doctordetails where hid='$id'";
 return $this->executeSql($sql);
 }
	
 //doctorDetailsAdmin
 function doctorDetailsAdmin($did,$tp)
 {
	 
	if($tp=="Doctor")
	{
		$sql="select * from doctordetails where uid='$did'";
	}
	elseif($tp=="Hospital")
	{
		 $sql="select * from doctordetails where id='$did'";
	}
	 
 
	 return $this->executeSql($sql);
 
 }
function doctorDetails($did,$tp)
{
	/*if($tp=="Doctor")
	{
		$sql="select * from doctordetails where uid='$did'";
	}
	elseif($tp=="Hospital")
	{
		 $sql="select * from doctordetails where id='$did'";
	}
	elseif($tp=="hs")
	{
		 $sql="select * from doctordetails where id='$did'";
	}
	else{
		$sql="select * from doctordetails where uid='$did'";
	}
	*/
	$sql="select * from doctordetails where id='$did'";
	

	return $this->executeSql($sql);

}

//update
function update($postArr,$id)
{
	$name = $postArr['name'];
	$contact = $postArr['contact'];
	$dob= $postArr['dob'];
	$quali = $postArr['quali'];
	$address = $postArr['address'];
	$mail = $postArr['mail'];
	$grad = $postArr['grad'];
	$experience = $postArr['exp'];
	$depart=$postArr['depart'];
	$count = $postArr['count'];
	$details = $postArr['details'];
	$ph = $postArr['ph'];
  
       $folder="doctor/";
       $i1=$_FILES['A1']['name'];
		
		if($i1 !="")
		{
		$folder="doctor/";
		$img1=$_FILES['A1'];
		$file=$this->check_picture($img1,$folder);
			$file1=$folder.$file;
		}
		else{
			
			$file1=$ph;

		}
				

 $sql ="update doctordetails set  `name` ='$name', `dob`='$dob', `contact`='$contact',`country`='$count', `qualification`='$quali', `address`='$address', `email`='$mail',`department`='$depart', `graduated`='$grad', `experience`='$experience', `photo`='$file1', `extradetails`='$details'  where id='$id'";

$this->executeSql($sql);

echo "<script>window.location='doctors-details.php?id=$id'</script>";

}

 function deleteDoctor($postArr)
 {
	$dlt = $postArr['dlt'];
	
	  $sql="delete from doctordetails where id='$dlt'";
	
	$this->executeSql($sql);

	echo "<script>window.location='hospital-dashboard.php'</script>";
 }
 function aappointment($postArr, $did,$hid){

	
	$hospital=$postArr['hospital'];
	$day=$postArr['day'];
	$fromtime=$postArr['ftime'];
	$totime=$postArr['totime'];
	$drdid=$postArr['drdid'];
	$tokens=$postArr['tokens'];
	
    
	$sql="INSERT INTO `appointment`(`hospital`, `day`, `fromtime`, `totime`,did,hid,tokens) VALUES ('$hospital','$day','$fromtime','$totime','$drdid','$hid','$tokens')";
	$this->executeSql($sql);

	echo "<script>window.location='doctors-details.php?id=$did'</script>";
 }


 function appointment($did)
{
	  $sql="select * from appointment where did='$did'";

	return $this->executeSql($sql);

}
function appointmentdelete($postArr, $dltid,$did )
{

   
	$sql="delete from appointment where id='$dltid'";
	
   
   $this->executeSql($sql);

   echo "<script>window.location='doctors-details.php?id=$did'</script>";
}


	function doctorListFrontend()
	{
		$sql="select * from doctordetails order by date desc";
		return $this->executeSql($sql);
	
	}

	function patientappointment($postarr,$did)
	{
		$name=$postarr['name'];
		$email=$postarr['email'];
		$contact=$postarr['contact'];
		$place=$postarr['place'];
		$time=$postarr['time'];
		$aid=$postarr['aid'];
		$token=$postarr['token'];

		$sql="INSERT INTO `patientappointment`( `hid`, `did`, `pname`, `pemail`, `pcontact`, `time`, `status`,aid,token) VALUES ('','$did','$name','$email','$contact','$time','$place','$aid','$token')";
		$this->executeSql($sql);

	
		echo "<script>window.location='viewdetails.php?id='$did'</script>";
	
	}

	function patientpointment($did)
 {
  $sql="select * from patientappointment where did='$did'";
 return $this->executeSql($sql);
 }

	 function patientpointmentStatusupdate($postArr,$did,$uid)
	 {
		
		$apid=$postArr['apid'];
		
		
		$sql="update patientappointment set status='1' where id='$apid'";
	
 return $this->executeSql($sql);
	 }

	 function hospitalListFrontend()
	{
		$sql="select * from hospitaldetails order by date desc";
		return $this->executeSql($sql);
	
	}
	




	function questViewPage($perpage, $startpoint, $sts)
	{
		$sql_daily="select * from hospitaldetails order by date desc";
		
    $sql_daily1=$sql_daily." LIMIT " .$startpoint.','.$perpage;
    $result = $this->executeSql($sql_daily1);
	return $result;
    if($sts==1) 
	{
    return $this->getNumberRows($result);
    } 
	else if($sts==2)
    { 
      return $result;
    }
	}	
	

	function hospitalviewdetails()
	{
		$sql="select * from hospitaldetails order by date desc";
		return $this->executeSql($sql);
	
	}

	function hospitalDetails($did)
{
	  $sql="select * from hospitaldetails where uid='$did'";

	return $this->executeSql($sql);

}

	function pationappTokenx($id)
	{
		 $sql="select * from patientappointment where aid='$id'";

		return $this->executeSql($sql);

	}


	function addhospitttalDoctor($postArr, $did, $uid)
	{
 $did;
$hid=$postArr['hospitalc'];


	$sql="select * from doctordetails where uid='$did'";
	$result=$this->executeSql($sql);
	$row = $this->getArray($result);
	 $hd = $row['hid'];
	  $hd=$hd.",".$hid;
	   $sql="update doctordetails set hid='$hd' where uid='$did'";
	 $this->executeSql($sql);
	


if($this->getNumberRows($result)>0)
		{
			$row = $this->getArray($result);
			
			
		}



	}


	
}
?>



