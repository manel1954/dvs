<?php
// Leer información de Analog_Bridge desde el archivo .ini
$iniFile = '/opt/Analog_Bridge/Analog_Bridge.ini';
$abinfo = array(
    'tlv' => array('ambe_mode' => 'N/A'),
    'usrp' => array('tx_port' => 'N/A'),
    'digital' => array('tg' => 'N/A')
);

if (file_exists($iniFile)) {
    $ini = parse_ini_file($iniFile, true);
    
    if (isset($ini['AMBE_AUDIO']['ambeMode'])) {
        $abinfo['tlv']['ambe_mode'] = $ini['AMBE_AUDIO']['ambeMode'];
    }
    
    if (isset($ini['USRP']['txPort'])) {
        $abinfo['usrp']['tx_port'] = $ini['USRP']['txPort'];
    }
    
    if (isset($ini['AMBE_AUDIO']['txTg'])) {
        $abinfo['digital']['tg'] = $ini['AMBE_AUDIO']['txTg'];
    }
}
?>
