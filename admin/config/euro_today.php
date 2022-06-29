<?php
include('../connect.php');

    // Attempt select query execution
    $sql = "SELECT FORMAT(value, 2, 'de_DE') as valor FROM eur ORDER BY date DESC";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);

    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . "R$ " . $row['valor'] . '</div>';

    // Close connection
    mysqli_close($link);
?>