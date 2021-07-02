<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- SGV 20210701 CODE CSS -->
  <link href="../style/css/general/header.css" rel="stylesheet">
  <?php include '../route/routecss.php'; ?>
  <title>Document</title>
</head>

<body>
  <?php include '../component/header.php'; ?>



  <?php include '../component/skirting.php'; ?>
  <!-- SGV 20210701 CODE JS  -->
  <?php include '../route/routejs.php'; ?>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>
</body>

</html>