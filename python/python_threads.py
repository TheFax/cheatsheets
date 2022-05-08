from threading import Thread
from time import sleep

pressed_keys = ""

def t1():
    while 1:
        sleep(0.5)
        print("Thread action!")
     
  
thread1 = Thread(target=t1)
thread1.start()

while 1:
    sleep(1)
    print("MAIN")
