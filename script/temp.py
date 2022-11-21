import Adafruit_MCP9808.MCP9808 as mcp #Import la librairie Adafruit

capteurTemp = mcp.MCP9808() #Recuperation de la temperature
temperature = capteurTemp.readTempC() #Lecture de la temperature

print(round(temperature,1), "°C") #Affiche la temperature