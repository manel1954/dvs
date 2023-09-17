#!/usr/bin/env bash
#Pasar a BM

sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini
sudo systemctl restart mmdvm_bridge.service & sudo systemctl restart analog_bridge.service
