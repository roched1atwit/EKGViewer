<?php
class ImageAnswerData
{
    private $_answerId;
    private $_headerText;
    private $_imgPath;
    private $_imgAlt;

    function __construct($answerId, $headerText, $imgPath, $imgAlt)
    {
        $this->_answerId = $answerId;
        $this->_headerText = $headerText;
        $this->_imgPath = $imgPath;
        $this->_imgAlt = $imgAlt;
    }

    function getAnswerId()
    {
        return $this->_answerId;
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
}
?>