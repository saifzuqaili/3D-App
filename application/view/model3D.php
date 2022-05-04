<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>Cocacola 3D App</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='../../assets/js/modelInteractions.js'></script>
    <script src="../../assets/js/x3dom.js"></script>
    <link rel="stylesheet" href="../../assets/css/x3dom.css">
    <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/main.css'>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/main.js"></script>
</head>
<body class="modelBody">
    <nav class="navbar navbar-expand-md navbar-dark nav-color">
        <!-- Brand -->
        <div class="brand-logo text-center">
            <a class="navbar-brand" href="#">
              <h1>1</h1>
              <h1>oca</h1>
              <h2>Cola</h2>
              <h3>Journey</h3>
            </a>
            <div class="navbar-brand" id="tagline">Refreshing the world, one story at a time</div>
        </div>
      </nav>
      <?php $res = json_decode($data, true);?>
      <div id="model-heading" class='model-heading text-center'><?php echo $res['model-heading'];?></div>
    <div class="model3D">
        <x3d>
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" url="<?php echo $res['model-url'];?>"> </inline>
            </scene>
        </x3d>
    </div> 
    <div id="tmp" class="tmp">
    <?php
    
        if ($res['heading'] == 'FANTA')
        { 
            echo "<button type='button' class='btn btn-primary' onclick='frontView()'>Front View</button>";
            echo "<button type='button' class='btn btn-success' onclick='leftView()'>Left View</button>";
            echo "<button type='button' class='btn btn-danger' onclick='rightView()'>Right View</button>";
            echo "<button type='button' class='btn btn-secondary' onclick='backView()'>Back View</button>";
            echo "<button type='button' class='btn btn-warning' onclick='homepage()'>Homepage</button>";
        }
        else if($res['heading'] == 'Sprite')
        {
            echo "<button type='button' class='btn btn-warning' onclick='homepage()'>Homepage</button>";
        }
        else
        {
            echo "<button type='button' class='btn btn-primary' onclick='frontView()'>Front View</button>";
            echo "<button type='button' class='btn btn-success' onclick='sideView()'>Side View</button>";
            echo "<button type='button' class='btn btn-danger' onclick='stopAnimate()'>Stop Animation</button>";
            echo "<button type='button' class='btn btn-secondary' onclick='startAnimate()'>Start Animation</button>";
            echo "<button type='button' class='btn btn-warning' onclick='homepage()'>Homepage</button>";
        }
        
    ?>
    </div>
    <div class="image-gallery">
        <img src="<?php echo $res['thumbnail-img-1'];?>" alt="3D Image" onclick="viewImage('1')"/>
        <img src="<?php echo $res['thumbnail-img-2'];?>" alt="3D Image" onclick="viewImage('2')"/>
    </div>
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
      
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div id="model-body" class="modal-body">
            <img id="gallery-img" src="../../assets/images/coke1.png" />
          </div>
        </div>
      </div>
    </div>
      <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgb(0, 0, 0);">
          © 2022 Copyright:
          <a class="text-reset fw-bold" href="#">The Coca-Cola Company</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>
