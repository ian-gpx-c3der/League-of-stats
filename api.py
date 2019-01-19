#!C:\Users\Ian\AppData\Local\Programs\Python\Python37-32\python.exe
# -*- coding: UTF-8 -*-
#python porque o php não conseguiu faze a requisicao 
import cgi,cgitb,requests,json
cgitb.enable()
print("Content-Type: text/plain;charset=utf-8")
print()
form = cgi.FieldStorage()
name = form.getvalue("name")
name = name.replace(" ","%20")
first = "https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{}?api_key=".format(name)
url = requests.get(first)
http = url.content
http = bytes.decode(http)
print(http)

