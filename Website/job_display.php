<html>
    <head>
        <title>Job Display</title>
        <style>
            body {
                
                background: url('d-man-searching-job-magnifying-glass-33745073.jpeg') no-repeat;
            }
            .update {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                font-weight: bold;
            }
            .delete {
                background-color: red;
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
        <h2 align="center">JOB REPORT</h2>
        <center>
            <table border="1" cellspacing="7" width="100%">
                <tr>
                    <th width="5%">ID</th>
                    <th width="8%">JOB TITLE</th>
                    <th width="10%">COMPANY NAME</th>
                    <th width="8%">JOB TYPE</th>
                    <th width="10%">POST DATE</th>
                    <th width="13%">SKILLS</th>
                    <th width="8%">CITY</th>
                    <th width="10%">STATE</th>
                    <th with="25%">DESCRIPTION</th>
                    <th width="10%">Operations</th>
                </tr>
                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                        <td>" . $result['id'] . "</td>
                        <td>" . $result['jobname'] . "</td>
                        <td>" . $result['cname'] . "</td>
                        <td>" . $result['jobtype'] . "</td>
                        <td>" . $result['postdate'] . "</td>
                        <td>" . $result['skills'] . "</td>
                        <td>" . $result['city'] . "</td>
                        <td>" . $result['state'] . "</td>
                        <td>" . $result['description'] . "</td>
                        <td>
                            <a href='job_update_design.php?id={$result['id']}'><input type='submit' value='Update' class='update'></a>
                            <a href='job_delete.php?id={$result['id']}'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
                        </td>
                    </tr>";
                }
                ?>
            </table>
        </center>
        <?php
        } else {
            echo "No records found";
        }
        ?>
        <script>
            function checkdelete() {
                return confirm('Are you sure you want to delete this record?');
            }
        </script>
    </body>
</html>