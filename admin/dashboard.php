<?php 	
	require ('connect.php');
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ADMIN PAGE</title>
    <link href="css/dashboard.css" rel="stylesheet" type="text/css" />
    <script src="js/myjs.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
	$page = $_GET['page'];
	$edit = $_GET['edit'];
	$delete = $_GET['delete'];
	if($page == ''){
		$page = 'dashboard';
	}
?>
<body>
<div class="container">
	<nav>
		<ul class="mcd-menu">
			<li>
				<a href="?page=dashboard" 
				<?php 
					if ($page == "dashboard") 
					echo'class="active"';  
				?> >
					<strong>Dashboard</strong>
				</a>
			</li>
			<?php
				$sql = "SHOW TABLES";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_array()) {
						echo '	<li> <a href="?page='.$row[0].'"'; 
						if ($page == $row[0]) {echo'class="active"'; }
									echo '><strong>'. $row[0]  .'</strong></a>
								</li>';
					}
				} else {
					echo "NO INFORMATION ON THIS DATABASE !!!";
				}
			 ?>
		</ul>
	</nav>
</div>
	<?php if($page <> "dashboard" && $edit=="" && $delete=="") { ?>
		<div class="tbl-header" >
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<?php 
						$sql = "SELECT * FROM $page"; 
						$result = $conn->query($sql); 
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							foreach ($row as $key => $value) {
							echo '<th>'.$key .'</th>';
							}
						} ?>
						<th> action </th>
					</tr>
				</thead>
			</table>
	</div>
	<div class="tbl-content">
			<table cellpadding="0" cellspacing="0" border="0">
			<tbody align="center">
				<?php
				$sql = "SELECT * FROM $page"; 
				$result = $conn->query($sql); 
				$id=0;
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo '<tr>';
						foreach ($row as $key => $value) {
							if ($value <>'') {
								echo '<td >' . $value . '</td>';
							} else echo '<td > NULL </td>';
						}
						$id=$id+1;
						echo '<td > 
						<a href="?page='.$page.'&edit='.$id.'"><deletebutton class="tooltip">
					  <svg style="color: blue" width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
					  <path d="M19 19H5V17H19V19ZM10 14.42L6 10.42L7.41 9.01L10 11.59L16.59 5L18 6.42L10 14.42Z" fill="#6361D9"></path> </svg>
						<span class="tooltiptext">Edit</span>
					  </deletebutton> </a>
					  <a href="?page='.$page.'&delete='.$id.'"><deletebutton class="tooltip">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
						  <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892
						   5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 
						   7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 
						   13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 
						   14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109
						    16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 
							5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 
							12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 
							7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
						</svg>
						<span class="tooltiptext">delete</span>
					  </deletebutton></a>
					  
					  </td>';
						echo '</tr>';
					}
				} else {
					echo 'NO INFORMATION';
				}
				?>
			</tbody>
			</table>
			<addbutton class="add-more">
			<span class="circle" aria-hidden="true">
			<span class="icon arrow"></span>
			</span>
			<span class="button-text">Add More</span>
			</addbutton>
	</div>
	<?php } 
	else if ( $edit <> "") {
		?>
		<div class="tbl-header" >
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<?php 
						$sql = "SELECT * FROM $page"; 
						$result = $conn->query($sql); 
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							foreach ($row as $key => $value) {
							echo '<th>'.$key .'</th>';
							}
						}?>
						<th> action </th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="tbl-content">
			<table cellpadding="0" cellspacing="0" border="0" id="dataTable" method="POST">
			<tbody align="center">
				<?php
				$edit--;
				$sql = "SELECT * FROM $page LIMIT $edit, 1;"; 
				$result = $conn->query($sql); 
				if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						foreach ($row as $key => $value) {
							if ($value <>'') {
								echo '<td contenteditable="true">' . $value . '</td>';
							} else echo '<td contenteditable="true"> NULL </td>';
							$editvalue++;
						}
						echo '<td > 
						<input type="hidden" contenteditable="true" name="name" value= "'.$page.'" >
						<input type="hidden"contenteditable="true" name="id" value= "'.$edit.'" >
						<a class="save-btn"><deletebutton class="tooltip" type="submit">
					  <svg style="color: blue" width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
					  <path d="M19 19H5V17H19V19ZM10 14.42L6 10.42L7.41 9.01L10 11.59L16.59 5L18 6.42L10 14.42Z" fill="#6361D9"></path> </svg>
						<span class="tooltiptext" >DONE</span>
					  </deletebutton> </a></td></tr>';
					} else { echo 'NO INFORMATION';
				}
				?>
			</tbody>
			</table>
	</div>
<?php }
	else if ( $delete <> "") {
		echo 'DELETE';
	}
	else {
		echo '<h>WELLCOME TO ADMIN PAGE </h>';
	}?>
<script>
    var table = document.getElementById('editableTable');
    
    table.addEventListener('input', function(e) {
        if (e.target.tagName === 'TD') {
            console.log('Cell value changed:', e.target.textContent);
            // Perform any desired actions with the updated value
        }
    });
</script>
<script>
        $(document).ready(function() {
            // Khi nhấn nút Lưu
            $(".save-btn").click(function() {
                var $row = $(this).closest("tr"); // Dòng chứa nút Lưu
                var data = {}; // Đối tượng chứa dữ liệu
                
                // Lặp qua từng ô dữ liệu trong dòng
                $row.find("td[contenteditable='true']").each(function() {
                    var columnName = $(this).index(); // Lấy chỉ số cột
                    var columnValue = $(this).text().trim(); // Lấy giá trị

                    data[columnName] = columnValue;
                });
                
                // Gửi yêu cầu AJAX để lưu dữ liệu
                $.ajax({
                    type: "POST",
                    url: "save.php", // Đường dẫn tới tệp xử lý
                    data: data,
                    success: function(response) {
                        // Xử lý kết quả trả về
                        alert(response);
                    }
                });
            });
        });
    </script>
</body>
</html>