<?php
include_once dirname(dirname(__FILE__)).'/include/config.php';         
include_once dirname(dirname(__FILE__)).'/include/tools.php';        
include_once dirname(dirname(__FILE__)).'/include/functions.php';  

include '../include/lh.php';

?>

<style>
body {
    background-color: #000 !important;
    color: #fff;
    margin: 0;
    padding: 0;
}

.callsign-grande {
    font-size: 72px;
    font-weight: bold;
    color: #e9ae30ff;
    text-align: center;
    text-shadow: 0 0 15px #e9ae30ff;
    padding: 20px 0;
}

.info-fila {
    font-size: 24px;
    color: #ffffff;
    text-align: center;
    padding: 8px;
    margin: 5px 0;
}

.info-fila .etiqueta {
    color: #00aaff;
    font-weight: bold;
    display: inline-block;
    width: 100px;
    text-align: right;
    margin-right: 10px;
}

.info-fila .valor {
    color: #ffffff;
    font-weight: normal;
}

fieldset {
    background-color: #000 !important;
    border: 2px solid #333;
    border-radius: 10px;
    padding: 20px;
    width: 100%;
    margin: 0;
    box-sizing: border-box;
}
</style>

<div style="width: 100%; padding: 0; margin: 0;">
<fieldset style="height:auto;margin-top:0;">
<?php
$i = 0;
for ($i = 0;  ($i <= 0); $i++) {
	if (isset($lastHeard[$i])) {
		$listElem = $lastHeard[$i];
		if ( $listElem[2] ) {
			$utc_time = $listElem[0];
            $utc_tz =  new DateTimeZone('UTC');
            $local_tz = new DateTimeZone(date_default_timezone_get ());
            $dt = new DateTime($utc_time, $utc_tz);
            $dt->setTimeZone($local_tz);
            $local_time = strftime('%H:%M:%S %b %d', $dt->getTimestamp());

			// Extraer el indicativo limpio
			$callsign = $listElem[2];
			if (strpos($callsign, "-") > 0) { 
				$callsign = substr($callsign, 0, strpos($callsign, "-")); 
			}
			
			// MOSTRAR INDICATIVO EN GRANDE
			echo '<div class="callsign-grande">' . htmlspecialchars($callsign) . '</div>';
			
			// MOSTRAR INFORMACIÓN EN FILAS
			echo '<div class="info-fila"><span class="etiqueta">Mode:</span> <span class="valor">' . htmlspecialchars($listElem[1]) . '</span></div>';
			
			// Target
			if (strlen($listElem[4]) == 1) { 
				$listElem[4] = str_pad($listElem[4], 8, " ", STR_PAD_LEFT); 
			}
			echo '<div class="info-fila"><span class="etiqueta">Target:</span> <span class="valor">' . htmlspecialchars(str_replace(" ", " ", $listElem[4])) . '</span></div>';
			
			// Src
			echo '<div class="info-fila"><span class="etiqueta">Src:</span> <span class="valor">' . htmlspecialchars($listElem[5]) . '</span></div>';
			
			// Dur(s)
			$duracion = isset($listElem[6]) && $listElem[6] != null ? htmlspecialchars($listElem[6]) : '-';
			echo '<div class="info-fila"><span class="etiqueta">Dur(s):</span> <span class="valor">' . $duracion . '</span></div>';
			
			// Loss
			$loss = isset($listElem[7]) && $listElem[7] != null ? htmlspecialchars($listElem[7]) : '-';
			$loss_color = '#ffffff';
			if (isset($listElem[7]) && $listElem[7] != null) {
				if (floatval($listElem[7]) == 1) { $loss_color = '#0073ffff'; }
				elseif (floatval($listElem[7]) > 1 && floatval($listElem[7]) <= 3) { $loss_color = '#ffaa00'; }
				elseif (floatval($listElem[7]) > 3) { $loss_color = '#ff3333'; }
			}
			echo '<div class="info-fila"><span class="etiqueta">Loss:</span> <span class="valor" style="color:' . $loss_color . ';">' . $loss . '</span></div>';
			
			// BER
			$ber = isset($listElem[8]) && $listElem[8] != null ? htmlspecialchars($listElem[8]) : '-';
			$ber_color = '#ffffff';
			if (isset($listElem[8]) && $listElem[8] != null) {
				if (floatval($listElem[8]) >= 0.0 && floatval($listElem[8]) <= 1.9) { $ber_color = '#00ff00'; }
				elseif (floatval($listElem[8]) >= 2.0 && floatval($listElem[8]) <= 4.9) { $ber_color = '#ffaa00'; }
				elseif (floatval($listElem[8]) > 4.9) { $ber_color = '#ff3333'; }
			}
			echo '<div class="info-fila"><span class="etiqueta">BER:</span> <span class="valor" style="color:' . $ber_color . ';">' . $ber . '</span></div>';
		}
	}
}
?>
</fieldset>
</div>