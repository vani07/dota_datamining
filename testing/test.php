<?php 
  // include_once "template/header.php";

  // include_once "connection.php";
 ?>
s
 <html>
 <head>
  <title></title>
  <link href="../assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../assets/styles/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/styles/main.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script> 
 </head>
<script type="text/javascript">
    $(document).ready(function(){

    $("#detail").hide();
    $("#cek").click(function(){
        $("#tabel").load("content.html .result");
        $("#detail").toggle(function(){
          $(".result").css("z-index","2");
        });

    });
});

</script>

<body style="background-color:black;">
  <div class="header-process"><center><h1>And the result is...</h1></center></div>
  <div class="container" style="background-color:#000000;color:white;width:70%;">

      <div class="row row-centered" style="padding-bottom:50px;">
      <h1 >You just choose Nama Hero</h1>
      <br/>
        <div class="col-md-4 col-centered" style="width:300px;text-align:center;">
          <div class="form-group">
            <img class="img-responsive img-rounded" src="../assets/img/SVEN/hero.png">
            <label class="form-group">Nama Hero</label>
          </div>
        </div>
        <h1>In the game, Nama Hero has good relationship with :</h1>

      </div>
      <div class="row row-centered" >
        <div class="col-md-3 col-centered">
         <div class="result" style="background-color:red;">
            <div class="form-group">
            <label class="form-group">Nama Hero</label>
            <img class="img-responsive img-rounded"  src="../assets/img/SVEN/hero.png">
            <br/>
            <div id="detail">
            <label class="form-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
            </div>
            <button id="cek">cek</button>
            </div>
         </div>
        </div>
        <div class="col-md-3 col-centered">
          <div class="result">
            <div class="form-group">
            <label class="form-group">Nama Hero</label>
            <img class="img-responsive img-rounded" src="../assets/img/SVEN/hero.png">
            <br/>
            <label class="form-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
            </div>
         </div>
        </div>
        <div class="col-md-3 col-centered">
          <div class="result">
            <div class="form-group">
            <label class="form-group">Nama Hero</label>
            <img class="img-responsive img-rounded" src="../assets/img/SVEN/hero.png">
            <br/>
            <label class="form-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
            </div>
         </div>
        </div>
        <br/>
                <h3>You can Ban or Pick these heroes to achieve victory </h3>
        <br/>
        <div id="tabel"></div>
      </div>

  </div>
</body>
</html>