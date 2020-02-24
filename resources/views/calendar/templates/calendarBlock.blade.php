<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" media="print" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css"/>


</head>
<body>

    <div class = "jumbotron">
        <h2> Schedule for Patients Medicine Time and Date Calendar </h2>
        <div class = "row">
            <a href="calendar/templates/addCalendar" class = "btn btn-success">Add Patient Schedule</a>

            <a href="calendar/templates/display" class = "btn btn-primary">Update Patient Schedule</a>

            <a href="calendar/templates/display" class = "btn btn-danger">Delete Patient Schedule</a>

        </div>

    <div class = "container">

        {!! $calendar->calendar() !!}
       {!! $calendar->script() !!}
       </div>
    </div>
</body>
</html>


