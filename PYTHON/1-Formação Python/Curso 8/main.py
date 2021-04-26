import requests

from acesso_cep import BuscaEndereco
from cpf_cnpj import CPF, CNPJ, Documento

cpf = '15486784732'
objeto_cpf = Documento(cpf)

print(objeto_cpf)

cep = '21750120'
objeto_cep = BuscaEndereco(cep)

r = requests.get('https://viacep.com.br/ws/{}/json/'.format(cep))
print(objeto_cep.acessa_via_cep())
