<?php
include_once "./db/database.php";
include_once "./templates/quiz/text-answer-data.php";
include_once "./templates/quiz/text-answer-question.php";
include_once "./templates/quiz/image-answer-data.php";
include_once "./templates/quiz/image-answer-question.php";

class Quiz 
{
    private $_db;

    function __construct()
    {
        $this->_db = new Database();
    }

    function getDefinitionQuestion($questionNumber)
    {
        return $this->getQuestion($questionNumber, "definition", "txt");
    }

    function getHistoryQuestion($questionNumber)
    {
        return $this->getQuestion($questionNumber, "history", "txt");
    }

    function getInterpretQuestion($questionNumber)
    {
        return $this->getQuestion($questionNumber, "how-to-interpret", "img");
    }

    function getPlaceQuestion($questionNumber)
    {
        return $this->getQuestion($questionNumber, "how-to-place", "txt");
    }


    private function convertToImageAnswerData($quizAnswers)
    {
        // Convert the answers to answer data objects
        $answerDataObjs = array();
        $char = 'A';
        for ($i = 0; $i < count($quizAnswers); $i++) {
            array_push(
                $answerDataObjs,
                new ImageAnswerData(
                    $quizAnswers[$i]["answerID"],
                    $char++,
                    "./img/" . $quizAnswers[$i]["answer"] . ".png",
                    $quizAnswers[$i]["answerID"]
                )
            );
        }
        return $answerDataObjs;
    }

    private function convertToTextAnswerData($quizAnswers)
    {
        // Convert the answers to answer data objects
        $answerDataObjs = array();
        $char = 'A';
        for ($i = 0; $i < count($quizAnswers); $i++) {
            array_push(
                $answerDataObjs,
                new TextAnswerData(
                    $quizAnswers[$i]["answerID"],
                    $char++,
                    $quizAnswers[$i]["answer"],
                )
            );
        }
        return $answerDataObjs;
    }

    private function getQuestion($questionNumber, $categoryName, $questionType)
    {
        // Get the category, ensure that there was only one returned
        $category = $this->_db->selectQuery("SELECT * FROM quiz_category WHERE category='" . $categoryName . "'");
        if (count($category) == 1) {
            // Get the questions, ensure that there was at least one question returned
            $questions = $this->_db->selectQuery("SELECT * FROM quiz_question WHERE category=" . $category[0]["categoryID"]);
            if (count($questions) > 0) {
                // Select a random question from the full set
                $selectedQuestion = $questions[rand(1, count($questions)) - 1];

                // Add the correct answer to the list of answers
                $quizAnswers = $this->_db->selectQuery(
                    "SELECT * FROM quiz_answer WHERE answerID = " . $selectedQuestion["correct_answer"]
                );

                // Get all wrong answers for the selected question
                $wrongAnswers = $this->_db->selectQuery(
                    "SELECT * FROM quiz_answer WHERE category= " . $category[0]["categoryID"] . " AND answerID != " . $selectedQuestion["correct_answer"]
                );

                // Select three wrong answers and add them to the list of answers
                foreach (array_rand($wrongAnswers, 3) as $key) {
                    array_push($quizAnswers, $wrongAnswers[$key]);
                }

                // Shuffle the answers
                shuffle($quizAnswers);

                if ($questionType == "img") 
                {
                    return new ImageAnswerQuestion(
                        $selectedQuestion["questionID"],
                        $questionNumber,
                        $selectedQuestion["question"],
                        $this->convertToImageAnswerData($quizAnswers)
                    );
                }
                else if ($questionType == "txt")
                {
                    return new TextAnswerQuestion(
                        $selectedQuestion["questionID"],
                        $questionNumber,
                        $selectedQuestion["question"],
                        $this->convertToTextAnswerData($quizAnswers)
                    );
                }
            }
        }
        return null;
    }
}
?>