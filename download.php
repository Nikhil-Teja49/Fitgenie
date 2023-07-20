<?php
// Enter your host name, database username, password, and database name.
// If you have not set a database password on localhost, leave it empty.
$con = mysqli_connect("localhost", "root", "root", "your_database");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Retrieve form inputs
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$goal = $_POST['goal'];

// Retrieve PDF file from the database
$sql = "SELECT pdf_file FROM your_table WHERE gender='$gender' AND weight='$weight' AND goal='$goal'";
$result = mysqli_query($con, $sql);

if ($result !== false) {
    if (mysqli_num_rows($result) > 0) {
        // PDF found, initiate file download
        $row = mysqli_fetch_assoc($result);
        $pdfFile = $row['pdf_file'];

        header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename='your_file.pdf'");
        echo $pdfFile;
    } else {
        // PDF not found
        echo "PDF not found for the specified criteria.";
    }

    mysqli_free_result($result);
} else {
    // Error occurred during query execution
    echo "Error executing the query: " . mysqli_error($con);
}

mysqli_close($con);

?>
