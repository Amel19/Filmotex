

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="main.css">

    <title>Filmovi</title>

    

</head>


<body>

    <?php
        include_once ("./nav.html");
    ?>

    <div class="header2">

        <div class="inner-header2">

            <h2>Avanturistički</h2>

        </div>

    </div>



    
    <div class="movie-list">
        <div class="all-movies">
        <?php
include_once("./db_conn.php");
$sql = "SELECT  m.name,m.rating,m.src_image\n" . "FROM movie AS m\n" . "left JOIN language AS l\n" . "ON m.language_id = l.id ORDER BY m.timestamp DESC LIMIT 12";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        
        echo "<div class='movie'>";
        
        echo "<img src=" . $row["src_image"] . ">";
        echo "<h5>" . $row["name"] . "</h5>";
        echo "<p>Rating: " . $row["rating"] . "</p>";
        echo "</div>";
        
    }
} else {
    echo "0 results";
}

$conn->close();

?>

        </div>
    </div>

<?php
    include_once ("./footer.html");
?>

</body>

</html>