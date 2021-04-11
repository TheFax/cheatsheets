class telegram():
    import requests
    import json

    telegram_api_token = ""
    telegram_chat_id = ""
    options = "parse_mode=html&"
    demo = True
    verbose = False
    message_max = 20
    message_counter = 0

    #https://stackoverflow.com/questions/32025189/why-does-telegram-bot-getupdates-long-polling-returns-immediately
    #https://core.telegram.org/bots/api#setwebhook
    #Canale privato: https://stackoverflow.com/questions/33858927/how-to-obtain-the-chat-id-of-a-private-telegram-channel

    def __init__(self, api_token, chat_id):
        self.telegram_api_token = api_token
        self.telegram_chat_id = chat_id

    def send_message(self, testo):
        #Conto i messaggi per fare in modo di non spedirne troppi:
        if (self.message_counter >= self.message_max):
            print("[Telegram_Class] - Massimo numero di messaggi raggiunto. Il messaggio non sarà inviato.")
            return False
        self.message_counter += 1
        
        #Visualizzo eventualmente tutta la parte "verbose":
        if (self.verbose == True):
            print("[Telegram_Class] - verbose: True")
            print("[Telegram_Class] - demo:", self.demo)
            print("[Telegram_Class] - message_counter:", self.message_counter)
            print("[Telegram_Class] - message_max:", self.message_max)
            print("[Telegram_Class] - api_token: ", self.telegram_api_token)
            print("[Telegram_Class] - chat_id:", self.telegram_chat_id)
            print("[Telegram_Class] - ---------------------------------------------- Il testo da spedire e':")
            print(testo)
            print("[Telegram_Class] - ----------------------------------------------")

        #Se siamo in modalità demo, non spedisco i messaggi.
        if (self.demo == True):
            print("[Telegram_Class] - La classe è in modalità DEMO. I messaggi non saranno spediti.")
            return True
        
        link = "https://api.telegram.org/bot" + self.telegram_api_token + "/sendMessage?" + self.options + "chat_id=" + self.telegram_chat_id + "&text=" + testo
        try:
            f = self.requests.get(link)
            return True
        except (self.requests.ConnectTimeout, self.requests.HTTPError, self.requests.ReadTimeout, self.requests.Timeout, self.requests.ConnectionError):
            print("[Telegram_Class] - Errore di rete. Il messaggio Telegram non è stato inviato.")
            return False

if __name__ == '__main__':
    token = ""
    chat = ""
    
    x = telegram(token, chat)
    x.demo = False
    x.verbose = True
    
    if (x.demo == False):
        y=input("Attenzione: non siamo in modalità DEMO. Posso spedire un vero messaggio (Y/N)? ")
        if (y != "y" and y != "Y"):
            print ("Invio annullato.")    
            exit()
    
    my_string = ""<pre>TEST telegram msg</pre>\r\n<strong>bold string</strong>""
    
    result = x.send_message(my_string)
   
    print("[Telegram_Class/__main__] Risultato dell'operazione:", result)
    
