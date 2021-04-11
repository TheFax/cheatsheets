import requests

url = 'http://myurl.com/request.php"

data = {
    'user' = 'John',
    'id' = '12',
    }

response = requests.post(url, data=data).text

print(response)
