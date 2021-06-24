#! /bin/bash

echo "Enter number fibonacci"
read fibo

if (echo "$fibo" | grep -E -q "^?[0-9]+$")
then
    if [ $fibo -eq 1 ]
    then
    echo "Your number is 0"
    elif [ $fibo -eq 2 ]
    then
    echo "Your number is 1"
    elif [ $fibo -ge 2 ]
    then
    fib1=0
    fib2=1
    fibsum=1

    for (( count=2; count < $fibo; count++ ))
    do
    fibsum=$(($fib1 + $fib2))
    fib1=$fib2
    fib2=$fibsum

    done
    echo "fibonacci number is $fibsum" 
    else 
    echo "something wrong"
    fi
else
echo "this is not number"
fi