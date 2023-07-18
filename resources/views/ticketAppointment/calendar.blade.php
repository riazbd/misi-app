@extends('adminlte::page')

@section('content')
    <div id='calendar'></div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/calendar-events',
                eventContent: function(info) {
                    return {
                        html: '<div class="fc-event-title">' + info.event.title + '</div>',
                        display: 'block'
                    };
                },
                eventDidMount: function(info) {
                    var eventStartTime = info.event.start.toLocaleTimeString([], {
                        hour: 'numeric',
                        minute: '2-digit'
                    });
                    var eventEndTime = info.event.end.toLocaleTimeString([], {
                        hour: 'numeric',
                        minute: '2-digit'
                    });

                    var timeHtml = '<div class="fc-time">' + eventStartTime + ' - ' + eventEndTime +
                        '</div>';
                    $(info.el).find('.fc-title').prepend(timeHtml);
                }
            });
            calendar.render();

            // $('#filterForm').on('change', 'input[type="checkbox"]', function() {
            //     var selectedFilters = getSelectedFilters();

            //     calendar.fullCalendar('clientEvents', function(event) {
            //         var shouldShow = filterEvent(event, selectedFilters);
            //         event.shouldShow = shouldShow;
            //         return shouldShow;
            //     });

            //     calendar.fullCalendar('rerenderEvents');
            // });

            // function getSelectedFilters() {
            //     var selectedFilters = {};

            //     var selectedCategory = $('#categoryFilter').val();
            //     selectedFilters.category = selectedCategory;

            //     var selectedTags = [];
            //     $('#tagFilter input[type="checkbox"]:checked').each(function() {
            //         selectedTags.push($(this).val());
            //     });
            //     selectedFilters.tags = selectedTags;

            //     return selectedFilters;
            // }

            // function filterEvent(event, filters) {
            //     var shouldShow = true;

            //     if (filters.category && event.category !== filters.category) {
            //         shouldShow = false;
            //     }

            //     if (filters.tags && filters.tags.length > 0) {
            //         var eventTags = event.tags || [];
            //         var matchingTags = eventTags.filter(function(tag) {
            //             return filters.tags.includes(tag);
            //         });
            //         if (matchingTags.length === 0) {
            //             shouldShow = false;
            //         }
            //     }

            //     return shouldShow;
            // }
        });
    </script>
@stop
