<?php
//localhost/phpmyadmin 访问网页版的数据库管理工具
//用户名：root
//密码：123456



//书记局增删该查---数据库的操作基础
//通过代码的方式连接是数据库并插入数据

//1.连接数据库
//需要：1.数据库地址  2.用户名  3.密码  4.数据库的名字

//创建连接

$servername='localhost';
$username='root';
$password='123456';
$dbname='test';

$connect=mysqli_connect($servername,$username,$password,$dbname);
//检测连接
if (!$connect) {
	echo "连接数据库失败";

}else{
	echo "连接成功";
}
//sql语法
//insert into 表名 values(值,值,值,值);
//插入数据
// $sql="INSERT INTO student VALUES(NULL,'小唐','24','12345678901','北京')";
// if ( mysqli_query($connect,$sql)) {
// 	echo "插入成功!!!";
// }else{
// 	echo "插入失败！！！";
// }

//查询数据
$sql="SELECT*FROM student ";
//$res 查询返回的结果集，我们从这个结果集中获取数据
$res=mysqli_query($connect,$sql);

//先判断是否有数据
if (mysqli_num_rows($res)>0) {
    //使用循环结构从数据中获取数据

	//mysqlli_fetch_assoc获取一条数据
	// $row=mysqli_fetch_assoc($res);


	while($row=mysqli_fetch_assoc($res)){

		echo "<br>";
	   var_dump($row);
	}

}

//关闭数据库失败
mysqli_close($connect);




?>