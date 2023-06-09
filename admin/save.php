<?php
// Kiểm tra xem yêu cầu gửi lên có phải là phương thức POST hay không
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem có dữ liệu được gửi hay không
    if (!empty($_POST)) {
        $databaseName = $_POST['name'];
        $id = $_POST['id'];
        foreach ($_POST as $columnName => $columnValue) {
            $ArrValue[$columnName] = $columnValue;
        }
        $id2=0;
        echo $databaseName;
        echo $ArrValue[0];
        $sql = "SELECT * FROM $databaseName"; 
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            foreach ($row as $key => $value) {
                echo $key.' '.$ArrValue[$id2].' '.$id;
                $sql = "UPDATE $databaseName SET $key='$ArrValue[$id2]' WHERE id='$id'";
                $result = $conn->query($sql);
                $id2++;
            }
        }
        echo $result;   
        echo 'DONE';
    } else {
        echo "Không có dữ liệu được gửi.";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
