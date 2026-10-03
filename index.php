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


$notaMedia = 7;
$notaMaxima = 10;
$notaMinima = 0;
$recuperacao = 5;

$titulo = "Notas de alunos da Coude";

echo "-----------------------\n";
echo "$titulo \n";
echo "-----------------------\n";



$nomeAluno = readline("Digite seu nome ");
echo "Olá, $nomeAluno! Tudo bem?\n";

$notaAluno = readline("Diga sua nota, por gentileza ");



switch ($notaAluno){
    case $notaAluno == 10:
        echo "Parabéns, $nomeAluno! Você tirou nota máxima, merece um final de semana com o Neymar.";
    break;
} switch ($notaAluno){
    case $notaAluno > 7 && $notaAluno <10:
        echo "Muito bem, $nomeAluno! Você se saiu bem, merece um tirar uma foto com o Bolsonaro";
        break;
} switch ($notaAluno){
    case $notaAluno == 7:
        echo "Você está na média, $nomeAluno! Se esforce mais se quiser conhecer o Bolsonaro";
        break;
} switch ($notaAluno){
    case $notaAluno < 7:
        echo "$nomeAluno, você perdeu na matéria, precisa estudar muito mais!"; 
} switch ($notaAluno) {
    case $notaAluno == 0:
        echo "Você é uma lástima de aluno, não se esforçou nada e ainda quer tentar VER o Neymar? Nunca mais volte nessa escola.";
        break;
}




