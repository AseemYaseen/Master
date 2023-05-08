@extends('Admin.layouts.master')
@section('title')
Home
@endsection

@section('TheHead')
 Statistic Table
@endsection

@section('css')
<style>
  .budgetss{
    font-size: 16px;
    font-weight: bold;
    color: darkgreen;
  }
  .numUsers{
    font-size: 40px;
    color: darkgreen;
    text-align: center
  }
</style>
@endsection

@section('title_page')
Home
@endsection

@section('title_page2')
Control panel
@endsection

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">My website Details</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg">Number of registerd users</span>
                <span class="numUsers">{{$usersCount}}</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Since last week</span>
              </p>
            </div>
            
            <span class="text-bold text-lg">Most Chossen Budget</span>
            <br>
            @foreach ($mostRepeatedBudget as $budget)
            {{-- {{dd($budget)}} --}}
           <div class="budgetss">{{ $budget->budget_Range }} (repeated {{ $budget->count }} times)</div>
            @endforeach
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="visitors-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> This Week
              </span>

              <span>
                <i class="fas fa-square text-gray"></i> Last Week
              </span>
            </div>
          </div>
        </div>
        <!-- /.card -->
   
        <!-- /.card -->

        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@endsection 

@section('script')
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
@endsection 