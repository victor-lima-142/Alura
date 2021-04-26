contas = dict


def cria_conta(numero, titular, saldo, limite):
   conta = {"numero": numero, "titular": titular, "saldo": saldo, "limite": limite}
   print(conta)

numero_de_insercoes = int(input('Quantas contas você quer inserir?'))


def deposita(conta, valor):
    conta["saldo"] += valor


def saca(conta, valor):
    conta["saldo"] -= valor


def extrato(conta):
    print("Saldo é {}".format(conta["saldo"]))

for contador in range(numero_de_insercoes):
   print("****** CONTA {} ******".format(contador + 1))
   numero = contador
   titular = str(input('Nome do titular: '))
   saldo = float(input('Saldo inicial: '))
   limite = float(input('Limite do cartão: '))

   cria_conta(numero, titular, saldo, limite)
