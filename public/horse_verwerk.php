<?php

    $database = "laravel";
    $host = "database";
    $user = "laravel";
    $pass = "laravel";

    $mysqli = mysqli_connect($host, $user, $pass, $database);

    $tierA = intval($_POST['tierA']);
    $tierB = intval($_POST['tierB']);

    $tierMin = 1;
    $tierMax = 1;

    //Tier range uitvogelen 
    if ($tierA == 1 && $tierB == 1)
    {
        $tierMin = 1;
        $tierMax = 2;
    }
    elseif ($tierA == 2 && $tierB == 2)
    {
        $tierMin = 2;
        $tierMax = 3;
    }
    elseif ($tierA == 3 && $tierB == 3)
    {
        $tierMin = 3;
        $tierMax = 4;
    }
    elseif ($tierA == 4 && $tierB == 4)
    {
        $tierMin = 4;
        $tierMax = 5;
    }
    elseif ($tierA == 5 && $tierB == 5)
    {
        $tierMin = 5;
        $tierMax = 6;
    }
    elseif ($tierA == 6 && $tierB == 6)
    {
        $tierMin = 6;
        $tierMax = 7;
    }
    elseif ($tierA == 7 && $tierB == 7)
    {
        $tierMin = 7;
        $tierMax = 8;
    }
    elseif ($tierA == 8 && $tierB == 8)
    {
        $tierMin = 7;
        $tierMax = 8;
    }
    elseif (($tierA == 1 && $tierB == 2) || ($tierA == 2 && $tierB == 1))
    {
        $tierMin = 1;
        $tierMax = 3;
    }
    elseif (($tierA == 1 && $tierB == 3) || ($tierA == 3 && $tierB == 1))
    {
        $tierMin = 1;
        $tierMax = 3;
    }
    elseif (($tierA == 1 && $tierB == 4) || ($tierA == 4 && $tierB == 1))
    {
        $tierMin = 2;
        $tierMax = 3;
    }
    elseif (($tierA == 1 && $tierB == 5) || ($tierA == 5 && $tierB == 1))
    {
        $tierMin = 2;
        $tierMax = 4;
    }
    elseif (($tierA == 1 && $tierB == 6) || ($tierA == 6 && $tierB == 1))
    {
        $tierMin = 2;
        $tierMax = 4;
    }
    elseif (($tierA == 1 && $tierB == 7) || ($tierA == 7 && $tierB == 1))
    {
        $tierMin = 2;
        $tierMax = 4;
    }
    elseif (($tierA == 1 && $tierB == 8) || ($tierA == 8 && $tierB == 1))
    {
        $tierMin = 2;
        $tierMax = 4;
    }
    elseif (($tierA == 2 && $tierB == 3) || ($tierA == 3 && $tierB == 2))
    {
            $tierMin = 2;
            $tierMax = 4;
    }
    elseif (($tierA == 2 && $tierB == 4) || ($tierA == 4 && $tierB == 2))
    {
                $tierMin = 2;
                $tierMax = 5;
    }
    elseif (($tierA == 2 && $tierB == 5) || ($tierA == 5 && $tierB == 2))
    {
                    $tierMin = 3;
                    $tierMax = 6;
    }
    elseif (($tierA == 2 && $tierB == 6) || ($tierA == 6 && $tierB == 2))
    {
                    $tierMin = 3;
                    $tierMax = 6;
    }
    elseif (($tierA == 2 && $tierB == 7) || ($tierA == 7 && $tierB == 2))
    {
                    $tierMin = 4;
                    $tierMax = 6;
    }
    elseif (($tierA == 2 && $tierB == 8) || ($tierA == 7 && $tierB == 8))
    {
                    $tierMin = 4;
                    $tierMax = 6;
    }
    elseif (($tierA == 3 && $tierB == 4) || ($tierA == 4 && $tierB == 3))
    {
                    $tierMin = 3;
                    $tierMax = 5;
    }
    elseif (($tierA == 3 && $tierB == 5) || ($tierA == 5 && $tierB == 3))
    {
                    $tierMin = 3;
                    $tierMax = 6;
    }
    elseif (($tierA == 3 && $tierB == 6) || ($tierA == 6 && $tierB == 3))
    {
                    $tierMin = 4;
                    $tierMax = 6;
    }
    elseif (($tierA == 3 && $tierB == 7) || ($tierA == 7 && $tierB == 3))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 3 && $tierB == 8) || ($tierA == 8 && $tierB == 3))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 4 && $tierB == 5) || ($tierA == 5 && $tierB == 4))
    {
                    $tierMin = 4;
                    $tierMax = 6;
    }
    elseif (($tierA == 4 && $tierB == 6) || ($tierA == 6 && $tierB == 4))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 4 && $tierB == 7) || ($tierA == 7 && $tierB == 4))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 4 && $tierB == 8) || ($tierA == 8 && $tierB == 4))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 5 && $tierB == 6) || ($tierA == 6 && $tierB == 5))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 5 && $tierB == 7) || ($tierA == 7 && $tierB == 5))
    {
                    $tierMin = 5;
                    $tierMax = 7;
    }
    elseif (($tierA == 5 && $tierB == 8) || ($tierA == 8 && $tierB == 5))
    {
                    $tierMin = 4;
                    $tierMax = 7;
    }
    elseif (($tierA == 6 && $tierB == 7) || ($tierA == 7 && $tierB == 6))
    {
                    $tierMin = 5;
                    $tierMax = 7;
    }
    elseif (($tierA == 6 && $tierB == 8) || ($tierA == 8 && $tierB == 7))
    {
                    $tierMin = 6;
                    $tierMax = 7;
    }
    elseif (($tierA == 7 && $tierB == 8) || ($tierA == 8 && $tierB == 7))
    {
                    $tierMin = 7;
                    $tierMax = 8;
    }



    //Tiers opties ophalen
    $qOpties = "SELECT `h`.`id` AS `horse_id`, `h`.`tier`, `speed`, `accel`, `agility`, `breaking` FROM `horses` as h JOIN `horsedata` ON `horse_id` = `h`.`id` WHERE `h`.`tier` BETWEEN " . $tierMin . " AND " . $tierMax . " ORDER BY RAND() LIMIT 1";


    $result = mysqli_query($mysqli, $qOpties);

    if($result)
    {
        $aOptions = array();

        // Pak de opties uit de database
        $row = mysqli_fetch_assoc($result);
        
        //Gooi Output
        echo "<table class='table'>";
        
            foreach($row as $k => $v)
            {
                if($k != "horse_id")
                {
                    echo "<tr>";

                        echo "<th class='w-50'>".$k."</th>";
                        echo "<td class='w-50'>".$v."</td>";

                    echo "</tr>";
                }
            }

        echo "</table>";

    }
    else
    {
        echo "<pre>";
            echo "Database fout \n";
            echo mysqli_error($mysqli) . "\n";
            echo mysqli_errno($mysqli) . "\n";
            echo $qOpties;
        echo "</pre>";
    }

?>