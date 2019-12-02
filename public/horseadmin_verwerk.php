<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');


    $database = "laravel";
    $host = "database";
    $user = "laravel";
    $pass = "laravel";

    $mysqli = mysqli_connect($host, $user, $pass, $database);

    $id = intval($_POST['id']);
    $field = htmlentities($_POST['field'], ENT_QUOTES);
    $value = htmlentities($_POST['value'], ENT_QUOTES);
    $action = htmlentities($_POST['action'], ENT_QUOTES);

    $aHorseFields = array('tier', 'breed', 'gender');
    $aHorseOptionsFields = array('speed', 'accel', 'agility', 'breaking');

    if($action == "update")
    {
        //De juiste tabel
        $tabel = "";
        if(inArray($aHorseFields, $field))
        {
            $tabel = "horses";
        }
        else if(inArray($aHorseOptionsFields, $field))
        {
            $tabel = "horsedata";
        }
        else
        {
            exit("Failed database");
        }

        //Type value bepalen
        if(is_numeric($value))
        {
            //Value is een nummer
            $query = "UPDATE `".$tabel."` SET `".$field."` = ".$value." WHERE `id`=".$id;
        }
        else
        {
            //Value is een string
            $query = "UPDATE `".$tabel."` SET `".$field."` = '".$value."' WHERE `id`=".$id;
        }

        if(mysqli_query($mysqli, $query))
        {
            exit("Ok");
        }
        else
        {
            echo mysqli_error($mysqli);
            echo "\n";
            echo mysqli_errno($mysqli);
            echo "\n";
            exit("Failed query");
        }
    }
    else if($action == 'delete')
    {
        $query = "DELETE FROM `horses` WHERE id = " . $id;
        $query2 = "DELETE FROM `horsedata` WHERE horse_id = " . $id;

        if(mysqli_query($mysqli, $query) && mysqli_query($mysqli, $query2))
        {
            exit("Ok");
        }
        else
        {
            echo mysqli_error($mysqli);
            echo "\n";
            echo mysqli_errno($mysqli);
            echo "\n";
            exit("Failed query"); 
        }

    }
    else if($action == 'create')
    {
        $query = "INSERT INTO `horses` (`tier`, `breed`) VALUES ('0', '0');";

        if(mysqli_query($mysqli, $query))
        {
            $query2 = "INSERT INTO `horsedata` (`speed`, `accel`, `agility`, `breaking`, `horse_id`) VALUES ('0', '0', '0', '0', '".mysqli_insert_id($mysqli)."');";
            if(mysqli_query($mysqli, $query2))
            {
                exit("Ok");
            }
            else
            {
                echo mysqli_error($mysqli);
                echo "\n";
                echo mysqli_errno($mysqli);
                echo "\n";
                exit("Failed query"); 
            }
        }
        else
        {
            echo mysqli_error($mysqli);
            echo "\n";
            echo mysqli_errno($mysqli);
            echo "\n";
            exit("Failed query"); 
        }

        
    }

    //De php array functie maken we zelf
    function inArray($arr, $val)
    {
        foreach($arr as $v)
        {
            if($v == $val)
            {
                return true;
            }
        }
    }

?>