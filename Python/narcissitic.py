def narcissistic( value ):
    number_of_digits = len(str(value))
    sum = 0

    for digit in str(value):
        sum += int(digit)**number_of_digits
        
    return sum == value