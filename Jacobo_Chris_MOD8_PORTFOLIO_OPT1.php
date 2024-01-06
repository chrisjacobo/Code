<!DOCTYPE html>

<html>

<head>
    <title>Form</title>
<meta charset="UTF-8">

</head>

<body>
<form method="get" action="Jacobo_Chris_MOD8_PORTFOLIO_OPT1.php">

    <p>Name: <input type="name" name="name" /></p>
    <p>Birthdate: <input type="birthdate" name="birthdate"/></p>
    <p>Age: <input type="age" name="age" /></p>
    <p>Department: <input type="department" name="department"  /></p>
   
    <p><input type="submit" name="submitbutton" /></p>
    <p><input type="submit" name="insert" value="Insert"/></p>
    <p><input type="submit" name="display" value="Display"/></p>

</form>

</body>

</html>

<?php

class User {
    private $name;
    private $birthdate;
    private $age;

    private $department;

    public function setName($name){
 
        $this->name = $name;
       
       }

    public function getName(){
        return $this->name;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }

    public function getBirthdate(){
        
        return $this->birthdate;

    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
       
    public function setDepartment($department){
        $this->department = $department;
    }

    public function getDepartment(){
        return $this->department;
    }
   
}

$time = new User();

if (isset($_GET['name']) || isset($_GET['birthdate']) || isset($_GET['age']) || isset($_GET['department'])) {
    $time->setName($name = $_GET['name']);
    $time->setBirthdate($birthdate = date('YYYY/MM/DD', strtotime($_GET['birthdate'])));
    $time->setAge($age = $_GET['age']);
    $time->setDepartment($department = $_GET['department']);
}
print_r($time);

if (isset($_GET['insert'])) {
   
    $insertbutton = $_GET['insert'];

    if ($insertbutton){
 
        if(!empty($name) && ($birthdate) && ($age) && ($department)) {
        $localhost = 'localhost';
        $username = 'chris';
        $password = 'chris121601';
        $database = 'PHP Class';
    
        $conn = mysqli_connect($localhost, $username, $password, $database);
    
    
        $name = $_GET['name'];
        $birthdate = date('Y/M/D', strtotime($_GET['birthdate']));
        $age = $_GET['age'];
        $department = $_GET['department'];
        
    
        $sql = "INSERT INTO `User Entry` (`id` `Name`, `Birthdate`, `Age`, `Department` ) 
                VALUES ('0','$name', '$birthdate', '$age', '$department')";
    
        $rs = mysqli_query($conn, $sql);
    
        if($rs)
        {
            echo "Forms inserted in Database!";
        }
    
        mysqli_close($conn);
    
        }
    }
    
    if (isset($_GET['display'])) {
       
        $displaybutton = $_GET['display'];
        
        if ($displaybutton) {
             
            $localhost = 'localhost';
            $username = 'chris';
            $password = 'chris121601';
            $database = 'PHP Class';
        
            $conn = mysqli_connect($localhost, $username, $password, $database);
                $sql = "SELECT `Name`,`Birthdate`,`age`, `department` FROM `User Entry`;";
            $result = $mysqli_query($conn, $sql);

            if($result) {
                echo "Data retrieved!";
            }
 
               /* $con=mysqli_connect("example.com","peter","abc123","my_db");
                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                
                $result = mysqli_query($con,"SELECT * FROM Persons"); */
                
                echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Department</th>
                </tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Birthdate'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                mysqli_close($con);
                
        
                             
        
        
            
        
        
        }
    }
    
    
    

}



?>
