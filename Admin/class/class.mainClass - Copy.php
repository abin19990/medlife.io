<?PHP
class mainClass extends dbClass{
//List Country
	function viewCountry($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_country order by name asc";
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
	
//List category
	function viewCategory($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_category order by category asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['category'];
		$cid=$row['id'];
			if(in_array($co,$cont))
				{
		$category .="<option value='".$co."' selected>$co</option>";
				}
			else
				{
		$category .="<option value='".$co."'>$co</option>";
				}	
		}
		return $category;
	}
//subscription

function viewSubscription($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_subscription_details order by item asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['item'];
		$amt=$row['amount'];
		$coa="$co - $ $amt";
			if(in_array($co,$cont))
				{
		$category .="<option value='".$coa."' selected>$co - $ $amt</option>";
				}
			else
				{
		$category .="<option value='".$coa."'>$co - $ $amt</option>";
				}	
		}
		return $category;
	}


//List Industry
	function viewIndustry($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_industry order by industry asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['industry'];
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

//List Role
	function viewRole($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_role order by role asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['role'];
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

//List Highest Qualification
	function viewHighestqualification($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_highestqualification order by highestqualification asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['highestqualification'];
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

//List Job Type
	function viewJobtype($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_jobtype order by jobtype asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['jobtype'];
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
	
	
	//List Job Title
	function viewJobtitle($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_jobpost order by jobtitle asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['jobtitle'];
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
	

//List Currency
	function viewCurrency($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_currency order by currency asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['currency'];
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


//List Driving
	function viewDrivinglisence($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_drivinglicense order by fromcountry asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['fromcountry'];
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
	
//List Language
	function viewLanguagelist($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_language order by language asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['language'];
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

//List Specialization
	function viewSpecialisation($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_specialization order by specialization asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['specialization'];
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

//List Visa
	function viewVisastatus($cont)
	{
		$cont=explode("," ,$cont);
		$sql = "SELECT * FROM hr_visastatus order by visanumber asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$co=$row['visanumber'];
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


//Data List Country
	function dataviewCountry($cont)
	{
		$sql = "SELECT * FROM hr_country order by name asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['name'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}


//Data List Course
	function dataviewCourse($cont)
	{
		$sql = "SELECT * FROM hr_course order by course asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['course'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Category
	function dataviewCategory($cont)
	{
		$sql = "SELECT * FROM hr_category order by category asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['category'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Currency
	function dataviewCurrency($cont)
	{
		$sql = "SELECT * FROM hr_currency order by currency asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['currency'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Driving
	function dataviewDriving($cont)
	{
		$sql = "SELECT * FROM hr_drivinglicense order by fromcountry asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['fromcountry'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Highestqalification
	function dataviewHighestqalification($cont)
	{
		$sql = "SELECT * FROM hr_highestqualification order by highestqualification asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['highestqualification'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Indusatry
	function dataviewIndusatry($cont)
	{
		$sql = "SELECT * FROM hr_industry order by industry asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['industry'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}
	//Data List Organisation
	function dataviewOrganisation($cont)
	{
		$sql = "SELECT * FROM hr_organisation order by organisation asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['organisation'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Jobtype
	function dataviewJobtype($cont)
	{
		$sql = "SELECT * FROM hr_jobtype order by jobtype asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['jobtype'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Language
	function dataviewLanguage($cont)
	{
		$sql = "SELECT * FROM hr_language order by language asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['language'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}


//Data List Role
	function dataviewRole($cont)
	{
		$sql = "SELECT * FROM hr_role order by role asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['role'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}


//Data List Role - Ajax
	function dataviewRoleajax($cont)
	{

		$sql = "SELECT * FROM hr_category where  category='$cont'";
		$result = $this->executeSql($sql);
		$row = $this->getArray($result);
		$cid=$row['id'];
		

		$sql = "SELECT * FROM hr_role where category='$cid' order by role asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['role'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Specialisation
	function dataviewSpecialisation($cont)
	{
		$sql = "SELECT * FROM hr_specialization order by specialization asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['specialization'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//Data List Specialisation - Ajax
	function dataviewSpecialisationajax($cont)
	{

		$sql = "SELECT * FROM hr_highestqualification where highestqualification='$cont'";
		$result = $this->executeSql($sql);
		$row = $this->getArray($result);
		$cid=$row['id'];
		

		$sql = "SELECT * FROM hr_specialization where highestqualification='$cid' order by specialization asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['specialization'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}


//Data List Visasatatus
	function dataviewVisasatatus($cont)
	{
		$sql = "SELECT * FROM hr_visastatus order by status asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['status'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}

//data view Grade

	function dataviewGrade($cont)
	{
		$sql = "SELECT * FROM hr_educatingrade order by grade asc";
		$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
		$mn=$row['grade'];
		$com .="<option value='$mn'>";
		}
		return $com;
	}




// Add Industry
		function addIndustry($postArr)
	    {
		$industry=$this->formatInput($postArr['industry']);
		$sql="insert into hr_industry(industry,status)values('$industry','0')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
	 	}
	  
//viewReports	
	function industryList()
	{
		$sql = "SELECT * FROM hr_industry   order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	//EditIndustry	
	function editIndustry($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $industry=$this->formatInput($postArr['industry']);
	 $sql="update hr_industry set industry='$industry' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
//DeleteIndustry
	function deleteIndustry($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_industry where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	
	
	
	// AddRole
		function addRole($postArr)
	    {
		
		$cnt = count($postArr['category']);
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$_POST['category'][$i].',';
		}
	    $category= substr($vals,0, -2);

		$role=$this->formatInput($postArr['role']);
		$sql="insert into hr_role(role,category,status)values('$role','$category','0')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
		}
		
//role list	
	function roleList()
	{
		$sql = "SELECT * FROM hr_role order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//EditRole
	function editRole($postArr)
	{
	$cnt = count($postArr['category']);
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$_POST['category'][$i].',';
		}
	    $category= substr($vals,0, -2);
	 $id=$this->formatInput($postArr['id']);
	 $role=$this->formatInput($postArr['role']);
	 $sql="update hr_role set role='$role',category='$category' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
//DeleteRole
	function deleteRole($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_role where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	
	
	
	
	// Add Skills
		function addSkills($postArr)
	    {
		$skills=$this->formatInput($postArr['skills']);
		$sql="insert into hr_skills(skills,status)values('$skills','0')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
	 	}
	  
//View Skills	
	function skillList()
	{
		$sql = "SELECT * FROM hr_skills  order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	//Edit Skills	
	function editSkills($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $skills=$this->formatInput($postArr['skills']);
	 $sql="update hr_skills set skills='$skills' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
	
//Delete Skills
	function deleteSkills($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_skills where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	
	
	// Add Count
		function addCount($postArr)
	    {
		$count=$this->formatInput($postArr['countvalue']);
		$sql="insert into hr_count(countvalue)values('$count')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
	 	}
	  
	//View Count	
	function countList()
	{
		$sql = "SELECT * FROM hr_count order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	//Edit Count	
	function editCount($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $count=$this->formatInput($postArr['countvalue']);
	 $sql="update hr_count set countvalue='$count' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
	
	//Delete Count
	function deleteCount($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from hr_count where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	
	
	
	
	
	
// Add Job
		function addJob($postArr,$uid)
	    {
		$currentDate=date('Y-m-d');
		
		$cnt = count($postArr['joblocation']);
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$_POST['joblocation'][$i].',';
		}
	   $joblocation= substr($vals,0, -2);
	   
	   
	    $cnt1 = count($postArr['nationality']);
		for($i=0; $i<=$cnt1; $i++)
		{
	    $vals1 .= @$_POST['nationality'][$i].',';
		}
	   $nationality= substr($vals1,0, -2);
	   
	   $cnt2 = count($postArr['industry']);
		for($i=0; $i<=$cnt2; $i++)
		{
	    $vals2 .= @$_POST['industry'][$i].',';
		}
	   $industry= substr($vals2,0, -2);
	  
	
	  
		$sql="insert into hr_jobpost(uid, jobtitle, organization, jobsummary, jobdetails, keyskills, minimumexperience, maximumexperience, joblocation, industry, category, role, highestdegree, specialization, nationality, jobownername, ownermobilenumber, ownercontactnumber, owneremail, alternateemail, live, closingdate, jobtype, currency, minimumsalary, maximumsalary, status, postedon,loc)values('$uid', '".$this->formatInput($postArr['jobtitle'])."', '".$this->formatInput($postArr['organization'])."' ,'".$this->formatInput($postArr['jobsummary'])."', '".$this->formatInput($postArr['jobdetails'])."', '".$this->formatInput($postArr['keyskills'])."', '".$this->formatInput($postArr['minimumexperience'])."', '".$this->formatInput($postArr['maximumexperience'])."', '$joblocation', '$industry', '".$this->formatInput($postArr['jobcategory'])."', '".$this->formatInput($postArr['jobrole'])."', '".$this->formatInput($postArr['highestdegree'])."', '".$this->formatInput($postArr['specialisation'])."', '$nationality', '".$this->formatInput($postArr['name'])."', '".$this->formatInput($postArr['contactnumber1'])."', '".$this->formatInput($postArr['contactnumber2'])."', '".$this->formatInput($postArr['email'])."', '".$this->formatInput($postArr['email1'])."', '".$this->formatInput($postArr['makeive'])."', '".$this->formatInput($postArr['closingdate'])."', '".$this->formatInput($postArr['jobtype'])."', '".$this->formatInput($postArr['currency'])."', '".$this->formatInput($postArr['minumsalary'])."', '".$this->formatInput($postArr['maxsalary'])."', '1','$currentDate','".$this->formatInput($postArr['loc'])."')";
		
		$result = $this->executeSql($sql);
		 
		 		$userResume=$this->formatInput($postArr['userresume']);
		
				if($userResume=="userresume")
				{
	 				echo "<script language='javascript'>window.location='jobs.php'</script>";
				} 
				else
				{
	 				echo "<script language='javascript'>window.location='employer-home.php'</script>";
				}
				    } 
	  
//login
	function login($postArr)
	{
		$sql = "select * from hr_login where email= '".$postArr['email']."' and password =  '".$postArr['password']."' and approve !='0'";
		$result = $this->executeSql($sql);
		if($this->getNumberRows($result)>0)
		{
			$row = $this->getArray($result);
			session_start();
			session_start();
			$em=$row['email'];
			$ct=$row['category'];


			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['category']=$row['category'];
			
		
			if($ct=="jobseeker")
			{
			$url="my-job-home.php";
			}
			if($ct=="EngineersWanted")
			{
			$url="jobs.php";
			}
			if($ct=="resume")
			{
			header('Location: index.php');
			}
			if($ct=="employer")
			{
			

		//static Count after login
		$sql = "select countvalue from hr_count";
		$res = $this->executeSql($sql);
		$val=$this->getArray($res);
		$count=$val['countvalue'];	
		$_SESSION['count']=$count; 
		
			
		$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$subid' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid=$rowss["u_id"];
				$val=explode("," ,$uid);
				$valu = array_merge($val,$valu);
			}
			$total = sizeof($valu);
			$rem = $count-$total;
			$_SESSION['rem']=$rem; 
			$_SESSION['total']=$total;
		}
			$url="employer-home.php";
			}
			if($ct=="agent")
			{
			$url="agent-home.php";
			}
			if($ct=="staff")
			{
			$url="new-resume.php";
			}
			if($ct=="admin")
			{
			$url="jobs.php";
			}
			$_SESSION['surl']=$url;
	 				echo "<script language='javascript'>window.location='$url'</script>";
			//$this->re_direct($url);
		}
		else
		{
			$_SESSION['wrongpassword']="Wrong Password";
			$url="recover-password.php";
			$this->re_direct($url);

		}
						
		}
		

// addCurrency
	function addCurrency($postArr)
	{
		 $sql = "select * from hr_currency where currency= '".$this->formatInput($postArr['currency'])."' ";
		 $res = $this->executeSql($sql);
		 if($this->getNumberRows($res)==0)
		 {
	$sql="insert into hr_currency(currency)values('".$this->formatInput($postArr['currency'])."')";
	$result = $this->executeSql($sql);
	$url="currency.php";
	$this->re_direct($url);
		}
	}		
	
	
//Edit Posted Job	
	function editPostedjob($postArr)
	{
 	$jid=$this->formatInput($postArr['jid']);
	
	    $cnt = count($postArr['joblocation']);
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$_POST['joblocation'][$i].',';
		}
	  $joblocation= substr($vals,0, -2);
	 
	   $cnt1 = count($postArr['nationality']);
		for($i=0; $i<=$cnt1; $i++)
		{
	    $vals1 .= @$_POST['nationality'][$i].',';
		}
	   $nationality= substr($vals1,0, -2);
	   
	    $cnt2 = count($postArr['industry']);
		for($i=0; $i<=$cnt2; $i++)
		{
	    $vals2 .= @$_POST['industry'][$i].',';
		}
	    $industry= substr($vals2,0, -2);
	 

       $cnt3 = count($postArr['jobcategory']);
		for($i=0; $i<=$cnt3; $i++)
		{
	    $vals3 .= @$_POST['jobcategory'][$i].',';
		}
	   $jobcategory= substr($vals3,0, -2);
	   
	   $cnt4 = count($postArr['jobrole']);
		for($i=0; $i<=$cnt4; $i++)
		{
	    $vals4 .= @$_POST['jobrole'][$i].',';
		}
	   $jobrole= substr($vals4,0, -2);
	   
	    $cnt5 = count($postArr['highestdegree']);
		for($i=0; $i<=$cnt5; $i++)
		{
	    $vals5 .= @$_POST['highestdegree'][$i].',';
		}
	   $highestdegree= $this->formatInput(substr($vals5,0, -2));
	   
	   $cnt6 = count($postArr['specialisation']);
		for($i=0; $i<=$cnt6; $i++)
		{
	    $vals6 .= @$_POST['specialisation'][$i].',';
		}
	   $specialisation= $this->formatInput(substr($vals6,0, -2));
	   
	 
	   
	 $sql="update hr_jobpost set  jobtitle= '".$this->formatInput($postArr['jobtitle'])."', organization= '".$this->formatInput($postArr['organization'])."', jobsummary='".$this->formatInput($postArr['jobsummary'])."', jobdetails= '".$this->formatInput($postArr['jobdetails'])."', keyskills='".$this->formatInput($postArr['keyskills'])."', minimumexperience='".$this->formatInput($postArr['minimumexperience'])."', maximumexperience='".$this->formatInput($postArr['maximumexperience'])."',  joblocation='$joblocation', industry='$industry', category='$jobcategory', role='$jobrole', highestdegree='$highestdegree', specialization='$specialisation',  nationality='$nationality', jobownername='".$this->formatInput($postArr['name'])."', ownermobilenumber='".$this->formatInput($postArr['contactnumber1'])."', ownercontactnumber='".$this->formatInput($postArr['contactnumber2'])."', owneremail='".$this->formatInput($postArr['email'])."', alternateemail= '".$this->formatInput($postArr['email1'])."', live='".$this->formatInput($postArr['makeive'])."', closingdate='".$this->formatInput($postArr['closingdate'])."', jobtype='".$this->formatInput($postArr['jobtype'])."', currency='".$this->formatInput($postArr['currency'])."', minimumsalary='".$this->formatInput($postArr['minumsalary'])."', maximumsalary='".$this->formatInput($postArr['maxsalary'])."', loc='".$this->formatInput($postArr['locc'])."', postedon='".$this->formatInput($postArr['postedon'])."' where id='$jid'";
 
		$result = $this->executeSql($sql);
		
		 	$editPostedjob=$this->formatInput($postArr['editjobs']);
	 
			if($editPostedjob=="editjob")
			{
	 			echo "<script language='javascript'>window.location='jobs.php'</script>";
			} 
			else
			{
	 			echo "<script language='javascript'>window.location='employer-home.php'</script>";
			}
	}
	
    //Delete Jobs
	
	function deleteJob($postArr)
	{
	 $jid=$this->formatInput($postArr['jid']);
	 $sql="delete from  hr_jobpost where id='$jid'";
	 $result = $this->executeSql($sql);
	 $editPostedjob=$this->formatInput($postArr['editjobs']);
	 
			if($editPostedjob=="editjob")
			{
	 			echo "<script language='javascript'>window.location='jobs.php'</script>";
			} 
			else
			{
	 			echo "<script language='javascript'>window.location='employer-home.php'</script>";
			}
	}	
	
	
	// Add Category
		function addCategory($postArr)
	    {
		$category=$this->formatInput($postArr['category']);
		$sql="insert into hr_category(category,status)values('$category','0')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
		}
		
		
//Category List
	function categoryList()
	{
		$sql = "SELECT * FROM hr_category order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Category
	function editCategory($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $category=$this->formatInput($postArr['category']);
	 $sql="update hr_category set category='$category' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
//Delete Category
	function deleteCategory($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_category where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	
		
		
//Currency List
	function currencyList()
	{
		$sql = "SELECT * FROM hr_currency order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Currency
	function editCurrency($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $currency=$this->formatInput($postArr['currency']);
	 $sql="update hr_currency set currency='$currency' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='currency.php'</script>";
	}
	
//Delete Currency
	function deleteCurrency($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_currency where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='currency.php'</script>";
	}	
	
	
		
		
		// Add Language
		function addLanguage($postArr)
	    {
		$language=$this->formatInput($postArr['language']);
		$sql="insert into hr_language(language)values('$language')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='language.php'</script>";
		}
		
		
//Language List
	function languageList()
	{
		$sql = "SELECT * FROM hr_language order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Language
	function editLanguage($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $language=$this->formatInput($postArr['language']);
	 $sql="update hr_language set language='$language' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='language.php'</script>";
	}
//Delete Language
	function deleteLanguage($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_language where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='language.php'</script>";
	}	
	
		
		// Add Driving License
		function addDrivinglicense($postArr)
	    {
		$licensenumber=$this->formatInput($postArr['licensenumber']);
		$sql="insert into hr_drivinglicense(licensenumber)values('$licensenumber')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='drivinglicense.php'</script>";
		}
		
		
//Driving License List
	function drivinglicenseList()
	{
		$sql = "SELECT * FROM hr_drivinglicense order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Driving License
	function editDrivinglicense($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $licensenumber=$this->formatInput($postArr['licensenumber']);
	 $sql="update hr_drivinglicense set licensenumber='$licensenumber' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='drivinglicense.php'</script>";
	}
//Delete Driving License
	function deleteDrivinglicense($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_drivinglicense where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='drivinglicense.php'</script>";
	}	
	
	
	
	
	// Add Visa
		function addVisa($postArr)
	    {
		$visanumber=$this->formatInput($postArr['visanumber']);
		$sql="insert into hr_visastatus(visanumber)values('$visanumber')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='visa.php'</script>";
		}
		
		
//Visa List
	function visaList()
	{
		$sql = "SELECT * FROM hr_visastatus order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Visa
	function editVisa($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $visanumber=$this->formatInput($postArr['visanumber']);
	 $sql="update hr_visastatus set visanumber='$visanumber' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='visa.php'</script>";
	}
//Delete Visa
	function deleteVisa($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_visastatus where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='visa.php'</script>";
	}	
	
	
	
	
	
	// Add Specialization
		function addSpecialization($postArr)
	    {
		$specialization=$this->formatInput($postArr['specialization']);
		$highestqualification=$this->formatInput($postArr['highestqualification']);
		$sql="insert into hr_specialization(specialization,highestqualification)values('$specialization','$highestqualification')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='specialization.php'</script>";
		}
		
		
//Specialization List
	function specializationList()
	{
		$sql = "SELECT * FROM hr_specialization order by id";
		$result = $this->executeSql($sql);
		return $result; 
	}
	 	//Edit Specialization
	function editSpecialization($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $specialization=$this->formatInput($postArr['specialization']);
	 $sql="update hr_specialization set specialization='$specialization' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='specialization.php'</script>";
	}
//Delete Specialization
	function deleteSpecialization($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_specialization where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='specialization.php'</script>";
	}
	
	
	// Add Organisation
		function addOrganisation($postArr)
	    {
		$organisation=$this->formatInput($postArr['organisation']);
		$sql="insert into hr_organisation(organisation)values('$organisation')";
		$result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='industry.php'</script>";
	 	}
	  
//viewOrganisation	
	function organisationList()
	{
		$sql = "SELECT * FROM hr_organisation   order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	//EditOrganisation	
	function editOrganisation($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $organisation=$this->formatInput($postArr['organisation']);
	 $sql="update hr_organisation set organisation='$organisation' where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}
//DeleteOrganisation
	function deleteOrganisation($postArr)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from  hr_organisation where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='industry.php'</script>";
	}	
	
	//addResumeQuick
		function addResumeQuick($postArr,$jid,$jtl)
		{
		
	    $name=$this->formatInput($postArr['name']);
	    $email=$this->formatInput($postArr['email']);
	    $cnum=$this->formatInput($postArr['cnum']);
				$i1=$_FILES['A2']['name'];
	    if($i1 !="")
		{
		$folder1="resume-quick/";
		$folder2="resume-quick/";
		$img2=$_FILES['A2'];
  		$file1=$this->check_picture($img2,$folder1,$uid);
		$file2=$folder2.$file1;
		$file2=$this->formatInput($file2);
		}
		else
		{
		$file2="";
		}
		$sql="insert into hr_quickresume(jid,name,email,cnum,cv,status)values('$jid', '$name', '$email', '$cnum', '$file2', '')";
		
		//$res = $this->executeSql($sql);
		
		 $subject = "Welcome to EngineersWanted.com";
		
		$subject1 = "$jtl - Application via EngineersWanted.com";
		$email1="venu @engineerswanted.com";

	$message = "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  
    <tr>
    <td colspan='2'><p>Dear $name, </p></td>
  </tr>

  
  <tr>
    <td colspan='2'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
    
	  <tr>
    <td colspan='2'>Your application is received. Our HR team will contact you once your CV get shortlisted. </td>
  </tr>

	
 
    
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>
    
    --<br>
Regards,<br>
HR Team<br>
EngineersWanted.com <br><br>

Tel +91 471 2338733<br>

    </td>
  </tr>
</table>
	";
	
 $message1 = "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='https://www.engineerswanted.com/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  
    <tr>
    <td colspan='2'><p>Job Application via EngineersWanted.com for $jtl</p></td>
  </tr>

  
    <tr>
    <td width='15%'>Name : </td>
    <td width='85%'>$name;</td>
  </tr>
  
    <tr>
    <td width='15%'>Email : </td>
    <td width='85%'>$email </td>
  </tr>
  
  
    <tr>
    <td width='15%'>Contact Number : </td>
    <td width='85%'>$cnum</td>
  </tr>
  
    <tr>
    <td width='15%'>Resume : </td>
    <td width='85%'><a href='https://www.engineerswanted.com/$file2' >Click Here to Download</a></td>
  </tr>
  
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
    
	  <tr>
    <td colspan='2'>Please make the appropriate decision, After examining the biodata.</td>
  </tr>

	
 
    
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>
    
    --<br>
Regards,<br>
HR Team<br>
EngineersWanted.com <br><br>

Tel +91 471 2338733<br>

    </td>
  </tr>
</table>
	";	

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: EngineersWanted <info@enfineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, abhilashdevop@gmail.com" . "\r\n";
mail($email,$subject,$message,$headers);
mail($email1,$subject1,$message1,$headers);

	 echo "<script language='javascript'>window.location='success.php'</script>";

		
		}


//Add Resume
	function addResume($postArr)
	{
		if ($_SESSION["6_letters_code"] == $_POST["6_letters_code"]) 
		{
		
		$userResume=$this->formatInput($postArr['userresume']);
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' ";
		$res = $this->executeSql($sql);
		
		//old password section
		$sqlold = "select * from engg_login_table where uname= '".$this->formatInput($postArr['email'])."' ";
		$resold = $this->executeSql($sqlold);
        if($rowold = $this->getArray($resold))
		{
			$password = $rowold['password'];		
		}
		else
		{
			$password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()<>:{}+_', ceil(8/strlen($x)) )),1,8);	
		}
		//old password section
	   
		
		if($this->getNumberRows($res)>0)
		{
			$_SESSION['confirmation'] ="Username Exist";
			$url="index.php";
			$this->re_direct($url);
		}
		else
		{
			if($userResume=="userresume"){ $ap=2;} else { $ap=1;}
			$sql="insert into hr_login(email,password,category,approve,status)values('".$this->formatInput($postArr['email'])."', '$password', 'jobseeker', '$ap', '0')";
			$res = $this->executeSql($sql);
		
			$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_login`"); 
        	$row = $this->getArray($res); 
        	$uid = $row['id'];
		
			//photo
			$i1=$_FILES['A1']['name'];
	    	if($i1 !="")
			{
				if($userResume=="userresume")
				{
					$folder="photo/";
					$folder1="photo/";
				} 
				else
				{
					$folder="../photo/";
					$folder1="photo/";
				}

					$img1=$_FILES['A1'];
  					$file=$this->check_picture($img1,$folder);
					$file1=$folder1.$file;
					$file1=$this->formatInput($file1);
			}
			else
			{
				$file1="images/no-img.jpg";
			}
			

		// language aary
	    $cnt = count($postArr['languageknown']); 
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$this->formatInput($postArr['languageknown'][$i]).',';
		}
	    $languageknown= substr($vals,0, -2);

	$sql="insert into hr_personaldetails(uid, name, email, contactnumber,alternatecontactnumber,dateofbirth,gender,maritalstatus,nationality,statrorregion,languageknown,visastatus,highestdegree,	specialisation,drivinglicense,currentlocation,preferredlocation,totalexperience,internationalexperience,noticeperiod,expectedsaarycurrency,salaryamount,photo,status,approve)values('$uid','".$this->formatInput($postArr['name'])."','".$this->formatInput($postArr['email'])."','".$this->formatInput($postArr['contactnumber'])."','".$this->formatInput($postArr['alternatecontactnumber'])."','".$this->formatInput($postArr['dateofbirth'])."','".$this->formatInput($postArr['gender'])."','".$this->formatInput($postArr['maritalstatus'])."','".$this->formatInput($postArr['nationality'])."','".$this->formatInput($postArr['statrorregion'])."','$languageknown','".$this->formatInput($postArr['visastatus'])."','".$this->formatInput($postArr['highestdegree'])."','".$this->formatInput($postArr['specialisation'])."','".$this->formatInput($postArr['drivinglicense'])."','".$this->formatInput($postArr['currentlocation'])."','".$this->formatInput($postArr['preferredlocation'])."','".$this->formatInput($postArr['totalexperience'])."','".$this->formatInput($postArr['internationalexperience'])."','".$this->formatInput($postArr['noticeperiod'])."','".$this->formatInput($postArr['expectedsaarycurrency'])."','".$this->formatInput($postArr['salaryamount'])."','$file1','0','$ap')";
	
	$res = $this->executeSql($sql);
		
		 $sql = "select * from hr_course where course= '".$this->formatInput($postArr['necourse'])."' ";
		
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_course(course)values('".$this->formatInput($postArr['necourse'])."')";
		$res = $this->executeSql($sql);
		}

		$sql = "select * from hr_educatingrade where grade= '".$this->formatInput($postArr['negrade'])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_educatingrade(grade)values('".$this->formatInput($postArr['negrade'])."')";
		$res = $this->executeSql($sql);
		}

		
		//Education
$sql="insert into hr_education(uid, ecourse, especialisation, ecountry, grade, yearfrom,yearto,status,approve)values('$uid', '".$this->formatInput($postArr['necourse'])."', '".$this->formatInput($postArr['nespecialisation'])."', '".$this->formatInput($postArr['necountry'])."', '".$this->formatInput($postArr['negrade'])."', '".$this->formatInput($postArr['nyearfrom'])."', '".$this->formatInput($postArr['nyearto'])."', '0', '0')";	
		$res = $this->executeSql($sql);

	   $cnt = count($postArr['ecourse']);
	   
		if($userResume=="userresume"){ $cn=0; $cnt=$cnt-1;} else { $cn=1;}
		for($i=$cn; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['ecourse'][$i]) !="")
			{
			
		$sql = "select * from hr_course where course= '".$this->formatInput($postArr['ecourse'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_course(course)values('".$this->formatInput($postArr['ecourse'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		$sql = "select * from hr_educatingrade where grade= '".$this->formatInput($postArr['egrade'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_educatingrade(grade)values('".$this->formatInput($postArr['egrade'][$i])."')";
		$res = $this->executeSql($sql);
		}
			
			
		 $sql="insert into hr_education(uid, ecourse, especialisation, ecountry, grade, yearfrom,yearto,status,approve)values('$uid', '".$this->formatInput($postArr['ecourse'][$i])."', '".$this->formatInput($postArr['especialisation'][$i])."', '".$this->formatInput($postArr['ecountry'][$i])."', '".$this->formatInput($postArr['egrade'][$i])."', '".$this->formatInput($postArr['yearfrom'][$i])."', '".$this->formatInput($postArr['yearto'][$i])."', '0', '0')";
		
			}
		$res = $this->executeSql($sql);
		}
		
	
		
		// EXPERIENCE
	    $cnt = count($postArr['organisation']);
	  
				if($userResume=="userresume"){ $cn=0;} else { $cn=1;}
		for($i=$cn; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['organisation'][$i]) !="")
			{	
			
		//Organisation	
		$sql = "select * from hr_organisation where organisation= '".$this->formatInput($postArr['organisation'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_organisation(organisation)values('".$this->formatInput($postArr['organisation'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		// industry
		$sql = "select * from hr_industry where industry= '".$this->formatInput($postArr['industry'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_industry(industry,status)values('".$this->formatInput($postArr['industry'][$i])."','0')";
		$res = $this->executeSql($sql);
		}
			
		// category
		$sql = "select * from hr_category where category= '".$this->formatInput($postArr['category'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		if($postArr['category'][$i] !="")
		{
		$sql="insert into hr_category(category)values('".$this->formatInput($postArr['category'][$i])."')";
		$res = $this->executeSql($sql);
		}
		} 
		
			
	    // role
		$sql = "select * from hr_role where role= '".$this->formatInput($postArr['role'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_role(role)values('".$this->formatInput($postArr['role'][$i])."')";
		$res = $this->executeSql($sql);
		} 
		
		    $sql="insert into hr_experience(uid, organisation, industry, jobcategory,jobrole,jobtype,experiencefrom,experienceto,iexperience,responsibilities,status,approve)values(
			'$uid', 
			'".$this->formatInput($postArr['organisation'][$i])."', 
			'".$this->formatInput($postArr['industry'][$i])."', 
			'".$this->formatInput($postArr['jobcategory'][$i])."', 
			'".$this->formatInput($postArr['jobrole'][$i])."', 
			'".$this->formatInput($postArr['jobtype'][$i])."', 
			'".$this->formatInput($postArr['experiencefrom'][$i])."', 
			'".$this->formatInput($postArr['experienceto'][$i])."', 
			'".$this->formatInput($postArr['iexperience'][$i])."' , 
			'".$this->formatInput($postArr['responsibilities'][$i])."' ,
			'0', '0')";
					
		 $res = $this->executeSql($sql);
		 	}
		}
		
		//RESUME
		$i1=$_FILES['A2']['name'];
	    if($i1 !="")
		{
		if($userResume=="userresume")
				{
		$folder1="resume/";
		$folder2="resume/";
				 } 
				 else
				  {
		$folder1="../resume/";
		$folder2="resume/";
				   }

		$img2=$_FILES['A2'];
  		$file1=$this->check_picture($img2,$folder1,$uid);
		$file2=$folder2.$file1;
		$file2=$this->formatInput($file2);
		}
		else
		{
		$file2="";
		}
		
		
		 $sql="insert into hr_resume
(uid, coverletter,additinalddetais,skills,resumefile,status,approve)values('$uid','".$this->formatInput($postArr['coverletter'])."','".$this->formatInput($postArr['additinalddetais'])."','".$this->formatInput($postArr['skills'])."','$file2','0','0')";

	$res = $this->executeSql($sql);
	
		}
		
		
			if($userResume=="userresume")
				{	
		$name=$this->formatInput($postArr['name']);
		$email=$this->formatInput($postArr['email']);
		$password=$password;
		
		
		$subject = "Welcome to www.EngineersWanted.com";

	$message .= "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  
    <tr>
    <td colspan='2'><p>Dear $name, </p></td>
  </tr>

  
  <tr>
    <td colspan='2'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
    
	  <tr>
    <td colspan='2'>You are successfully registered and your password is attached below. Customize the password after logging in. In case your job profile is changed, please update your resume and help recruiters to find you and shortlist you for relevant openings.</td>
  </tr>

	
  <tr>
    <td colspan='2'>Email : $email</td>
  </tr>
    
  <tr>
    <td colspan='2'>Password : $password</td>
  </tr>
    
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
	";
	
$message .=$this->signature();


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: EngineersWanted <hr@engineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com, abhilashdevop@gmail.com" . "\r\n";
mail($email,$subject,$message,$headers);	
	
		}


		/////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		if($_SESSION['jobapplication'])
		{
		
		$jid=$_SESSION['jobid'];
		//echo $jid;
		$sql="select a.id,b.email,b.contactnumber, b.name,c.resumefile,c.coverletter from hr_login a left join hr_personaldetails b on a.id=b.uid left join hr_resume c on b.uid=c.uid where b.email='".$_SESSION['email']."'";
		
		$res = $this->executeSql($sql);
        $row = $this->getArray($res); 
        $uid = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $resumefile = $row['resumefile'];
		$contactnumber=$row['contactnumber'];
		$coverletter=$row['coverletter'];
		
		$sqls="insert into hr_application(uid,jid,email,name,resume)values('$uid','$jid','$email','$name','$resumefile')";
		$ress = $this->executeSql($sqls);
		
		$jobdetails="select * from hr_jobpost where id='$jid'";
		$resjobs = $this->executeSql($jobdetails);
        $rows = $this->getArray($resjobs);
		$to=$rows['owneremail']; 
		$uname=$_SESSION['email'];
		
 	    $resapp = $this->executeSql("SELECT MAX(id) as id FROM `hr_application`"); 
        $rowp = $this->getArray($resapp); 
        $apid=  $rowp['id'];
		
		
			if($resumefile !="images/no-img.jpg")
			{
			if(file_exists("../$resumefile"))
            {
			$rss="Resume File Not available. ";
			}
			else
			{
			$rss="<a href='http://www.engineerswanted.com/$resumefile'  target='_blank'>Click Here To Download</a>";
			}
			}
			else
			{
			$rss="Resume File Not available. ";
			}

$subject = "Application via www.EngineersWanted.com";

  $message .= "
<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><a href='http://www.engineerswanted.com/' target='_blank'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></a></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2' align='center'><h3>You have received an applicant via www.engineerswanted.com</h3></td>
  </tr>
  <tr>
    <td colspan='2'>A new application is received for the job : $rows[jobtitle] [ $jid ]</td>
  </tr>
  <tr>
    <td>Employer : </td>
    <td>$rows[organization]</td>
  </tr>
  <tr>
    <td>Your Job details  :</td>
    <td>$rows[jobdetails]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center'  colspan='2'>Applicant Details</td>
  </tr>
  <tr>
    <td>Application ID : </td>
    <td>A-$apid</td>
  </tr>
  <tr>
    <td>Name : </td>
    <td>$name</td>
  </tr>
  <tr>
    <td>Email :</td>
    <td>$email</td>
  </tr>
  <tr>
    <td>Phone : </td>
    <td>$contactnumber</td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $coverletter</td>
  </tr>
  <tr>
    <td colspan='2'>$rss</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
";

$message .$this->signature();

$subject1 = "Your Application is received via engineerswanted.com";

 $message1 .= "
<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'><p>Dear $name,</p></td>
  </tr> 
  <tr>
    <td colspan='2' align='center'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>Application is received for the job : $rows[jobtitle] [ $jid ]</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>Your application has been received. You will be contacted on being   shortlisted. </td>
  </tr> 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
";

$message1 .$this->signature();

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= "From: EngineersWanted <hr@engineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com, abhilashdevop@gmail.com" . "\r\n";
mail($to,$subject,$message,$headers);
mail($uname,$subject1,$message1,$headers);

unset($_SESSION['jobapplication']);
unset($_SESSION['email']);


//xml creation

 $sql="select a.email, b.resumefile from hr_personaldetails a left join hr_resume b on a.uid=b.uid";

	$results = $this->executeSql($sql);
	
	$xml=new DOMDocument("1.0","utf-8");
	$xml->formatOutput=true;
	$root=$xml->createElement("source");
	$xml->appendChild($root);
	
			$publisher=$xml->createElement("publisher","EngineersWanted");
			$root->appendChild($publisher);

			$publisherurl=$xml->createElement("publisherurl","http://www.engineerswanted.com");
			$root->appendChild($publisherurl);
	
		    while($row=$this->getArray($results))
			{
			
			$job=$xml->createElement("job");
			$root->appendChild($job);
			
			$email=$xml->createElement("email");
			$job->appendChild($title);
			
			$resumefile=$xml->createElement("resumefile");
			$job->appendChild($date);
			
			
$email->appendChild($xml->createCDATASection($row['email']));
$resumefile->appendChild($xml->createCDATASection($row['resumefile']));
			
			}
	 "<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("EngineersWanted.xml");

//xml creation 	

		$url="job-list.php";
		$this->re_direct($url);
		

		}
		echo ("<script LANGUAGE='JavaScript'>
       window.alert('Your Request Will Be Processing... After Verification We Will Provide Password To Your Email Address...!');
          window.location.href='index.php';
       </script>");
	   
		}
	else 
	{
		
		echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
		echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
		echo "<script language='javascript'>swal({title:'Error',text:'Please check captcha code...!',type:'error',confirmButtonClass: 'btn-success',confirmButtonText: 'OK!',closeOnConfirm: false});</script>";
		
	}
		
	}
		
		
//viewcandidatesPersonalDetails
	function viewcandidatesPersonalDetails()
	{
		$sql = "SELECT * FROM hr_personaldetails order by uid desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	
	//resumeFileDownlaod
	function resumeFileDownlaod($uid)
	{
		$sql = "SELECT * FROM hr_resume where uid='$uid' order by uid desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	
	

//View Candidates Details
	function viewcandidatesPersonalDetailsforedit($uid)
	{
	 $sql = "SELECT a.id,a.email,b.name,b.contactnumber,b.alternatecontactnumber,b.dateofbirth,b.gender,b.maritalstatus,b.nationality,b.statrorregion,b.languageknown,b.visastatus,b.highestdegree,b.specialisation,b.drivinglicense,b.currentlocation,b.preferredlocation,b.totalexperience,b.internationalexperience,b.noticeperiod,b.expectedsaarycurrency,b.salaryamount,b.photo,c.coverletter,c.additinalddetais,c.skills, c.resumefile from hr_login a left join hr_personaldetails b on a.id=b.uid left join hr_resume c on c.uid=b.uid where b.uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	function viewcandidatesEducationalDetailsforedit($uid)
	{
		$sql = "select * from hr_education where uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	function viewcandidatesExperienceDetailsforedit($uid)
	{
		$sql = "select * from hr_experience where uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	
	//Edit Candidate Details	

	function editPersonaldetails($postArr,$uid)
	{
	
		$userResume=$this->formatInput($postArr['userresume']);
		$ph=$this->formatInput($postArr['ph']);

		//photo
		$i1=$_FILES['A1']['name'];
			
	    if($i1 !="")
		{
		
			if($ph!="images/no-img.jpg")
			{
			if($userResume=="userresume"){
			
		unlink("$ph");
		$folder="photo/";
		$folder1="photo/";
			} 
			else 
			{
		$folder="../photo/";
		$folder1="photo/";
		unlink("../$ph");
			 }
			}
		
		$img1=$_FILES['A1'];
  		$file=$this->check_picture($img1,$folder);
		$file1=$folder1.$file;
		$file1=$this->formatInput($file1);
		}
		else
		{
		$file1="$ph";
		}

		// personal details
	    $cnt = count($postArr['languageknown']);
		for($i=0; $i<=$cnt; $i++)
		{
	    $vals .= @$_POST['languageknown'][$i].',';
		}
	    $languageknown= substr($vals,0, -2);
	
	     $sql="update hr_personaldetails set  
		 name= '".$this->formatInput($postArr['name'])."', 
		 email='".$this->formatInput($postArr['email'])."', 
		 contactnumber= '".$this->formatInput($postArr['contactnumber'])."', 
		 alternatecontactnumber='".$this->formatInput($postArr['alternatecontactnumber'])."', 
		 dateofbirth='".$this->formatInput($postArr['dateofbirth'])."', 
		 gender='".$this->formatInput($postArr['gender'])."', 
		 maritalstatus='".$this->formatInput($postArr['maritalstatus'])."', 
		 nationality='".$this->formatInput($postArr['nationality'])."', 
		 statrorregion='".$this->formatInput($postArr['statrorregion'])."', 
		 languageknown='$languageknown', 
		 visastatus='".$this->formatInput($postArr['visastatus'])."', 
		 highestdegree='".$this->formatInput($postArr['highestdegree'])."', 
		 specialisation='".$this->formatInput($postArr['specialisation'])."', 
		 currentlocation='".$this->formatInput($postArr['currentlocation'])."', 
		 preferredlocation='".$this->formatInput($postArr['preferredlocation'])."', 
		 totalexperience= '".$this->formatInput($postArr['totalexperience'])."', 
		 internationalexperience='".$this->formatInput($postArr['internationalexperience'])."', 
		 noticeperiod='".$this->formatInput($postArr['noticeperiod'])."', 
		 drivinglicense='".$this->formatInput($postArr['drivinglicense'])."', 
		 expectedsaarycurrency='".$this->formatInput($postArr['expectedsaarycurrency'])."', 
		 salaryamount='".$this->formatInput($postArr['salaryamount'])."',
		 photo='$file1' 
		 where uid='$uid'";
		 
		$result = $this->executeSql($sql);
		
	//education update
	
	   $cnt = count($postArr['enecourse']);
	   
		for($i=0; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['enecourse'][$i]) !="")
			{
			
		$sql = "select * from hr_course where course= '".$this->formatInput($postArr['enecourse'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_course(course)values('".$this->formatInput($postArr['enecourse'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		$sql = "select * from hr_educatingrade where grade= '".$this->formatInput($postArr['enegrade'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_educatingrade(grade)values('".$this->formatInput($postArr['enegrade'][$i])."')";
		$res = $this->executeSql($sql);
		}
			
			
		$sql="update  hr_education set  
		ecourse= '".$this->formatInput($postArr['enecourse'][$i])."', 
		especialisation='".$this->formatInput($postArr['nespecialisation'][$i])."', 
		ecountry='".$this->formatInput($postArr['enecountry'][$i])."', 
		grade='".$this->formatInput($postArr['enegrade'][$i])."', 
		yearfrom='".$this->formatInput($postArr['enyearfrom'][$i])."',
		yearto='".$this->formatInput($postArr['enyearto'][$i])."' 
		where id='".$this->formatInput($postArr['eid'][$i])."'";
			}
		$res = $this->executeSql($sql);
		}	
		
		//education ibsert
       $cnt = count($postArr['ecourse']);
	   			if($userResume=="userresume"){ $cn=0; $cnt=$cnt-1;} else { $cn=1;}
		for($i=$cn; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['ecourse'][$i]) !="")
			{
			
		$sql = "select * from hr_course where course= '".$this->formatInput($postArr['ecourse'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_course(course)values('".$this->formatInput($postArr['ecourse'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		$sql = "select * from hr_educatingrade where grade= '".$this->formatInput($postArr['egrade'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_educatingrade(grade)values('".$this->formatInput($postArr['egrade'][$i])."')";
		$res = $this->executeSql($sql);
		}
			
			
		$sql="insert into hr_education(uid, ecourse, especialisation, ecountry, grade, yearfrom,yearto,status,approve)values(
		'$uid', 
		'".$this->formatInput($postArr['ecourse'][$i])."', 
		'".$this->formatInput($postArr['especialisation'][$i])."', 
		'".$this->formatInput($postArr['ecountry'][$i])."', 
		'".$this->formatInput($postArr['egrade'][$i])."', 
		'".$this->formatInput($postArr['yearfrom'][$i])."', 
		'".$this->formatInput($postArr['yearto'][$i])."', 
		'0', '0')";
		}
		$res = $this->executeSql($sql);
		}
		
		
		// Experience Update Details
		
		 $cnt = count($postArr['organisation']);
		 
		 
		for($i=0; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['organisation'][$i])!= "")
			{	  
			 
		//Organisation	
		$sql = "select * from hr_organisation where organisation= '".$this->formatInput($postArr['organisation'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_organisation(organisation)values('".$this->formatInput($postArr['organisation'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		// industry
		$sql = "select * from hr_industry where industry= '".$this->formatInput($postArr['industry'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_industry(industry,status)values('".$this->formatInput($postArr['industry'][$i])."','0')";
		$res = $this->executeSql($sql);
		}
			
		// category
		$sql = "select * from hr_category where category= '".$this->formatInput($postArr['category'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_category(category)values('".$this->formatInput($postArr['category'][$i])."')";
		$res = $this->executeSql($sql);
		} 
		
		// role
		$sql = "select * from hr_role where role= '".$this->formatInput($postArr['role'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_role(role)values('".$this->formatInput($postArr['role'][$i])."')";
		$res = $this->executeSql($sql);
		} 
		
	
		$sql="update hr_experience set  
		organisation= '".$this->formatInput($postArr['organisation'][$i])."', 
		industry='".$this->formatInput($postArr['industry'][$i])."', 
		jobcategory='".$this->formatInput($postArr['jobcategory'][$i])."', 
		jobrole='".$this->formatInput($postArr['jobrole'][$i])."', 
		jobtype='".$this->formatInput($postArr['jobtype'][$i])."',
		experiencefrom='".$this->formatInput($postArr['experiencefrom'][$i])."', 
		experienceto='".$this->formatInput($postArr['experienceto'][$i])."', 
		iexperience='".$this->formatInput($postArr['iexperience'][$i])."',
		responsibilities='".$this->formatInput($postArr['responsibilities'][$i])."' 
		where id='".$this->formatInput($postArr['exid'][$i])."'";
		
		}
		$res = $this->executeSql($sql);
		}	
		
		// experience Insert
		
 		$cnt = count($postArr['eorganisation']);
				 if($userResume=="userresume"){ $cn=0; $cnt=$cnt-1;} else { $cn=1;}

		for($i=$cn; $i<$cnt; $i++)
		{
			if($this->formatInput($postArr['eorganisation'][$i]) !="")
			{	   
		//Organisation	
		$sql = "select * from hr_organisation where organisation= '".$this->formatInput($postArr['eorganisation'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_organisation(organisation)values('".$this->formatInput($postArr['eorganisation'][$i])."')";
		$res = $this->executeSql($sql);
		}
		
		// industry
		$sql = "select * from hr_industry where industry= '".$this->formatInput($postArr['eindustry'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_industry(industry,status)values('".$this->formatInput($postArr['eindustry'][$i])."','0')";
		$res = $this->executeSql($sql);
		}
			
		// category
		$sql = "select * from hr_category where category= '".$this->formatInput($postArr['ejobcategory'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_category(category)values('".$this->formatInput($postArr['ejobcategory'][$i])."')";
		$res = $this->executeSql($sql);
		} 
		
		// role
		$sql = "select * from hr_role where role= '".$this->formatInput($postArr['ejobrole'][$i])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)==0)
		{
		$sql="insert into hr_role(role,status)values('".$this->formatInput($postArr['ejobrole'][$i])."','0')";
		$res = $this->executeSql($sql);
		} 
			
		$sql="insert into hr_experience(uid, organisation, industry, jobcategory, jobrole, jobtype, experiencefrom, experienceto, iexperience, responsibilities, status, approve)values(
		'$uid', 
		'".$this->formatInput($postArr['eorganisation'][$i])."', 
		'".$this->formatInput($postArr['eindustry'][$i])."', 
		'".$this->formatInput($postArr['ejobcategory'][$i])."', 
		'".$this->formatInput($postArr['ejobrole'][$i])."', 
		'".$this->formatInput($postArr['ejobtype'][$i])."', 
		'".$this->formatInput($postArr['eexperiencefrom'][$i])."',
		'".$this->formatInput($postArr['eexperienceto'][$i])."', 
		'".$this->formatInput($postArr['eiexperience'][$i])."', 
		'".$this->formatInput($postArr['eresponsibilities'][$i])."', 
		'0', '0')";
			}
		$res = $this->executeSql($sql);
	}

		
	
		// Resume
		$i1=$_FILES['A2']['name'];
		$ph1=$this->formatInput($postArr['ph1']);
	    if($i1 !="")
		{
		if($ph1!="images/no-img.jpg")
		{
		if($userResume=="userresume")
		{
		unlink("$ph1");
		$folder1="resume/";
		$folder2="resume/";
		} 
		 else
		{
		$folder1="../resume/";
		$folder2="resume/";
		unlink("../$ph1");
		}
		}
		$img2=$_FILES['A2'];
  		$file1=$this->check_picture($img2,$folder1);
		$file2=$folder2.$file1;
		$file2=$this->formatInput($file2);
		}
		else
		{
		$file2="$ph1";
		}
			$sql="update hr_resume set  
			coverletter='".$this->formatInput($postArr['coverletter'])."', 
			additinalddetais='".$this->formatInput($postArr['additinalddetais'])."', 
			skills='".$this->formatInput($postArr['skills'])."', 
			resumefile= '$file2' 
			where uid='$uid'";
			
		$result = $this->executeSql($sql);	
	}
	
	
	// Delete Resume
	 function deleteEducationdetails($postArr,$uid)
		{
		$ph=$this->formatInput($postArr['ph']);
		$ph1=$this->formatInput($postArr['ph1']);
		
	if($ph!="images/no-img.jpg")
	{
	unlink("../$ph");
	}
	if($ph1!="images/no-img.jpg")
	{
	unlink("../$ph1");
	}
	$sql="delete from hr_login where id='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_personaldetails where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_resume where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_education where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_experience where uid='$uid'";
	$result = $this->executeSql($sql);
	
		echo "<script language='javascript'>window.location='resume-list.php'</script>";
	
	}      
	
	
	
	// ADD EMPLOYEE
	
		function addEmployee($postArr)
	    {
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)>0)
		{
		$_SESSION['confirmation'] ="Username Exist";
		$url="index.php";
		$this->re_direct($url);
		}
		else
		{
		$sql="insert into hr_login(email,password,category,approve,status)values('".$this->formatInput($postArr['email'])."', '#password@1', 'employer', '1', '0')";
		$res = $this->executeSql($sql);
		
		$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_login`"); 
        $row = $this->getArray($res); 
        $uid = $row['id'];
				
		$sql="insert into hr_employer(uid, organisationname, contactperson, designation, email, contactnumber, alternatenumber, companydetails, country, city, status, approve)values(
		'$uid', 
		'".$this->formatInput($postArr['organisationname'])."', 
		'".$this->formatInput($postArr['contactperson'])."', 
		'".$this->formatInput($postArr['designation'])."', 
		'".$this->formatInput($postArr['email'])."', 
		'".$this->formatInput($postArr['contactnumber'])."', 
		'".$this->formatInput($postArr['alternatenumber'])."', 
		'".$this->formatInput($postArr['companydetails'])."', 
		'".$this->formatInput($postArr['country'])."', 
		'".$this->formatInput($postArr['city'])."', 
	    '0','0')";
		$result = $this->executeSql($sql);
		}
		if($addEmployee=="addemployee")
				{
	 echo "<script language='javascript'>window.location='post-register.php'</script>";
				 } 
				 else
				  {
	 echo "<script language='javascript'>window.location='employer.php'</script>";
				   }
		}
	
	
	// VIEW EMPLOYEES
	
		function viewEmployees()
		{
		$sql = "SELECT * FROM hr_employer order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
		}
		
		
	// EDIT EMPLOYEES
	
		function editEmployee($postArr)
		{
			
			$uid=$this->formatInput($postArr['uid']);
			$sql="update hr_employer set 
			organisationname= '".$this->formatInput($postArr['organisationname'])."', 
			contactperson= '".$this->formatInput($postArr['contactperson'])."',
			email= '".$this->formatInput($postArr['email'])."',
			designation= '".$this->formatInput($postArr['designation'])."', 
			contactnumber= '".$this->formatInput($postArr['contactnumber'])."', 
			alternatenumber= '".$this->formatInput($postArr['alternatenumber'])."', 
			companydetails= '".$this->formatInput($postArr['companydetails'])."', 
			country= '".$this->formatInput($postArr['country'])."', 
			city= '".$this->formatInput($postArr['city'])."' where uid='$uid'";
			
			$result = $this->executeSql($sql);
			echo "<script language='javascript'>window.location='employer-home.php'</script>";
		
		}
	
	
	// DELETE EMPLOYEE

		function deleteEmployee($postArr)
			{
				 $uid=$this->formatInput($postArr['uid']);
	 			 $sql="delete from  hr_login where id='$uid'";
	 			 $result = $this->executeSql($sql);
				 
	 			 $sql="delete from  hr_employer where uid='$uid'";
	 			 $result = $this->executeSql($sql);
	 			 echo "<script language='javascript'>window.location='employer.php'</script>";
			}	
	
	
	// ADD Agent
	
	function addAgent($postArr)
	    {
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)>0)
		{
		$_SESSION['confirmation'] ="Username Exist";
		$url="index.php";
		$this->re_direct($url);
		}
		else
		{
		$sql="insert into hr_login(email,password,category,approve,status)values('".$this->formatInput($postArr['email'])."', '#password@1', 'agent', '1', '0')";
		$res = $this->executeSql($sql);
		
		$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_login`"); 
        $row = $this->getArray($res); 
        $uid = $row['id'];
				
		$sql="insert into hr_agent(uid, agentname, email, contactnumber, occupation, country, city, status, approve)values(
		'$uid', 
		'".$this->formatInput($postArr['agentname'])."', 
		'".$this->formatInput($postArr['email'])."', 
		'".$this->formatInput($postArr['contactnumber'])."', 
		'".$this->formatInput($postArr['occupation'])."', 
		'".$this->formatInput($postArr['country'])."', 
		'".$this->formatInput($postArr['city'])."', 
	    '0','0')";
		$result = $this->executeSql($sql);
		}
		
		}
	
	
	// VIEW Agents
	
		function viewAgents()
		{
		$sql = "SELECT * FROM hr_agent order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
		}
		
		
	// EDIT Agents
	
		function editAgent($postArr)
		{
			
			$uid=$this->formatInput($postArr['uid']);
			$sql="update hr_agent set 
			agentname= '".$this->formatInput($postArr['agentname'])."', 
			email= '".$this->formatInput($postArr['email'])."',
			contactnumber= '".$this->formatInput($postArr['contactnumber'])."',
			occupation= '".$this->formatInput($postArr['occupation'])."', 
			country= '".$this->formatInput($postArr['country'])."', 
			city= '".$this->formatInput($postArr['city'])."'
			where uid='$uid'";
			$result = $this->executeSql($sql);
			echo "<script language='javascript'>window.location='agent.php'</script>";
		
		}
	
	
	// DELETE EMPLOYEE

		function deleteAgent($postArr)
			{
				 $uid=$this->formatInput($postArr['uid']);
	 			 $sql="delete from hr_login where id='$uid'";
	 			 $result = $this->executeSql($sql);
				 
				 $sql="delete from hr_agent where uid='$uid'";
	 	         $result = $this->executeSql($sql);
	 			 echo "<script language='javascript'>window.location='agent.php'</script>";
			}	
	

	  // ADD STAFF
	
		function addStaff($postArr)
	    {
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)>0)
		{
		$_SESSION['confirmation'] ="Username Exist";
		$url="index.php";
		$this->re_direct($url);
		}
		else
		{
		$sql="insert into hr_login(email,password,category,approve,status)values('".$this->formatInput($postArr['email'])."', '#password@1', 'staff', '1', '0')";
		$res = $this->executeSql($sql);
		
		$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_login`"); 
        $row = $this->getArray($res); 
        $uid = $row['id'];
				
		$sql="insert into hr_staff(uid, staffname, email, status, approve)values(
		'$uid', 
		'".$this->formatInput($postArr['staffname'])."', 
		'".$this->formatInput($postArr['email'])."',  
	    '0','0')";
		$result = $this->executeSql($sql);
		}
		
		}
	
	
	// VIEW STAFF
	
		function staffList()
		{
		$sql = "SELECT * FROM hr_staff order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
		}
		
		
	// EDIT STAFF
	
		function editStaff($postArr)
		{
			
			$uid=$this->formatInput($postArr['uid']);
			$sql="update hr_staff set 
			staffname= '".$this->formatInput($postArr['staffname'])."', 
			email= '".$this->formatInput($postArr['email'])."'
			where uid='$uid'";
			$result = $this->executeSql($sql);
			echo "<script language='javascript'>window.location='staff.php'</script>";
		
		}
	
	
	// DELETE STAFF

		function deleteStaff($postArr)
			{
				 $uid=$this->formatInput($postArr['uid']);
	 			 $sql="delete from hr_login where id='$uid'";
	 			 $result = $this->executeSql($sql);
				 
				 $sql="delete from hr_staff where uid='$uid'";
	 	         $result = $this->executeSql($sql);
	 			 echo "<script language='javascript'>window.location='staff.php'</script>";
			}	
	
	
	//Job List

   function joblist($perpage, $startpoint, $sts, $wh)
	{
	if($wh=="")
	{
		$sql_daily="select * from hr_jobpost where  $wh status='0' order by postedon desc";
	}
	else
	{
		$sql_daily="select * from hr_jobpost   $wh and status='0' order by postedon desc";
	}
     $sql_daily1=$sql_daily." LIMIT " .$startpoint.','.$perpage;
    $result = $this->executeSql($sql_daily1);
	return $result;
    if($sts==1) {
    return $this->getNumberRows($result);
    } 
	else if($sts==2)
    { 
      return $result;
    }
	}	
	
	

// VIEW JOB LIST IN HOME PAGE
	function homeJoblist()
	{
	$sql="select * from hr_jobpost order by id desc limit 10";
    $result = $this->executeSql($sql);
	return $result;
	}	
	
	
//viewJobs
	function viewJobsdetails($id)
	{
		$sql = "SELECT * FROM hr_jobpost where id='$id' and status='1' order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}
	

//viewJobs
	function viewJobs()
	{
		$sql = "SELECT * FROM hr_jobpost order by id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	

	
//proceedToapply

	function proceedToapply($postArr,$jid)
		{
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' and category='jobseeker' ";
		$res = $this->executeSql($sql);
		if($this->getNumberRows($res)>0)
		{
		$_SESSION['jobapplication'] ="Application";
		$_SESSION['email'] =$this->formatInput($postArr['email']);
		$_SESSION['jobid']=$jid;
		$url="application.php?jid=$jid";
		$this->re_direct($url);
		}
		else
		{
		$_SESSION['jobapplication'] ="Application";
		$_SESSION['email'] =$this->formatInput($postArr['email']);
		$_SESSION['jobid']=$jid;
		$url="new-resume.php";
		$this->re_direct($url);
		}
		}
	
// jobApplication
	function jobApplication($postArr,$jid)
		{
		
		$sql="select a.id,b.email,b.contactnumber, b.name,c.resumefile,c.coverletter from hr_login a left join hr_personaldetails b on a.id=b.uid left join hr_resume c on b.uid=c.uid where b.email='".$_SESSION['email']."'";
		$res = $this->executeSql($sql);
        $row = $this->getArray($res); 
        $uid = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $resumefile = $row['resumefile'];
		$contactnumber=$row['contactnumber'];
		$coverletter=$row['coverletter'];
		
		$sqls="insert into hr_application(uid,jid,email,name,resume)values('$uid','$jid','$email','$name','$resumefile')";
		$ress = $this->executeSql($sqls);
		
		$jobdetails="select * from hr_jobpost where id='$jid'";
		$resjobs = $this->executeSql($jobdetails);
        $rows = $this->getArray($resjobs);
		$to=$rows['owneremail']; 
		$uname=$_SESSION['email'];
		
 	    $resapp = $this->executeSql("SELECT MAX(id) as id FROM `hr_application`"); 
        $rowp = $this->getArray($resapp); 
        $apid=  $rowp['id'];
			
			if($resumefile !="images/no-img.jpg")
			{
			if(file_exists("../$resumefile"))
            {
			$rss="Resume File Not available. ";
			}
			else
			{
			$rss="<a href='http://www.engineerswanted.com/$resumefile'  target='_blank'>Click Here To Download</a>";
			}
			}
			else
			{
			$rss="Resume File Not available. ";
			}

$subject = "Application via www.engineerswanted.com";

 $message .= "
<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><a href='http://www.engineerswanted.com/' target='_blank'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></a></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2' align='center'><h3>You have received an applicant via www.engineerswanted.com</h3></td>
  </tr>
  <tr>
    <td colspan='2'>A new application is received for the job : $rows[jobtitle] [ $jid ]</td>
  </tr>
  <tr>
    <td>Employer : </td>
    <td>$rows[organization]</td>
  </tr>
  <tr>
    <td>Your Job details  :</td>
    <td>$rows[jobdetails]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center'  colspan='2'>Applicant Details</td>
  </tr>
  <tr>
    <td>Application ID : </td>
    <td>A-$apid</td>
  </tr>
  <tr>
    <td>Name : </td>
    <td>$name</td>
  </tr>
  <tr>
    <td>Email :</td>
    <td>$email</td>
  </tr>
  <tr>
    <td>Phone : </td>
    <td>$contactnumber</td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $coverletter</td>
  </tr>
  <tr>
    <td colspan='2'>$rss</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
";

$message .$this->signature();


$subject1 = "Your Application is received via engineerswanted.com";

 $message1 .= "
<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2' align='center'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>Application is received for the job : $rows[jobtitle] [ $jid ]</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>Your application has been received. You will be contacted on being   shortlisted. </td>
  </tr> 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
";

$message1 .$this->signature();

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= "From: EngineersWanted <contact@engineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com" . "\r\n";
mail($to,$subject,$message,$headers);
mail($uname,$subject1,$message1,$headers);

unset($_SESSION['jobapplication']);
unset($_SESSION['email']);
unset($_SESSION['jobid']);
		$url="job-list.php";
		$this->re_direct($url);

		}				
		
	//////////////////////////////	
		
	
	function candidateslist($perpage, $startpoint, $sts, $whrs)
	{
 $sql_daily="SELECT a.uid,a.name,a.email,a.contactnumber,a.alternatecontactnumber,a.dateofbirth,a.gender,a.maritalstatus,a.nationality,a.statrorregion,a.languageknown,a.visastatus,a.highestdegree,a.specialisation,a.currentlocation,a.preferredlocation,a.totalexperience,a.internationalexperience,a.noticeperiod,a.drivinglicense,a.expectedsaarycurrency,a.salaryamount,a.photo,a.status,a.approve,a.date,b.ecourse,b.especialisation,b.ecountry, b.grade, b.yearfrom, b.yearto, c.organisation,c.industry,c.jobcategory,c.jobrole,c.jobtype,c.experiencefrom,c.experienceto,c.iexperience,c.responsibilities,d.coverletter,d.additinalddetais,d.skills,d.resumefile from hr_personaldetails a inner join hr_education b on a.uid=b.uid inner join hr_experience c on c.uid=b.uid inner join hr_resume d on d.uid=c.uid  $whrs group by a.uid ";
		
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
	
	
	
		// View Candidate Details
	function viewCandidatesdetails($uid)
	{
		$sql= "SELECT a.id,a.email,b.name,b.contactnumber,b.alternatecontactnumber,b.dateofbirth,b.gender,b.maritalstatus,b.nationality,b.statrorregion,b.languageknown,b.visastatus,b.highestdegree,b.specialisation,b.currentlocation,b.preferredlocation,b.totalexperience,b.internationalexperience,b.noticeperiod,b.expectedsaarycurrency,b.salaryamount,b.photo,c.coverletter,c.additinalddetais,c.skills,c.resumefile from hr_login a left join hr_personaldetails b on a.id=b.uid left join hr_resume c on c.uid=b.uid where b.uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	function viewcandidatesEducationalDetails($uid)
	{
		$sql = "select * from hr_education where uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	function viewcandidatesExperienceDetails($uid)
	{
		 $sql = "select * from hr_experience where uid='$uid'";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	
	
	//CHECK MAIL

	function checkmail($id)
	{
        $sql_update="select email from hr_login where email='$id'";
		$result = $this->executeSql($sql_update);
        $cnt=$this->getNumberRows($result);
		 if($cnt>0)
		 {
			  echo "<font color='red'>Resume Already Exist</font>";
		 }
	}
	
	
  // guestsession
 		function guestsession()
	 		{
			 $sql="insert into hr_guest(ip)values('')";
 			 $result = $this->executeSql($sql);
 	   		 $res = $this->executeSql("SELECT MAX(id) as id FROM `hr_guest`"); 
        	 $row = $this->getArray($res); 
        	 $inid = $row['id'];
		 	 $_SESSION['guset']=$inid;
			 }	
	 	
		
//insertcv
	function insertcv($id,$idg)
	{
	$sql="select * from hr_subscription where uid='".$_SESSION['id']."' and status='Active' and approve='1'";
	$res = $this->executeSql($sql);
	$row = $this->getArray($res); 
    $subid = $row['id'];
	$sql="insert into hr_scshortlisted(guest,cvid,uid,subid)values('".$_SESSION['guset']."','$id','".$_SESSION['id']."','$subid')";
    $result = $this->executeSql($sql);
	
	$q="select count(*) as cnt from hr_scshortlisted where uid='".$_SESSION['id']."' and subid='$subid' and status='1' and DATE(date)=CURDATE()";
	$re = $this->executeSql($q);
	$numbr=$this->getNumberRows($re);
	$_SESSION['checknbr']=$numbr;
	}


//cv status
	function cvstatus($em,$sid)
	{
		$sql="select * from hr_downloadcv where email='$em' and subid='$sid' and status='1'";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid.=''.$rowss['u_id'].',';
			}
			$selcv=rtrim($uid,',');
			//echo $selcv;
			return $selcv;
		}
		
		
	}
	
//removecv
	function removecv($id,$idg)
	{
	$sql="delete from  hr_scshortlisted  where guest='".$_SESSION['guset']."' and cvid='$id' and status='0' and uid='".$_SESSION['id']."'";
    $result = $this->executeSql($sql);
	
	
	}
	
	// Resume Proceed
	function byresumeproceed()
	{
	$sql="select * from hr_scshortlisted where guest='".$_SESSION['guset']."' and  status='0'";
    $result = $this->executeSql($sql);
	$num=$this->getNumberRows($result);
	return $num; 
	}
	
	
		// RESUME BUY
		function resumebuy($em)
		{
		$sql="select * from hr_subscription where email='".$_SESSION['email']."' and status='Active'";
	 	$res = $this->executeSql($sql);
		$row = $this->getArray($res); 
		$expirydate=$row['expirydate'];
		$ndate=$row['date'];
		$uid=$row['uid'];
		$split = date('Y-m-d',strtotime($ndate));
		
		
		
		$sql="select * from hr_scshortlisted where guest='".$_SESSION['guset']."' and status='0' and date<'$expirydate'";
    	$result = $this->executeSql($sql);
		$num=$this->getNumberRows($result);
		$coun=$num;
	
		$rand=rand(10,10000);
		$sql="select a.cvid,b.resumefile from hr_scshortlisted a left join hr_resume b on a.cvid=b.uid  where a.guest='".$_SESSION['guset']."' and  a.status='0'";
    	$result = $this->executeSql($sql);
		while($row = $this->getArray($result))
		{
			$resume_name=$row['resumefile'];
			$sm.=''.$row['cvid'].',';
			$files[$i]=$resume_name;
			$zip = new ZipArchive();
			$zip_name = 'zip-cv/'.$rand.'zipfile.zip';

			if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
			{
    			$error .= "* Sorry ZIP creation failed at this time";
			}
			$cvs=rtrim($sm,',');
			foreach($files as $file)
			{
    			$zip->addFile($file);
			}
			$zip->close(); 
		}
		$_SESSION['zip_name']=$zip_name;
		$sql="select * from hr_downloadcv where email='".$_SESSION['email']."'"; 
		$value = $this->executeSql($sql);
		$date = date("Y-m-d");
		//$splitdate = date('Y-m-d',strtotime($date));
		
		$sql="select * from hr_subscription where email='".$_SESSION['email']."' and status='Active'";
	 	$res = $this->executeSql($sql);
		$row = $this->getArray($res); 
		$uidd=$row['uid'];
		$subid=$row['id'];
		$expirydate=$row['expirydate'];

		$sql = "select countvalue from hr_count";
		$res = $this->executeSql($sql);
		$val=$this->getArray($res);
		$count=$val['countvalue'];	
		$_SESSION['count']=$count; 
			
		$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$subid' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid=$rowss["u_id"];
				$val=explode("," ,$uid);
				$valu = array_merge($val,$valu);
			}
			$total = sizeof($valu);
			$rem = $total-$count;
			$_SESSION['rem']=$rem; 
			$_SESSION['total']=$total;
		}
		else
		{
			//echo "0 results";
		}
			
		$sql="insert into hr_downloadcv (email,zip,u_id,subid,status) values ('$em','$zip_name','$cvs','$subid','0')";
		$resul = $this->executeSql($sql);
			if($this->getNumberRows($total) < $count)
			{
				if($resul)
				{
					$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$subid' and status='1' and DATE(date)=CURDATE()";
					$result = $this->executeSql($sql);
			
					$val=array();
					$valu=array();
					while($rowss = $this->getArray($result))
					{
						$uid=$rowss["u_id"];
						$val=explode("," ,$uid);
						$valu = array_merge($val,$valu);
					}
					$total = sizeof($valu);
					$rem = $count-$total;
					//echo $rem;
			
					$_SESSION['rem']=$rem; 
					$_SESSION['total']=$total;
				
				
					if($total >= $count)
					{
						echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
						echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
						echo "<script language='javascript'>swal({title:'Sorry',text:'You are already downloaded $count CVs today itself. You cannot download more CVs today. You can download $count CVs per day. So, your limit exceeded. Please, try it on next day...!',type:'error'}, function() {window.location.href = 'employer-home.php';});</script>";
					}
					else
					{
						echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
						echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
						echo "<script language='javascript'>swal({title:'Success',text:'You are successfully downloaded $total CVs today. Now, you have the permission for download $rem CVs remaining...!',type:'success'}, function() {window.location.href = 'employer-home.php';});</script>";
					}
				}
			}
			else
			{
				$p="insert into hr_downloadcv (email,zip,u_id,subid,status) values ('$em','$zip_name','$cvs','$subid','0')";
        		$ret = $this->executeSql($p);
				if($this->getNumberRows($ret) > 0)
				{
					$val=array();
					$valu=array();
					while($rowss = $this->getArray($ret))
					{
						$uid=$rowss["u_id"];
						$val=explode("," ,$uid);
						$valu = array_merge($val,$valu);
					}
				$total = sizeof($valu);
				$rem = $count-$total;
				$_SESSION['rem']=$rem; 
				$_SESSION['total']=$total;
				}
				else
				{
					//echo "0 results";
				}
				
				/*$sql="delete from `hr_downloadcv` where email='".$_SESSION['email']."' and subid='$subid' and status='0' ORDER BY dw_id LIMIT 1";
				$ress = $this->executeSql($sql);*/
			}
			$res = $this->executeSql("SELECT MAX(dw_id) as id FROM `hr_downloadcv`"); 
        	$row = $this->getArray($res); 
        	$inid = $row['id'];
			$_SESSION['zid']=$inid;  
			echo "<script language='javascript'>window.location='download.php'</script>";
		}
		
		
			
	
// Already Downloaded CVs	
	function alreadyDownloadedcv($uid)
	{
		$sql="select * from hr_employer where uid='$uid'";
		$res=$this->executeSql($sql);
		$row=$this->getArray($res);
		$email=$row['email'];
		
		$result="select * from hr_downloadcv where email='$email'";
		$value=$this->executeSql($result);
		$row=$this->getArray($value);
		$subid=$row['subid'];
		
		$cdate = date("Y-m-d");
		$sql="select * from hr_downloadcv where email='$email' and subid='$subid'";
		$value=$this->executeSql($sql);
		$row=$this->getArray($value);
		$id=$row['u_id'];
		$date=$row['date'];
		$split = date('Y-m-d',strtotime($date));
		
		$sql="select * from hr_subscription where email='$email'";
		$value=$this->executeSql($sql);
		$row=$this->getArray($value);
		$expirydate = $row['expirydate'];
		$id = $row['id'];
		$uidd=$row['uid'];
		
		$sql = "select countvalue from hr_count";
		$res = $this->executeSql($sql);
		$val=$this->getArray($res);
		$count=$val['countvalue'];
		
		$sql="select * from hr_subscription where email='".$_SESSION['email']."' and status='Active' and approve='1'";
		$values=$this->executeSql($sql);
		if($this->getNumberRows($values)==0)
		{
			echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
			echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
			echo "<script language='javascript'>swal({title:'Information',text:'You can have the permission for subscription. Only after that, you can download CVs from this site...!',type:'info'}, function() {window.location.href = 'employer-home.php';});</script>";
		}
		else
		{
		$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$subid' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid=$rowss["u_id"];
				$val=explode("," ,$uid);
				$valu = array_merge($val,$valu);
			}
			$total = sizeof($valu);
			$rem = $cont-$total;
			$_SESSION['rem']=$rem; 
			$_SESSION['total']=$total;
			$_SESSION['count']=$count;  
		}
		else
		{
			//echo "0 results";
		}
			
		
		}
		
			
	}
	
	
	
//updateresumebuy
	function updateresumebuy($id)
	{
	$sql="update hr_scshortlisted set status='1' where guest='".$_SESSION['guset']."'";
    $result = $this->executeSql($sql);
	$sqll="update hr_downloadcv set status='1' where email='".$_SESSION['email']."'";
    $res = $this->executeSql($sqll);
	}	
				
	
	//viewcandidatesPersonalDetails
	function viewBuyers()
	{
		$sql = "SELECT * FROM hr_downloadcv order by dw_id desc";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	
	//add banner
	function addBanner($postArr)
	{

	    $i1=$_FILES['A1']['name'];
	    if($i1 !="")
		{
	    $folder="banner/";
		$img1=$_FILES['A1'];
  		$file=$this->check_picture($img1,$folder);
		$file1="Admin/".$folder.$file;
		$sql="insert into hr_banner(banner,page,status)values('$file1','".$this->formatInput($postArr['pagename'])."','1')";
		$result = $this->executeSql($sql);
		$url="banner.php";
		$this->re_direct($url);
		}
		
	}

// view banner uin admin
	function viewBanners()
	{
		$sql = "SELECT * FROM hr_banner";
		$result = $this->executeSql($sql);
		return $result; 
	}
	
	
	//dispaly banner in front end
	function bgImg($pg)
	{
		$sql = "SELECT * FROM hr_banner where page='$pg'";
		$result = $this->executeSql($sql);
		return $result; 
	}	
	
	
	// Edit Banner Image
	function editBanner($postArr,$id)
	{
		$i1=$_FILES['A1']['name'];
	    if($i1 !="")
		{
		$folder1="banner/";
		$img1=$_FILES['A1'];
  		$file=$this->check_picture($img1,$folder);
		$file1="Admin/".$folder.$file;
		$file1=$this->formatInput($file1);
		$sql="update hr_banner set banner='$file1' ,page= '".$this->formatInput($postArr['pagename'])."'  where id='$id'";
        $result = $this->executeSql($sql);
		echo "<script language='javascript'>window.location='banner.php'</script>";
		}
		
		
	}
	
	
	// Delete Banner Image
	function deleteBanner($postArr,$id)
	{
	$ph=$this->formatInput($postArr['ph']);	
	if($ph!="banner/common-img.jpg")
	{
	unlink("../$ph");
	}
	 $sql="delete from hr_banner where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='banner.php'</script>";
	}
	


	function viewUserdetails($uid)
	{
		$sql= "SELECT a.id,a.email,b.name as nam,b.photo,c.coverletter,d.jid,d.name,d.status,e.jobtitle from hr_login a left join hr_personaldetails b on a.id=b.uid left join hr_resume c on c.uid=b.uid left join 
		hr_application d on d.uid=c.uid left join hr_jobpost e on e.uid=d.uid where b.uid='$uid'";
		$result = $this->executeSql($sql);
		return $result;
	}
	
	
	function viewEmployerdetails($uid)
	{
		$sql = "SELECT * from hr_employer where uid='$uid'";
		$result = $this->executeSql($sql);
		return $result;
	}
	
	
	
	

	
	// Delete Personal Details in front end
	
	function deletePersonaldetails($postArr,$uid)
	{
		$ph=$this->formatInput($postArr['ph']);
		$ph1=$this->formatInput($postArr['ph1']);
		
	if($ph!="images/no-img.jpg")
	{
	unlink("../$ph");
	}
	if($ph1!="images/no-img.jpg")
	{
	unlink("../$ph1");
	}
	$sql="delete from hr_login where id='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_personaldetails where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_resume where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_education where uid='$uid'";
	$result = $this->executeSql($sql);
	
	$sql="delete from hr_experience where uid='$uid'";
	$result = $this->executeSql($sql);
	
	
	$userResume=$this->formatInput($postArr['userresume']);
    
    if($userResume=="userresume")
			{
	 echo "<script language='javascript'>window.location='employer-home.php'</script>";
			} 
	else
			{
	 echo "<script language='javascript'>window.location='resume-list.php'</script>";
			}
	
	}
	
	
	// ADD EMPLOYEE - FRONT END
	
	function addEmployer($postArr)
	{
	   if ($_SESSION["6_letters_code"] == $_POST["6_letters_code"]) 
	   {
		$sql = "select * from hr_login where email= '".$this->formatInput($postArr['email'])."' ";
		$res = $this->executeSql($sql);
		
		//old password section
		$sqlold = "select * from engg_login_table where uname= '".$this->formatInput($postArr['email'])."' ";
		$resold = $this->executeSql($sqlold);
        if($rowold = $this->getArray($resold))
		{
			$password = $rowold['password'];		
		}
		else
		{
			$password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()<>:{}+_', ceil(8/strlen($x)) )),1,8);	
		}
		//old password section
	   
		
		if($this->getNumberRows($res)>0)
		{
		$_SESSION['confirmation'] ="Username Exist";
		$url="index.php";
		$this->re_direct($url);
		}
		else
		{
		$sql="insert into hr_login(email,password,category,approve,status)values('".$this->formatInput($postArr['email'])."', '$password', 'employer', '1', '0')";
		$res = $this->executeSql($sql);
		
		$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_login`"); 
        $row = $this->getArray($res); 
        $uid = $row['id'];
		
		$sql="insert into hr_employer(uid, organisationname, contactperson, designation, email, contactnumber, alternatenumber, companydetails, country, city, status, approve)values(
		'$uid', 
		'".$this->formatInput($postArr['organisationname'])."', 
		'".$this->formatInput($postArr['contactperson'])."', 
		'".$this->formatInput($postArr['designation'])."', 
		'".$this->formatInput($postArr['email'])."', 
		'".$this->formatInput($postArr['contactnumber'])."', 
		'".$this->formatInput($postArr['alternatenumber'])."', 
		'".$this->formatInput($postArr['companydetails'])."', 
		'".$this->formatInput($postArr['country'])."', 
		'".$this->formatInput($postArr['city'])."', 
	    '0','0')";
		$result = $this->executeSql($sql);

		$name=$this->formatInput($postArr['contactperson']);
		$email=$this->formatInput($postArr['email']);
		$password=$password;
		
		
		$subject = "Welcome to www.EngineersWanted.com";

	$message .= "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  
    <tr>
    <td colspan='2' align='center'><p>Dear $name, </p></td>
  </tr>

  
  <tr>
    <td colspan='2' align='center'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
    
	  <tr>
    <td colspan='2'>You are successfully registered and your password is attached below. After login you can change your password.</td>
  </tr>

	
  <tr>
    <td colspan='2'>Email : $email</td>
  </tr>
    
  <tr>
    <td colspan='2'>Password : $password</td>
  </tr>
    
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	";
	
$message .=$this->signature();


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: EngineersWanted <contact@engineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com" . "\r\n";
mail($email,$subject,$message,$headers);	
	
		

	}
	
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Your Request Will Be Processing... After Verification We Will Provide Password To Your Email Address...!');
          window.location.href='index.php';
          </script>");
	}
	else 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Please check captcha code...!")';
		echo '</script>';
	}
	
}
	
	
	
	// VIEW AND EDIT EMPLOYER DETAILS
	
	function viewEmployerDetailsforedit($uid)
	{
		$sql = "SELECT a.id,a.email,b.organisationname,b.contactperson,b.designation,b.email,b.contactnumber,b.alternatenumber,b.companydetails,b.country,b.city,b.status,c.jobtitle,c.jobsummary,c.jobdetails,c.keyskills,
		c.minimumexperience,c.maximumexperience,c.joblocation,c.industry,c.category,c.role,c.highestdegree,c.specialization,c.nationality,c.jobownername,c.ownermobilenumber,c.ownercontactnumber,c.owneremail,
		c.alternateemail,c.live,c.closingdate,c.jobtype,c.currency,c.minimumsalary,c.maximumsalary from hr_login a left join hr_employer b on a.id=b.uid left join hr_jobpost c on c.uid=b.uid where b.uid='$uid'";
		$result = $this->executeSql($sql);
		return $result;
	}
	
	// EDIT EMPLOYEES
	
		function editEmployer($postArr,$uid)
		{
			$sql="update hr_employer set 
			organisationname= '".$this->formatInput($postArr['organisationname'])."', 
			contactperson= '".$this->formatInput($postArr['contactperson'])."',
			email= '".$this->formatInput($postArr['email'])."',
			designation= '".$this->formatInput($postArr['designation'])."', 
			contactnumber= '".$this->formatInput($postArr['contactnumber'])."', 
			alternatenumber= '".$this->formatInput($postArr['alternatenumber'])."', 
			companydetails= '".$this->formatInput($postArr['companydetails'])."', 
			country= '".$this->formatInput($postArr['country'])."', 
			city= '".$this->formatInput($postArr['city'])."' where uid='$uid'";
			
			$result = $this->executeSql($sql);
			echo "<script language='javascript'>window.location='employer-home.php'</script>";
		
		}
	
	
	// DELETE EMPLOYEE

		function deleteEmployer($postArr,$uid)
		{
	 			 $sql="delete from  hr_login where id='$uid'";
	 			 $result = $this->executeSql($sql);
	 			 $sql="delete from  hr_employer where uid='$uid'";
	 			 $result = $this->executeSql($sql);
	 			 echo "<script language='javascript'>window.location='employer-home.php'</script>";
		}	
			
			
	  // VIEW JOB DETAILS FOR EDIT
	  
	  function viewJobdetailsforedit($uid)
	  {
	  	$sql = "SELECT * from hr_jobpost where id='$uid'";
		$result = $this->executeSql($sql);
		return $result;
	  }
	  
	  
	//viewEmployerjobs
	function viewEmployerjobs($perpage, $startpoint, $sts, $uid)
	{
	$sql_daily="SELECT * FROM hr_jobpost where uid='$uid' order by id desc";
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
	
	
	//change password	
	public function changePassword($postArr,$uid)
	{
		$sql = "select * from hr_login where id='$uid'";
		$res = $this->executeSql($sql);
		$row = $this->getArray($res);
		
		$originalpassword=$row['password'];
		$currentpassword=$this->formatInput($postArr['currentpassword']);
		$newpassword=$this->formatInput($postArr['newpassword']);
		if($originalpassword==$currentpassword)
		{
		$sql="update hr_login set password='$newpassword' where id='$uid'";
		$res = $this->executeSql($sql);
        echo "<script language='javascript'>window.location='logout.php?changepassword=Success'</script>";
		}
		else
		{
        echo "<script language='javascript'>window.location='logout.php?changepassword=Fail'</script>";
		}

	}
	
// candidate Jobs
	function candidateJobs($uid)
	{
	 $sql="select a.id,a.jobtitle, b.id as aid, b.* from hr_jobpost a left join hr_application b on a.id=b.jid where b.uid='$uid' order by b.date desc";
	 $res = $this->executeSql($sql);
	 return $res;

	}	
	
	//Delete Jobs
	
	function deletePostedJob($postArr,$uid)
	{
	 $id=$this->formatInput($postArr['id']);
	 $sql="delete from hr_application where id='$id'";
	 $result = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='my-job-home.php'</script>";
	}	
	
	// JOB APPLICATION
	function jonApplication($jid)
	{
	 $sql="select from hr_application where jid='$jid'";
	 $result = $this->executeSql($sql);
	$num= $this->getNumberRows($result);
	return $num;
	}	
	
	
	
	//JOB APPLICATION LIST

   function jobapplicationlist($perpage, $startpoint, $sts, $jid)
	{
		$sql_daily="select * from hr_application where jid='$jid' order by date desc";
			
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
	
	/*function jobapplicationlist($jid)
	{
		$sql = "select * from hr_application where jid='$jid'";
		$result = $this->executeSql($sql);
		return $result; 
	}*/
	
	//jonApplication Count
	function jonApplicationcount($jid)
	     {
		$sql = "select * from hr_application where jid='$jid'";
		$result = $this->executeSql($sql);
		$num = $this->getNumberRows($result);
		return $num;
		}
	
	
	//Recover Password	
	function recoverPassword($arr)
	{
	$email=$this->formatInput($arr['email']);
	$sql = "select a.email, a.password, b.name  from hr_login a left join hr_personaldetails b on a.id=b.uid where a.email= '".$arr['email']."' ";
	$result = $this->executeSql($sql);
if($this->getNumberRows($result)>0)
		{
	$row = $this->getArray($result);
	$password=$row['password'];
	$name=$row['name'];
	
	
	$subject = "Password From www.EngineersWanted.com";

	$message .= "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
  
    <tr>
    <td colspan='2' align='center'><p>Dear $name, </p></td>
  </tr>

  
  <tr>
    <td colspan='2' align='center'><h3>Greetings from EngineersWanted.com !</h3></td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
    
  <tr>
    <td colspan='2'>Email : $email</td>
  </tr>
    
  <tr>
    <td colspan='2'>Password : $password</td>
  </tr>
    
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	";

$message .=$this->signature();

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: EngineersWanted <info@engineerswanted.com>" . "\r\n";
$headers .= "Bcc: hr@engineerswanted.com, dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com, abhilashdevop@gmail.com" . "\r\n";
mail($email,$subject,$message,$headers);

        echo "<script language='javascript'>window.location='recover-password.php?changepassword=Success'</script>";
		
		}
		else
		{
        echo "<script language='javascript'>window.location='recover-password.php?changepassword=Fail'</script>";
		}
	}

	
	//contact
	function Contact($row)
	{
		
	
	if ($_SESSION["6_letters_code"] == $_POST["6_letters_code"]) 
	{
	 $name=$this->formatInput($row['name']);
	 $email=$this->formatInput($row['email']);
	 $contactnumber=$this->formatInput($row['contactnumber']);
	 $subjects=$this->formatInput($row['subject']);
	 $msg=$this->formatInput($row['message']);

	$subject = "Contact Message from www.EngineersWanted.com";
	
	 $message .= "
	<table width='100%' border='0'>
  <tr>
    <td colspan='2' align='center'><img src='http://www.engineerswanted.com/assets/img/logo.png' width='200' border='0'  /></td>
  </tr>
  <tr>
    <td width='15%'>&nbsp;</td>
    <td width='85%'>&nbsp;</td>
  </tr>
    <tr>
    <td colspan='2'>Dear $name,</td>
  </tr>
    <tr>
    <td colspan='2'>Thank you for contacting us.</td>
  </tr>
  
    <tr>
    <td colspan='2'>We got your details and we will reply for your comment.</td>
  </tr>
  

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
   <tr>
    <td>Name</td>
    <td>$name</td>
  </tr>

  <tr>
    <td>Email</td>
    <td>$email</td>
  </tr>

  <tr>
    <td>Contactnumber</td>
    <td>$contactnumber</td>
  </tr>

  <tr>
    <td>Subject</td>
    <td>$subjects</td>
  </tr>

  <tr>
    <td>Message</td>
    <td>$msg</td>
  </tr>

</table>
	";

/*$sign=$this->signature();*/
$message .=$this->signature();
$to = "hr@engineerswanted.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: EngineersWanted <info@engineerswanted.com>" . "\r\n";
$headers .= "Bcc:  dubai@engineerswanted.com, admin@netbusinesshub.com, info@engineerswanted.com, $email" . "\r\n";
mail($to,$subject,$message,$headers);

echo "<script language='javascript'>window.location='index.php'</script>";
}

	else 
	{
		echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
		echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
		echo "<script language='javascript'>swal({title:'Error',text:'Please check captcha code...!',type:'error'});</script>";
	}
	
		
}	
	
	


 // VIEW SUBSCRIPTION DETAILS
	  
	  function viewSubscriptiondetails($uid)
	  {
	  	$sql = "SELECT * from hr_subscription where id='$uid'";
		$result = $this->executeSql($sql);
		return $result;
	  }
	  
// VIEW SUBSCRIPTION LISTS
	function viewSubscriptionlist($perpage, $startpoint, $sts, $uid)
	{
	$sql_daily="SELECT * FROM hr_subscription where uid='$uid'  order by id desc";
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
	  


// ADD  & UPDATE SUBSCRIPTION DETAILS
	function addSubscriptiondetails($postArr,$uid)
	{
	  	$sql = "SELECT * from hr_employer where uid='$uid'";
		$result = $this->executeSql($sql);
		$row = $this->getArray($result);
		$contactperson=$this->formatInput($row['contactperson']);
		$email=$this->formatInput($row['email']);
		//$email=$_SESSION['email'];
		$contactnumber=$this->formatInput($row['contactnumber']);
		$subdet = explode ("-", $this->formatInput($postArr['itemdescription']));
		
		$sdate = date("Y-m-d");
		$startdate=strtotime($sdate);
		$sql="select * from hr_subscription where uid='$uid' and status='Active' and approve='1'";
		$res = $this->executeSql($sql);
		$row = $this->getArray($res); 
		//$edate=$row['expirydate'];
		$currentdate=$row['currentdate'];
		
		
		if($this->getNumberRows($res)>0)
		{
			//if(DATE(currentdate)>$edate)
		$startdate = date("Y-m-d");
		$enddate=$row['expirydate'];
		$ed=explode("/",$enddate);
		$enddate="$ed[2]-$ed[1]-$ed[0]";
		
		$date1=date_create("$enddate");
		
		$date2=date_create("$startdate");
		$diff=date_diff($date1,$date2);
		if($diff->format("%R%a")>0)
			
			
			{
				$sql="update hr_subscription set status='Expired',approve='0' where uid='$uid' and currentdate>'$enddate'";    // and  DATE(expirydate)<CURDATE()    and currentdate>'$expirydate'
	 			$response = $this->executeSql($sql);
				// 1st subscription else case without date condition , and after subscription if with date condition
			}
			else
			{
				echo '<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css" />';
				echo '<script type="text/javascript" src="assets/js/sweetalert2.all.js"></script>'; 
				echo "<script language='javascript'>swal({title:'Warning',text:'You need not subscribe any more. Because you can subscribe CV only after your current subscription date will be expired. Now, You have the permission to download CVs till $enddate...!',type:'warning'});</script>";
				// 1st subscription if, after subscription else case
			}
		}
		else
		{
				$sql="insert into hr_subscription (uid,contactperson,email,contactnumber,currentdate,expirydate,itemdescription,amount,status) values 
	 			('$uid',
	 			'$contactperson',
	 			'$email',
	 			'$contactnumber',
	 			'".$this->formatInput($postArr['currentdate'])."',
	 			'".$this->formatInput($postArr['expirydate'])."',
	 			'".$subdet[0]."',
	 			'".$subdet[1]."',
	 			'Payment Pending'
	 			)";
				$result = $this->executeSql($sql);
				$val=$this->getArray($result);
				$res = $this->executeSql("SELECT MAX(id) as id FROM `hr_subscription`"); 
     			$row = $this->getArray($res); 
     			$sid = $row['id'];
				echo "<script language='javascript'>window.location='subscription.php?id=$sid'</script>";
		}
	}
	 
	 
	 // Subscription Details
	function Subscriptiondetails($uid)
	{
	 $sql="SELECT * from hr_subscription where id='$uid'";
	 $res = $this->executeSql($sql);
	 return $res;

	}	
	
	
	 // Approve Subscription DEtails
	function approveSubcriptiondetails($postArr,$id,$uid)
	{
		$email=$_SESSION['email'];
		$sql="select *,MAX(id) as sid from hr_subscription where email='".$_SESSION['email']."' and uid='$uid' and status='Payment Pending' and approve='0'";
		
		$res = $this->executeSql($sql);
		$row = $this->getArray($res); 
		$id=$row['sid'];
		$_SESSION['sid']=$id;
	 
	 $sql="update hr_subscription set status='Active' , approve='1' where id='".$_SESSION['sid']."'";
	 $res = $this->executeSql($sql);
	 echo "<script language='javascript'>window.location='employer-home.php'</script>";
	}	
	
	
	// viewSubscribeddetails
	function viewSubscribeddetails($perpage, $startpoint, $sts, $uid)
	{
	$sql_daily="SELECT * FROM hr_subscription where uid='$uid' and status='Active' and approve='1' order by id desc";
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
	
	
	// Admin Approval
	function Block($row)
	{
	 $uid=$this->formatInput($row['uid']);
	 $sql="update hr_login set approve='0' where id='$uid'";
	 $result= $this->executeSql($sql);


	 $sql="update hr_personaldetails set approve='0' where uid='$uid'";
	 $result= $this->executeSql($sql);
	 
	 echo "<script language='javascript'>window.location='resume-list.php'</script>";	

	}
	
	
	 function Approve($uid)
	{
		 //$uid=$this->formatInput($row['uid']);
	 $sql="update hr_login set approve='1' where id='$uid'";
	 $result= $this->executeSql($sql);


	 $sql="update hr_personaldetails set approve='1' where uid='$uid'";
	 $result= $this->executeSql($sql);

	}
	
	
//downloadCVCount
	function downloadCVCount($em,$sid)
	{
		$sql="select * from hr_downloadcv where email='$em' and subid='$sid' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid=$rowss["u_id"];
				$val=explode("," ,$uid);
				$valu = array_merge($val,$valu);
			}
			 $total = sizeof($valu); 
			 return $total;
			
		}
		else
		{
			//echo "0 results";
		}
			
	}	
	
//alreadydownladedcvs
	function alreadySelectedCvs($em,$sid)
	{
		$sql="select * from hr_downloadcv where email='$em' and subid='$sid' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			$val=array();
			$valu=array();
			while($rowss = $this->getArray($ress))
			{
				$uid.=''.$rowss['u_id'].',';
			}
			$selcv=rtrim($uid,',');
			//echo $selcv;
			return $selcv;
		}
	}	
	
	
// Download CV
	function cvDownload($postArr)
	{
	 $uidd=$_SESSION['id'];
	 $email=$_SESSION['email'];
	 $sub=$_SESSION['subscriptionid'];
	 
	 $cvid=$this->formatInput($postArr['cvid']);
	 $file=$this->formatInput($postArr['cvname']);
	  
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);	
		
		$sql = "select countvalue from hr_count";
		$res = $this->executeSql($sql);
		$val=$this->getArray($res);
		$count=$val['countvalue'];	
		$_SESSION['count']=$count; 
			
		$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$sub' and status='1' and DATE(date)=CURDATE()";
		$ress = $this->executeSql($sql);
		if($this->getNumberRows($ress) > 0)
		{
			while($rowss = $this->getArray($ress))
			{
				$uid=$rowss["u_id"];
			}
			$total = sizeof($uid);
			$rem = $total-$count;
			$_SESSION['rem']=$rem; 
			$_SESSION['total']=$total;
		}
		else
		{
			//echo "0 results";
		}
			
		$sql="insert into hr_downloadcv (email,u_id,subid,status) values ('$email','$cvid','$sub','1')";
		$resul = $this->executeSql($sql);
			if($this->getNumberRows($total) < $count)
			{
				if($resul)
				{
					$sql="select * from hr_downloadcv where email='".$_SESSION['email']."' and subid='$sub' and status='1' and DATE(date)=CURDATE()";
					$result = $this->executeSql($sql);
			
					while($rowss = $this->getArray($result))
					{
						$uid=$rowss["u_id"];
					}
					$total = sizeof($uid);
					$rem = $count-$total;
					$_SESSION['rem']=$rem; 
					$_SESSION['total']=$total;
				}
			}
			else
			{
				$p="insert into hr_downloadcv (email,u_id,subid,status) values ('$email','$cvid','$sub','1')";
        		$ret = $this->executeSql($p);
				if($this->getNumberRows($ret) > 0)
				{
					while($rowss = $this->getArray($ret))
					{
						$uid=$rowss["u_id"];
					}
					$total = sizeof($uid);
					$rem = $count-$total;
					$_SESSION['rem']=$rem; 
					$_SESSION['total']=$total;
				}
				else
				{
					//echo "0 results";
				}
			}
			$res = $this->executeSql("SELECT MAX(dw_id) as id FROM `hr_downloadcv`"); 
        	$row = $this->getArray($res); 
        	$inid = $row['id'];
			$_SESSION['zid']=$inid;  
	}
		
		// jobcheckexistence
		function jobcheckexistence($jid)
		{
			$sql = "select * from hr_jobpost where id='$jid' and status='1'";
			$result = $this->executeSql($sql);
			return $this->getNumberRows($result);
		}
		
		//subscri active check
		function activeCheck()
		{
		$sql="select * from hr_subscription where email='".$_SESSION['email']."' and status='Active' and approve='1'";
	 	$resul = $this->executeSql($sql);
		$roow = $this->getArray($resul); 
		$_SESSION['subid']=$roow['id'];
		return $_SESSION['subid'];

		}
		
		
		// Blocked Jobs
		function Blocked($postArr)
		{
			$id=$this->formatInput($postArr['idactive']);
			
			/*$sql="select * from hr_jobpost";
	 		$res = $this->executeSql($sql);
			$row = $this->getArray($res); 
			$id=$row['id'];*/
		$sql="update hr_jobpost set status='0' where id='$id'";
			$result= $this->executeSql($sql);
			//return $result; 
			echo "<script language='javascript'>window.location='jobs.php'</script>";
		}
		
		
		// Active Jobs
		function Active($postArr)
		{
			$id=$this->formatInput($postArr['idactive']);
			
			
			$sql="update hr_jobpost set status='1' where id='$id'";
			$result= $this->executeSql($sql);
			//return $result; 
			echo "<script language='javascript'>window.location='jobs.php'</script>";	
		}
		
		
		
		
		
		
}
?>
