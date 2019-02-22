<?php
/**
 * Created by PhpStorm.
 * User: genicho
 * Date: 2/22/19
 * Time: 8:15 AM
 */
session_start();

$name;
$height;
$mass;
$hair_color;
$skin_color;
$eye_color;
$birth_year;
$gender;

if (isset($_GET)) {
    $url = $_GET['url'];
    $data = file_get_contents($url);
    $data = json_decode($data, true);

    $name = $data['name'];
    $height = $data['height'];
    $mass = $data['mass'];
    $hair_color = $data['hair_color'];
    $skin_color = $data['skin_color'];
    $eye_color = $data['eye_color'];
    $birth_year = $data['birth_year'];
    $gender = $data['gender'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title><?php echo $name; ?></title>
</head>
<body>

<div class="container" style="margin-top: 50px;">
    <h2><?php echo $name; ?></h2>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Height</td>
            <td><?php echo $height; ?></td>
        </tr>
        <tr>
            <td>Mass</td>
            <td><?php echo $mass; ?></td>
        </tr>
        <tr>
            <td>Hair Color</td>
            <td><?php echo $hair_color; ?></td>
        </tr>
        <tr>
            <td>Skin Color</td>
            <td><?php echo $skin_color; ?></td>
        </tr>
        <tr>
            <td>Eye Color</td>
            <td><?php echo $eye_color; ?></td>
        </tr>
        <tr>
            <td>Birth Year</td>
            <td><?php echo $birth_year; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Favourite</td>
            <td><?php echo $name; ?></td>
        </tr>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</body>
</html>
