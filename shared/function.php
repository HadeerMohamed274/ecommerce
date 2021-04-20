<?php
function testmessage($condition , $mess){

if ($condition) {
    echo "<div class='alert alert-primary'>
    $mess
  </div>";
} else{
    echo "<div class='alert alert-danger'>
    $mess
  </div>";
}
}
?>
