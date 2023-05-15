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
        *{
            box-sizing: border-box;
        }

        ul {
            padding: 0;
            list-style: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            line-height: 1.4;
        }

        #header {
            margin-bottom: 100px;
            background: #fff;
            color: #fff;
            padding: 0px;
        }

        #main {
            float: left;
            width: 69%;
        }

        #sidebar {
            float: right;
            width: 29%;
        }

        .clr {
            clear: both;
        }

        #footer {
            background: #333;
            color: #fff;
            padding: 10px;
        }

        .text-center {
            display: block;
            text-align: center;
            color :#fff;
        }

        .card {
            border: 1px solid #ddd;
            background: #f4f4f4;
            padding: 20px;
            margin-bottom: 10px;
        }
        .carousel-item{
            height: 500px;
        }
        .carousel-image-1{
            background-image: url("image/12.png");
            background-size: cover;
        }
        .carousel-image-2{
            background-image: url("image/15.jpeg");
            background-size: cover;
        }
        .carousel-image-3{
            background-image: url("image/17.png");
            background-size: cover;
        }
        .item-1{
            
            width: 75%;
            height: 380px ;
            margin: 0 auto;

        }
        .card-1{
            background-color:#E6E6FA;
            border: 0px solid black;
            margin: 40px;
            padding: 10px;
            text-align: center;
            border-radius:50px;
            width: 1200px;
            height: 1200px;
            
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

</style>


</head>
<!-- Header -->
<div id="header" class="">
        <section id="slider">
            <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
                <ol class="carousel-indicators">
                    <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
                    <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                    <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-image-1 active">
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block">
                                <h1 class=" rounded-pill text-white display-3 fs-1;" >Worldwide Companies Dataset </h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-2 ">
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block">
                                <h7 class="rounded-pill text-white display-3 fs-1;">contains information on random 10,000 worldwide</h7>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-3 ">
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block">
                                <h7 class=" rounded-pill text-white display-3 fs-1;">aiHitdata is a unique source of company information.</h7>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
             </div>
         </div>
        </section>


        <!--แท็บบาร์-->
            <nav class="navbar navbar-expand-lg navbar navbar-light navbar-warning bg-warning" style="background-color: #e3f2fd;">
                 <div class="container-fluid">
                    
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        AIHIT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="data.php">Graph Most Liked Companies</a></li>
                        <li><a class="dropdown-item" href="data1.php">Graph Most Popular Companies</a></li>
                        <li><a class="dropdown-item" href="data2.php">Graph Most Discussed Companies</a></li>
                    </ul>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="directory.php">Directory</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                        </li>
                         
                      </ul>
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn  btn-light" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            
            
               


<body>
<figure class="text-center text-dark">
            <p class="h1">Most Discussed Companies</p>
        </figure>
        <!--กราฟ-->
        <section id="graph">
        <canvas id="graphCanvas"></canvas>
    </div>
    
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
                $.post("conect_coment.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].named);
                        marks.push(data[i].coment);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Discussed Companies',
                                backgroundColor: '#FF1493',
                                borderColor: '#FFD700',
                                hoverBackgroundColor: '#FFD700',
                                hoverBorderColor: '#FFD700',
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
            
                    </div>
                </div>
            </section>
    </div>
</body>
</html>