def sumar(num1, num2):
    return num1 + num2

def restar(num1, num2):
    return num1 - num2

def multiplicar(num1, num2):
    return num1 * num2

def dividir(num1, num2):
    if num2 == 0:
        print("No se puede dividir entre 0")
        return None
    return num1 / num2

def menu():
    print("\n¿Qué deseas hacer?")
    print("1. Sumar")
    print("2. Restar")
    print("3. Multiplicar")
    print("4. Dividir")
    print("5. Salir")

print("Bienvenido a la calculadora básica")
opcion = 0

while opcion != 5:
    menu()
    try:
        opcion = int(input("Ingresa una opción: "))
    except ValueError:
        print("Por favor ingresa un número válido.")
        continue

    if opcion == 1:
        print("Has escogido sumar")
        num1 = int(input("Ingresa un número: "))
        num2 = int(input("Ingresa un segundo número: "))
        print("El resultado de la suma es:", sumar(num1, num2))
    elif opcion == 2:
        print("Has escogido restar")
        num1 = int(input("Ingresa un número: "))
        num2 = int(input("Ingresa un segundo número: "))
        print("El resultado de la resta es:", restar(num1, num2))
    elif opcion == 3:
        print("Has escogido multiplicar")
        num1 = int(input("Ingresa un número: "))
        num2 = int(input("Ingresa un segundo número: "))
        print("El resultado de la multiplicación es:", multiplicar(num1, num2))
    elif opcion == 4:
        print("Has escogido dividir")
        num1 = int(input("Ingresa un número: "))
        num2 = int(input("Ingresa un segundo número: "))
        resultado = dividir(num1, num2)
        if resultado is not None:
            print("El resultado de la división es:", resultado)
    elif opcion == 5:
        print("Adiós")
    else:
        print("Opción no válida, intenta de nuevo.")
