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

</head>
  <!-- Header -->
      <div id="header" class="card">
          <h1 href="#" class="text-center">WORLDWIDE</h1>
          <h1 href="#" class="text-center">Companies Dataset</h1>
</head>
    <br />
<body>
        <div class="card-group">

          <div class="card">

            <img src="image/11.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">AIHIT</h5>
                <p class="card-text">Worldwide Companies Dataset contains information on random 10,000 worldwide companies sampled from aiHit database, including following fields.</p>
              </div>
              <div class="card-footer">
                <a href="data.php" class="btn btn-primary">CLick</a>
              </div>
            </div>

            <div class="card">
              <img src="image/10.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Directory</h5>
                <p class="card-text">aiHitdata is global. Today it covers all companies that have an English website, irrespective of country.</p>
              </div>
              <div class="card-footer">
                <a href="directory.php" class="btn btn-primary">CLick</a>
              </div>
            </div>

            <div class="card">
              <img src="image/9.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">About</h5>
                <p class="card-text">Part of aiHitdata’s AI/ML system is an automated QA management array. This is one of the most complex parts of the system. aiHitdata monitors both completeness and accuracy of its data. It is focused on keeping transaction data quality at a very high level. This enables it to be used for predictive analytics.</p>
              </div>
              <div class="card-footer">
                <a href="about.php" class="btn btn-primary">CLick</a>
              </div>
            </div>
          </div>
</body>
</html>