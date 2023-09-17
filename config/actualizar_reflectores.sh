#!/bin/bash
cd /opt/MMDVM_CM/DMR2YSF
curl --fail -o FCSRooms.txt http://www.pistar.uk/downloads/FCS_Hosts.txt
sleep 1
cd /var/lib/mmdvm
curl --fail -o DExtra_Hosts.txt -s http://www.pistar.uk/downloads/DExtra_Hosts.txt
sleep 1
curl --fail -o DCS_Hosts.txt -s http://www.pistar.uk/downloads/DCS_Hosts.txt
sleep 1
curl --fail -o DPlus_Hosts.txt -s http://www.pistar.uk/downloads/DPlus_Hosts.txt