<?php
$conn=new mysqli("localhost","root","","student");
if ($conn->connect_error)
{
    die("Connection Failed: ".$conn->connect_error);
}
$sql="SELECT * FROM info";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
        echo "sl: ".$row["sl"].". Name: ".$row["name"]." ".$row["course"]."<br>";
    }
}
else {
    echo "0 result";
}
$conn->close();
?>