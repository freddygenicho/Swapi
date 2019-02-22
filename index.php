<?php
session_start();

$favourites = array();
$favourites = $_SESSION['favourites'];
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


    <title>Swapi-Api</title>
</head>
<body>

<div class="container" style="margin-top: 50px;">
    <h2>SWAPI The Star Wars API</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Height</th>
            <th scope="col">Mass</th>
            <th scope="col">Hair Color</th>
            <th scope="col">Skin Color</th>
            <th scope="col">Eye Color</th>
            <th scope="col">Birth Year</th>
            <th scope="col">Gender</th>
            <th scope="col">Favourite</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data = file_get_contents("https://swapi.co/api/people/");
        $data = json_decode($data, true);
        $results = $data['results'];
        foreach ($results as $res) { ?>
            <tr>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['name'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['height'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['mass'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['hair_color'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['skin_color'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['eye_color'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['birth_year'] ?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo 'view.php?url=' . $res['url'] ?>" target="_blank">
                        <?php echo $res['gender'] ?>
                    </a>
                </td>
                <td>
                    <?php
                    if (isset($_POST['action'])) {
                        $url = $_POST['url'];
                        $action = $_POST['action'];

                        if ($action == 'Add') {
                            array_push($favourites, $url);
                        } else {
                            foreach ($favourites as $key => $value) {
                                if ($value == $url) {
                                    unset($favourites[$key]);
                                }
                            }
                        }

                        $_SESSION['favourites'] = $favourites;
                    }
                    ?>

                    <form action="index.php" method="post">
                        <input type="hidden" name="url" value="<?php echo $res['url'] ?>">
                        <?php
                        if (in_array($favourites, $res['url'])) { ?>
                            <i class="fas fa-heart"></i>
                            <input type="submit" name="action" value="Remove" class="btn btn-danger">
                        <?php } else { ?>
                            <i class="far fa-heart"></i>
                            <input type="submit" name="action" value="Add" class="btn btn-primary">
                            <?php
                        }
                        ?>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
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
