<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="solar.css">
</head>
<body>
    <div class="title">
        <p>
            HNG4.0 Internship

        </p>
    </div>
    <div class="time">
      <p>
      <?php
        date_default_timezone_set("Africa/Lagos");
echo  date("H.i");

?>
      </p>
       
      <p class="date">
       <?php
echo  date("D d F") ;
?>
       </p>
    </div>
</body>
</html>