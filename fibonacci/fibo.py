#! /bin/python3

while True:
    try:
        fibonacciNumber = int(input("Введите число: "))
        break
    except ValueError:
        print("Вы ввели не число. Попробуйте снова: ")


fibonacciNumber1=0
fibonacciNumber2=1

if fibonacciNumber <=0:
    print("Your number is not corect")
elif fibonacciNumber == 1:
    print("Your number is 0")
elif fibonacciNumber == 2:
    print("Your number is 1")
else:
    for count in range(2, fibonacciNumber):
        result=fibonacciNumber1+fibonacciNumber2
        fibonacciNumber1=fibonacciNumber2
        fibonacciNumber2=result
    print("Your number is " + str(result)) 

