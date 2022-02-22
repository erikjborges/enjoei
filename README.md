# Script de teste Enjoei

Esse script verifica se dado uma lista de inteiros e um número aleatório X, se a soma de dois inteiros quaisquer da lista é igual a X.

Para rodar em sua máquina utilizando o Docker:

```bash
docker run -it --rm --name enjoei-test-1 -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php test-1.php
```