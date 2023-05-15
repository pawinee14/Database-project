<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>

    <style>
      * {
        box-sizing: border-box;
      }

      ul {
        padding: 0;
        list-style: none;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        color: #000000;
        line-height: 1;
      }

      #header {
        margin-bottom: 0px;
        background-image:url('https://www.thaiticketmajor.com/variety/img_content/imgeditor/10(351).jpg');
        color: #000000;
        padding: 100px;
        background-position: center;
        background-size: cover;
      }

      #main {
        float: left;
        width: 60%;
        padding: 200px;
      }

      #sidebar {
        text-align:center;
        float: right;
        width: 40%;
      }

      .clr {
        clear: both;
      }

      #footer {
       
        background: #CC0000;
        color: #fff;
        padding: 5px;
        
      }

      .text-center {
        display: block;
        text-align: center;
      }

      .card {
        display: grid;
        grid-template-columns: auto;
        grid-gap: 10px;
      }
      .card h2 {
        color: #fff;
        position: absolute;
        bottom: 10px;
        left: 20px;
        font-size: 1.6rem;
        letter-spacing: 1px;
        
      } 
      
    </style>
    <title>Creating Dynamic Data Graph using PHP and Chart.js</title>
          <style type="text/css">
            BODY {
              width: 1800 PX;
                }
            #chart-container {
              margin: 50 auto;
              width: 100%;
              height: auto;
              }
          </style>

</head>
  
<body>
<div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("conect_views.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].names);
                        marks.push(data[i].view);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Student Marks',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script> 
</body>
</html>
