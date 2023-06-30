# Anotações

Nesta aula eu vi sobre os Operadores de Comparação e os operadores Lógicos.

Os operadores "or" e "and" possuem a mesma função de  "||" e "&&" respectivamente, porém, como o "=" é processado antes do que o "and" ou o "or", a variável result teria o valor da primeira variável da operação de comparação.

Exemplo:
```php

$result = true and false;
# O resultado seria true

$result = false or true;
# O resultado seria false
```

Por isto é melhor utilizar os operadores || e &&.