<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=chrome">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title></title>
</head>

<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  </head>
  <body>
  	<?php require "header.php" ?>
    <div class="container">
    	<h2>Витрина</h2>

        <div class="card mb-4 rounded-3 shadow-sm mt-5">

         
          </div>
  
          <?php
          for($i = 1; $i <= 5; $i++):
          ?> 
          	<div class="card mb-4 rounded-3 shadow-sm mt-5">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Account</h4>
          </div>
          <div class="card-body">
          	<img src="AcScreen/Ac<?php echo ($i); ?>.png" class = "img-thumbnail">
            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Check</button>
          </div>
          </div>
  <?php endfor; ?>
  
          
        
   
   


</body>
</html>