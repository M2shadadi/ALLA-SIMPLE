<?php include'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my display</title>
</head>
<body>

   <a href="index.php">add user</a>

   <?php
    
    $sql=" select * from 'info' ";
    $run=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($run)){


    ?>
    <tr>
        <th>first name</th>
        <th>last name </th>
        <th>address</th>
    </tr>

    <tr>
        <td> <?php echo  ?></td>
    </tr>




    }


   <table>

   </table>

    
</body>
</html>