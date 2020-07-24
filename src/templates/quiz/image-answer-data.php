<?php
class ImageAnswerData
{
    private $_headerText;
    private $_imgPath;
    private $_imgAlt;

    function __construct($headerText, $imgPath, $imgAlt)
    {
        $this->_headerText = $headerText;
        $this->_imgPath = $imgPath;
        $this->_imgAlt = $imgAlt;
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