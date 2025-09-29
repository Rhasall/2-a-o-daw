def Generador_DNI():
    DNI_letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y',
                  'F', 'P', 'D', 'X', 'B', 'N', 'J',
                  'Z', 'S', 'Q', 'V', 'H', 'L', 'C',
                  'K', 'E']

    while True:
        try:
            dni = int(input("Introduce tu DNI sin la letra: "))
            if dni < 0:
                print("El DNI no puede ser negativo.")
            elif dni < 10000000 or dni > 99999999:
                print("El DNI debe tener 8 dígitos.")
            else:
                break
        except ValueError:
            print("Debes introducir solo números enteros positivos de 8 dígitos.")

    indice = dni % 23
    letra_dni = DNI_letras[indice]
    print("El DNI completo es:", str(dni) + letra_dni)

# Llamamos a la función
Generador_DNI()
