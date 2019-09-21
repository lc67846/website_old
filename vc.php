<?php
$path = 'ch.txt';
$file  = fopen( $path, 'r' );
$count = fgets( $file, 1000 );
fclose( $file );
$count = abs( intval( $count ) ) + 1;
echo "Hola there, user number {$count} \n";
$file = fopen( $path, 'w' );
fwrite( $file, $count );
fclose( $file );
?>