import requests 

url = 'http://localhost:8000/index.php'
payload = {'username':'grape', 'password':'secret1234'}

response = requests.post(url, data = payload, allow_redirects=False)

cookies = response.cookies

for cookie in cookies:
    print(f"{cookie.name}: {cookie.value}")

print(response.headers)
print(response.status_code)
