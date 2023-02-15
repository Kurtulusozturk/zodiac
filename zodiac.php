<html>
	<body>
	<style>
	body {
	background-color: #0091CC
	}
	</style>
		
		<form method = "get" action="zodiac.php" >
			<label> My Name Is </label>
			<input type = "text" name = "userName[]" placeholder="Your Name and Surname">
			<br>
			
			
			
			<label> My Birthday is</label>
			<select name= "day[]">
			
			<?php 
				for($d = 1; $d<=31; $d++) {
					if ($d < 10) {
						echo "<option value=".$d.">0".$d."</option>";
					}
					
					else {
					echo "<option value=".$d.">".$d."</option>";
					}
				}
			?>
			</select>
			
			
			
			<select name= "month[]">
			
			<?php 
				for($m = 1; $m<=12; $m++) {
					if ($m < 10) {
						echo "<option value=".$m.">0".$m."</option>";
					}
					
					else {
					echo "<option value=".$m.">".$m."</option>";
					}
				}
			?>
			</select>
			
			
			<select name= "year_Date[]" >
			
				<?php 
				for($i=1970; $i<=2021; $i++){
				echo "<option value=".$i.">".$i."</option>";
				}	
				?>
				
			</select>
			<br>
			
			<?php
			$birthYear = "";
			$birthMonth = "0";
			$birthDay =	"0";
			$zodiacSign = "";
			
			if(isset($_GET['year_Date'])&& isset ($_GET['month']) && isset($_GET['day'])) {
				foreach ($_GET['year_Date'] as $birthYear);
				foreach($_GET['month'] as $birthMonth);
				foreach($_GET['day'] as $birthDay);
			}
				$nowhour=date("H");
				$nowday=date("d");
				$nowmonth=date("m");
				$nowyear=date("Y");
				$year=$birthYear;
				$month=$birthMonth;
				$day=$birthDay;
				if($month==1){
					if ($day<=20){
						if ($day>=1){
						$zodiacSign = "Goat";
						}
					}
					else if ($day<=31){
						if ($day>=21){
						$zodiacSign = "Water-Bearer";
						}
					}
				}
				if($month==2){
					if ($day<=19){
						if ($day>=1){
						$zodiacSign = "Water-Bearer";
						}
					}
					else if ($day<=28){
						if ($day>=20){
						$zodiacSign = "Fish";
						}
					}
				}
				if($month==3){
					if ($day<=21){
						if ($day>=1){
						$zodiacSign = "Fish";
						}
					}
					else if ($day<=30){
						if ($day>=22){
						$zodiacSign = "Ram";
						}
					}
				}
				if($month==4){
					if ($day<=20){
						if ($day>=1){
						$zodiacSign = "Ram";
						}
					}
					else if ($day<=30){
						if ($day>=21){
						$zodiacSign = "Bull";
						}
					}
				}
				if($month==5){
					if ($day<=21){
						if ($day>=1){
						$zodiacSign = "Bull";
						}
					}
					else if ($day<=31){
						if ($day>=22){
						$zodiacSign = "Twins";
						}
					}
				}
				if($month==6){
					if ($day<=21){
						if ($day>=1){
						$zodiacSign = "Twins";
						}
					}
					else if ($day<=30){
						if ($day>=22){
						$zodiacSign = "Crab";
						}
					}
				}
				if($month==7){
					if ($day<=23){
						if ($day>=1){
						$zodiacSign = "Crab";
						}
					}
					else if ($day<=31){
						if ($day>=24){
						$zodiacSign = "Lion";
						}
					}
				}
				if($month==8){
					if ($day<=23){
						if ($day>=1){
						$zodiacSign = "Lion";
						}
					}
					else if ($day<=31){
						if ($day>=24){
						$zodiacSign = "Virgo";
						}
					}
				}
				if($month==9){
					if ($day<=23){
						if ($day>=1){
						$zodiacSign = "Virgo";
						}
					}
					else if ($day<=30){
						if ($day>=24){
						$zodiacSign = "Scales";
						}
					}
				}
				if($month==10){
					if ($day<=23){
						if ($day>=1){
						$zodiacSign = "Scales";
						}
					}
					else if ($day<=31){
						if ($day>=24){
						$zodiacSign = "Scorpion";
						}
					}
				}
				if($month==11){
					if ($day<=22){
						if ($day>=1){
						$zodiacSign = "Scorpion";
						}
					}
					else if ($day<=30){
						if ($day>=23){
						$zodiacSign = "Archer";
						}
					}
				}
				if($month==12){
					if ($day<=22){
						if ($day>=1){
						$zodiacSign = "Archer";
						}
					}
					else if ($day<=31){
						if ($day>=23){
						$zodiacSign = "Goat";
						}
					}
				}
				if(!($year==Null) && !($month==Null) && !($day==Null)){
				echo "<br />";
				$aliveyear=($nowyear-$year)-1;
				$alivemonth= (12-$month)+($aliveyear*12)+$nowmonth;
				$aliveday=(($aliveyear)*365)+ ((12-$month)*30)+((($nowmonth-1)*30)+($nowday))+(30-$day)+($aliveyear/4);
				}
			?>
			
			<label> My Zodiac Sign is </label>
			
			 
			
			<input type="text" name = "zodiac_Sign" value ="<?php echo($zodiacSign);?>">
			
			<br>
			<div>
            Now is
            <br>

                <?php 
                $nowhour=date("H");
                $nowday=date("d");
                $nowmonth=date("m");
                $nowyear=date("Y");
                echo($nowday. '.'.$nowmonth. '.'.$nowyear);
				
                    ?>

                    <br>
                <?php 
                echo(date("H:i"));
                ?>
				<?php
				echo( "</br> Your birth day is:".$birthDay . "." . $birthMonth.".". $birthYear ."\n");
				?>
		<div>
			<?php 
			 echo"<img src="; 
			if($zodiacSign == 'Goat') echo("goat.jpg");
			if($zodiacSign == 'Water-Bearer') echo("water-Bearer.jpg");
			if($zodiacSign == 'Fish') echo("fish.jpg");
			if($zodiacSign == 'Ram') echo("ram.jpg");
			if($zodiacSign == 'Bull') echo("bull.jpg");
			if($zodiacSign == 'Twins') echo("twins.jpg");
			if($zodiacSign == 'Crab') echo("crab.jpg");
			if($zodiacSign == 'Lion') echo("lion.jpg");
			if($zodiacSign == 'Virgo') echo("virgo.jpg");
			if($zodiacSign == 'Scales') echo("scales.jpg");
			if($zodiacSign == 'Scorpion') echo("scorpion.jpg");
			if($zodiacSign == 'Archer') echo("archer.jpg");
			?>
	
        </div>

        </div>
				<?php
				$file=file("point.txt");
				$satirsayisi=count($file);
				
				if($zodiacSign=='Goat')
				echo $file[0]."</br>";
			
				if($zodiacSign=='Water-Bearer')
				echo $file[1]."</br>";
			
				if($zodiacSign=='Fish')
				echo $file[2]."</br>";
			
				if($zodiacSign=='Ram')
				echo $file[3]."</br>";
			
				if($zodiacSign=='Bull')
				echo $file[4]."</br>";
			
				if($zodiacSign=='Twins')
				echo $file[5]."</br>";
				
				if($zodiacSign=='Crab')
				echo $file[6]."</br>";
			
				if($zodiacSign=='Lion')
				echo $file[7]."</br>";
			
				if($zodiacSign=='Virgo')
				echo $file[8]."</br>";
			
				if($zodiacSign=='Scales')
				echo $file[9]."</br>";
			
				if($zodiacSign=='Scorpion')
				echo $file[10]."</br>";
			
				if($zodiacSign=='Archer')
				echo $file[11]."</br>";
				?>
				<a href="zodiac.php">Reset</a>
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php
				echo "</br> You are alive ";
				echo round ( $aliveday);
				echo " days. <br />";
				
				if(isset($_GET['submit'])) {
				foreach ($_GET['userName'] as $namee);
                $file2 = fopen("About_U.txt" , "a") or die("Unable to open file!");
                fwrite($file2 , "name surename: $namee\n");
				fwrite($file2 , "date of birth: ");
                fwrite($file2 ,$birthDay . "." . $birthMonth.".". $birthYear ."\n");
                fwrite($file2 , "zodiac Sign: ");
                fwrite($file2 , $zodiacSign. "\n");
				
				if($zodiacSign=='Goat')
				fwrite($file2 , $file[0]);
			
				if($zodiacSign=='Water-Bearer')
				fwrite($file2 , $file[1]);
			
				if($zodiacSign=='Fish')
				fwrite($file2 , $file[2]);
			
				if($zodiacSign=='Ram')
				fwrite($file2 , $file[3]);
			
				if($zodiacSign=='Bull')
				fwrite($file2 , $file[4]);
			
				if($zodiacSign=='Twins')
				fwrite($file2 , $file[5]);
				
				if($zodiacSign=='Crab')
				fwrite($file2 , $file[6]);
			
				if($zodiacSign=='Lion')
				fwrite($file2 , $file[7]);
			
				if($zodiacSign=='Virgo')
				fwrite($file2 , $file[8]);
			
				if($zodiacSign=='Scales')
				fwrite($file2 , $file[9]);
			
				if($zodiacSign=='Scorpion')
				fwrite($file2 , $file[10]);
			
				if($zodiacSign=='Archer')
				fwrite($file2 , $file[11]);
				
				
                fwrite($file2 , "today's date time: ");
                fwrite($file2 , $nowday ."." . $nowmonth.".".$nowyear."\n");
                fwrite($file2 , "time: ");
                fwrite($file2 , date("H:i")."\n");
                fwrite($file2 , "days you lived:");
                fwrite($file2 , $aliveday."\n");
				fwrite($file2 , "\n");
                fclose($file2);
        }
				?>
	</body>

</html>



