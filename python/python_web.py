#pip install requests

import requests

url = 'http://myurl.com/request.php"

data = {
    'user' : 'John',
    'id'   : '12',
    }

response = requests.post(url, data=data)
#oppure
response = requests.get(url)

print(response.text)
print(response.status_code)
print(response.headers['content-type'])
#     response... -> https://www.w3schools.com/python/ref_requests_response.asp
