# Anotações

Revisei o uso de condicionais no PHP.

O if com return encara qualquer código após o if como parte da operação, algo que só será executado caso o código não tenha condição de executar o if (Encara como um else). 

Exemplo:

```php
if(30 > 20){
echo "30 é maior que 20";
return;
}
/*
Nenhuma das linhas abaixo serão executadas, pois a condição do if (30 ser maior que 20) é true.
E elas são consideradas como parte do else, executando caso a condição resultar em false
*/
echo "30 é menor que 20";

if (50 > 40)
{
    echo "50 é maior do que 40";
}
```

Também tentei usar o Switch com Cases que não tratam apenas 1 condição. Como o exemplo que fiz, com o case que traz 1 resultado para 3 cases, como um if($number == 1 || $number == 2 || $number == 3), mas com a syntax do Switch

```php
switch($number)
{
    case 1:
    case 2:
    case 3:
    //Code
    break;
}
```