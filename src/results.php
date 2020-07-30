<?php
include_once "./db/db_results.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>EKGViewer - Quiz Results</title>
    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./templates/css/page-template.css" rel="stylesheet" />
    <link href="./css/results.css" rel="stylesheet" />
</head>

<body>
    <?php include "./templates/page-header.php" ?>
    <section id="content-wrapper">

        <?php

            $db_res = new db_results();

            $qcount = 0;
            $tot_cor = 0;
            $qnames = [];
            $usr_answrs = [];
            $cor_answrs = [];

            foreach ($_POST as $quid => $usrans)
            {
                $q_info = $db_res->getQuestionInfo($quid);
                
                if($q_info == null){
                    echo "fatal error";
                }
                else
                {
                    foreach($q_info as $key => $value)
                    {

                        $qname = $value['question'];
                        $corans = $value['correct_answer'];

                    }


                    $qnames[$qcount] = $qname;
                    $usr_answrs[$qcount] = $usrans;
                    $cor_answrs[$qcount] = $corans;
                    $qcount = $qcount + 1;
                    
                    if($corans == $usrans)
                    {
                        $tot_cor += 1;
                    }
                }

            }

        ?>
        
        <article id="results-wrapper">
            <header>
                <?php
                    echo "<h1>Your Results: " . number_format(($tot_cor/$qcount), 2, '.', '')*100 . "%</h1>";
                ?>
            </header>
        </article>
        <section id="questions-wrapper">
            <table>
                <tr>
                    <th>Question No.</th>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                </tr>

                <?php
                    for($i = 0; $i < $qcount; $i++)
                    {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $qnames[$i] . "</td>";

                        if($usr_answrs[$i] == $cor_answrs[$i])
                        {
                            echo "<td style='background-color:green;'>" . $usr_answrs[$i] . "</td>";
                        }
                        else
                        {
                            echo "<td style='background-color:red;'>" . $usr_answrs[$i] . "</td>";
                        }

                        echo "<td>" . $cor_answrs[$i] . "</td>"; 
                        echo "</tr>";
                    }
                ?>
            </table>
        </section>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
