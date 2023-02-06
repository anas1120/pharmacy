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
            border: 1px solid;
        }
        
        </style>
   
    <div>
        <table>
        <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Question</th>
        </tr> 
        


        <?php
         include("config/db_config.php");

         $question_query = "SELECT * FROM question";
         $question_response=mysqli_query($connection, $question_query);

        while($data=mysqli_fetch_assoc($question_response))
        {
        echo "<tr>";
            echo "<td>".$data['Name']."</td>";
            echo "<td>".$data['phoneNumber']."</td>";
            echo "<td>".$data['Question']."</td>";
        echo "</tr>";
        }

        ?> 

</table>
    </div>



</body>
</html>