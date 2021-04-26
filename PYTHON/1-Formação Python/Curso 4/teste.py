from collections.abc import Sized


class MinhaListagem(Sized):
    def __init__(self, descricao):
        self.descricao = descricao

    def __str__(self):
        return self.descricao


lista = MinhaListagem()
print(lista)
