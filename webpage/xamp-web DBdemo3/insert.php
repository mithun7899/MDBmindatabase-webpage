<html>
<body>
<?php
        $con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
        mysqli_select_db($con, "cse") or die(mysqli_error($con));

        $isbn = $_POST['ISBN'];
        $title = $_POST['Title'];
        $author = $_POST['Author'];
        $edition = $_POST['Edition'];
        $publisher = $_POST['Publisher'];

        $sql = "INSERT INTO book (ISBN, title, authors, edition, publisher) VALUES ('$isbn', '$title', '$author', '$edition', '$publisher')";

        if (!mysqli_query($con, $sql)) {
            die("error: " . mysqli_error($con));
        }

        echo "1 record added.";
        mysqli_close($con);
    ?>
    <form action="results.php" method="post">
        Name: <input type="text" name="Title" />
        <input type="submit" />
    </form>
</body>
</html> 

