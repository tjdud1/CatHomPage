import requests

url = 'http://localhost:8000/index.php'
response = requests.get(url)  #get요청 보내는 함수
print(response.text)
