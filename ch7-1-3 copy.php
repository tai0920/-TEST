<H1>SID: C112181146
<BR>
NAME: Taian</H1>
<P>

<?php

$scores = array(22, 16, 30, 24,46,21);
$total = 0;

foreach ($scores as $score) {
   echo "$score | ";
   $total+=$score;
}

echo "<BR> Total: ". $total . "<BR>";
print_r($scores); 
