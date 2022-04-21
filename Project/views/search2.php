<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "miniproject");
$sql = "SELECT * FROM event WHERE event_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['event_name']."</td>
		          <td>".$row['event_date']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>