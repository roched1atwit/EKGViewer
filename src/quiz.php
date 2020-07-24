<?php
include_once "./templates/quiz/text-answer-data.php";
include_once "./templates/quiz/text-answer-question.php";
include_once "./templates/quiz/image-answer-data.php";
include_once "./templates/quiz/image-answer-question.php";
include_once "./db/quiz.php";
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
            $quiz = new Quiz();

            $historyQuestion = $quiz->getHistoryQuestion(1);
            if ($historyQuestion != null) {
                $historyQuestion->output();
            }

            $definitionQuestion = $quiz->getDefinitionQuestion(2);
            if ($definitionQuestion != null) {
                $definitionQuestion->output();
            }

            $placeQuestion = $quiz->getPlaceQuestion(3);
            if ($placeQuestion != null) {
                $placeQuestion->output();
            }

            $interpretQuestion = $quiz->getInterpretQuestion(4);
            if ($interpretQuestion != null) {
                $interpretQuestion->output();
            }
            ?>
            <input type="submit" value="Submit" class="form-button">
            <input type="reset" value="Clear" class="form-button">
            <h2 id="submission-error-message"></h2>
        </form>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
