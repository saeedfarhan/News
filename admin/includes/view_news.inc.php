<?php
 include 'dbh.inc.php';
 $newsNewCount = $_POST['newsNewCount'];


                  
     $sql = "SELECT * FROM news LIMIT $newsNewCount";
    $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)){
       echo "<tr>";
        echo "<td>"; echo $row['id']; echo "</td>";
       	echo "<td>"; echo $row['title']; echo "</td>";
       	echo "<td>"; echo $row['catagory']; echo "</td>";
       	echo "<td>"; echo $row['photo_id']; echo "</td>";
       	echo "<td>"; echo $row['publishing_date']; echo "</td>";
       	echo "<td>"; echo $row['body']; echo "</td>";
       	echo "<td>"; echo $row['comment_id']; echo "</td>";

       	if($row['Status'] == 1){
       			echo "
       			<td>
       			 <form action='includes/manage_news.inc.php' method='POST'>
       			    <input type='hidden' name='id' value='"; echo $row['id']; echo"'>
       				<button type='submit' class='btn btn-warning' name='submit_status' value='0'>Disable</button>
       			 </form>
       			</td>";
       			echo "</tr>";
       	}else{
       			echo "
       			<td>
       			 <form action='includes/manage_news.inc.php' method='POST'>
       			    <input type='hidden' name='id' value='"; echo $row['id']; echo"'>
       				<button type='submit' class='btn btn-warning' name='submit_status' value='1'>Enable</button>
       			 </form>
       			</td>";
      		    echo "</tr>";
       	}
       	
       }
    }

   ?>
