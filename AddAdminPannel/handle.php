<?php 

function object2file($value, $filename)
{
	$str_value = serialize($value);
	
	$f = fopen($filename, 'w');
	fwrite($f, $str_value);
	fclose($f);
}

function object_from_file($filename)
{
	$file = file_get_contents($filename);
	$value = unserialize($file);
	return $value;
}

/*$array = array(
	'login' => "admin",
	'passwd' => password_hash("passwd", PASSWORD_DEFAULT),
	'tableImg' => "table.png",
	'about_usImg' => "master.png",
	'slider' => array(
	),
);

object2file($array, 'array.txt');*/

if(isset($_POST['key']) && $_POST["key"] == "1234567890987654321"){

	$file = fopen("table.html","w");
	if($file){
		fwrite($file , $_POST["tableContent"]);
		fclose ($file);
		echo "Таблица успешно обновлена! ";
	}
	else{
		echo "Таблица не обновлена...";
	}
	$file = fopen("about_us.html","w");
	if($file){
		fwrite($file , $_POST["aboutUsContent"]);
		fclose ($file);
		echo "Запись успешно обновлена!";
	}
	else{
		echo "Запись не обновлена";
	}

}