@extends('layout.layout')

@section('content')

<?php

    $database = "laravel";
    $host = "database";
    $user = "laravel";
    $pass = "laravel";

    $mysqli = mysqli_connect($host, $user, $pass, $database);

    //Paard opties ophalen
    $qOpties = "SELECT `h`.`id` AS `horse_id`, `h`.*, `hd`.* FROM `horses` as h JOIN `horsedata` AS `hd` ON `horse_id` = `h`.`id`";

    $row = array();

    $result = mysqli_query($mysqli, $qOpties);

    if($result)
    {
        $aOptions = array();

        
        //Gooi Output
        echo "<table class='table ver5' style='transition: background ease 0.2s' data-vertable='ver5'>";

            //Headers
            echo "<tr align='center' class='row100 head'>";
                echo "<th>ID</th>";
                echo "<th>Tier</th>";
                echo "<th>Breed</th>";
                echo "<th>Gender</th>";
                echo "<th>Speed</th>";
                echo "<th>Accel</th>";
                echo "<th>Agility</th>";
                echo "<th>Breaking</th>";
                echo "<th>Delete</th>";
            echo "</tr>";

            // Pak de opties uit de database 
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr class='horsedata row100' align='center' data-id='".$row['horse_id']."'>";
                    echo "<td>".$row['horse_id']."</td>";
                    echo "<td data-field='tier' data-length='1' contentEditable='true'>".$row['tier']."</td>";
                    echo "<td data-field='breed' data-length='45' contentEditable='true'>".$row['breed']."</td>";
                    echo "<td data-field='gender' data-length='1' contentEditable='true'>".$row['gender']."</td>";
                    echo "<td data-field='speed' data-length='3' contentEditable='true'>".$row['speed']."</td>";
                    echo "<td data-field='accel' data-length='3' contentEditable='true'>".$row['accel']."</td>";
                    echo "<td data-field='agility' data-length='3' contentEditable='true'>".$row['agility']."</td>";
                    echo "<td data-field='breaking'  data-length='3' contentEditable='true'>".$row['breaking']."</td>";
                    echo "<td><a class='delete' href='javascript:void();'><svg height='22px' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path d=\"M192 188v216c0 6.627-5.373 12-12 12h-24c-6.627 0-12-5.373-12-12V188c0-6.627 5.373-12 12-12h24c6.627 0 12 5.373 12 12zm100-12h-24c-6.627 0-12 5.373-12 12v216c0 6.627 5.373 12 12 12h24c6.627 0 12-5.373 12-12V188c0-6.627-5.373-12-12-12zm132-96c13.255 0 24 10.745 24 24v12c0 6.627-5.373 12-12 12h-20v336c0 26.51-21.49 48-48 48H80c-26.51 0-48-21.49-48-48V128H12c-6.627 0-12-5.373-12-12v-12c0-13.255 10.745-24 24-24h74.411l34.018-56.696A48 48 0 0 1 173.589 0h100.823a48 48 0 0 1 41.16 23.304L349.589 80H424zm-269.611 0h139.223L276.16 50.913A6 6 0 0 0 271.015 48h-94.028a6 6 0 0 0-5.145 2.913L154.389 80zM368 128H80v330a6 6 0 0 0 6 6h276a6 6 0 0 0 6-6V128z\"/></svg><a></td>";
                echo "</tr>";
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

<button class="btn btn-primary btn-lg" id='new'>New Horse</button>

<script>
    
    /* Nieuw Paard */

    $("#new").click(function() {

        $.post( "./horseadmin_verwerk.php", { id: 0, field: '', value: '', action: 'create' } )
        .done(function(data) {

            if(data == "Ok")
            {
                window.location.reload();
            }
            else
            {
                alert(data);
            }

        })
        .fail(function() {

            alert("Not working properly");

        });

    });

    /* Border Stuff */
    $("td[contentEditable=true]").focusin(function() {

        $(this).data('focused', true);

    }).focusout(function() {

        $(this).data('focused', false);
        $(this).removeClass('border');
        $(this).removeClass('border-dark');

    });

    $("td[contentEditable=true]").mouseenter(function() {

        $(this).addClass('border');
        $(this).addClass('border-dark');

    }).mouseleave(function() {

        if(!$(this).data('focused'))
        {
            $(this).removeClass('border');
            $(this).removeClass('border-dark');
        }

    });

    /* Block Illegal Characters */
    $("td[contentEditable=true]").keypress(function(event) {

        var regex = new RegExp("^[a-zA-Z0-9\b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        var code = event.which ? event.which : event.keyCode;
        if (!regex.test(key) && (code !== 37 && code !== 39)) {
            event.preventDefault();
            return false;
        }

    });

    /* Update on change and trim lenght */
    $("td[contentEditable=true]").focusout(function() {

        var newVal = $(this).text();
        var id = $(this).parent().data('id');
        var field = $(this).data('field');

        var maxLenght = $(this).data('length');

        if(newVal.length > maxLenght)
        {
            newVal = newVal.substring(0, maxLenght);
            $(this).text(newVal);
        }

        console.log(newVal);
        console.log(id);
        console.log(field);


        //Pad gezien vanaf root
        $.post( "./horseadmin_verwerk.php", { id: id, field: field, value: newVal, action: 'update' } )
        .done(function(data) {

            if(data == "Ok")
            {
                $("table").addClass("bg-success");
                setTimeout(() => {
                    $("table").removeClass("bg-success");
                }, 500);
            }
            else
            {
                alert(data);
            }

        })
        .fail(function() {

            alert("Not working properly");

        });



    });

    //Delete rij
    $(".delete").click(function(e) {
    
        e.preventDefault();

        var id = $(this).parent().parent().data('id');

        if(confirm("Weet je zeker dat je deze rij wilt verwijderen?"))
        {
            $.post( "./horseadmin_verwerk.php", { id: id, field: '', value: '', action: 'delete' } )
            .done(function(data) {

                if(data == "Ok")
                {
                    window.location.reload();
                }
                else
                {
                    alert(data);
                }

            })
            .fail(function() {

                alert("not working properly");

            });
        }
        return;

    });

</script>

@endsection