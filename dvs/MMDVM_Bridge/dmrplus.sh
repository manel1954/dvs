#!/usr/bin/env bash
#Pasar a DMR+

sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini
sudo systemctl restart mmdvm_bridge.service & sudo systemctl restart analog_bridge.service
