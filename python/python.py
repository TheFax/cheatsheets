import math
math.cos()

from math import cos
cos()

import math
dir(math)           #['__doc__', '__name__', '__package__', 'acos', 'acosh', 'asin', 'asinh', 'atan', 'atan2', 'atanh', 'ceil', 'copysign', 'cos', 'cosh', 'degrees', 'e', 'erf', 'erfc', 'exp', 'expm1', 'fabs', 'factorial', 'floor', 'fmod', 'frexp', 'fsum', 'gamma', 'hypot', 'isinf', 'isnan', 'ldexp', 'lgamma', 'log', 'log10', 'log1p', 'modf', 'pi', 'pow', 'radians', 'sin', 'sinh', 'sqrt', 'tan', 'tanh', 'trunc']
math.cos.__doc__    #'Return the cosine of x (measured in radians).'


import random
int_rnd   = random.randint(1,10)  #1   - 10     es: 8
float_rnd = random.random()       #0.0 - 1.0    es: 0.368355385865348
float_rnd = random.uniform(5,40)  #5   - 40     es: 12.768667215875203

import time
time.sleep(0.5)    #wait 0.5 sec


#comment
var = 105
def modify_var():
    global var
    var = var + 1 
modify_var()
print(var, sep="", end="!")  #106!


** 	Exponent            2 ** 3 = 8
% 	Modulus/Remainder   22 % 8 = 6
// 	Integer division    22 // 8 = 2
/ 	Division            22 / 8 = 2.75
* 	Multiplication      3 * 3 = 9
- 	Subtraction         5 - 2 = 3
+ 	Addition            2 + 2 = 4
and                         (4 == 4) and (6 == 2)      #False
or                          (1 == 2) or (2 == 2)       #True
not                         (1 == 1) and not (2 == 1)  #True
<<      Rotate left         (1 << 3)   #8
<<      Rotate right        (127 >> 6) #1




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

my_long_int = 42_435_453
print('{:-012}'.format(my_long_int))   #000042435453
print('{:-12}'.format(my_long_int))    #    42435453
print('{:-4}'.format(my_long_int))     #42435453

my_float = 4.1901829308544
print('{:2.1f}'.format(my_float))      #4.2
print('{:2.39f}'.format(my_float))     #4.190182930854399856457348505500704050064 (Si inventa i numeri sto povero!)




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

if (a==0 and b==1): # and or !
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
lista=[]
lista.append(839)
lista.append(994)
lista.append(100)
print(len(lista))    #scrive 3
for y in lista:
    print(y)
for y in range(0,len(lista)): #y assume valori 0,1,2
    print(lista[y])

lista = [[1,2],[3,4],[5,6]]
q=[z[0] for z in x]
print(q)      #[1, 3, 5]
q=[z[0] for z in x[-2:]]
print(q)      #[3, 5]
q=[z[0] for z in x[2:]]
print(q)      #[5]

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


#Visualizza tutte i metodi di una libreria
import random
x=dir(random)   #magic happens here ;-)
for y in x:
    print(y)

#Inoltre, per quanto riguarda metodi e variabili nelle classi
class MyClass():
    def __init__(self):
        self.__superprivate = "Hello"
        self._semiprivate = ", world!"
mc = MyClass()
print (mc.__dict__)
{'_MyClass__superprivate': 'Hello', '_semiprivate': ', world!'}


.
