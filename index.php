<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Agere-Gere Solar</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE CSS -->
    <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- CHARTS.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>


</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
     <!--NAVBAR SECTION-->
    <div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AGERE-GERE <small>solar</small></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">MAPA</a></li>
                    <li><a href="#portfolio">GRAFICOS</a></li>
                    <li><a href="#about">DATOS DUROS</a></li>
                </ul>
            </div>
           
        </div>
    </div>
   <!--END NAVBAR SECTION-->
        <!--HOME SECTION-->
       <section id="home" class="text-center">
        <div class="container">
            <div class="row text-center pad-top" >
                <div class="col-md-3">
                <!-- <div class="col-md-6 pad-top-more"> -->
                  <!--   <h1>Ready to Launch  </h1>
                    <a href="#" class="btn btn-lg pad-top">
                        <i class="fa fa-bomb fa-5x" ></i>
                        </a>
                    <h3>Lorem ipsum dolor sit amet </h3>
                    <p class="col-md-8 col-md-offset-2">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                    </p> -->
                    <img src="img/map_full.png" class="img-responsive" style="max-height: 500px;"/>
                </div>
<!-- FIN SEgundo CUADRO --> 
                <div class="col-md-6">
                    <img src="img/map.png" class="img-responsive" style="max-height: 500px;"/>
                </div>          
<!-- FIN SEgundo CUADRO --> 
                <div class="col-md-3">
                    <div class="textbox">    
                        <div class="pre-scrollable">
                            <p>-Planta Rayitofeliz</p>
                            <p>-Planta Solrojo</p>
                            <p>-Planta Caregallo</p>
                        </div>
                        <div class="btn-group scrollclass">
                          <a class="btn btn-default" href="#home">
                            <i class="fa fa-map-marker" title="Mapa"></i>
                          </a>
                          <a class="btn btn-default" href="#portfolio">
                            <i class="fa fa-line-chart" title="Graficos"></i>
                          </a>
                          <a class="btn btn-default" href="#about">
                            <i class="fa fa-file-text-o" title="Reportes"></i>
                          </a>
                        </div>
                    </div>   
                </div>

            </div>
        </div>
       </section>
    <!--END SECTION-->
    <!--PORTFOLIO SECTION-->
    <section id="portfolio"  >
            <div class="container">
                <div class="row text-center" >
                       <div class="col-md-12">
                            <h1>GRAFICOS</h1>
                       </div>
                 </div>
           <div class="row text-center" >
           <div class="col-md-8 col-sm-8 col-xs-8">
                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#grafico1" aria-controls="home" role="tab" data-toggle="tab">Generación Anual</a></li>
                    <li role="presentation"><a href="#grafico2" aria-controls="profile" role="tab" data-toggle="tab">Participación Solar</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="grafico1"><canvas id="myChart"></canvas></div>
                    <div role="tabpanel" class="tab-pane" id="grafico2"><canvas id="myChart2"></canvas>
                    <script type="text/javascript">    
                        var ctr = document.getElementById("myChart2");
                        var myBarChart = new Chart(ctr, {
                        type: 'pie',
                        data: {
                                labels: ["PAS2", "María Elena", "Andes Solar"],
                                datasets: [{
                                    label: 'Comparacion de Plantas',
                                    data: [5, 7, 3],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                    ],
                                    borderWidth: 1
                                }]
                            },
                        options: {
                            responsive: false
                        }
                        });</script>
                    </div>
                  </div>
                </div>
           </div>

           <!--  <div class="col-md-4 col-sm-4 col-xs-12">
                 <a href="#portfolioBig1"  data-toggle="modal">
                <img src="assets/img/portfolio/1.jpg" class="img-responsive " alt="" />
                     </a>
            </div> -->
        </div>
        </section>
    <!--END PORTFOLIO SECTION-->
    <!--ABOUT SECTION-->
        <section id="about"  >
            <div class="container">
                <div class="row text-center" >
                   <div class="col-md-12">
                        <h1>DATOS DUROS</h1>
                   </div>
                </div>
           <div class="row  pad-top" >
              <div class="col-md-8 col-sm-8 col-xs-8">
                    <div>
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#datosduros1" aria-controls="home" role="tab" data-toggle="tab">Rayitofeliz</a></li>
                        <li role="presentation"><a href="#datosduros2" aria-controls="profile" role="tab" data-toggle="tab">Solrojo</a></li>
                        <li role="presentation"><a href="#datosduros3" aria-controls="profile" role="tab" data-toggle="tab">Caregallo</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="datosduros1">
                            empresa 1
                        </div>
                        <div role="tabpanel" class="tab-pane" id="datosduros2">
                            empresa 2
                        </div>
                        <div role="tabpanel" class="tab-pane" id="datosduros3">
                            empresa 3
                        </div>
                      </div>
                    </div>
               </div>
           </div>
        </div>
        </section>
    <!--END ABOUT SECTION-->
    <!--CONTACT SECTION-->
        <!--  <section id="contact">
               <div class="container">
                     <div class="row text-center" >
               <div class="col-md-12">
                    <h1>CONTACT HERE</h1>
               </div>
                     </div>
           <div class="row text-center pad-top" >
            <div class="col-md-8 col-md-offset-2">
                <div class="row ">
                             <form>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Notes" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                                                   <button type="submit" class="btn btn-primary btn-lg">SUBMIT REQUEST</button>

                            </div>
                                 </form>
                        </div>
            </div>
               
               </div>
        </div>
        </section> -->
        <!--END CONTACT SECTION-->
        <!--FOOTER SECTION-->
    <div id="footer">
        2016 Data Raising | All Right Reserved
         
    </div>
     <!--FOOTER SECTION-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- EASING SCROLL SCRIPTS PLUGIN  -->
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>
    <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["PAS2", "María Elena", "Andes Solar"],
            datasets: [{
                label: 'Comparacion de Plantas',
                data: [5, 7, 3, 0],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
    </script>
</body>
</html>
