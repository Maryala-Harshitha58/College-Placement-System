<html>
    <head>
        <title>JOB LIST</title>
        <style>
            body {
                
	 background: url('wp7213365.jpg') no-repeat;
         background-size: cover; 
         
                
            }
            .VIEW {
                background-color: blue;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>
        <?php
        include("connection.php");
        error_reporting(0);
        $query = "SELECT * FROM FILE";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total != 0) {
        ?>
        <h2 align="center">JOB LIST</h2>
        <center>
            <table border="1" cellspacing="7" width="100%">
                 
                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                        
                        <td rowspan='10'>" . $result['id'] . "</td>
                            
                     <td rowspan='10'>
                     <img src='".$result['std_image']."' height='200px' width='200px'></td>
                         </tr>
                       <tr>
                       <th width='8%'>JOB TITLE</th>
                            <td>" . $result['jobname'] . "</td>
                         </tr>
                        <tr>
                        <th width='10%'>COMPANY NAME</th>
                        <td>" . $result['cname'] . "</td>
                         </tr>
                        <tr>
                        <th width='8%'>JOB TYPE</th>
                        <td>" . $result['jobtype'] . "</td>
                            </tr>
                       <tr> 
                       <th width='10%'>POST DATE</th>
                       <td>" . $result['postdate'] . "</td>
                           </tr>
                        <tr>
                         <th width='13%'>SKILLS</th>
                         <td>" . $result['skills'] . "</td>
                         </tr>
                       <tr> 
                       <th width='8%'>CITY</th>
                       <td>" . $result['city'] . "</td>
                       </tr>
                      <tr>  
                      <th width='10%'>STATE</th>
                      <td>" . $result['state'] . "</td></tr>
                      <tr>  
                      <th width='25%'>DESCRIPTION</th>
                      <td>" . $result['description'] . "</td>
                          </tr>
                       <td>
                            <a href='company_screen.php'><input type='submit' Value='VIEW' class='view'></a>
                        </td>
                        
                    </tr>";
                }
        }
                ?>
                
            </table>
        </center>
        
        </script>
    </body>
</html>