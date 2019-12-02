@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Boss</h1>

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>


    <body onload="startTime()">

    <div class="live-time" id="txt"></div>

    <div class="table100 ver5 m-b-110">
        <table data-vertable="ver5">
            <thead>
            <tr class="row100 head">
                <th class="column100 column1" data-column="column1"></th>
                <th class="column100 column2" data-column="column2">Monday</th>
                <th class="column100 column3" data-column="column3">Tuesday</th>
                <th class="column100 column4" data-column="column4">Wednesday</th>
                <th class="column100 column5" data-column="column5">Thursday</th>
                <th class="column100 column6" data-column="column6">Friday</th>
                <th class="column100 column7" data-column="column7">Saturday</th>
                <th class="column100 column8" data-column="column8">Sunday</th>
            </tr>
            </thead>
            <tbody>



            <tr class="row100">
                <td class="column100 column1" data-column="column1">02:00</td>
                <td class="column100 column2" data-column="column2">Kzarka</td>
                <td class="column100 column3" data-column="column3">Ancient Kutum</td>
                <td class="column100 column4" data-column="column4">Karanda</td>
                <td class="column100 column5" data-column="column5">Ancient Kutum</td>
                <td class="column100 column6" data-column="column6">Nouver</td>
                <td class="column100 column7" data-column="column7">Mirumok Destroyer Offin</td>
                <td class="column100 column8" data-column="column8">Kzarka</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">05:00</td>
                <td class="column100 column2" data-column="column2">Kzarka</td>
                <td class="column100 column3" data-column="column3">Kzarka</td>
                <td class="column100 column4" data-column="column4">Kzarka</td>
                <td class="column100 column5" data-column="column5">Nouver</td>
                <td class="column100 column6" data-column="column6">Karanda</td>
                <td class="column100 column7" data-column="column7">Nouver</td>
                <td class="column100 column8" data-column="column8">Ancient Kutum</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">09:00</td>
                <td class="column100 column2" data-column="column2">Kzarka</td>
                <td class="column100 column3" data-column="column3">Nouver</td>
                <td class="column100 column4" data-column="column4">Karanda</td>
                <td class="column100 column5" data-column="column5">Ancient Kutum</td>
                <td class="column100 column6" data-column="column6">Ancient Kutum</td>
                <td class="column100 column7" data-column="column7">Ancient Kutum</td>
                <td class="column100 column8" data-column="column8">Nouver</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">12:00</td>
                <td class="column100 column2" data-column="column2">Mirumok</td>
                <td class="column100 column3" data-column="column3">Ancient Kutum</td>
                <td class="column100 column4" data-column="column4">--</td>
                <td class="column100 column5" data-column="column5">Nouver</td>
                <td class="column100 column6" data-column="column6">Karanda</td>
                <td class="column100 column7" data-column="column7">Nouver</td>
                <td class="column100 column8" data-column="column8">Kzarka</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">16:00</td>
                <td class="column100 column2" data-column="column2">Ancient Kutum</td>
                <td class="column100 column3" data-column="column3">Nouver</td>
                <td class="column100 column4" data-column="column4">Ancient Kutum</td>
                <td class="column100 column5" data-column="column5">Kzarka</td>
                <td class="column100 column6" data-column="column6">Nouver</td>
                <td class="column100 column7" data-column="column7">Quint <br> Muraka</td>
                <td class="column100 column8" data-column="column8">Vell</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">19:00</td>
                <td class="column100 column2" data-column="column2">Nouver</td>
                <td class="column100 column3" data-column="column3">Karanda</td>
                <td class="column100 column4" data-column="column4">Mirumok Destroyer Offin</td>
                <td class="column100 column5" data-column="column5">Ancient Kutum</td>
                <td class="column100 column6" data-column="column6">Kzarka</td>
                <td class="column100 column7" data-column="column7">Karanda <br> Kzarka</td>
                <td class="column100 column8" data-column="column8">Garmoth</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">22:15</td>
                <td class="column100 column2" data-column="column2">Kzarka</td>
                <td class="column100 column3" data-column="column3">Garmoth</td>
                <td class="column100 column4" data-column="column4">Karanda <br> Kzarka</td>
                <td class="column100 column5" data-column="column5">Garmoth</td>
                <td class="column100 column6" data-column="column6">Ancient Kutum <br> Kzarka</td>
                <td class="column100 column7" data-column="column7">Conquest Wars</td>
                <td class="column100 column8" data-column="column8">Kzarka <br> Nouver</td>
            </tr>

            <tr class="row100">
                <td class="column100 column1" data-column="column1">23:15</td>
                <td class="column100 column2" data-column="column2">--</td>
                <td class="column100 column3" data-column="column3">--</td>
                <td class="column100 column4" data-column="column4">Quint <br> Maraka</td>
                <td class="column100 column5" data-column="column5">--</td>
                <td class="column100 column6" data-column="column6">--</td>
                <td class="column100 column7" data-column="column7">--</td>
                <td class="column100 column8" data-column="column8">--</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

