<?php
class EkgRhythmInfo 
{
    private $_rhythmName;
    private $_imgPath;
    private $_imgAlt;
    private $_rate;
    private $_rhythm;
    private $_pWave;
    private $_prInterval;
    private $_qrsComplex;

    function __construct($rhythmName, $imgPath, $imgAlt, $rate, $rhythm, $pWave, $prInterval, $qrsComplex)
    {
        $this->_rhythmName = $rhythmName;
        $this->_imgPath = $imgPath;
        $this->_imgAlt = $imgAlt;
        $this->_rate = $rate;
        $this->_rhythm = $rhythm;
        $this->_pWave = $pWave;
        $this->_prInterval = $prInterval;
        $this->_qrsComplex = $qrsComplex;
    }

    function output()
    {
        echo "<article>";
        echo "<header>";
        echo "<h2>" . $this->_rhythmName . "</h2>";
        echo "</header>";
        echo "<figure>";
        echo "<img src='" . $this->_imgPath . "' alt='" . $this->_imgAlt . "'>";
        echo "<figcaption>";
        echo "<strong>Rate: </strong>" . $this->_rate . "<br />";
        echo "<strong>Rhythm: </strong>" . $this->_rhythm . "<br />";
        echo "<strong>P Wave: </strong>" . $this->_pWave . "<br />";
        echo "<strong>PR Interval: </strong>" . $this->_prInterval . "<br />";
        echo "<strong>QRS Complex: </strong>" . $this->_qrsComplex . "<br />";
        echo "</figcaption>";
        echo "</figure>";
        echo "</article>";
    }
}
?>