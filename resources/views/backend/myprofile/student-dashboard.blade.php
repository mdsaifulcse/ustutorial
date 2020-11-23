@extends('backend.app')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
@section('breadcrumb')
      <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
@endsection

@section('content')
    <style>
        h3 small{font-size: 50%;font-weight: normal;color:#fff !important;}
        .small-box h3{margin: 0 0 -5px 0;}
        .small-box>.small-box-footer{background: #202e56;}
        .bg-aqua{
            background-color: #a9b2b9 !important;
        }
        .text-info {
            color: #4465de;
        }
        .text-danger {
            color: #c7250a;
        }
        .text-success {
            color: #056b06;
        }
        .skin-green.custom-design .box-header {
            background: #a9b2b9;
        }
    </style>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- Attendance -->
          <?php $donutData = []; $present=0;$absence=0; ?>

          @foreach($attendances as $attendance)
          <?php if($attendance->attendance==1) $present+=1;else $absence+=1;?>

          <?php
          $donutData[]=["label" => 'Present', "value" => $present];
          $donutData[]=["label" => 'Absence', "value" => $absence];
          ?>
              @endforeach

        <div class="col-lg-3 col-sm-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 class="text-danger"> <small class="text-danger">Total Class: {{$attendances->count()}}</small></h3>
              <h3 class="text-info">  <small class="text-info">Present: {{$present}}</small></h3>
              <h3 class="text-success"> <small class="text-success">Absence: {{$absence}}</small></h3>
            </div>
         <h4 class="small-box-footer">My Attendance</h4>
          </div>
        </div>
          <!-- ./col -->

          <!-- Payment -->
          <div class="col-lg-3 col-sm-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                  <div class="inner">
                      <h3 class="text-danger"> <small class="text-danger">Total Payable:
                              @if($userInfo->total_paid==1)
                                  00
                                  @else
                                  {{$userInfo->payable_amount}}
                              @endif
                          </small></h3>
                      <h3 class="text-info"> <small class="text-info">Total Paid:
                              @if($userInfo->total_paid==1)
                                  00
                              @else
                                  {{$userInfo->total_paid}}
                              @endif


                          </small></h3>
                      <h3 class="text-success"> <small class="text-success">Dues:
                              @if($userInfo->total_paid==1)
                                  00
                              @else
                                  {{$userInfo->payable_amount-$userInfo->total_paid}}
                              @endif

                          </small></h3>
                  </div>
                  <h4 class="small-box-footer">My Payment</h4>
              </div>
          </div>
          <!-- Result -->
          <div class="col-lg-3 col-sm-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                  <div class="inner">
                      <h3 class="text-danger"><small class="text-danger"> Total Marks: {{$totalMarks}}</small></h3>
                      <h3 class="text-info"> <small class="text-info"> Obtain Marks: {{isset($myResult->total_marks)?$myResult->total_marks:0}}</small></h3>
                      <h3 class="text-success"> <small class="text-success"> Position: {{isset($myResult->position)?$myResult->position:''}} </small></h3>
                  </div>
                  <h4 class="small-box-footer">My Result ({{isset($myResult->exam_name)?$myResult->exam_name:''}})</h4>
              </div>
          </div>
          <!-- Bio -->
          <div class="col-lg-3 col-sm-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                  <div class="inner">
                      <h3 class="text-danger"><small class="text-danger"> {{auth::user()->name}}</small></h3>
                      <h3 class="text-info"> <small class="text-info"> {{auth::user()->mobile_no}}</small></h3>
                      <h3 class="text-success"> <small class="text-success">Branch: {{$branch}}</small></h3>
                  </div>
                  <h4 class="small-box-footer">Profile</h4>
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-md-6">
              <!-- DONUT CHART -->
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">My Attendance</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>

          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">My Result</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body chart-responsive">
                <div class="chart" id="line-chart" style="height: 300px;"></div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
      </div>
      <!-- /.row -->
  </section>


      <!-- Main row -->

      <!-- /.row (main row) -->


  @endsection


@section('script')

<script type="text/javascript">
// LINE CHART
var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data:'',
      xkey: 'total_marks',
      ykeys: ['obtain_marks'],
      labels: ['Tk.'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });
    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#6d98aa", "#202e56", "#fab72e",'#a9b2b9'],
      data: <?php echo json_encode($donutData)?>,
      hideHover: 'auto'
    });

            function photoLoad(input,image_load) {
                var target_image='#'+$('#'+image_load).prev().children().attr('id');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $(target_image).attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }


    </script>


@endsection
