<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: url('R.jpeg') no-repeat;
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
$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
    
  ?>
<h2 align="center"><mark>Company Report</mark></h2>
<center><table border="1" cellspacing="7" width="100%">
    <tr>
    <th width="9%">Image</th>
    <th width="8%">Company Name</th>
    <th width="15%">Email</th>
    <th width="8%">Phone Number</th>
    <th width="10%">City </th>
    <th width="10%">State</th>
    <th width="8%">Country</th>
    <th width="25%">Description</th>
    <th width="18%">Operations</th>
    </tr>
<?php
   while($result = mysqli_fetch_assoc($data))
   {
       echo "<tr>
           <td><img src='".$result['image']."'height='100px' width='100px'></td>
           <td>".$result['cname']."</td>
           <td>".$result['ename']." </td>
           <td>".$result['pnumber']."</td>
           <td>".$result['cityname']."</td>
           <td>".$result['statename']."</td>
           <td>".$result['countryname']."</td>
           <td>".$result['description']."</td>  
               
           <td><a href='update_design.php?cn={$result['cname']}'><input type='submit' Value='Update' class='update'></a>
      <a href='delete.php?cn={$result['cname']}'><input type='submit' Value='Delete'  class='delete' onclick = 'return checkdelete()'></a></td>
        
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