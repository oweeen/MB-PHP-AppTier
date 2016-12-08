<html>
<head>
  <meta charset="utf-8">
  <title>Octank Homepage!</title>
  <style>
    body {
      color: #ffffff;
      background-color: #0188cc;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }
    
    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }
    
    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <h4>This page is being served from region: 
<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://169.254.169.254/latest/meta-data/placement/availability-zone");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec ($curl);
    curl_close ($curl);
    $result = substr_replace($result, "", -1);
    print $result;
?>
  
  </h4>

  <div align="center">
    <h1>Welcome to the Octank homepage!</h1>
    <h2>This application was deployed using AWS CodeDeploy & Github!</h2>
    <p></p>
    <h2><a href="db.php">Click here</a> to interact with the database</h2>
    <p></p>

  </div>
  <div align="left">
    Powered by - <img src="http://cdn.octank.owcloud.xyz/AWS_logo_small.png" />
  </div>
</body>
</html>
