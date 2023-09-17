#!/usr/bin/env bash
#Pasar a ESPECIAL

sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini
sudo systemctl restart mmdvm_bridge.service & sudo systemctl restart analog_bridge.service
