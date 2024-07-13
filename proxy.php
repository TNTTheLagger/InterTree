<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Use cURL to fetch the content of the URL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
} else {
    echo "No URL provided.";
}
?>
