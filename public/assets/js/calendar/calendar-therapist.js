document.addEventListener('DOMContentLoaded', function() {
    var calendarEvents = window.calendarEvents; // Access the global variable from the Blade template

    /* Initialize the external events */
    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });

    /* Initialize the calendar */
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        initialView: 'dayGridMonth',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        selectable: true,
        nowIndicator: true,
        events: calendarEvents, // Use the events from the global variable
        droppable: true, // this allows things to be dropped onto the calendar
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // Prevent the default action

            var details = info.event.extendedProps.details;
            $('#eventDetailsBody').html(details);
            $('#viewDetailsLink').attr('href', info.event.url);
            $('#eventDetailsModal').modal('show');
        },
        drop: function(arg) {
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
        }
    });

    calendar.render();
});
