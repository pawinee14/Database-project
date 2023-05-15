<?php

      include("connect.php");
      $id = "SELECT * FROM pppp";
      $Name = $conn->query($id);
      $Name_user = []; 
      if ($Name !== false) {
        $Name_user = $Name->fetch_all(MYSQLI_ASSOC);

      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<style>
    {
    }
    .card-1{
            background-color: #fff;
            border: 0px solid black;
            margin: 0px;
            padding: 10px;
            text-align: ;
            border-radius:0px;
            width: 100px;
            height: 10px;
    }
    .container-1{
            background-color: #fff;
            border: 0px solid black;
            margin: 0px;
            padding: 10px;
            text-align: center;
            border-radius:0px;
            width: 100px;
            height: 100px;
    }
</style>

</head>

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
                            <a class="nav-link active" aria-current="page" href="directory.php">Directory</a>
                        </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                        </li>
                         
                      </ul>
                         
                    </form>
                  </div>
                </div>
              </nav>
    
<body>


        
        <table id="userTable" class="display ">
        <thead>
            <th class="table-striped table-hover" style="color:dark">id</th>
            <th class="table-striped table-hover" style="color:dark">url</th>
            <th class="table-striped table-hover" style="color:dark">name</th>
            <th class="table-striped table-hover" style="color:dark">website</th>
            <th class="table-striped table-hover" style="color:dark">description_short</th>
            
        </thead>
        <tbody>
            <?php foreach($Name_user as $com ){ ?>                                   
                <tr>
                    <td class="table-striped table-hover" style="color:dark"><?php echo $com['id'] ?></td>              
                    <td class="table-striped table-hovery" style="color:dark"><?php echo $com['url'] ?></td>
                    <td class="table-striped table-hover" style="color:dark"><?php echo $com['name'] ?></td>
                    <td class="table-striped table-hover" style="color:dark"><?php echo $com['website'] ?></td>
                    <td class="table-striped table-hover" style="color:dark"><?php echo $com['description_short'] ?></td>
                                                 
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script> $(document).ready( function () { 
        $('#userTable').DataTable({
            "paging":false,
            "info": false,
            
        }); } ); </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const rows = document.querySelectorAll("tr[data-href]");
        });
    </script>
        </div>
    
</body>
</html>