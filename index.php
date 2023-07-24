<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>

    </script>
</head>

<body>
    <div id="comments">
        <?php
        $sql = "SELECT * FROM comments LIMIT 2";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
                echo $row['author'];
                echo "<br>";
                echo $row['message'];
                echo "</p>";
            }
        } else {
            echo "There are no comments!";
        }
        ?>
    </div>

    <button>Show more comments</button>
</body>

</html>