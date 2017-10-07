<!-- ###########################
    Page Specific Scripts
#############################-->


<script type="text/javascript">
    
    
    
    // LINE chart
$(function () {
    "use strict";
// LINE CHART CASES
    var line = new Morris.Line({
        element: 'line-chart-cases',
        resize: true,
        data: [
            {y: '2016 Q1', item1: 2666},
            {y: '2016 Q2', item1: 2778},
            {y: '2016 Q3', item1: 4912},
            {y: '2016 Q4', item1: 3767},
            {y: '2017 Q1', item1: 6810},
            {y: '2017 Q2', item1: 20},
            {y: '2017 Q3', item1: 200},
            {y: '2017 Q4', item1: 0}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
    });
// LINE CHART MEDICAL
    var line = new Morris.Line({
        element: 'line-chart-medical',
        resize: true,
        data: [
            {y: '2016 Q1', item1: 2666},
            {y: '2016 Q2', item1: 2778},
            {y: '2016 Q3', item1: 4912},
            {y: '2016 Q4', item1: 3767},
            {y: '2017 Q1', item1: 6810},
            {y: '2017 Q2', item1: 5670},
            {y: '2017 Q3', item1: 4820},
            {y: '2017 Q4', item1: 15073}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
    });
});
// LINE chart END

    
    
    
// calendar
$(function () {

     /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate();
        m = date.getMonth();
        y = date.getFullYear();
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
        },
        //Random default events
        events: [
            {
                title: 'All Day Event',
                start: new Date(y, m, 1),
                backgroundColor: '#f56954', //red
                borderColor: '#f56954' //red
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: '#f39c12', //yellow
                borderColor: '#f39c12' //yellow
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: '#0073b7', //Blue
                borderColor: '#0073b7' //Blue
            },
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#00c0ef', //Info (aqua)
                borderColor: '#00c0ef' //Info (aqua)
            },
            {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#00a65a', //Success (green)
                borderColor: '#00a65a' //Success (green)
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: '#3c8dbc', //Primary (light-blue)
                borderColor: '#3c8dbc' //Primary (light-blue)
            }
        ],
        editable: false,
        droppable: false, // this allows things to be dropped onto the calendar !!!

    });
});
</script>