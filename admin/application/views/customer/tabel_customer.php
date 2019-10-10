<?php
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>nama</th>";
	echo "<th>alamat</th>";
	echo "<th>no_telp</th>";
	echo "<th>email</th>";
	echo "</tr>";
	
	foreach ($c as $row){
		echo "<tr>";
		echo "<td>".$row->id_customer."</td>";
		echo "<td>".$row->nama_customer."</td>";
		echo "<td>".$row->alamat."</td>";
		echo "<td>".$row->telp_customer."</td>";
		echo "<td>".$row->email."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
?>