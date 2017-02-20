<?php
include 'session_starAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tres LAgunas | admin </title>

        <!-- Bootstrap -->
        <script src="../Resource/js/jquery.min.js"></script>
         <script src="../Resource/js/reservacionAdmin.js"></script>    

        <link href="../Resource/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../Resource/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../Resource/css/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../Resource/css/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="../Resource/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

        <!-- JQVMap -->
        <script type="text/javascript" src="../Resource/js/jquery-1.3.2.min.js" ></script> 
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>

                <!-- Custom Theme Style -->
        <link href="../Resource/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Tres Lagunas</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="../Resource/img/logo.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2>Administrador</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">

                                    <li><a><i class="fa fa-home"></i> Servicios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="cabaniasAdmin.php">Cabañas</a></li>
                                            <li><a href="actividadesAdmin.php">Actividades</a></li>
                                            <li><a href="paquetesAdmin.php">Paquetes</a></li>
                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-home"></i> Reservaciones <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="reservacionAdmin.php">Reservaciones</a></li>

                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-home"></i> Turistas <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="turistasAdmin.php">Turistas</a></li>

                                        </ul>
                                    </li>


                                </ul>
                            </div>
                            <div class="menu_section">

                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="../Resource/img/3.jpg" alt="">Administrador
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                      
                                       
                                        <li><a href="cerrar_sesion.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="../Resource/img/logo.png" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="../Resource/img/3.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="../Resource/img/3.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="../Resource/img/3.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->

                <!-- top tiles -->
                <div class="right_col" role="main">

                    <div class="page-title">
                        <div class="title_left">
                            <h3> Reservaciones</h3>
                        </div>



                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Reservaciones</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="row ">
                                            <div class="form-group">
