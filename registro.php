<html>
	<body>
		<?php
		mysql_select_db('mydb',$link);
		echo "entre a PHP";
		echo "<br>";
		$link=mysql_connect('localhost','root','')or die("no se conecto");
		mysql_select_db('mydb',$link)or die ("no se selecciono la base de datos");
		$sql= "insert into Doctor(idDoc,nombre_doc,apellidoMat,apellidoPat,especialidad,ced_prof,email,password,direccion,estado,tel,cel)";
		$sql.="values(".$_POST['idDoc'].",".$_POST['nombre_Doc']."".$_POST['apellidoMat'].",".$_POST['apellidoPat'].",".$_POST['especialidad'].",".$_POST['ced_prof'].",".$_POST['email']."".$_POST['password'].",".$_POST['direccion'].",".$_POST['estado'].",".$_POST['tel'].",".$_POST['cel'].")";
		$resul=mysql_query($sql)or die("failure");
		echo "se ha insertado el registro ";
		echo "<br>";
		?>
	</body>
</html>