<?PHP
class dbClass{

	function connect()
	{
			
				 
				$host="localhost";
                 $user="root";
                 $pass="";
                 $db="medlife"; 
				 
	$con = mysqli_connect($host,$user,$pass,$db);
	  	mysqli_select_db($con,$db) or die ('Cannot select the database.');
	 	return $con;
	}
	
	function executeSql($sql)
	{
		$con = $this->connect();
		$res = mysqli_query($con,$sql) or die(mysqli_error());
		$this->disconnect($con);
		return $res;
	}
	
	
	function getObject($result)
	{
	  return mysqli_fetch_object($result);
	}
	
	function store($result)
	{
	  return mysqli_store_result($result);
	}	
	function multy($result)
	{
	  return mysqli_multi_query($result);
	}
	
	function getArray($result)
	{
	  return mysqli_fetch_array($result);
	}
	
	function getNumberRows($result)
	{
	  return mysqli_num_rows($result);
	  
	}

	function getLastid()
	{
	 	  return mysqli_insert_id();
	}
	
	function disconnect($con)
	{
		mysqli_close($con);
	}
	
	function cleanString($value)
	{
		$value = stripslashes( $value );
		return $value; 
	}
	
	function formatInput($value)
	{
		$value = addslashes( $value );
		return $value; 
	}
	 function re_direct($url)
   {
          echo "<script language='javascript'>window.location='$url';</script>";
   }
//Image upload
	function check_picture($img,$folder)
    {
    if(($img['type']=='image/jpeg')||($img['type']=='image/jpg')||($img['type']=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')||($img['type']=='application/msword')||($img['type']=='application/pdf')||($img['type']=='image/pjpg')||($img['type']=='text/plain')||($img['type']=='image/png')||($img['type']=='image/gif')&&($img['size']<1000000))
            {
                //Check file error
                if ($_FILES["file"]["error"] > 0)
                  {
                    unlink($img['tmp_name']);
                    echo('Image upload is error.');
                      return false;
                  }
            if(file_exists($folder.$img['name']))
            {
            //rename file
                $rand_num=rand(00000,99999);
                $file_name=$rand_num.$img['name'];
               
            }
            else
            {
                $file_name=$img['name'];
               
            }
                if(move_uploaded_file($img['tmp_name'],$folder.$file_name))
                {
                    return $file_name;
                }
    }   
    }
	
	
	//pagnation
function Pages($query,$limit,$path)
{
   // $query;
	$q=$this->executeSql($query);
	$count=$this->getNumberRows($q);
	
	$total_pages = $count;
	
	$adjacents = "2";
	if(!isset($_GET['Page']))
	$page=0;
	else
	$page = $_GET['Page'];
	if($page)
	$start = ($page - 1) * $limit;
	else
	$start = 0;



	if ($page == 0) $page = 1;
	$prev = $page - 1;
	$next = $page + 1;
	$lastpage = ceil($total_pages/$limit);
	$lpm1 = $lastpage - 1;

	$pagination = "";
if($lastpage > 1)
{
//echo "<nav class='text-center'>";   
	$pagination .= "<ul class='pagination'>";
if ($page > 1)
	$pagination.= "<li><a   href='".$path."Page=$prev'><i class='fa fa-arrow-left' aria-hidden='true'></i></a></li>";
else
	$pagination.= "<li><a href='#' ><i class='fa fa-arrow-left' aria-hidden='true'></i></a></li>";   

if ($lastpage < 7 + ($adjacents * 2))
{   
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
	$pagination.= "<li class='active'><a   href='".$path."Page=$counter'>$counter</a></li>";
else
	$pagination.= "<li><a href='".$path."Page=$counter'>$counter</a></li>";                   
}
}
elseif($lastpage > 5 + ($adjacents * 2))
{
if($page < 1 + ($adjacents * 2))       
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
	$pagination.= "<li class='active'><a   href='".$path."Page=$counter'>$counter</a></li>";
else
	$pagination.= "<li><a   href='".$path."Page=$counter'>$counter</a></li>";                   
}
	$pagination.= "<li><a>...</a></li>";
	$pagination.= "<li><a   href='".$path."Page=$lpm1'>$lpm1</a></li>";
	$pagination.= "<li><a  href='".$path."Page=$lastpage'>$lastpage</a></li>";       
}
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
	$pagination.= "<li><a   href='".$path."Page=1'>1</a></li>";
	$pagination.= "<li><a   href='".$path."Page=2'>2</a></li>";
	$pagination.= "<li><a>...</a></li>";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
	$pagination.= "<li  class='active'><a   href='".$path."Page=$counter'>$counter</a></li>";
else
	$pagination.= "<li><a   href='".$path."Page=$counter'>$counter</a></li>";                   
}
	$pagination.= "<li><a>...</a></li>";
	$pagination.= "<li><a  href='".$path."Page=$lpm1'>$lpm1</a></li>";
	$pagination.= "<li><a   href='".$path."Page=$lastpage'>$lastpage</a></li>";       
}
else
{
	$pagination.= "<li><a   href='".$path."Page=1'>1</a></li>";
	$pagination.= "<li><a   href='".$path."Page=2'>2</a></li>";
	$pagination.= "<li><a>...</a></li>";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page)
	$pagination.= "<li  class='active'><a   href='".$path."Page=$counter'>$counter</a></li>";
else
	$pagination.= "<li><a   href='".$path."Page=$counter'>$counter</a></li>";                   
}
}
}

if ($page < $counter - 1)
	$pagination.= "<li><a   href='".$path."Page=$next'><i class='fa fa-arrow-right' aria-hidden='true'></i></a></li>";
else
	$pagination.= "<li><a href='#'><i class='fa fa-arrow-right' aria-hidden='true'></i></a></li>";
	$pagination.= "</ul>\n"; 
	//echo "</nav>";      
}
return $pagination;
}



}
?>