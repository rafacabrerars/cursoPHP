<?php
$alunos = [
    [
        'id' => 1 , 'nome' => 'Ricardo'
    ] , [
        'id' => 2 , 'nome' => 'Wesley'
    ] , [
        'id' => 3 , 'nome' => 'Felipe'
    ] , [
        'id' => 4 , 'nome' => 'Rafael'
    ] , [
        'id' => 5 , 'nome' => 'Camila'
    ] , [
        'id' => 6 , 'nome' => 'Sidclei'
    ] , [
        'id' => 7 , 'nome' => 'Alexandre'
    ] ,
];
echo '<pre>';
print_r($alunos);

foreach ($alunos as $aluno) {
    echo "<h5>{$aluno ['id']} - {$aluno ['nome']}";
}