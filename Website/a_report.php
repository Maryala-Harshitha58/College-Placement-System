
<html>
    <head>
        <title>Admin</title>
        <style>
            body{
                background: url('202631-plain-light-color-background-graphic.jpg') no-repeat;
            }
            .update{
                background-color: green;
                color: white;
               border:0;
               outline:none;
               border-radius:5px;
               height: 22px;
               widtht:80px;
               font-weight: bold;
            }
            .delete{
                background-color: red;
                color: white;
               border:0;
               outline:none;
               border-radius:5px;
               height: 22px;
               width:80px;
               font-weight: bold;
            }
        </style>
    </head>
</html>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM admin";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
    
  ?>
<h2 align="center">Admin Report</h2>
<center><table border="1" cellspacing="7" width="100%">
    <tr>
    <th width="15%">Full Name</th>
    <th width="15%">ID</th>
    <th width="20%">Email</th>
    <th width="15%">Phone Number</th>
    <th width="20%">Qualification</th>
    <th width="10%">Operations</th>
    </tr>
<?php
   while($result = mysqli_fetch_assoc($data))
   {
       echo "<tr>
           <td>".$result['fullName']."</td>
           <td>".$result['id']." </td>
           <td>".$result['email']." </td>
           <td>".$result['pnumber']."</td>
          
           <td>".$result['qualification']."</td>
         
               
           <td><a href='a-update.php?cn={$result['email']}'><input type='submit' Value='Update' class='update'></a>
      <a href='a-delete.php?cn={$result['email']}'><input type='submit' Value='Delete'  class='delete' onclick = 'return checkdelete()'></a></td>
        
</tr>";
   }
   }
 else 
    {
    echo "No records found";
}
?>
</table>
</center>
<script>
   
     function checkdelete()
     {
         return confirm('Are you sure you want to delete this record ?');
     }
</script>
