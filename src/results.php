<!DOCTYPE html>
<html>

<head>
    <title>EKGViewer - Quiz Results</title>
    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./templates/css/page-template.css" rel="stylesheet" />
    <link href="./css/results.css" rel="stylesheet" />
</head>

<body>
    <?php include "./templates/page-header.php" ?>
    <section id="content-wrapper">
        <?php
            foreach ($_POST as $key => $value)
            {
                echo $key . ": " . $value . "<br/>";
            }
        ?>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
