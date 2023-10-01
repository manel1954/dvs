<?php
include_once dirname(dirname(__FILE__)).'/include/config.php';         
include_once dirname(dirname(__FILE__)).'/include/tools.php';        
include_once dirname(dirname(__FILE__)).'/include/functions.php';    
?>
<fieldset style="width:650px;margin-top:3px;margin-left:0px;margin-right:0px;font-size:12px;border-top-left-radius: 3px; border-top-right-radius: 3px;border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;height:99px;">
  <table style="margin-top:3px;">

<?php
$i = 0;
for ($i = 0;  ($i <= 0); $i++) { //Last 20 calls
	if (isset($lastHeard[$i])) {
		$listElem = $lastHeard[$i];
		if ( $listElem[2] ) {
			
		echo"<tr>";
		echo"<td align=\"center\">&nbsp;$local_time</td>";
		// DMR Slot
		echo"<td align=\"center\" style=\"color:black; font-weight:bold;font-size:20px;background:#D9D9D9;\">&nbsp;$listElem[1]</td>";
		if ((is_numeric($listElem[2]) || strpos($listElem[2], "openSPOT") !== FALSE) && (strlen($listElem[2])==7)) {
		    echo "<td align=\"center\" style=\"color:#ff0;background:#D9D9D9;\" style=\"height:90px;\">&nbsp;<a href=\"https://database.radioid.net/database/view?id=$listElem[2]\" target=\"_blank\"><span style=\"color:#ff0;font-weight:bold;font-size:60px;background:#D9D9D9;\">$listElem[2]</span></a></td>";
		} elseif (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $listElem[2])|| $listElem[2] == "N0CALL") {
 	                       echo "<td align=\"center\" style=\"color:#ff0;font-size:20px;background:#D9D9D9;\"><b>&nbsp;$listElem[2]</b></td>";
		} else {
		    if (strpos($listElem[2],"-") > 0) { $listElem[2] = substr($listElem[2], 0, strpos($listElem[2],"-")); }
			    if ( $listElem[3] && $listElem[3] != '    ' ) {
			// INDICATIVO
				echo "<td align=\"left\">&nbsp;<a href=\"http://www.qrz.com/db/$listElem[2]\" target=\"_blank\"><b>$listElem[2]</b></a><span style=\"color:#000000;font-size:60px;font-weight:bold;background:#000000;\">/$listElem[3]</span></td>";
		    } else {
			// INDICATIVO
				echo "<td align=\"left\" style=\"color:#000000;font-size:60px;font-weight:bold;background:#000000;\" align=\"left\">&nbsp;<a href=\"http://www.qrz.com/db/$listElem[2]\" target=\"_blank\"><b>$listElem[2]</b></a></td>";
		    }
		}
		// Display NAME by DV8AWC
		if ( DISPLAYNAME == "YES" && file_exists(DMRIDDATPATH."/DMRIds.dat") && ! empty(DMRIDDATPATH."/DMRIds.dat")) {
		$arr2 = $listElem[2];
		if (is_numeric($arr2) || $arr2 == "FCS" || $arr2 == "MMDVM" || $arr2 == "P25"|| $arr2 == "N0CALL") {
			echo "<td align=\"center\" style=\"font-weight:bold;color:#464646;font-size:20px;background:#D9D9D9;\">&nbsp;<b>&nbsp;</b></td>";
		} else {
			$pos = strpos($dmrIDline, $arr2." ");
			if ($pos != false) {
				$name = substr($dmrIDline, ($pos + strlen($arr2." ")));
				$name = ltrim($name, " ");
				$x = strpos($name, "\n");
				$y = strpos($name, " ");
				$name = rtrim($name, " ");
				if ($x < $y) {
					$name = substr($name, 0, $x);
					echo "<td align=\"center\" style=\"font-weight:bold;color:#464646;background:#D9D9D9;\">&nbsp;<b>".$name."</b></td>";
				} else {
					$name = substr($name, 0, $y);
					echo "<td align=\"center\" style=\"font-weight:bold;color:#464646;background:#D9D9D9;\">&nbsp;<b>".$name."</b></td>";
				}
			} else {
				echo "<td align=\"center\" style=\"font-weight:bold;color:#464646;background:#D9D9D9;\">&nbsp;<b>&nbsp;</b></td>";
			}
		    }
		}
		if (strlen($listElem[4]) == 1) { $listElem[4] = str_pad($listElem[4], 8, " ", STR_PAD_LEFT); }
		if ( substr($listElem[4], 0, 6) === 'CQCQCQ' ) {
			echo "<td align=\"center\">&nbsp;<span style=\"color:#000;font-weight:bold;font-size:20px;\">$listElem[4]</span></td>";
		} else {
			echo "<td align=\"left\">&nbsp;<span style=\"color:#000;font-weight:bold;font-size:20px;\">".str_replace(" ","&nbsp;", $listElem[4])."</span></td>";
		}



		if ($listElem[6] == null) {
                             if ($listElem[1] == "DMR Slot 2" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"height:90px;font-size:20px;background:#f00;\">&nbsp;&nbsp;&nbsp;RX DMR&nbsp;&nbsp;&nbsp;</td>";}
                             if ($listElem[1] == "DMR Slot 1" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"height:90px;font-size:20px;background:#f00\">&nbsp;&nbsp;&nbsp;RX DMR&nbsp;&nbsp;&nbsp;</td>";}
                             if ($listElem[1] == "YSF" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"background:#D9D9D9;\">&nbsp;&nbsp;&nbsp;RX YSF&nbsp;&nbsp;&nbsp;</td>";}
                             if ($listElem[1] == "P25" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"background:#D9D9D9;\">&nbsp;&nbsp;&nbsp;RX P25&nbsp;&nbsp;&nbsp;</td>";}
			     if ($listElem[1] == "NXDN" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"background:#D9D9D9;\">&nbsp;&nbsp;&nbsp;RX NXDN&nbsp;&nbsp;</td>";}
                             if ($listElem[1] == "D-Star" && $listElem[5] == "Net")  {echo "<td colspan=\"3\" style=\"background:#D9D9D9;\">&nbsp;&nbsp;&nbsp;RX D-Star</td>";}
                             if ($listElem[5] == "LNet")  {echo "<td colspan=\"3\" style=\"color:white;\">TX</td>";}
			} else if ($listElem[6] == "DMR Data") {
				echo "<td colspan=\"3\" style=\"background:#D9D9D9;\">DMR Data</td>";
			} else if ($listElem[6] == "GPS") {
				echo "<td colspan=\"3\" style=\"background:#D9D9D9;\"><a style=\"display:block;\" target=\"_blank\" href=https://www.openstreetmap.org/?mlat=".floatval($listElem[9])."&mlon=".floatval($listElem[10])."><b>GPS</b></a></td>";
			} else {
		

			// Colour the Loss Field
			if (floatval($listElem[7]) < 1) { echo "<td>$listElem[7]</td>"; }
			elseif (floatval($listElem[7]) == 1) { echo "<td style=\"background:#D9D9D9;\">$listElem[7]</td>"; }
			elseif (floatval($listElem[7]) > 1 && floatval($listElem[7]) <= 3) { echo "<td style=\"background:#D9D9D9;\">$listElem[7]</td>"; }
			else { echo "<td style=\"background:#f00;color:#f0D9D9D90;\">$listElem[7]</td>"; }

			// Colour the BER Field
			if (floatval($listElem[8]) == 0) { echo "<td>$listElem[8]</td>"; }
			elseif (floatval($listElem[8]) >= 0.0 && floatval($listElem[8]) <= 1.9) { echo "<td style=\"background:#D9D9D9;\">$listElem[8]</td>"; }
			elseif (floatval($listElem[8]) >= 2.0 && floatval($listElem[8]) <= 4.9) { echo "<td style=\"background:#D9D9D9;\">$listElem[8]</td>"; }
			else { echo "<td style=\"background:#D9D9D9;color:#f9f9f9;\">$listElem[8]</td>"; }
		}
		echo"</tr>\n";
		}
	}
}

?>
  </table>
</fieldset>
