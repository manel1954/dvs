#!/bin/bash

#*********************************************************************************************
# **************** esto está en el fichero /var/www/html/cambia_configuracion_port.php *******
#*********************************************************************************************

# guardamos el valor para luego recuperarlo llamando al script cambia_puerto_usrp.sh
# exec("sudo sed -i '40c $port' /home/pi/.local/datos_dvswitch");
# exec("cd /home/pi/V106; sudo sh cambia_puerto_usrp.sh");

# Recuperamos el número de puerto guardado en la linea 40 de /home/pi/.local/datos_dvswitch y adjudicamos a la variable "valor"
nombre_sala=$(awk "NR==1" /home/pi/.local/datos_dvswitch) 
sala=$(awk "NR==2" /home/pi/.local/datos_dvswitch) 
echo "nombre de la sala: "
echo "$nombre_sala"
read a
# Escribe el puerto en la linea 21 del fichero /opt/Analog_Bridge/analog_bridge.sh
sudo sed '13a\ { \"disp\": \"'$nombre_sala'\", \"tg\": \"'$sala'\" },' /opt/Analog_Reflector/arRoot/modes/YSF_node_list.json > /opt/Analog_Reflector/arRoot/modes/YSF_node_list1.json