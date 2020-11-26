<?php

$categorias = [];
$categorias[] = 'infatil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

/*print_r($categorias); Printa para mostrar se recebeu esses elementos no array.*/

$nome = 'Leonardo';
$idade = 10;


//var_dump(); nos da informação do tipo da var se string, int....
//var_dump($nome);
//var_dump($idade);

/*Condicionais*/
if($idade >= 0 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'inafatil');
        echo "O nadador ".$nome. " compete na categoria infantil ";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescentel');
        echo "O nadador ".$nome. " compete na categoria adolescente ";
    }
}
else
{
    if($categorias[$i] == 'adulto');
        echo "O nadador ".$nome. " compete na categoria adulto ";
}

?>