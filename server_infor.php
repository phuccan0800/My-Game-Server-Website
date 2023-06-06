<?php
define('CHECK', true);
require 'connect.php';

$sql = "SELECT * FROM serverlist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ip = gethostbyname($row['ip']);
        $port = $row['port'];
        $apiKey = 'CC49FA1EE2785AD6EC89A3CA9D54DA4F';
        $url = "https://api.steampowered.com/IGameServersService/GetServerList/v1/?key=$apiKey&filter=addr%5C$ip:$port";
        $response = file_get_contents($url);

        if ($response !== false) {
            $data = json_decode($response, true);

            if (isset($data['response']) && isset($data['response']['servers'])) {
                $servers = $data['response']['servers'];

                // Hiển thị thông tin máy chủ
                foreach ($servers as $server) { ?>
                <a><?echo $server['name']?> - <?echo $server['players']?>/<?echo $server['max_players']?> -> <a href="steam://connect/<?echo $row['ip'].':'.$port?>">->Connect<-</a> <br></a>
                <?}
            } else {
                echo 'Không tìm thấy thông tin máy chủ CS:GO. <br>';
            }
        } else {
            echo 'Lỗi khi gửi yêu cầu API.';
        }
    }
} else {
    echo 'Không có máy chủ CS:GO trong cơ sở dữ liệu.';
}

// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>