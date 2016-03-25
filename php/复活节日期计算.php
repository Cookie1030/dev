 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>复活节日期计算</title>
</head>
	<p>复活节日期计算</p>
	<form method="POST" action="date.php">
	请输入年份：<input type="text" name="year" maxlength="30" size="30"></br></br>
	<input type="submit" value="计算">
	</form>
	<form name="myform">
	<?
		$year = $_POST['year'];
		if(!$year)
		{
			$year = date(Y);
		}
		else{
			$year = $year;
		}
		$N = $year - 1900;
		$A = $N%19;
		$Q = (int)($N/4);
		$B=(int)((7*$A+1)/19);
		$M=(11*$A+4-$B)%29;
		$W=($N+$Q+31-$M)%7;
		$R=25-$M-$W;
		if($R>0)
		{
			$Mon = 4;
			$Date = $R;
		}
		else if($R<0)
		{
			$Mon = 3;
			$Date = 31+$R;
		}
		else
		{
			$Mon = 3;
			$Date = 31;
		}
		echo "$year/$Mon/$Date";
	?>
	</form>
