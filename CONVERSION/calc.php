
<?php

  include 'calc.inc.php';

  $num1 = $_POST['num1Inserted'];

  $cal = $_POST['calInserted'];

  $calculator = new inccm($num1, $cal);
  $calculator->convMethod();

 ?>

 <script>
  alert(<?php echo $calculator->getResult(); ?>);
  window.location.href = 'index.php';

</script>
