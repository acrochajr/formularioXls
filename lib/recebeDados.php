<?php


require "dados.php";

$nome_da_loja = htmlspecialchars($_POST['nome_da_loja']);
$numero_de_funcionario = htmlspecialchars($_POST['numero_de_funcionario']);
$faturamento_medio = htmlspecialchars($_POST['faturamento_medio']);
$mark_up = htmlspecialchars($_POST['mark_up']);
$marcas_principais = htmlspecialchars($_POST['marcas_principais']);
$instagram = htmlspecialchars($_POST['instagram']);
$facebook = htmlspecialchars($_POST['facebook']);
$preco_medio_varejo = htmlspecialchars($_POST['preco_medio_varejo']);
$pronta_entrega = htmlspecialchars($_POST['pronta_entrega']);
$cidade = htmlspecialchars($_POST['cidade']);
$uf = htmlspecialchars($_POST['uf']);
$metros_quadrados_loja = htmlspecialchars($_POST['metros_quadrados_loja']);

$dadoForm = array('nome_da_loja' => $nome_da_loja,
        'numero_de_funcionario' => $numero_de_funcionario,
        'faturamento_medio' => $faturamento_medio,
        'mark_up' => $mark_up,
        'marcas_principais' => $marcas_principais,
        'instagram' => $instagram,
        'facebook'=> $facebook,
        'preco_medio_varejo' => $preco_medio_varejo,
        'pronta_entrega' => $pronta_entrega,
        'cidade' => $cidade,
        'uf' => $uf,
        'metros_quadrados_loja' => $metros_quadrados_loja);


//$sql = "select * from dados_capanha";

$adicionar = new dados();
$resultado = $adicionar->addDados($dadoForm);


if($resultado == 1) {
    echo "<script>alert('Inserido com sucesso!'); window.location.href = 'http://campanha.lifetime.com.br'  </script>";
}else{
    echo "<script>alert('Erro ao inserir os dados.'); window.location.href = 'http://campanha.lifetime.com.br'  </script>";

}