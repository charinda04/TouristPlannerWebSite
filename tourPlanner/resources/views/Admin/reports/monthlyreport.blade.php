@extends('Admin/index')

@section('content')

<div class="card-body">
    <div>
        <select>
            <option value="ALL">ALL</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>

        </select>


        <a href="{{ url('user/viewproperty/')}}" class="btn btn-info">View</a> 
    </div>
    <br>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Monthly Report</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div><!-- /.box-header -->
        
        <div class="box-body">
            <canvas id="officers_chart" width="400" height="125"></canvas>
        </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>
    {{-- $(document).ready(function () {
        $('#officers').DataTable();
        $('#retired_officers').DataTable();
        $('#other_reports').DataTable();
    }); --}}

    var lable = {!! json_encode(unserialize($label)) !!};
    var data = {!! json_encode(unserialize($data)) !!};

    console.log(lable);
    console.log(data);

    var ctx = $("#officers_chart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: lable,
            datasets: [{
                label: 'Income Amount',
                data: data,
                borderWidth: 1,
                backgroundColor: "black"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>





@endsection