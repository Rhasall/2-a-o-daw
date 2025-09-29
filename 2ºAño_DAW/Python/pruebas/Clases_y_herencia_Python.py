class Documento:
    def __init__(self, nombre, fecha, contenido):
        self._nombre = nombre
        self._fecha = fecha
        self._contenido = contenido

    def get_nombre(self):
        return self._nombre

    def get_fecha(self):
        return self._fecha

    def get_contenido(self):
        return self._contenido

    def set_nombre(self, nombre):
        self._nombre = nombre

    def set_fecha(self, fecha):
        self._fecha = fecha

    def set_contenido(self, contenido):
        self._contenido = contenido

    def mostrar(self):
        return f"{self._nombre} {self._fecha} {self._contenido}"

    def __imprimir(self):
        print(f"{self._nombre} {self._fecha} {self._contenido}")
        
   

