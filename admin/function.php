<?php
	function getTable(){
		require('connect.php');
		$sql = "SHOW TABLES";
		$result = $conn->query($sql);
		return $result;
	}
	function getData($sql){
		require('connect.php');

		$result = mysqli_query($mydb, $sql);
		$i = 0;
		while($row = mysqli_fetch_array($result)){
			$data[$i++] = $row;
		}	
		mysqli_close($mydb);
			
		return $data;
	}


	function getRowCount($sql){

		require('connect.php');
	
		$result = mysqli_query($mydb, $sql);

		$num = mysqli_num_rows($result);

		mysqli_close($mydb);

		return $num;
	}

	function execData($sql){
		require('connect.php');

		if (!mysqli_query($mydb, $sql))
		{
			echo "Can not querry";
			die;
		}		

		mysqli_close($mydb);
	}

?>