<!--                                                <div class="col-xs-4  text-right">
                                                    <label for="buscar" class="control-label">Buscar:</label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <input  type="text" name="buscar" id="buscar" class="form-control" onkeyup="" placeholder="Ingrese nombre"/>

                                                </div>

                                                <div class="col-xs-1">
                                                    <a href="ingresarPaquete.php" class="btn btn-primary" role="button">Nuevo</a>
                                                </div>-->
                                            </div>
                                            <table class="table table-bordered table-hover " id="tablaReservaciones">
                                                <thead>
                                                <th>Folio</th>
                                                <th>Fecha Entrada</th>
                                                <th>Fecha Salida</th>
                                                <th>Actividades</th>
                                                <th>Cantidad P</th>
                                                <th>Comprobante</th>
                                                <th>Edo Reservacion</th>



                                                <th>Opciones</th>    
                                                </thead>
                                                <tbody></tbody>
                                            </table>

                                       


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /top tiles -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>



                    
                                 
                    <!--Modal detalles-->
                    
                               <div class="modal fade" id="Detalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Detalles</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <div id="content"></div>
                                  <div id="veractividades"></div>
                                                                      
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                        
                    
                                  <!-- Modal editar-->
                    <div class="modal fade" id="EditarC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Editar Reservacion</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <form class="form-group" id="editarReservacion"  >

                                    <label class="control-label">No. Reservacion</label>
                                  
                                    <input class="form-control" id="txtreservacion" name="txtreservacion" readonly
                                           />
                                     <label class="control-label">Fecha Entrada</label>
                                    <input class="form-control" id="txtfechaentrada" name="txtfechaentrada" readonly/>
                                     <label class="control-label">Fecha Salida</label>
                                    <input class="form-control" id="txtfechasalida" name="txtfechasalida" readonly/>
                                     <label class="control-label">Estado de Reservación</label>
                                    
                                    <select name="estado" class="form-control"> 
                                        <option value="1" selected>Proceso</option> 
                                        <option value="2">Pagado</option> 
                                     </select>


                                   
                                     </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button  id="btneditar" type="button"  class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
                
                
                
                
                    










                <!-- Start to do list -->

                <!-- End to do list -->

                <!-- start of weather widget -->

                <!-- end of weather widget -->

                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Admin Template  <a href="">Tres Lagunas</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="../Resource/js/jquery.min.js"></script>
        

        <!-- Bootstrap -->
        <script src="../Resource/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../Resource/js/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../Resource/js/nprogress.js"></script>
        <!-- Chart.js -->
        <!-- bootstrap-progressbar -->
        <script src="../Resource/js/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../Resource/js/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../Resource/js/skycons.js"></script>
        <!-- Flot -->
        <script src="../Resource/js/jquery.flot.js"></script>
        <script src="../Resource/js/jquery.flot.pie.js"></script>
        <script src="../Resource/js/jquery.flot.time.js"></script>
        <script src="../Resource/js/jquery.flot.stack.js"></script>
        <script src="../Resource/js/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../Resource/js/jquery.flot.orderBars.js"></script>
        <script src="../Resource/js/jquery.flot.spline.min.js"></script>
        <script src="../Resource/js/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../Resource/js/date.js"></script>
        <!-- JQVMap -->
        <script src="../Resource/js/jquery.vmap.js"></script>
        <script src="../Resource/js/jquery.vmap.world.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../Resource/js/moment.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../Resource/build/js/custom.min.js"></script>

        <!-- Flot -->
        <script>
                                                        $(document).ready(function () {
                                                            var data1 = [
                                                                [gd(2012, 1, 1), 17],
                                                                [gd(2012, 1, 2), 74],
                                                                [gd(2012, 1, 3), 6],
                                                                [gd(2012, 1, 4), 39],
                                                                [gd(2012, 1, 5), 20],
                                                                [gd(2012, 1, 6), 85],
                                                                [gd(2012, 1, 7), 7]
                                                            ];

                                                            var data2 = [
                                                                [gd(2012, 1, 1), 82],
                                                                [gd(2012, 1, 2), 23],
                                                                [gd(2012, 1, 3), 66],
                                                                [gd(2012, 1, 4), 9],
                                                                [gd(2012, 1, 5), 119],
                                                                [gd(2012, 1, 6), 6],
                                                                [gd(2012, 1, 7), 9]
                                                            ];
                                                            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                                                                data1, data2
                                                            ], {
                                                                series: {
                                                                    lines: {
                                                                        show: false,
                                                                        fill: true
                                                                    },
                                                                    splines: {
                                                                        show: true,
                                                                        tension: 0.4,
                                                                        lineWidth: 1,
                                                                        fill: 0.4
                                                                    },
                                                                    points: {
                                                                        radius: 0,
                                                                        show: true
                                                                    },
                                                                    shadowSize: 2
                                                                },
                                                                grid: {
                                                                    verticalLines: true,
                                                                    hoverable: true,
                                                                    clickable: true,
                                                                    tickColor: "#d5d5d5",
                                                                    borderWidth: 1,
                                                                    color: '#fff'
                                                                },
                                                                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                                                                xaxis: {
                                                                    tickColor: "rgba(51, 51, 51, 0.06)",
                                                                    mode: "time",
                                                                    tickSize: [1, "day"],
                                                                    //tickLength: 10,
                                                                    axisLabel: "Date",
                                                                    axisLabelUseCanvas: true,
                                                                    axisLabelFontSizePixels: 12,
                                                                    axisLabelFontFamily: 'Verdana, Arial',
                                                                    axisLabelPadding: 10
                                                                },
                                                                yaxis: {
                                                                    ticks: 8,
                                                                    tickColor: "rgba(51, 51, 51, 0.06)",
                                                                },
                                                                tooltip: false
                                                            });

                                                            function gd(year, month, day) {
                                                                return new Date(year, month - 1, day).getTime();
                                                            }
                                                        });
        </script>
        <!-- /Flot -->

        <!-- JQVMap -->

        <!-- /JQVMap -->

        <!-- Skycons -->
        <script>
            $(document).ready(function () {
                var icons = new Skycons({
                    "color": "#73879C"
                }),
                        list = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for (i = list.length; i--; )
                    icons.set(list[i], list[i]);

                icons.play();
            });
        </script>
        <!-- /Skycons -->

        <!-- Doughnut Chart -->
        <script>
            $(document).ready(function () {
                var options = {
                    legend: false,
                    responsive: false
                };


            });
        </script>
        <!-- /Doughnut Chart -->

        <!-- bootstrap-daterangepicker -->
        <script>
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- gauge.js -->
        <script>
            var opts = {
                lines: 12,
                angle: 0,
                lineWidth: 0.4,
                pointer: {
                    length: 0.75,
                    strokeWidth: 0.042,
                    color: '#1D212A'
                },
                limitMax: 'false',
                colorStart: '#1ABC9C',
                colorStop: '#1ABC9C',
                strokeColor: '#F0F3F3',
                generateGradient: true
            };

        </script>
                <script src="../Resource/js/jquery-functions.js"></script>

        <!-- /gauge.js -->
    </body>
</html>
