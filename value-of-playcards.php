

<?php
$x='валет';
$list=array(
    7=>7,
    8=>8,
    9=>9,
    10=>10,
    11=>"валет",
    12=>"дама",
    13=>"король",
    14=>"туз");
foreach ($list as $key=> $value){
    if ($x==$list[$key])
        echo "playing cards\"$x\"- value $key.";
}
?>


