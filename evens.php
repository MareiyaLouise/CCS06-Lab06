<?php
function even(){
for($i = 100; $i >=1; $i--){
    if($i % 2 == 0){
        echo " $i ". "\n";
    }
}
}

echo even();
?>
