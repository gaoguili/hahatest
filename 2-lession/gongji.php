<?php
//5文钱可以买一只公鸡，3文钱可以买一只母鸡，1文钱可以买3只雏鸡
//现在用一百文钱买100只公鸡，那么各有公鸡，母鸡，雏鸡多少只


//全买公鸡
for ($g=0; $g <=20 ; $g++) { 
	//全买母鸡
	for ($m=0; $m <=33; $m++) { 
		//全买雏鸡
		for ($c=0; $c <=300 ; $c++) { 
			//满足条件，1.鸡的价钱2.鸡的数量
			if ($g*5+$m*3+$c/3==100 && $g+$m+$c==100) {
				echo "公鸡 $g";
				echo "母鸡 $m";
			    echo "雏鸡 $c";
			    echo "<hr>";
			}
		}
		
	}
	
}



?>