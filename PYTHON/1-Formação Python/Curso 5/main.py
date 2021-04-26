from ExtratorArgumentos import ExtratorArgumentoUrl

url = 'https://bytebank.com/cambio?moedaorigem=real&moedadestino=dolar'

argumentoUrl = ExtratorArgumentoUrl(url)

moedaOrigem, moedaDestino = argumentoUrl.extrai_argumentos()
print(moedaDestino, moedaOrigem)
