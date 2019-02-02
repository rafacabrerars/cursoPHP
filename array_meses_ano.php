<?php
echo '<pre>';

$mes=[
    [
        'id'=>1, 'nome'=>'Janeiro'], [
        'id'=>2, 'nome'=>'Fevereiro'], [
        'id'=>3, 'nome'=>'Março'], [
        'id'=>4, 'nome'=>'Abril'], [
        'id'=>5, 'nome'=>'Maio'], [
        'id'=>6, 'nome'=>'Junho'], [
        'id'=>7, 'nome'=>'Julho'], [
        'id'=>8, 'nome'=>'Agosto'], [
        'id'=>9, 'nome'=>'Setembro'], [
        'id'=>10, 'nome'=>'Outubro'], [
        'id'=>11, 'nome'=>'Novembro'], [
        'id'=>12, 'nome'=>'Dezembro'],];
/*echo '<pre>';
print_r($mes);*/

/*foreach ($mes as $meses) {
    echo "<h5>{$meses ['id']} - {$meses ['nome']}";*/

for($m=0; $m< count($mes); $m++){
    echo "<h5>{$mes ['id']} - {$mes ['nome']}</h5>";
}