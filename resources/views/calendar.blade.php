<x-app-layout>
    @section('scripts-meta')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div wire:ignore id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: '2024-03-07',
            headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
            {
                title: 'All Day Event',
                start: '2024-03-01'
            },
            {
                title: 'Long Event',
                start: '2024-03-07',
                end: '2024-03-10'
            },
            {
                groupId: '999',
                title: 'Repeating Event',
                start: '2024-03-09T16:00:00'
            },
            {
                groupId: '999',
                title: 'Repeating Event',
                start: '2024-03-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2024-03-11',
                end: '2024-03-13'
            },
            {
                title: 'Meeting',
                start: '2024-03-12T10:30:00',
                end: '2024-03-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2024-03-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2024-03-12T14:30:00'
            },
            {
                title: 'Birthday Party',
                start: '2024-03-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'https://google.com/',
                start: '2024-03-28'
            }
            ]
        });

        calendar.render();
        });
    </script>
    @endsection
</x-app-layout>
