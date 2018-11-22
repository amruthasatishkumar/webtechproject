<?php
	session_start();
	$place="";
	$days="";
	$time="";
	$dbase = mysqli_connect('localhost','root','','places');
	if(isset($_REQUEST['submission']) || isset($_REQUEST['savesubmission'])) {
		$place=$_REQUEST['whichplace'];
		$days=$_REQUEST['howmanydays'];
		$names=$_SESSION['username'];
    if(isset($_REQUEST['savesubmission'])){
		if($days==3)
  		{
    		for($i=1;$i<=3;$i++)
  			{
    			$days=$i;
    			$selection="SELECT * FROM alldata WHERE AllPlaces='$place' AND AllDays='$days' ";
    			$result=$dbase->query($selection);
    			while($row=mysqli_fetch_assoc($result)){
      				$places=$row["Place1"];
      				$sql = "INSERT INTO iterdata (Place,Days,Username,Place1) VALUES ('$place','$days','$names','$places')";
					mysqli_query($dbase,$sql);
    	   		}
  			}
		} else {
  			$selection="SELECT * FROM alldata WHERE AllPlaces='$place' AND AllDays='$days' ";
  			$result=$dbase->query($selection);
  			while($row=mysqli_fetch_assoc($result)){
    			$places=$row["Place1"];
    			$sql = "INSERT INTO iterdata (Place,Days,Username,Place1) VALUES ('$place','$days','$names','$places')";
				mysqli_query($dbase,$sql);
  			}
		}
}
	}
?>
