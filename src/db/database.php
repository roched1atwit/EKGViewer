<?php
    require_once("config.php");

    class Database {

        function __construct() { }
    
        function selectQuery($query) 
        {
            $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
            $error = mysqli_connect_error();

            if ($error == null) 
            {
                // Read data
                $result = mysqli_query($conn, $query);
    
                // Create an array with the results
                $data = array();
                while ($row = $result->fetch_assoc())
                {
                    array_push($data, $row);
                }

                mysqli_close($conn);
                return $data;
            }
            else 
            {
                mysqli_close($conn);
                return array("ERROR: " . $error);
            }
        }
    }
?>