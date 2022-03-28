<?php
include_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dynamic Headline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>



    <div class="container mt-4">
        <?php

        if (isset($_POST['submit'])) {
            $type = $_POST['type'];
            $align = $_POST['align'] ?? '';
            $fontFamily = $_POST['fontFamily'];
            $fontSize = $_POST['fontSize'];
            $color = $_POST['color'];
            $title = $_POST['title'];


            if (empty($type) || empty($align) || empty($fontFamily) || empty($fontSize) || empty($color) || empty($title)) {
                echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
            } else {
                echo heading($title, $type, $align, $fontFamily, $fontSize, $color);
            }
        }

        ?>
    </div>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-3">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-header"></i></div>
                        <h3 class="title">Dynamic Headline</h3>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Heading Type</label>
                                    <select class="form-select mt-3 currency" name="type" aria-label="Default select example">
                                        <option selected>Select Your Heading Type</option>
                                        <option value="h1">H1</option>
                                        <option value="h2">H2</option>
                                        <option value="h3">H3</option>
                                        <option value="h4">H4</option>
                                        <option value="h5">H5</option>
                                        <option value="h6">H6</option>
                                        <option value="p">P</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="mb-2">Align</label>
                                    <input class="mx-2" name="align" type="radio" value="left" id="left"><label for="left">Left</label>
                                    <input class="mx-2" name="align" type="radio" value="center" id="center"><label for="center">Center</label>
                                    <input class="mx-2" name="align" type="radio" value="right" id="right"><label for="right">Right</label>
                                </div>
                                <div class="form-group">
                                    <label>Font Family</label>
                                    <input class="form-control mt-3" type="text" name="fontFamily" placeholder="Enter Your Font Name">
                                </div>
                                <div class="form-group">
                                    <label>Font Size</label>
                                    <input class="form-control mt-3" type="text" name="fontSize" placeholder="Enter Your Font Size">
                                </div>
                                <div class="form-group">
                                    <label>Font Color</label>
                                    <input class="form-control mt-3" type="text" name="color" placeholder="Enter Your Font Color">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control mt-3" type="text" name="title" placeholder="Enter Your Title">
                                </div>

                                <button type="submit" name="submit" class="btn btn-default">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>