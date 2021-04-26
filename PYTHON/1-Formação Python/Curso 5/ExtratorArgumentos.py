class ExtratorArgumentoUrl:
    def __init__(self, url):
        if self.url_eh_valida(url):
            self.url = url
        else:
            raise LookupError("Url é inválida!")

    @staticmethod
    def url_eh_valida(url):
        if url and url.startswith("https://bytebank.com"):
            return True
        else:
            return False

    def extrai_argumentos(self):
        indice_inicial_moeda_destino = self.url.find('=', 15) + 1

        indice_inicial_moeda_origem = self.url.find('=') + 1
        indice_final_moeda_origem = self.url.find('&')

        moeda_origem = self.url[indice_inicial_moeda_origem:indice_final_moeda_origem]
        moeda_destino = self.url[indice_inicial_moeda_destino]

        return moeda_origem, moeda_destino
