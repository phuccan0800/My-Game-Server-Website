<?php
define('CHECK', true);
require 'connect.php';
$sql = "SELECT * FROM serverlist";
$result = $conn->query($sql);
// Đóng kết nối tới cơ sở dữ liệu
?>
<link href="css/listserver.css" rel="stylesheet">
<section id="listserver">

	<div class="text-center">
		<h2 class="title-one">List Server</h2>
		<div class="tbl-header" align="center">
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
					<th style="width: 100px;">Game</th>
					<th style="width: 400px;">Name</th>
					<th style="width: 100px;">Players</th>
					<th style="width: 100px;">Map</th>
					<th style="width: 200px;">IP Adress </th>
					<th style="width: 200px;">Connect</th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="tbl-content" align="center">
			<table cellpadding="0" cellspacing="0" border="0">
			<tbody align="center">
				<?
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
								foreach ($servers as $server) {
									echo '<span><tr><td style="width: 100px;">' . $server['product'] . '</td>
									<td style="width: 400px;">  ' . $server['name'] . '</td>
									<td style="width: 100px;">' . $server['players'] . '/' . $server['max_players'] . '</td>
									<td style="width: 100px;">' . $server['map'] . '</td>
									<td style="width: 200px;"> CONNECT ' . $row['ip'] .':' . $row['port'] . '</td>
									<td style="width: 200px;"><a href="steam://connect/'. $row['ip'].':'.$row['port'].'"> <button >
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
									<span align="center">Connect Server</span></button></a></td>';
								}
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
				?>
			</tbody>
			</table>
		</div>
	</div>
</section>
</section><!--/#listserver-->
<script type="text/javascript" src="js/listserver.js"></script> 
<?
$conn->close();
?>