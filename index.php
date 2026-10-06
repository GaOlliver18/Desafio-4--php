<!-- <?php

// ============================================
// DESAFIO DAS AULAS 03 E 04
// Sistema de Gestão de Notas
// ============================================
// SOLUÇÃO DE REFERÊNCIA
//
// Tente resolver sozinho antes de abrir este arquivo.
// Regra de ouro: leia o código, apague e reescreva do zero.
//
// Conceitos: saída de dados, variáveis, constantes, tipos,
// coerção/casting, entrada via readline(), if/elseif/else,
// switch, ternário e null coalescing.

const NOTA_MINIMA = 0;
const NOTA_MAXIMA = 10;
const MEDIA_APROVACAO = 7;
const REPROVACAO = 5;
const PESO_NOTA1 = 4;
const PESO_NOTA2 = 6;

$alunos = [];
$notas = [];



$titulo = "Notas de alunos da Coude";

echo "-----------------------\n";
echo "$titulo \n";
echo "-----------------------\n";



$nomeAluno = readline("Digite seu nome ");
echo "Olá, $nomeAluno! Tudo bem?\n";

$nota1 = (float) readline("Diga sua primeira nota, por gentileza ");
$nota2 = (float) readline("Diga sua segunda nota, por gentileza ");

$media = ($nota1 * PESO_NOTA1 + $nota2 * PESO_NOTA2) / 10;
echo "$nomeAluno, sua média foi: $media\n";


switch (true){
    case $media == 10:
        echo "Parabéns, $nomeAluno! Você tirou nota máxima, merece um final de semana com o Neymar.";
            break;
    case $media > 7 && $media < 10:   
        echo "Sua nota foi ótima, se esforce mais um pouco que consegue o final de semana com o Neymar";
            break;
    case $media == 7:
        echo "$nomeAluno, você passou mas da para se esforçar muito mais. Você vai ver o Neymar";
            break;
    case $media > 1 && $media < 7:
        echo "$nomeAluno, você reprovou. Nem vai passar perto de ver o Neymar";
        break;
    case $media == 0:
        echo "$nomeAluno, você tirou a nota mínima, você é uma lástima e não merece nuncar olhar o Neymar";
            break;
}





