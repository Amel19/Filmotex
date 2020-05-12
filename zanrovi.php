

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

            <h2>Žanrovi</h2>

        </div>

    </div>



    
    <div class="movie-list">
        <div class="all-movies">
        <?php
include_once("./db_conn.php");
$sql = "SELECT  g.name,g.icon,g.link\n" . "FROM genre AS g\n";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        
        echo "<div class='movie'>";
        echo "<a href=". $row["link"] .">";
        echo "<img src=" . $row["icon"] . ">";
        echo "</a>";
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