<?php
				for ($i = 1; $i <= 6; $i++) {
			
				$sql = "select link from groupA where id=".$i;
				$result = mysql_query($sql);
				$zero = 0;
				while ($rows = mysql_fetch_array($result)) {
					$link = $rows['link'];
				}
				
				$str = file_get_contents($link);
				
				$scan1 = '<td>2016 Regular Season</td>';
				$len1 = strlen($scan1);
				$pos1 = strpos($str, $scan1);
				$pos1+=$len1;
				$scan2 = '<td class="textright">';
				$len2 = strlen($scan2);
				for ($j = 1; $j <= 2; $j++) {
					$pos1 = strpos($str, $scan2, $pos1);
					$pos1 += $len2;
				}
				$ab = '';
				while ( $str[$pos1] != '<') {
					$ab .= $str[$pos1];
					$pos1++;
				}
				echo $ab;
				
				$sql1 = "UPDATE groupA SET AB=".$ab." WHERE id=".$i;
				echo $sql1 . "<br>";				
				mysql_query($sql1);
				}

?>