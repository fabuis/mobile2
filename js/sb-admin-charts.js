$(document).ready(function() {
  ///inicio
    graficaano(2017);
    graficameses(11);
    graficaciudades();
    graficapais();
    //llenar años en consulta_años
      $( "#consulta_a" ).load( "../Json/procesar.php?consulta_a" );
    //llenar años en consulta_años
        //llenar años en consulta_años
      $( "#consulta_m" ).load( "../Json/procesar.php?consulta_b" );
    //llenar años en consulta_años



    //cambiar año en graficaano
      $( "#consulta_a" ).change(function() {
         año = $( "#consulta_a" ).val();
          graficaano(año);
      });
    //cambiar año en graficaano

        //cambiar mes en graficameses
      $( "#consulta_m" ).change(function() {
         buscarmes = $( "#consulta_m" ).val();
         graficameses(buscarmes);
       });
    //cambiar mes en graficameses

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
                                        
    
                                var canvas = $('#ventasanuales')[0]; 
                                canvas.width = canvas.width; 

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
                                          min: 100000,
                                          max: 1000000000,
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
graficameses = function(buscarmes){
      //grafica año
        $.ajax({
          url: '../Json/procesar.php',
          type: 'POST',
          data: {'mes':'mes','buscarmes': buscarmes},
        })
        .done(function(result) {
          //console.log(result);
                             //var valores = eval(data);

                             var Labels = [],Data=[];
                             DatosLabels = JSON.parse(result);
                             Datostotal = JSON.parse(result);

                              

                              //console.log(DatosLabels[0]['total']);

                                        for(var i in DatosLabels){
                                            Labels.push(DatosLabels[i]['dia'].slice(0).toString());
                                          }

                                        for(var i in Datostotal){
                                            Data.push(Datostotal[i]['total'].slice(0));
                                          }


                                //console.log(Labels);
                                //console.log(Data);


                                var canvas = $('#ventasmensuales')[0]; 
                                canvas.width = canvas.width;    

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
                                          max: 9000000,
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


//Funcion grafica por ciudad -------------------------------------------------------------------

graficaciudades = function(){

  $.ajax({
    url: '../Json/procesar.php',
    type: 'POST',
    data: {'ciudades': 'ciudades'},
  })
  .done(function(result) {
    //console.log(result);
    //crear grafica
    // -- Bar Chart Example

     var Labels = [],Data=[],Celular=[];

                             DatosLabels = JSON.parse(result);
                             Datostotal = JSON.parse(result);
                             DatosCelular = JSON.parse(result);                       

                              //console.log(DatosLabels[0]['total']);

                                        for(var i in DatosLabels){
                                            Labels.push(DatosLabels[i]['ciudad'].slice(0).toString());
                                          }

                                        for(var i in Datostotal){
                                            Data.push(Datostotal[i]['totalventas'].slice(0));
                                          }


                                //console.log(Labels);
                                //console.log(Data);

var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: Labels,
    datasets: [{
      label: 'IPHONE 7 PLUS',
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: Data,
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
          maxTicksLimit: 0
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 10
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
    //crear grafica
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
}

//Funcion grafica por ciudad -------------------------------------------------------------------



//Funcion grafica por pais -------------------------------------------------------------------

graficapais = function(){
  $.ajax({
  url: '../Json/procesar.php',
  type: 'POST',
  data: {'pais': 'pais'},
})
.done(function(result) {
  console.log("success");
  //hacer la grafica
       var Labels = [],Data=[];

                             DatosLabels = JSON.parse(result);
                             Datostotal = JSON.parse(result);
                  

                              //console.log(DatosLabels[0]['total']);

                                        for(var i in DatosLabels){
                                            Labels.push(DatosLabels[i]['nombre'].slice(0).toString());
                                          }

                                        for(var i in Datostotal){
                                            Data.push(Datostotal[i]['total'].slice(0));
                                          }


                                console.log(Labels);
                                console.log(Data);
// -- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: Labels,
    datasets: [{
      data: Data,
      backgroundColor: ['#00007f', '#000099', '#0000b2', '#0000cc', '#0000e5', '#0000ff', '#1919ff', '#3232ff', '#4c4cfe', '#6565ff'],
    }],
  },
});

                                


})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});

}

//Funcion grafica por pais -------------------------------------------------------------------

