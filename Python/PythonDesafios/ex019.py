from random import choice

#print('Prof o aluno(a) que irá apagar o quadro hoje é {}'.format(random.choice(['Pedro', 'Andrea', 'Márcio', 'Franciele'])))

n1 = str(input('Primeiro aluno:  '))
n2 = str(input('Segundo  aluno:  '))
n3 = str(input('Terceiro aluno:  '))
n4 = str(input('Quarto   aluno:  '))
lista = [n1, n2, n3, n4]
escolhido = choice(lista)
print('O aluno escolhido foi {}'.format(escolhido))
