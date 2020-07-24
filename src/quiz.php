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
        <?php
        $quiz = new Quiz();

        $historyQuestion    = $quiz->getHistoryQuestion(1);
        $definitionQuestion = $quiz->getDefinitionQuestion(2);
        $placeQuestion      = $quiz->getPlaceQuestion(3);
        $interpretQuestion  = $quiz->getInterpretQuestion(4);

        // Ensure that all questions were generated successfully
        if (
            $historyQuestion    != null &&
            $definitionQuestion != null &&
            $placeQuestion      != null &&
            $interpretQuestion  != null
        ) {
            echo "<form method='POST' action='' id='quiz-form'>";
            $historyQuestion->output();
            $definitionQuestion->output();
            $placeQuestion->output();
            $interpretQuestion->output();
            echo "<input type='submit' value='Submit' class='form-button'>";
            echo "<input type='reset' value='Clear' class='form-button'>";
            echo "<h2 id='submission-error-message'></h2>";
            echo "</form>";
        } else {
            echo "<h1>Error loading questions: Please try again later</h1>";
        }
        ?>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
