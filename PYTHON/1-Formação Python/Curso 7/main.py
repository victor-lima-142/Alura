meu_texto = 'Aqui acabou pra você, Arthur. Entregue-se agora ou morra tentando FUGIR!'

meu_texto = meu_texto.lower()

aparicoes = {}

for palavra in meu_texto.split():
    ate_agora = aparicoes[palavra]
    aparicoes[palavra] = ate_agora + 1
