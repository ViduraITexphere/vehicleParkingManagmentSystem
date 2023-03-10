<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
    /* //////////////////////Dont't change ////////////////////// */
    body {
        display: flex;
        min-height: 100vh;
    }

    [class*="col"] {
        padding: 0;
        margin: 0;
    }
    /* //////////////////////Dont't change ////////////////////// */


    .topic {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include "Drawer.php" ?>
            </div>
            <div class="col-md-10">
                <div class="content">
                    <div class="topic">
                        <h2>Hello Vidura 🚀</h2>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>