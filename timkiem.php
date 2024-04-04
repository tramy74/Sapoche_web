<?php
include('connect.php');
$searchInput = $_GET['searchInput'];
// Execute the first query
$query1 = "SELECT ID
           FROM sanpham
           WHERE LOWER(TenDienThoai) = LOWER('$searchInput')";
$result1 = mysqli_query($conn, $query1);

$idList = '';

// Check if the first query returned any results
if (mysqli_num_rows($result1) > 0) {
    // Process the results of the first query
    while ($row = mysqli_fetch_assoc($result1)) {
        // Append the ID to the list
        $idList .= $row['ID'] . ', ';
    }
} else {
    // Execute the second query
    $query2 = "SELECT ID
    FROM sanpham
    WHERE LOWER(TenDienThoai) LIKE LOWER('%$searchInput%') AND LENGTH('$searchInput') >= 2";
    $result2 = mysqli_query($conn, $query2);

    // Process the results of the second query
    while ($row = mysqli_fetch_assoc($result2)) {
        // Append the ID to the list
        $idList .= $row['ID'] . ', ';
    }
}
$idList = rtrim($idList, ', ');
echo $idList;

?>