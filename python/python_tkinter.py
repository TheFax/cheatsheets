import tkinter as tk
import time 

def clicked():
    testo = "Welcome to " + txt.get()
    lbl.configure(text= testo)

def update_clock():
    now = time.strftime("%H:%M:%S")
    print ("Auto update", now)
    txt.delete(0,tk.END)
    txt.insert(0,now)
    window.after(1000, update_clock)

def close_software():
    window.destroy()

#Creo la finestra principale. Si chiamerà "window"
window = tk.Tk()
window.title("TKinter test app")
window.geometry('800x250')

#Creo gli elementi in essa contenuti e li posiziono
lbl = tk.Label(window, text="Hello", font = ('Arial' , 25), fg = 'black', width = 40, height = 1,  borderwidth = 1, relief = 'solid')
lbl.place(x=10, y=10)

txt = tk.Entry(window,width=10)
txt.place(x=10, y=70)

btn = tk.Button(window, text="Click Me", command=clicked)
btn.place(x=100,y=100)

btn_quit = tk.Button(window, text="Quit", command=close_software)
btn_quit.place(x=200,y=100)

#The Button Widget
#The Canvas Widget
#The Checkbutton Widget
#The Entry Widget
#The Frame Widget
#The Label Widget
#The LabelFrame Widget
#The Listbox Widget
#The Menu Widget
#The Menubutton Widget
#The Message Widget
#The OptionMenu Widget
#The PanedWindow Widget
#The Radiobutton Widget
#The Scale Widget
#The Scrollbar Widget
#The Spinbox Widget
#The Text Widget
#The Toplevel Widget

#Avvio la funzione che farà da timer
update_clock()

print ("Tutto è pronto signori")
time.sleep(2)

#Avvio il main loop
print ("Avvio il mainloop")
window.mainloop()
print ("Dopo il mainloop")
