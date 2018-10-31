
<?php
require('Database.php');
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction{
	
	function login($loginid,$password){
	
      if(!ctype_alpha($loginid) || !ctype_alpha($password)){
      	
        echo "<script>alert('Either LoginId or Password is Missing')</script>";
      
      }		
   else{		
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT type FROM user where iduser=? and password=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
		
		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}
	
	else{
		
		$stmt->bind_param( 'ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($type);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{
			
			header('location:add-course.php');
		}
	}
	
	}
	
	}
	
	function create_student($class,$schoolid,$idparent	,$first_name ,$last_name ,$contact,	$address ,$dob,$nationality,$religion,$cdate){
		
		if($idparent==""){
			 
			echo "<script>alert('Enter parent Details')</script>";
		
		}

		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into student(idstudent,class_idclass,class_school_idschool,parent_idparent,first_name,last_name,contact,address,dob,nationality,religion)values(?,?,?)";
            $query2 = "insert into parent()values(?,?,?)";
			$stmt= $mysqli->prepare($query);
            $stmt2= $mysqli->prepare($query2);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sss',$cshort,$cfull,$cdate);
				$stmt->execute();
                $stmt2->bind_param('sss',$cshort,$cfull,$cdate);
                $stmt2->execute();
				echo "<script>alert('Student Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}

function showCourse(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_course ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showCourse1($cid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_course  where cid='".$cid."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function showSession(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM session  ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject1($sid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject where subid='$sid' ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function create_teacher($fname,$lname,$contact,$address,$email){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Course Short Name')</script>";
		
		}
		
		
		else if($cfull==""){
			 
			echo "<script>alert('Select  Course Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into subject(cshort,cfull,sub1,sub2,sub3)values(?,?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sssss',$cshort,$cfull,$sub1,$sub2,$sub3);
				$stmt->execute();
				echo "<script>alert('Course Added Successfully')</script>";
					
				
			}
		}				
	}

    function create_student($cshort,$cfull,$sub1,$sub2,$sub3){

        if($cshort==""){

            echo "<script>alert('Select  Course Short Name')</script>";

        }


        else if($cfull==""){

            echo "<script>alert('Select  Course Full Name')</script>";

        }

        else{


            $db = Database::getInstance();
            $mysqli = $db->getConnection();
            $query = "insert into subject(cshort,cfull,sub1,sub2,sub3)values(?,?,?,?,?)";
            $stmt= $mysqli->prepare($query);
            if(false===$stmt){

                trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
            }

            else{

                $stmt->bind_param('sssss',$cshort,$cfull,$sub1,$sub2,$sub3);
                $stmt->execute();
                echo "<script>alert('Course Added Successfully')</script>";


            }
        }
    }

function showTeacher(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM teacher ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	
function showStudents(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM student ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	

function showStudents1($id){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM student  where id='".$id."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	



function edit_student($cshort,$cfull,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	//echo $cshort.$cfull.$udate.$id;exit;
	$query = "update tbl_course set cshort=?,cfull=? ,update_date=? where cid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('sssi',$cshort,$cfull,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Course Updated Successfully")'; 
    echo '</script>';

}


function edit_teacher($sub1,$sub2,$sub3,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update subject set sub1=?,sub2=? ,sub3=?,update_date=? where subid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('ssssi',$sub1,$sub2,$sub3,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Subject Updated Successfully")'; 
    echo '</script>';

}

function edit_std($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id){
  // echo $id;exit;
    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update registration set course=?,subject=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?
              , income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
         	 ,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
              ,marks1=?,fmarks1=? where id=?" ;
    //echo $query;
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }

	$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssi',$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id);
				   
    //echo $rc;
 if ( false===$rc ) {
 
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
  }		   
	$rc=$stmt->execute();
	
	if ( false==$rc ) {
          die('execute() failed: ' . htmlspecialchars($stmt->error));
    }
	else{
         echo '<script>'; 
         echo 'alert(" Successfully Updated")'; 
          echo '</script>';
		}  
  
}


function del_teacher($id){

   //  echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from tbl_course where cid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	$stmt->execute();
    echo "<script>alert('Course has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";
}

function del_student($id){

   $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from registration where id=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('One record has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";

}

 function del_subject($id){

     //echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from subject where subid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('Subject has been deleted')</script>";
   // echo "<script>window.location.href='view-course.php'</script>";
}

}

?>



