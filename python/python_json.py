
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


//PHP CODE
$txt = json_encode($_POST);
$myfile = fopen("pub/commands.txt", "w") or die("Unable to open command file!");
fwrite($myfile, $txt);
fclose($myfile);


//PYTHON CODE
import json
 
with open ("/var/www/html/pub/commands.txt", "r") as read_file:
  data = json.load(read_file)

json.dumps(data)
print (data['commands'])
