<x-filament-panels::page>
    <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
        <div id="calendar"></div>
    </div>

    <style>
        #calendar {
            margin-top: 1rem;
            background: white;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    @push('scripts')
        {{-- Load CSS dan JS di luar Alpine agar tidak error --}}
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                initCalendar();
            });

            document.addEventListener("livewire:navigated", function () {
                initCalendar();
            });

            function initCalendar() {
                const calendarEl = document.getElementById("calendar");
                if (!calendarEl) return;

                // Hapus instance lama sebelum render ulang
                calendarEl.innerHTML = "";

                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: "dayGridMonth",
                    height: "auto",
                    events: @json($events),
                
                });

                calendar.render();
            }
        </script>
    @endpush
</x-filament-panels::page>
