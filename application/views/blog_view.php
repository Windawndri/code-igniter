<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title;?></title>

  <!--load bootsrap css file-->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>

<body>
<div class="container">
    <h1><?php echo $content;?></h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">first</th>
          <th scope="col">Last</th>
          <th scope="col">handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <th>Mark</th>
          <th>Otto</th>
          <th>@mdo</th>
        </tr>
        <tr>
          <th scope="row">2</th>
          <th>Jacob</th>
          <th>Thornton</th>
          <th>@fat<th>
        </tr>
        <tr>
          <th scope="row">3</th>
          <th>Larry</th>
          <th>the bird</th>
          <th>@twitter</th>
        </tr>
      </tbody>
    </table>
  </div> 
  <!--load jquery js file-->
  <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

  <!--load bootsrap js file-->
  <script src="<?php echo base_url('assets/js/boostrap.min.js');?>"></script>
</body>
</html>
