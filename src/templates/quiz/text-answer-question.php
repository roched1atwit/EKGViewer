<?php
class TextAnswerQuestion 
{
    private $_questionNum;
    private $_questionText;
    private $_answers;

    function __construct($questionNum, $questionText, $answers)
    {
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
            echo "<div class='answer-wrapper'>";
            echo "<input type='radio' name='question" . $this->_questionNum . "' id='" . $this->_questionNum . $i . "'>";
            echo "<label for='" . $this->_questionNum . $i . "'>";
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