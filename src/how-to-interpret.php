<?php
include "./templates/how-to-interpret/ekg-rhythm-info.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>EKGViewer - How To Interpret EKG Signals</title>
    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./templates/css/page-template.css" rel="stylesheet" />
    <link href="./css/how-to-interpret.css" rel="stylesheet" />
</head>

<body>
    <?php include "./templates/page-header.php" ?>
    <section id="content-wrapper">
        <h1>SIGNAL CATEGORY</h1>
        <section class="signal-type-wrapper">
            <?php
            (new EkgRhythmInfo(
                "RHYTHM TYPE",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                "signal type name",
                "",
                "",
                "",
                "",
                "",
            ))->output();
            (new EkgRhythmInfo(
                "RHYTHM TYPE",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                "signal type name",
                "",
                "",
                "",
                "",
                "",
            ))->output();
            ?>
        </section>
        <h1>SIGNAL CATEGORY</h1>
        <section class="signal-type-wrapper">
            <?php
            (new EkgRhythmInfo(
                "RHYTHM TYPE",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                "signal type name",
                "",
                "",
                "",
                "",
                "",
            ))->output();
            (new EkgRhythmInfo(
                "RHYTHM TYPE",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                "signal type name",
                "",
                "",
                "",
                "",
                "",
            ))->output();
            ?>
        </section>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
