<html>
<head>
 <link rel="stylesheet" href="fassest/fullcalendar.css">
    <link rel="stylesheet" href="fassest/fullcalendar.print.css">
    <link rel="stylesheet" href="fassest/jquery-ui.min.css">
    <script src='fassest/jquery.min.js'></script>
    <script src='fassest/moment.min.js'></script>
    <script src='fassest/fullcalendar.js'></script>
    <script src='fassest/jquery-ui.custom.min.js'></script>


</head>
<body>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<div id='calendar'></div>
<script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            theme: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2016-06-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-06-01'
                },
                {
                    title: 'Long Event',
                    start: '2016-06-07',
                    end: '2016-06-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-06-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-06-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-06-11',
                    end: '2016-06-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-06-12T10:30:00',
                    end: '2016-06-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-06-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2016-06-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2016-06-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2016-06-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2016-06-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2016-06-28'
                }
            ]
        });

    });
</script>
</body>
</html>