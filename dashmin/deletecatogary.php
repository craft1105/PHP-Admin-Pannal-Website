<?php
include('query.php');

if (isset($_GET['id'])) {
    $C_Id = $_GET['id'];
    $query = $pdo->prepare("DELETE FROM addcat WHERE id = :CId");
    $query->bindParam(":CId", $C_Id);
    $query->execute();
    echo "<script> alert('CAT Deleted'); window.location.href = 'viewcatogary.php';</script>";
}
?>