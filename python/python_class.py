class MyClass:
	"This is my class"
	def __init__(self, valore):
	    self.a = valore
	def func(self):
		print('Hello')
	def somma(self, argument):
		return self.a + argument
		
# create a new MyClass
ob = MyClass(4)

# Calling function func()
ob.func()           # Output: Hello
print (ob.a)        # Output: 4
print (ob.somma(4)) # Output: 8



