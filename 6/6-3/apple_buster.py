characters = 'abcdefghijklmnopqrstuvwxyz'

def checker(guess, answer):
    if(guess==answer):
        print(f"Cracked! : {guess}")
        return True
    else:
        print(f"try : {guess}")
        return False

def buster_5char(target, characters):
    for c1 in characters:
        for c2 in characters:
            for c3 in characters:
                for c4 in characters:
                    for c5 in characters:
                        gen = ''.join([c1, c2, c3, c4, c5])
                        if(checker(gen,target)):
                            return
                        

buster_5char("apple", "abcdefghijklmnopqrstuvwxyz")
