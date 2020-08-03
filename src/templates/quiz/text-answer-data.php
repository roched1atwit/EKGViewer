<?php
class TextAnswerData
{
    private $_answerId;
    private $_headerText;
    private $_answerText;

    function __construct($answerId, $headerText, $answerText)
    {
        $this->_answerId = $answerId;
        $this->_headerText = $headerText;
        $this->_answerText = $answerText;
    }

    function getAnswerId()
    {
        return $this->_answerId;
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