
pi@raspberrypi:/var/www/html $ cat ./pub/commands.txt
{"commands":"01:01"}



pi@raspberrypi:/var/www/html $ python3
Python 3.5.3 (default, Sep 27 2018, 17:25:39)
[GCC 6.3.0 20170516] on linux
Type "help", "copyright", "credits" or "license" for more information.
>>> import json
>>> with open ("/var/www/html/pub/commands.txt", "r") as read_file:
...   data = json.load(read_file)
>>> print (data)
{'commands': '01:01'}
>>> json.dumps(data)
'{"commands": "01:01"}'
>>> type (data)
<class 'dict'>
>>> print (data['commands'])
01:01


//PYTHON CODE
import json
 
with open ("/var/www/html/pub/commands.txt", "r") as read_file:
  data = json.load(read_file)

json.dumps(data)
print (data['commands'])


##Esempio di deconding JSON con origine dei dati su URL
import json
import requests
r = requests.get('https://urljson')
#esempio: [{'ID': '14', 'title': '324', 'content': '345', 'created': '2020-03-20 08:41:52'}, {'ID': '13', 'title': 'Title23222222', 'content': 'sdfgsfdgdsg', 'created': '2020-03-20 08:41:47'}, {'ID': '12', 'title': 'Ur', 'content': 'Ff', 'created': '2020-03-20 01:07:00'}]
#r.status_code conterrà 200 se la richiesta è andata a buon fine
#r.text
#r.json()
values=json.loads(r.json())
print(len(values))
print(values[0]['ID'])
for x in range(len(values)):
	print(values[x]['ID'])


