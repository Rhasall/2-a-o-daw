from documento import Documento

class Albaran(Documento):
    def __init__(self, nombre, fecha, contenido, numero_albaran, empresa):
        super().__init__(nombre, fecha, contenido)
        self._numero_albaran = numero_albaran
        self._empresa = empresa

    def get_numero_albaran(self):
        return self._numero_albaran

    def set_numero_albaran(self, numero_albaran):
        self._numero_albaran = numero_albaran

    def get_empresa(self):
        return self._empresa

    def set_empresa(self, empresa):
        self._empresa = empresa

    def mostrar(self):
        base = super().mostrar()
        return f"{base} {self._numero_albaran} {self._empresa}"
    
    
    doc = Documento("Doc1", "2025-06-29", "Contenido documento")
print(doc.mostrar())

alb = Albaran("Alb1", "2025-06-29", "Contenido albarán", "A-123", "Empresa SA")
print(alb.mostrar())
