<?php
class TextAnswerQuestion
{
    private $_questionId;
    private $_questionNum;
    private $_questionText;
    private $_answers;

    function __construct($questionId, $questionNum, $questionText, $answers)
    {
        $this->_questionId = $questionId;
        $this->_questionNum = $questionNum;
        $this->_questionText = $questionText;
        $this->_answers = $answers;
    }

    public function output()
    {
        echo "<h1>Question " . $this->_questionNum . " - " . $this->_questionText . "</h1>";
        echo "<section class='question-wrapper'>";
        for ($i = 0; $i < count($this->_answers); $i++) 
        {
            // Used to link the radio button and the label
            $uid = $this->_questionId . "-" . $this->_answers[$i]->getAnswerId();

            echo "<div class='answer-wrapper'>";
            echo "<input type='radio' name='" . $this->_questionId . "' id='" . $uid . "' value='" . $this->_answers[$i]->getAnswerId() . "'>";
            echo "<label for='" . $uid . "'>";
            echo "<article>";
            echo "<header>";
            echo "<h2>" . $this->_answers[$i]->getHeaderText() . "</h2>";
            echo "</header>";
            echo "<p>" . $this->_answers[$i]->getAnswerText() . "</p>";
            echo "</article>";
            echo "</label>";
            echo "</div>";
        }
        echo "</section>";
    }
}
?>