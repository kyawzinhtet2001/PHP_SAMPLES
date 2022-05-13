<?php


$resource=fopen("note.txt","a") or die("not exists");

fwrite($resource,"This is a book and good game well played \n This is great game");

fclose($resource);

unset($resource);

