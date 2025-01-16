<?php
include "../db.php";
//Error display
$errors = array();
//image upload
$target_dir = '../Admin/Uploads/';
$target_file = $target_dir . basename($_FILES["picture__input"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//checking image file security(Fake  or real)
if (isset ($_POST["submit"])) {
    $check = getimagesize($_FILES["picture__input"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        array_push($errors, "File is not an image");
        $uploadOk = 0;
    }
}
/*
Checks if the file already exists in the folder the aoids incidences of file duplication.
*/
if (file_exists($target_file)) {
    array_push($errors, "File already exists");
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    array_push($errors, "Sorry file not uploaded");
} else {
    if (
        move_uploaded_file(
            $_FILES["picture__input"]["tmp_name"],
            $target_file
        )
    ) {
        include "../Admin/uploads.php";
    } else {
        array_push($errors, "File upload Error");
    }
}
//Bind sql statements
$stmt = $conn->prepare("INSERT INTO properties (Type,Location,Size,Beds,Power,Water,Baths,Price,image,Year,Name) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss", $type, $location, $size, $beds, $power, $water, $baths, $price, $filename, $year, $name);

//set parameters and execute
$name = $_POST["name"];
$price = $_POST["price"];
$filename = $target_file;
$location = $_POST["location"];
$size = $_POST["size"];
$beds = $_POST["bedrooms"];
$power = $_POST["power"];
$water = $_POST["water"];
$baths = $_POST["baths"];
$year = $_POST["year"];
$type = $_POST["type"];
$stmt->execute();
array_push($errors, "Image upload sucess");
header("location:upload.php");

$stmt->close();
$conn->close();
?>