<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 06/11/2018
 * Time: 00:31
 */
echo "variables valides: "."$"."mavar ","$"."var5 ","$"."_mavar ","$"."_5var ";
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo "<br>"."x=".$x."<br>"."y=".$y."<br>"."z=".$z."<br>";
echo "x=".$GLOBALS["x"]."<br>"."y=".$GLOBALS["y"]."<br>"."z=".$GLOBALS["z"]."<br>";
$x1="7 personnes";
$y1=(integer) $x1;
$x1="9E3";
$z1=(double) $x1;
echo "x=".$x1."<br>"."y=".$y1."<br>"."z=".$z1."<br>";
    ?>