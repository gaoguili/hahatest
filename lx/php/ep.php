<?php
/**
 * @Author: Administrator
 * @Date:   2017-07-20 20:31:51
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-07-27 21:04:16
 */
echo "这是一个", "字符串，", "使用了", "多个", "参数。";
echo "<br>";
print "这是一个, 字符串, 使用了多个, 参数。";
echo "<br>";
echo "<hr>";

for ($i=0; $i < 6; $i++) {
    echo "<br>";
    for ($j=0; $j <=$i ; $j++) {
        echo "*";
        # code...
    }
    # code...
}

//九九
for ($i=1; $i < 10 ; $i++) {
    echo "<br>";
    for ($j=1; $j <= $i; $j++) {
        $c=$i*$j;
        echo "&nbsp";
        echo "{$i}x{$j}=$c";

    }

}

echo "<hr>";

//0-10偶数
$a=0;

while($a<10){
    echo "<br>$a";
    $a=$a+2;

}
echo "<br>";
//奇数

$a=0;
while($a<10){
    $a++;
    echo "<br>$a";
    $a=$a+1;
}

echo "<hr>";


$a=0;
do{
    echo "<br>$a";
    $a++;
    $a+=1;

}while($a<10);

echo "<hr>";
$a=1;
do{
    echo "<br>$a";
    $a++;
    $a+=1;
}while($a<10);




