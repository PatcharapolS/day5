<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <?php include_once 'nav.php' ?>

</style>
</head>
<body>
<div class="container" style="padding-top:100px">
  <div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#66FFCC">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
       Form Login </h3>
      <form  name="formlogin" action="" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="Username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="Password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
 
</body>
</html>