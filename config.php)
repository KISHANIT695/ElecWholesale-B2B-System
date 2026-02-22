<?php
$conn = mysqli_connect("localhost", "root", "", "elec_wholesale");

function isFeatureOn($name) {
    global $conn;
    $res = mysqli_query($conn, "SELECT status FROM addons WHERE feature_name = '$name'");
    $row = mysqli_fetch_assoc($res);
    return ($row && $row['status'] == 'on');
}

function trackView($id) {
    global $conn;
    mysqli_query($conn, "UPDATE products SET view_count = view_count + 1 WHERE id = $id");
}
?>
