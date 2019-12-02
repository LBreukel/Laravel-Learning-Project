@extends('layout.layout')

@section('content')
<?php

    $database = "laravel";
    $host = "database";
    $user = "laravel";
    $pass = "laravel";

    $mysqli = mysqli_connect($host, $user, $pass, $database);

    $maleTiersQuery = "SELECT DISTINCT `tier` FROM `horses` WHERE `gender` = 'm'";
    $femaleTiersQuery = "SELECT DISTINCT `tier` FROM `horses` WHERE `gender` = 'f'";

    $resultMale = mysqli_query($mysqli, $maleTiersQuery);
    $resultFemale = mysqli_query($mysqli, $femaleTiersQuery);

    $maleTiers = "";
    $femaleTiers = "";

    while($row = mysqli_fetch_assoc($resultMale))
    {
        $maleTiers .= "<option value='".$row["tier"]."'>".$row["tier"]."</option>";
    }

    while($row = mysqli_fetch_assoc($resultFemale))
    {
        $femaleTiers .= "<option value='".$row["tier"]."'>".$row["tier"]."</option>";
    }

?>

    <div id="">
        <h1 class="mt-5">Horse calculator</h1>
        @can('edit horse')
            <div class="nav-item">
                <a class="nav-link" href="/horseadmin">Edit horses</a>
                @endcan
            </div>
        <form>

            <table class="table">

                <tr>
                    <th></th>
                    <th>Mare (female)</th>
                    <th>Colt (male)</th>
                    <th></th>
                </tr>

                <tr>
                    <th>Tier:</th>
                    <td>
                        <select id="tier_a" class="form-control">
                            <?php
                                echo $femaleTiers;
                            ?>
                        </select>
                    </td>
                    <td>
                        <select id="tier_b" class="form-control">
                            <?php
                                echo $maleTiers;
                            ?>
                        </select>
                    </td>
                    <td><input type="button" class="form-control btn btn-primary" id="submit" value="Calculate"></td>
                <tr>


            </table>
        </form>

    </div>

    <div id="result">
        <h2>Offspring</h2>

        <div id="output"></div>

    </div>

    <script>

        $("#submit").click(function(e) {

            e.preventDefault();

            var tierA = $("#tier_a").val();
            var tierB = $("#tier_b").val();

            //Pad gezien vanaf root
            $.post( "./horse_verwerk.php", { tierA: tierA, tierB: tierB } )
            .done(function(data) {
                $("#output").html(data);
            })
            .fail(function() {
                alert("That didn't work " + data);
            });

        });

    </script>

@endsection