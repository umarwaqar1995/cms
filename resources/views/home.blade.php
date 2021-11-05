@extends('layouts.app')
@section('content')


@if($login_user->role_id==1)

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $chart_data ?>
        ]);

        var options = {
          title: 'Agent Sales'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-dark">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($sales)}}</div>
                <div>Total Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($initiate_sales)}}</div>
                <div>Initiate Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-info">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($pending_sales)}}</div>
                <div>Pending Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($cancelled_sales)}}</div>
                <div>Cancelled Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>   
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-success">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($completed_sales)}}</div>
                <div>Completed Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($declined_sales)}}</div>
                <div>Declined Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-light">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($processed_sales)}}</div>
                <div>Processed Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-secondary">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($charged_sales)}}</div>
                <div>Charged Sales Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>   
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">Line Chart 
          <div class="card-header-actions"></div>
          </div>
          <div class="card-body">
          <div class="c-chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          {{-- <canvas id="canvas-1" style="display: block; width: 465px; height: 232px;" width="465" height="232" class="chartjs-render-monitor"></canvas> --}}
          <div id="curve_chart"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">Pie Chart
          <div class="card-header-actions"></div>
          </div>
          <div class="card-body">
          <div class="c-chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          {{-- <canvas id="canvas-1" style="display: block; width: 465px; height: 232px;" width="465" height="232" class="chartjs-render-monitor"></canvas> --}}
          <div id="piechart"></div>
          </div>
          </div>
        </div>
    </div>
  </div>
@elseif($login_user->role_id==5)
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-dark">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($sales)}}</div>
                <div>Total Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($initiate_sales)}}</div>
                <div>Initiate Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-info">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($pending_sales)}}</div>
                <div>Pending Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($cancelled_sales)}}</div>
                <div>Cancelled Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>   
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-success">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($completed_sales)}}</div>
                <div>Completed Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($declined_sales)}}</div>
                <div>Declined Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-light">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($processed_sales)}}</div>
                <div>Processed Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-secondary">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
              <div class="text-value-lg">{{count($charged_sales)}}</div>
                <div>Charged Sales Sales</div>
            </div>
          </div>
          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 202px; height: 70px;" width="202"></canvas>
              <div id="card-chart1-tooltip" class="c-chartjs-tooltip bottom top" style="opacity: 0; left: 147.537px; top: 140.396px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">July</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(50, 31, 219);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">40</span></div></div></div></div>
        </div>
      </div>   
    </div>
  </div>

@endif

@endsection
  
    

