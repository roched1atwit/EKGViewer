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
        <h1>Sinus Rhythms</h1>
        <section class="signal-type-wrapper">
            <?php
            (new EkgRhythmInfo(
                "Normal Sinus Rhythms",
                "./img/normal-sinus-rhythm.png",
                "Normal sinus rhythm trace",
                "60-100 bpm",
                "Regular",
                "Normal and proceeds each QRS complex (smooth and rounded)",
                "0.12-0.20 seconds",
                "<= 0.12 seconds",
            ))->output();
            (new EkgRhythmInfo(
                "Sinus Bradycardia",
                "./img/sinus-bradycardia.png",
                "Sinus bradycardia trace",
                "< 60 bpm",
                "Regular",
                "Normal and proceeds each QRS complex (smooth and rounded)",
                "0.12-0.20 seconds",
                "<= 0.12 seconds, generally",
            ))->output();
            ?>
        </section>
        <h1>Artial Rhythms</h1>
        <section class="signal-type-wrapper">
            <?php
            (new EkgRhythmInfo(
                "Premature Atrial Complexes",
                "./img/premature-atrial-complexes.png",
                "Premature atrial complexes trace",
                "Generally normal but varies because of underlying rhythm",
                "Regular with premature beats",
                "Premature and differ in shape from sinus wave",
                "0.12-0.20 seconds when the impulse originates near SA node; 0.12 seconds when the impulse originates near AV junction",
                "Generally <= 0.12 seconds but may be prolonged if the rhythm is abnormally conducted",
            ))->output();
            (new EkgRhythmInfo(
                "Atrial Flutter",
                "./img/atrial-flutter.png",
                "Atrial flutter trace",
                "Atrial rate 200-350 bpm; ventricular rate will vary based on the number of blocked atrial beats but usually is not > 180 bpm",
                "Atrial regular; ventricular may be regular or irregular",
                "Not visible, sawtootch pattern or flutter observable",
                "Not measurable",
                "QRS complex: Generally < 0.12 seconds but may be wider if ventricular conduction problem exists",
            ))->output();
            ?>
        </section>
        <h1>Ventricular Rhythms</h1>
        <section class="signal-type-wrapper">
            <?php
            (new EkgRhythmInfo(
                "Idioventricular Rhythm",
                "./img/idioventricular-rhythm.png",
                "Idioventricular rhythm trace",
                "Ventricular rate 20-40 bpm",
                "Usually regular; atrial not visible",
                "None",
                "None",
                "> 0.12 seconds; T wave is in the opposite direction of the QRS complex",
            ))->output();
            (new EkgRhythmInfo(
                "Asystole",
                "./img/asystole.png",
                "Asystole trace",
                "Not discernible",
                "Not discernible",
                "Not discernible",
                "Not measurable",
                "None",
            ))->output();
            ?>
        </section>
        <h1>Works Cited</h1>
        <p class="citation">
            EKGs. BarCharts, Inc., 2012. EBSCOhost, search.ebscohost.com/login.aspx?direct=true&db=cat05470a&AN=wit.2359116&site=eds-live&scope=site.
        </p>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
