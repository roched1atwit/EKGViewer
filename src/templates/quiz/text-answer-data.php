<?php
class TextAnswerData
{
    private $_headerText;
    private $_answerText;

    function __construct($headerText, $answerText)
    {
        $this->_headerText = $headerText;
        $this->_answerText = $answerText;
    }

    function getHeaderText()
    {
        return $this->_headerText;
    }
    function getAnswerText()
    {
        return $this->_answerText;
    }
}
?>