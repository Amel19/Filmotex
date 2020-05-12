<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Filmotex</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<?php
include_once("./db_conn.php");
include_once("./nav.html");

?>
<body>
   
        <div id="header">
            <img src="img/naslovna.png" alt="Naslovna">
        </div>

    <div id="content">

        <div id="trending">
            <h2>posljednje dodani filmovi</h2>
            <p>www.filmotex.com</p>
        </div>

    </div>

        <div id="new_movies">
            <div id="movies">

    <?php


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
        include_once ('footer.html');
    ?>

</body>
</html>