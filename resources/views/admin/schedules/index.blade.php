<!-- resources/views/admin/schedules/index.blade.php -->
@extends('layouts.simple.master-admin')
@section('title', 'Schedule Lists')

@section('css')
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
@endsection

@section('style')
@endsection



@section('breadcrumb-title')
    <h3>Schedules</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Therapy Schedules</li>
@endsection



@section('content')



<!-- Include FullCalendar styles and scripts -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js'></script>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
         <div class="card-body">
<!-- Calendar -->
<div id="calendar"></div>

<!-- Hidden table section that will be toggled -->
<div id="data-table-section" style="display: none; margin-top: 20px;">
    <h4>Schedule List in Data Table</h4>
    <div class="card-body">
        <div class="dt-ext table-responsive">
            <table class="display" id="export-button">
                <thead>
                    <tr>
        
                <th>Child Name</th>
                <th>Session</th>
                <th>Therapist</th>
                <th>Date</th>
                <th>Time</th>
                <th>Price</th>
                <th>Status</th>
                <th>Remark</th>
                <th>Actions</th> <!-- Add the column for Edit button -->
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule->child_name }}</td>
                <td>{{ $schedule->session }}</td>
                <td>{{ $schedule->therapist }}</td>
                <td>{{ \Carbon\Carbon::parse($schedule->date)->format('Y-m-d') }}</td>
                <td>{{ \Carbon\Carbon::parse($schedule->time)->format('H:i:s') }}</td>
                <td>{{ $schedule->price }}</td>
                <td>{{ $schedule->status }}</td>
                <td>{{ $schedule->remark }}</td>
                <td>
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Child Name</th>
                <th>Session</th>
                <th>Therapist</th>
                <th>Date</th>
                <th>Time</th>
                <th>Price</th>
                <th>Status</th>
                <th>Remark</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>

    <!-- Pagination -->
   <!-- Pagination -->


</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'customButton'
        },

        customButtons: {
            customButton: {
                text: 'VIEW DATA TABLE',
                click: function() {
                    var tableSection = document.getElementById('data-table-section');
                    if (tableSection.style.display === 'none') {
                        tableSection.style.display = 'block';
                        tableSection.scrollIntoView({ behavior: 'smooth' });
                    } else {
                        tableSection.style.display = 'none';
                    }
                }
            }
        },

        eventContent: function(arg) {
            let eventHtml = `<div class="fc-event-title">
                                ${arg.event.extendedProps.child_name}<br>
                                ${arg.event.extendedProps.session}<br>
                                <span style="color: orange;">${arg.event.extendedProps.therapist}</span><br>
                                ${arg.event.extendedProps.time}
                             </div>`;
            return { html: eventHtml };
        },

        events: {!! json_encode($schedules->map(function ($schedule) {
            return [
                'child_name' => $schedule->child_name,
                'session' => $schedule->session,
                'therapist' => $schedule->therapist,
                'time' => $schedule->time,
                'start' => \Carbon\Carbon::parse($schedule->date . ' ' . $schedule->time)->format('Y-m-d\TH:i:s'),
                'end' => \Carbon\Carbon::parse($schedule->date . ' ' . $schedule->time)->format('Y-m-d\TH:i:s'),
                'extendedProps' => [
                    'child_name' => $schedule->child_name,
                    'session' => $schedule->session,
                    'therapist' => $schedule->therapist,
                    'time' => $schedule->time,
                    'price' => $schedule->price,
                    'status' => $schedule->status,
                    'remark' => $schedule->remark
                ]
            ];
        }), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    });

    calendar.render();
});
</script>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
@endsection
