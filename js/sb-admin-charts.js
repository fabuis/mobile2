$(document).ready(function() {
  ///inicio
    graficaano(2017);
    graficameses(11);
    //llenar años en consulta_años
      $( "#consulta_a" ).load( "../Json/procesar.php?consulta_a" );
    //llenar años en consulta_años



    //cambiar año en graficaano
      $( "#consulta_a" ).change(function() {
         año = $( "#consulta_a" ).val();
          graficaano(año);
      });
    //cambiar año en graficaano

  // Chart.js scripts
    // -- Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
  // Chart.js scripts


  ///fin
});



//Funcion grafica por año-------------------------------------------------------------------
graficaano = function(año){
      //grafica año
        $.ajax({
          url: '../Json/procesar.php',
          type: 'POST',
          data: {'meses':'meses','ano': año},
        })
        .done(function(data) {
          //console.log(data);
                                      var valores = eval(data);

                                    var e   = valores[0];
                                    var f   = valores[1];
                                    var m   = valores[2];
                                    var a   = valores[3];
                                    var ma  = valores[4];
                                    var j   = valores[5];
                                    var jl  = valores[6];
                                    var ag  = valores[7];
                                    var s   = valores[8];
                                    var o   = valores[9];
                                    var n   = valores[10];
                                    var d   = valores[11];
                                        
                                var ctx = document.getElementById("ventasanuales");
                                var myLineChart = new Chart(ctx, {
                                  type: 'line',
                                  data: {
                                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets: [{
                                      label: "Total ventas $",
                                      lineTension: 0.3,
                                      backgroundColor: "rgba(2,117,216,0.2)",
                                      borderColor: "rgba(2,117,216,1)",
                                      pointRadius: 5,
                                      pointBackgroundColor: "rgba(2,117,216,1)",
                                      pointBorderColor: "rgba(255,255,255,0.8)",
                                      pointHoverRadius: 5,
                                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                                      pointHitRadius: 20,
                                      pointBorderWidth: 2,
                                      data: [e,f,m,a,ma,j,jl,ag,s,o,n,d]
                                    }],
                                  },
                                  options: {
                                    scales: {
                                      xAxes: [{
                                        time: {
                                          unit: 'date'
                                        },
                                        gridLines: {
                                          display: false
                                        },
                                        ticks: {
                                          maxTicksLimit: 7
                                        }
                                      }],
                                      yAxes: [{
                                        ticks: {
                                          min: 0,
                                          max: 90000000,
                                          maxTicksLimit: 5
                                        },
                                        gridLines: {
                                          color: "rgba(0, 0, 0, .125)",
                                        }
                                      }],
                                    },
                                    legend: {
                                      display: false
                                    }
                                  }
                                });
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      //grafica año
}
//Funcion grafica por año-------------------------------------------------------------------

//Funcion grafica por meses-------------------------------------------------------------------
graficameses = function(mes){
      //grafica año
        $.ajax({
          url: '../Json/procesar.php',
          type: 'POST',
          data: {'mes':'mes'},
        })
        .done(function(result) {
          console.log(result);
                             //var valores = eval(data);

                             var Labels = [],Data=[];
                             DatosLabels = JSON.parse(result);
                             Datostotal = JSON.parse(result);

                              

                              console.log(DatosLabels[0]['total']);

                                        for(var i in DatosLabels){
                                            Labels.push(DatosLabels[i]['dia'].slice(0).toString());
                                          }

                                        for(var i in Datostotal){
                                            Data.push(Datostotal[i]['total'].slice(0));
                                          }


                                console.log(Labels);
                                console.log(Data);

                                        
                                var ctx = document.getElementById("ventasmensuales");
                                var myLineChart = new Chart(ctx, {
                                  type: 'line',
                                  data: {
                                    labels: Labels,
                                    datasets: [{
                                      label: "Total ventas $",
                                      lineTension: 0.3,
                                      backgroundColor: "rgba(2,117,216,0.2)",
                                      borderColor: "rgba(2,117,216,1)",
                                      pointRadius: 5,
                                      pointBackgroundColor: "rgba(2,117,216,1)",
                                      pointBorderColor: "rgba(255,255,255,0.8)",
                                      pointHoverRadius: 5,
                                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                                      pointHitRadius: 20,
                                      pointBorderWidth: 2,
                                      data: Data
                                    }],
                                  },
                                  options: {
                                    scales: {
                                      xAxes: [{
                                        time: {
                                          unit: 'date'
                                        },
                                        gridLines: {
                                          display: false
                                        },
                                        ticks: {
                                          maxTicksLimit: 7
                                        }
                                      }],
                                      yAxes: [{
                                        ticks: {
                                          min: 0,
                                          max: 5000000,
                                          maxTicksLimit: 5
                                        },
                                        gridLines: {
                                          color: "rgba(0, 0, 0, .125)",
                                        }
                                      }],
                                    },
                                    legend: {
                                      display: false
                                    }
                                  }
                                });
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      //grafica año
}
//Funcion grafica por meses-------------------------------------------------------------------

// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [4215, 5312, 6251, 7841, 9821, 14984],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});





// -- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Blue", "Red", "Yellow", "Green"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
