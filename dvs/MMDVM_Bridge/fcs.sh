#!/usr/bin/env bash
#Pasar a FCS

sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini
sudo systemctl restart mmdvm_bridge.service & sudo systemctl restart analog_bridge.service


