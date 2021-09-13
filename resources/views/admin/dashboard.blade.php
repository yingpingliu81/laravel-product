@extends('layouts.admin')

@section('content')
    <div class="content">
     <div class="container-fluid mt-lg-5">
       <div class="row">
                   <div class="col-md-12">
                       <div class="card card-chart">
                           <div class="card-header card-header-warning">
                               <div class="ct-chart" id="completedTasksChart1"></div>
                           </div>
                           <div class="card-body">
                               <h4 class="card-title">Google Analytics ( <span class="card-category">Red Line: visitors</span>; <span class="card-category">White Line: pageViews</span>)</h4>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-12">
                       <div class="card card-chart">
                           <div class="card-header card-header-success">
                               <div class="ct-chart" id="dailySalesChart1"></div>
                           </div>
                           <div class="card-body">
                               <h4 class="card-title">Request Access Applications</h4>
                           </div>
                       </div>
                   </div>



               </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
