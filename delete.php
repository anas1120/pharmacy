<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
            table, th, td{
                        border: 1px solid ;
                    }
        </style>
<table>
            <tr>
            <th>Name</th>

            </tr>

            
           <?php
           include("config/db_config.php");

            $id = "SELECT * FROM product";
            $rsult = mysqli_query($connection, $id);
           if(mysqli_query($connection, $id)){
               while($data = mysqli_fetch_assoc($rsult)) {
                   $select_id = $data['id'];
                   echo "<tr>";
                   echo "<td>$data[name]</td>";

                   echo "<td>"."<a href='process/get_delete.php?id=$select_id'>Delete</a>"."</td>";
                   echo "</tr>";
               }
            }
          ?>

  </table>
  </div>
</body>
</html>