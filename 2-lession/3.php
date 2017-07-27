<?php
//算数运算符
//+ - * / %
$a = 23;
$b = 34;
$c = $a*$b;

//取余
$a= 23;
$b= 3;
$c=$a%$b;

echo $c;

//赋值运算 = ; +=; .=;
$a=10;
$a+=10; //等价于$a=$a+10;  -= *= /=
echo $a;

$c = 'hello';
$c .="php";//等价于$c=$c."php";
echo $c;//hello php

//比较运算符 > < >= <= ==
$a=10;
$b=9;
$c=$a>$b;
var_dump($c);//true
if($a>$b){
	echo "a值大";
}

//==  等于 如果类型转换后 a等于b 就是真
$a='1';
$b=1;
if($a==$b){
	echo "a和b值相等";
}

//=== 全等 如果$a等于$b 并且类型相等

$a='1';
$b='1';
if($a===$b){
	echo "a和b值相等";
}
echo "<hr>";

//4.递增 递减运算符
//++  递增
$a=10;


//前置++$a; 先+1 后执行语句
echo "前置".++$a;

//后置 $a++；先执行语句 后+1
echo "<br>后置".$a++;                                                          
echo $a;

//--  递减
$b=10;
echo "<br>后置".$b--;
echo "<br>前置".--$b;

//练习
$a=6;
$b=7;
$c=$a++ + $a++;//a=7
$c=$a++ + ++$a;//a=10
$c=$a++ + ++$b;//a=10 b=8
$c=$a++ + $b++;//a=11 b=8
echo $c.'<br>';//c=19
echo $a.'<br>';//a=12
echo $b.'<br>';//b=9  


//逻辑运算符 与(and) 或(or ||) 非(not !)
echo "<hr>";//hr 是条线
$a=true;
if(!$a){
	echo "true取反的结果";
}else{
	echo "false";
}
//与 and 两个条件同时满足，整个逻辑条件才满足
$a=true;
$b=false;
	if($a && $b){
		echo "<br>a和b 都为true";
	}

	//或 Or 两个条件只需要满足一个，整个逻辑才满足
	if($a || $b){
		echo "<br> a或者b有一个条件满足";
	}


	//登录例子
	//----正确的数据库中
	$user='admin';
	$pwd='123456';
    //----用户输入的
	$userIput='';
	$pwdIput='';
	//登录逻辑
// if($userIput==$user && $pwdIput==$pwd){
// 	echo "登录成功";
// }

//完整的
if($user == $userIput){
   //用户已存在
	if($pwd==$pwdIput){

		echo "登录成功";
	}else{
		echo"密码错误";
	}
}else{
	echo "用户不存在";
}
?>














