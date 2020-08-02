<?php
class ImageAnswerData
{
    private $_headerText;
    private $_imgPath;
    private $_imgAlt;
    private $_answerText;

    function __construct($headerText, $imgPath, $imgAlt, $answerText) 
    {
        $this->_headerText = $headerText;
        $this->_imgPath = $imgPath;
        $this->_imgAlt = $imgAlt;
        $this->_answerText = $answerText;
    }

    function getHeaderText() 
    {
        return $this->_headerText;
    }

    function getImgPath() 
    {
        return $this->_imgPath;
    }

    function getImgAlt() 
    {
        return $this->_imgAlt;
    }

    function getAnswerText() 
    {
        return $this->_answerText;
    }
}
?>