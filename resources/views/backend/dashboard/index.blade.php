@extends('backend.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/slick/slick.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/slick/slick-theme.css')}}"/>
@endsection

@section('content')
<section class="content">
    <style>
        .branch-btn{margin: 5px;padding: 15px 5px;} 
        .all-branch-list{background:#d9f0f7;padding:10px;}   
        .slick-slider{width:97%;margin:0 auto}
        .slick-prev, .slick-next{width: 40px;height: 40px;top: 45%;}
        .slick-next {right: -35px;}
        .slick-prev {left: -35px;}
        .slick-prev:before, .slick-next:before{font-size: 40px;font-family: fontAwesome}
        .slick-next:before{content:"\f105"}
        .slick-prev:before{content:"\f104"}
        .branch-indicate{width:93px;display: inline-block;}
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="all-branch-list">
                <div class="slick-slider">
                        <a href="" class="btn btn-lg btn-default branch-btn">All Branch</a>
                        @foreach($branches as $branch)
                        <?php
                          $slug = MyHelper::slugify($branch->name)
                        ?>
                <a href='{{url("dashboard?branch=$slug")}}' class="btn btn-lg btn-info branch-btn"> {{$branch->name}} </a>
                        @endforeach
                </div>
            </div>

        </div>
    </div>
    <div class="row">

        
            <div class="col-md-4">
                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                    <h3 class="box-title student-donut-title" >Booked Students</h3>

                    <div class="box-tools pull-right">
                       <select class="form-control total-student-donut" onchange="loadStudentType()">
                           <option value="0">Booked</option>
                           <option value="1">Registered</option>
                           <option value="2" selected>Admitted</option>
                       </select>
                    </div>
                    </div>
                    <div class="box-body chart-responsive">
                    <div class="chart" id="enrolled-students" style="height: 300px; position: relative;"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <div class="col-md-12" id="students-total-footer">
                          {{-- Load Here color note --}}
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Payment Summary</h3>
    
                        <div class="box-tools pull-right">
                            <select class="form-control yearSelect" onchange="yearlyPayment()">
                              <?php for($i=0;$i<5;$i++){ ?>
                              <option value="{{date('Y')-$i}}" {{date('Y')-$i==date('Y')?'selected':''}}>{{date('Y')-$i}}</option>
                              <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="box-body chart-responsive">
                        <canvas id="line-chart" height="373"  style="height: 373px;"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>
                
            </div>
          </div>
    <div class="row">   
          <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Students Attendance</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                        <canvas id="myChart" height="373"  style="height: 373px;"></canvas>
                </div>
                <!-- /.box-body -->
            </div>
              
          </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Payment Status</h3>

                    <div class="box-tools pull-right">
                        Year of <b>{{date('Y')}}</b>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <canvas id="pie-chart" height="300"  style="height: 300px;"></canvas>
                </div>
                <!-- /.box-body -->
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Course Wise Payment</h3>

                    <div class="box-tools pull-right">
                        Year of <b>{{date('Y')}}</b>
                        <select class="form-control payment-year" style="display:none">
                          <?php for($i=0;$i<5;$i++){ ?>
                          <option value="{{date('Y')-$i}}" {{date('Y')-$i==date('Y')?'selected':''}}>{{date('Y')-$i}}</option>
                          <?php }?>
                        </select>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <canvas id="doughnut-chart" height="300"  style="height: 300px;"></canvas>
                </div>
                <!-- /.box-body -->
            </div>
            
        </div>
    </div>
   
</section>

    
@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<script type="text/javascript" src="{{asset('public/backend/assets/slick/slick.min.js')}}"></script>

  <script type="text/javascript">
  var colors = ['#1f6fd2','#4fbebd','#ff7b49','#05b502','#9ba502','#1e5002','#500202','#0a0250','#4d4e13','#f0498e','#156b6a','red','green','blue','orange']
  loadStudentType()
  yearlyPayment()
  paymentStatus()
  coursePayment()
  function loadStudentType(){
    var title = ['Booked','Registered','Admitted'];
    var type = $('.total-student-donut').val();
    $('.student-donut-title').html(title[type]+' Students');
    $.get('{{url("total-students")}}/'+type,function(data,status){
        totalStudents(data)
    })
  }
    
    //Total Students (DONUT CHART)
    function totalStudents(allData){
      
        var data = allData.data
        if(allData.total>0){
            var donut = new Morris.Donut({
                element: 'enrolled-students',
                resize: true,
                colors: colors,
                data: data,
                hideHover: 'auto'
            });
        }else{
            $('#enrolled-students').html('<h1 class="text-danger text-center">Total : 0</h1>')
        }
        
        
        html = '';
      for(i in data){
          html += '<span class="branch-indicate"> <i class="fa fa-circle" aria-hidden="true" style="color:'+colors[i]+'"></i> '+data[i].label+'</span>';
          
      }
      $('#students-total-footer').html(html)

    }

 // LINE CHART
 function yearlyPayment(){
  var year = $('.yearSelect').val();
  $.get('{{url("yearly-payment")}}/'+year,function(data,status){
    var months =[];
    var amount =[];
    for(var i in data){
      months.push(data[i].month_name)
      amount.push(data[i].total_amount)

    }
      var ctx1 = document.getElementById('line-chart').getContext('2d');
      var myChart = new Chart(ctx1, {
          type: 'line',
          data: {
              labels: months,
              datasets: [{
                  label: 'Payment',
                  data: amount,
                  backgroundColor: '#aeecfb',
                  borderColor:'#8fe6fb'
              }
              ]
          },
          options: {
              legend: {
                  display: false
              },
              maintainAspectRatio: false,
            
          }
      });
    })
 }

// Pie
function paymentStatus(){
  var year = "{{date('Y')}}";
  $.get('{{url("yearly-payment")}}/'+year+'?type=status',function(data,status){
    var value = [];
    value.push(data.payable_amount-data.total_paid-data.discount_amount)
    value.push(data.total_paid)
    value.push(data.payable_amount)
    value.push(data.discount_amount)
  var ctx2 = document.getElementById('pie-chart').getContext('2d');
      var myChart = new Chart(ctx2, {
          type: 'pie',
          data: {
              labels: ['Amount Dues','Amount Received','Amount Receivable','Discount Amount'],
              datasets: [{
                  data: value,
                  backgroundColor: ['orange','green','#aeecfb','Yellow'],
                  borderColor:'#fff'
              }]
          },
          options: {
            plugins: {
              labels: [{
                render: 'value',
                fontSize: 12,
                fontStyle: 'bold',
                fontColor: ['#333','#fff','#fff'],
                arc: true,
                position: 'border'
              },
              {
                render:'label',
                fontSize: 14,
                fontStyle: 'bold',
                fontColor: ['orange','green','#00c0ef','red'],
                position: 'outside'
              }]
            },
              legend: {
                  display: false
              },
              maintainAspectRatio: false,
            
          }
      });
    })
}


// doughnut
function coursePayment(){
  var year = $('.yearSelect').val();
  $.get('{{url("yearly-payment")}}/'+year+'?type=course',function(data,status){
    console.log(data)
    var labels =[];
    var amount =[];
    for(var i in data){
      labels.push(data[i].name)
      amount.push(data[i].total_paid)
    }
var ctx3 = document.getElementById('doughnut-chart').getContext('2d');
      var myChart = new Chart(ctx3, {
          type: 'doughnut',
          data: {
              labels: labels,
              datasets: [{
                  data: amount,
                  backgroundColor: colors,
                  borderColor:'#fff',
                  arc: true,
                  position: 'border'
              }]
          },
          options: {
            plugins: {
              labels: [{
                render: 'value',
                fontSize: 12,
                fontStyle: 'bold',
                fontColor: '#fff',
              },
              {
                render:'label',
                fontSize: 14,
                fontStyle: 'bold',
                fontColor: colors,
                position: 'outside'
              }]
            },
              legend: {
                  display: false
              },
              maintainAspectRatio: false,
            
          }
      })
      });
}



    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($branchName)?>,
            datasets: [{
                label: 'Attendance',
                data: [1200, 190, 300, 1500, 2000, 1300,1200, 1900, 400, 2500, 2000,1200, 1800,1100,100],
                backgroundColor: '#00c0ef',
            },
            {
                label: 'Absent',
                data: [ 400, 2500, 2000,1200, 1800,1100,1500, 190, 300, 1500, 1800, 1300,1200, 1900,500],
                backgroundColor: '#ccc',
            }
            ]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    barThickness: 20,
                    minBarLength: 6,
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    },
                   
                }]
            }
        }
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('.slick-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 9,
            slidesToScroll: 9,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
    });
  </script>
@endsection