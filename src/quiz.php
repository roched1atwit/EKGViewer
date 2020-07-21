<?php
include "./templates/quiz/text-answer-data.php";
include "./templates/quiz/text-answer-question.php";
include "./templates/quiz/image-answer-data.php";
include "./templates/quiz/image-answer-question.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>EKGViewer - Quiz</title>
    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./templates/css/page-template.css" rel="stylesheet" />
    <link href="./css/quiz.css" rel="stylesheet" />
    <script type="text/javascript" src="./js/quiz.js"></script>
</head>

<body>
    <?php include "./templates/page-header.php" ?>
    <section id="content-wrapper">
        <form method="POST" action="" id="quiz-form">
            <?php
            (new TextAnswerQuestion(
                "1",
                "History Question",
                array(
                    new TextAnswerData("A", "ANSWER A"),
                    new TextAnswerData("B", "ANSWER B"),
                    new TextAnswerData("C", "ANSWER C"),
                    new TextAnswerData("D", "ANSWER D")
                )
            ))->output();
            (new TextAnswerQuestion(
                "2",
                "Definition Question",
                array(
                    new TextAnswerData("A", "ANSWER A"),
                    new TextAnswerData("B", "ANSWER B"),
                    new TextAnswerData("C", "ANSWER C"),
                    new TextAnswerData("D", "ANSWER D")
                )
            ))->output();
            (new ImageAnswerQuestion(
                "3",
                "How To Place Question",
                array(
                    new ImageAnswerData(
                        "A",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "B",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "C",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "D",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    )
                )
            ))->output();
            (new ImageAnswerQuestion(
                "4",
                "Which is an example of WAVE FORM?",
                array(
                    new ImageAnswerData(
                        "A",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "B",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "C",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    ),
                    new ImageAnswerData(
                        "D",
                        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/SinusRhythmLabels.svg/280px-SinusRhythmLabels.svg.png",
                        "IMG ALT",
                        "EXPLAIN WAVE FORM"
                    )
                )
            ))->output();
            ?>
            <input type="submit" value="Submit" class="form-button">
            <input type="reset" value="Clear" class="form-button">
            <h2 id="submission-error-message"></h2>
        </form>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
