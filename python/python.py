import math
math.cos()

from math import cos
cos()




globalvar = 105




print(0b1101011)   # Binary - Output: 107
print(0xFB)        # Hex    - Output: 253
print(0o15)        # Octal  
print("ASCII value:" , ord('A'))       #65  UNICODE! Quindi valori possibili >255
print("Character:"   , chr('65'))      #A   UNICODE! Quindi valori possibili >255
print("In binary:"   , bin(100))       #0b1100100
print("In hex:"      , hex(54))        #0x36
print("In integer:"  , int(123.99))    #123
print("Round:"       , round(10.7))    #11
print("Round digits:", round(1.123456, 2)) #1.12
print("From bin to integer:"  , int('0b1010', 2) , int('1010', 2))    #10, 10
print("From hex to integer:"  , int('0xA', 16)   , int('A', 16))      #10, 10
print("In float:" , float("  2.53\n")) #2.53
print("Lenght:" , len('Python'))       #6
print("Sorted:" , sorted('Python'))    #['P', 'h', 'n', 'o', 't', 'y']
inputString = input('Enter a string:')




def function_sum(a , b = 2):
    global globalvar
    c = a + b + globalvar
    return c

def reciprocal(num)
    try:
        r = 1/num
    except:
        print('Exception caught')
        return
    return r

def doing_nothing():
	"""Descrizione della funzione
    anche su piu righe.
    Accessibile da doing_nothing.__doc__"""
    pass




if a == 0:
    print('Zero')
elif a >= 2:
    print('Due o più')
elif a != -4:
	print('Non meno quattro')
else:
    print('Something else')


if a==0 and b==1: # and or !
    print('si')


for i in 'hello':
    print('Lettera' + i)  #h, e, l, l, o
    
names = ['John','Monica','Steven','Robin']
for i in names:
    print('Hello ' + i)
##########################################################################################
for i in range(1,11):  #da 1 a 10 compresi
	if i == 3:
		#se i=3, passa direttamente al prossimo ciclo
		continue
    if i == 5:
    	#se i=5, ferma completamente il ciclo for
        break
    print(i)
#1, 2, 4




digits = [0, 1, 5]
for i in digits:
    print(i, end = ' ')
else:
    print("else fuziona solo se non ci sono stati break")
#0 1 5 else fuziona solo se non ci sono stati break
for i in digits:
    print(i, end = ' ')
    break
else:
    print("else fuziona solo se non ci sono stati break")
#0




i = 5
while(i):
    print(i)
    i = i – 1
#5, 4, 3, 2, 1




tupla = ("immutabile", 99, 'start from zero')
print(tupla[1])


lista = ['mutabile', 8, 5.55, 'test', 'start from zero']
	#lista[0]           # first element of the list
	#lista[start:stop]  # items start through stop-1
	#lista[start:]      # items start through the rest of the array
	#lista[:stop]       # items from the beginning through stop-1
	#lista[:]           # a copy of the whole array
print(lista[1])      #scrive 8
print(lista.pop(1))  #scrive 8, poi l'elemento viene rimosso
lista.append('cucu') #aggiunge l'elemento 'cucu' alla lista
lista.remove('test') #viene rimosso l'elemento 'test' dalla lista


dizionario = {1:'mutabile', 44:9988, 'chiave':'valore'}
print(dizionario['chiave'])               #valore
print([*dizionario.values()])             #['mutabile', 9988, 'valore']
print([*dizionario.keys()])               #[1, 44, 'chiave']
if 'chiave' in dizionario: print ("si")   #si
dizionario["new element"] = "red"         #aggiungo alemento "new element" al dizionario


print (len(tupla/lista/dizionario))   #scrive il numero di elementi

for x in tupla/lista/dizionario:
  print(x) #per i dizionari sarà stampata la CHIAVE di ogni elemento.

del tupla/lista/dizionario    #elimina la variabile liberando memoria
