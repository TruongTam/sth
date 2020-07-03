<?php
include('./connect.php');
// include_once('./dataprovider.php');
$sqlsv = "SELECT * FROM sv ";
// $dsHoa = DataProvider::ExecuteQuery($sqlHoa);//này là gì ấy  execute gì ấy  ưhi
$result = mysqli_query($conn,$sqlsv);

if(mysqli_num_rows($result)>0){
    // echo mysqli_num_rows($result)."</br>";
    while ($row=mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
?>

