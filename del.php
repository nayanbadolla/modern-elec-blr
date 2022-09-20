<?php
$con= new mysqli("localhost","root","","modern-elec_contact");
if($con->connect_error) {
    die("Connection Failed: ");
}

if(isset($_GET['delID'])) {
    $sql="DELETE FROM queries WHERE NAME='".$_GET['delID']."';";
    $res=$con->query($sql);
}

$sql="SELECT * FROM queries";
$res=$con->query($sql);
$d=0;
?>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<table style="border: 2px solid black;">
        <tr style="border: 2px solid black;">
            <td>NAME</td>
            <td>COMPANY</td>
            <td>STATUS</td>
        </tr>

        <?php
        if($res->num_rows>0)
        {
            while($row=$res->fetch_assoc())
            {
        ?>
                <tr>
                    <td><?php echo $row["NAME"]?></td>
                    <td><?php echo $row["COMPANY"]?></td>
                    <td><a href="del.php?<?php echo 
                    "delID=".$row["NAME"] ?>">
                    <i class="fab-solid fa-trash"></i></a></td>
                </tr>

        <?php
            }
        }
        else{
            echo "Empty table found!";
        }
        $con->close();
        ?>
</table>