<?php

$fh = fopen('people.txt','rb');
while((! feof($fh)) && ($line = fgets($fh))){
    $line = trim($line);
    $info = explode('|',$line);
    print'<li><a href="mailto:'.$info[0].'">'.$info[0]."</li><br>";
}