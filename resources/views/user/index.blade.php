@extends('layouts.app')

@section('header')
@include('partials.user.header')
@endsection

@section('body')
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="row top_tiles">             
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">               
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-car"></i></div>
                  <div class="count">{{$vehicles}}</div>
                  <h3>My Vehicles</h3>
                  <p>Vehicles registered</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-envelope"></i></div>
                  <div class="count">{{$messages}}</div>
                  <h3>My Messages</h3>
                  <p>Messages from the admin</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-download"></i></div>
                  <div class="count">{{$offences}}</div>
                  <h3>Offences Committed</h3>
                  <p>Number of offence committed.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">N0</div>
                  <h3>Payments Made</h3>
                  <p>Total payment made.</p>
                </div>
              </div>
            </div>

             <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12  widget_tally_box">
                    <div class="x_panel fixed_height_390">
                        <div class="x_content">

                        <div class="flex">
                            <ul class="list-inline widget_profile_box">
                            <li>
                                <a>
                                <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <img src="images/user.png" alt="..." class="img-circle profile_img">
                            </li>
                            <li>
                                <a>
                                <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            </ul>
                        </div>

                        <h3 class="name"> Welcome {{Auth::user()->last_name}} {{Auth::user()->first_name}}</h3>

                        <div class="flex">
                            <ul class="list-inline count2">
                            <li>
                                <h4>Your safety is our concern</h4>
                                <span>reach your destination 100% safe and sound!</span>
                            </li>
                           
                            </ul>
                        </div>
                       
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

              </div>
            

          </div>
        </div>
    <!-- /page content -->
      

     

@endsection


@section('footer')
  @include('partials.user.footer')
@endsection



@section('scripts')
 <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="../js/custom.js"></script>

    
@endsection