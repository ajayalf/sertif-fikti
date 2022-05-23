    <?php
    if (isset($_POST['name'])) {
        $font = "ROADSTORE.ttf";
        $image = imagecreatefromjpeg("template.jpg");
        $textColour = imagecolorallocate($image, 168, 15, 41);
        $name = $_POST['name'];
        $coords = imagettfbbox(50, 0, $font, $name);
        imagettftext($image, 50, 0, 958 - ($coords[2] / 2), 305, $textColour, $font, $name);
        imagejpeg($image, "file/" . $name . ".jpg");
        imagedestroy($image);
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generator Sertifikat</title>
        <link rel="shortcut icon" type="image/icon" href="pti.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <center>
                <h2 class="my-3">Generator Sertifikat FIKTI Art Spectacular</h2>
                <img src="file/<?php echo $name; ?>.jpg" class="img-fluid shadow-lg p-3 mb-3 bg-body rounded" width="750">
                <form action="" method="post">

                    <div class="col-xl-5 col-sm-7 mt-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap Anda" aria-describedby="button-addon2">
                            <a href="file/<?php echo $name ?>.jpg" download>
                                <button class="btn btn-outline-success" type="submit" id="button-addon2">Print</button>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-danger fw-bold" href="file/<?php echo $name ?>.jpg" download>DOWNLOAD</a>
                </form>
                <br>
                <br>
            </center>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>