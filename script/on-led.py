import RPi.GPIO as GP # Importe la librairie pour contrôler le GPIO
import RPi.GPIO as GPIO # Importe la librairie pour contrôler le GPIO
import sys #librairie système

# Initialisation du GPIO
GP.setwarnings(False) # Désactive les avertissements lors de la modification du mode d'une broche
GP.setmode(GP.BOARD) # Le programme utilisera le numéro des broches du GPIO

pintest = sys.argv[1] #permet de récupérer la variable numero broche venant de php
B = int(pintest) #convertir cette variable en entier

GPIO.setup(B, GPIO.OUT) #Active le contrôle du GPIO
GPIO.output(B, GPIO.HIGH) #On l'allume