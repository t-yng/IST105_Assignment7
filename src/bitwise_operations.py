import sys


def to_numeric(value, name):
    try:
        return int(value)
    except ValueError:
        print(f"{name} value '{value}' is not numeric. Please input numeric value.")
        exit(1)


def check_positive(value, name):
    if value < 0:
        print(
            f"{name} value {value} is negative. Please input greater than equal zero."
        )
        exit(1)


def check_even_by_bitwise(value):
    return value & 0b01 > 0


a = to_numeric(sys.argv[1], "A")
b = to_numeric(sys.argv[2], "B")
c = to_numeric(sys.argv[3], "C")
d = to_numeric(sys.argv[4], "D")
e = to_numeric(sys.argv[5], "E")

numbers = [
    {"name": "A", "value": a},
    {"name": "B", "value": b},
    {"name": "C", "value": c},
    {"name": "D", "value": d},
    {"name": "E", "value": e},
]

for number in numbers:
    check_positive(number["value"], number["name"])

print("<h3>Average</h3>")
average = (a + b + c + d + e) / 5
print(f"<p>The average of numbers: {average}</p>")
print(f"<p>Is the average greater than 50?: {average > 50}</p>")

print("<h3>Even or Odd</h3>")
for number in numbers:
    if check_even_by_bitwise(number["value"]):
        print(f"<p>{number['name']}: {number['value']} is even.</p>")
    else:
        print(f"<p>{number['name']}: {number['value']} is odd.</p>")

print("<h3>Value List greater than 10</h3>")
original_values = list(filter(lambda x: x > 10, [a, b, c, d, e]))
sorted_values = sorted(original_values)
print(f"<p>Original Values: {original_values}</p>")
print(f"<p>Sorted Values: {sorted_values}</p>")
exit(0)
