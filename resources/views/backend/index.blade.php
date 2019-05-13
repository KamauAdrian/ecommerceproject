@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="#"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
                <li class="bg_lg span3"> <a href="{{route('users')}}"> <i class="icon-signal"></i> Charts</a> </li>
                <li class="bg_ly"> <a href="#"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                <li class="bg_lo"> <a href="#"> <i class="icon-th"></i> Tables</a> </li>
                <li class="bg_ls"> <a href="#"> <i class="icon-fullscreen"></i> Full width</a> </li>
                <li class="bg_lo span3"> <a href="#"> <i class="icon-th-list"></i> Forms</a> </li>
                <li class="bg_ls"> <a href="#"> <i class="icon-tint"></i> Buttons</a> </li>
                <li class="bg_lb"> <a href="#"> <i class="icon-pencil"></i>Elements</a> </li>
                <li class="bg_lg"> <a href="#"> <i class="icon-calendar"></i> Calendar</a> </li>
                <li class="bg_lr"> <a href="#"> <i class="icon-info-sign"></i> Error</a> </li>

            </ul>
        </div>
<canvas id="lineChart" height="400" width="400"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My First dataset',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [0, 10, 5, 2, 20, 30, 45]
                    }]
                },

                // Configuration options go here
                options: {}
            });
        </script>


    </div>
@endsection
@section('jsblock')
    <script src="{{url('js/chartjs.js')}}"></script>
    <script src="{{url('js/excanvas.min.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery.ui.custom.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.flot.min.js')}}"></script>
    <script src="{{url('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{url('js/jquery.peity.min.js')}}"></script>
    <script src="{{url('js/fullcalendar.min.js')}}"></script>
    <script src="{{url('js/matrix.js')}}"></script>
    <script src="{{url('js/matrix.dashboard.js')}}"></script>
    <script src="{{url('js/jquery.gritter.min.js')}}"></script>
    <script src="{{url('js/matrix.interface.js')}}"></script>
    <script src="{{url('js/matrix.chat.js')}}"></script>
    <script src="{{url('js/jquery.validate.js')}}"></script>
    <script src="{{url('js/jquery.wizard.js')}}"></script>
    <script src="{{url('js/jquery.uniform.js')}}"></script>
    <script src="{{url('js/select2.min.js')}}"></script>
    <script src="{{url('js/matrix.popover.js')}}"></script>
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/matrix.tablecds.js')}}"></script>
    <script src="{{url('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection