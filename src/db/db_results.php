
<?php
include_once "./db/database.php";

class db_results 
{
    private $_db;

    function __construct()
    {
        $this->_db = new Database();
    }

    private function subArraysToString($ar, $sep = ', ') {
        $str = '';
        foreach ($ar as $val) {
            $str .= implode($sep, $val);
            $str .= $sep; // add separator between sub-arrays
        }
        $str = rtrim($str, $sep); // remove last separator
        return $str;
    }

    function getQuestionInfo($questionNumber)
    {
        $question_str = $this->_db->selectQuery("SELECT question,correct_answer FROM quiz_question WHERE questionID='" . $questionNumber . "'");
        return $question_str;
    }
    
}
?>