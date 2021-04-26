import requests


class BuscaEndereco:
    def __init__(self, cep):
        if self.cep_e_valido(str(cep)):
            self.cep = cep
        else:
            raise ValueError("CEP inválido!")

    def __str__(self) -> str:
        return self.format_cep()

    def cep_e_valido(self, cep):
        if len(cep) == 8:
            return True
        else:
            return False

    def format_cep(self):
        return "{}-{}".format(self.cep[:4], self.cep[5:])

    def acessa_via_cep(self):
        url = "https://viacep.com.br/ws/{}/json".format(self.cep)
        r = requests.get(url)
        dados = r.json()
        return (
            dados["bairro"],
            dados["localidade"],
            dados["uf"]
        )
