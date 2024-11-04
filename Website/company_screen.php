<html>
    <head>
        <title>company list</title>
        <style>
            body{
   
    background:  url('QJ0trsu.jpeg')no-repeat;
         background-size: cover;
    
               
            }
            
            .view{
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
<h2 align="center">COMPANY LIST</h2>
<center><table border="1" cellspacing="7" width="100%">
    <?php
   while($result = mysqli_fetch_assoc($data))
   { 
       
       echo "<tr>
           <tr>
          
           <td rowspan='10'><img src='".$result['image']."'height='200px' width='200px'></td>
               </tr>
           <tr>
           <th width='8%'>Company Name</th>
           <td>".$result['cname']."</td>
               </tr>
           <tr>
            <th width='15%'>Email</th>
           <td>".$result['ename']." </td>
               </tr>
           <tr>
           <th width='8%'>Phone Number</th>
           <td>".$result['pnumber']."</td>
               </tr>
           <tr>
            <th width='10%'>City </th>
           <td>".$result['cityname']."</td>
               </tr>
           <tr>
           <th width='10%'>State</th>
           <td>".$result['statename']."</td>
            </tr>
           <tr>
           <th width='8%'>Country</th>
           <td>".$result['countryname']."</td>
               </tr>
           <tr>
           <th width='25%'>Description</th>
           <td>".$result['description']."</td> 
               </tr><tr>
               
           <td><a href='job_screen.php'><input type='submit' Value='VIEW' class='view'></a>
      <a</td>
       </tr> 
</tr>";
   }
   }
 
?>
</table>
</center>
