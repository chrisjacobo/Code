
  <?php 
  //SQL localhost login
   $username = "chris"; 
    $password = "chris1234"; 
    $database = "PHP Class"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 
    $sql = "SELECT id, style, color, owner FROM shirt WHERE owner = 2 and color != 'white';";
    $result = $mysqli->query($sql) 

?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
<style>
    table td, th {
        border: 1px solid;
    }

    table {
        width: 40%;
        border-collapse: collapse;
        column-width: 100px;
    }
</style>
 
<head>
    <meta charset="UTF-8">
    </head>
 
<body>
    <section>
        
        <table>
            <thread>
                <tr>
                    <th>id</th>
                    <th>style</th>
                    <th>color</th>
                    <th>owner</th>
                </tr>
            </thread>
            
            <?php
                // Loop till end of data
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['style'];?></td>
                <td><?php echo $rows['color'];?></td>
                <td><?php echo $rows['owner'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>