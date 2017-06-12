<html>
<head>
<title>Invoice Receipt | S. Tabios Software Solutions</title>
  <style>
  body {
          font-family: Times New Roman, sans-serif;
        }
    .sales{
      font-size: 20px;
      color: #00008B;
    }
    .bill{
      width: 50%;
      float-left;
    }
    .sales1{
      width: 50%;
      float: left;
    }
    .whole{
      width: 100%;
    }
    table{
      width: 100%;
      border-collapse: collapse;
    }

  </style>
</head>
<div>
<?php echo e($order->ordId); ?>

<?php echo e($order->ordPRod); ?>

<?php echo e($order->ordName); ?>

<?php echo e($order->price); ?>

</div>
</html>