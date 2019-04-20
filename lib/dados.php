<?php

require_once "conexaoDB.php";

class dados{

	public function queryList($sql){

		$db = conexaoDB::getConnection();
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$rows = $stmt->fetchAll();

		echo "<pre>";
		var_dump($rows);die;

		return $stmt;
	}

	public function addDados($dados){

		$db = conexaoDB::getConnection();
		$sql = "INSERT INTO dados_capanha(
		nome_da_loja,
		numero_de_funcionario,
		faturamento_medio,
		mark_up,
		marcas_principais,
		instagram,
		facebook,
		preco_medio_varejo,
		pronta_entrega,
		cidade,
		uf,
		metros_quadrados_loja) 
		VALUES (
		:nome_da_loja,
		:numero_de_funcionario,
		:faturamento_medio,
		:mark_up,
		:marcas_principais,
		:instagram,
		:facebook,
		:preco_medio_varejo,
		:pronta_entrega,
		:cidade,
		:uf,
		:metros_quadrados_loja
		)";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':nome_da_loja', $dados['nome_da_loja']);
		$stmt->bindParam(':numero_de_funcionario', $dados['numero_de_funcionario']);
		$stmt->bindParam(':faturamento_medio', $dados['faturamento_medio']);
		$stmt->bindParam(':mark_up', $dados['mark_up']);
		$stmt->bindParam(':marcas_principais', $dados['marcas_principais']);
		$stmt->bindParam(':instagram', $dados['instagram']);
		$stmt->bindParam(':facebook', $dados['facebook']);
		$stmt->bindParam(':preco_medio_varejo', $dados['preco_medio_varejo']);
		$stmt->bindParam(':pronta_entrega', $dados['pronta_entrega']);
		$stmt->bindParam(':cidade', $dados['cidade']);
		$stmt->bindParam(':uf', $dados['uf']);
		$stmt->bindParam(':metros_quadrados_loja', $dados['metros_quadrados_loja']);

		$result = $stmt->execute();

		if (!$result )
		{
			return ($stmt->errorInfo());
		} else {
			return ($stmt->rowCount());
		}

	}

	public function planilha(){

		$db = conexaoDB::getConnection();
		$sql="select * from dados_capanha";
		$stmt = $db->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//declaramos uma variavel para monstarmos a tabela
		$dadosXls  = "";
		$dadosXls .= "  <table border='1' >";
		$dadosXls .= "          <tr>";
		$dadosXls .= "          <th>Id</th>";
		$dadosXls .= "          <th>Nome da loja</th>";
		$dadosXls .= "          <th>Numero de Funcionairos</th>";
		$dadosXls .= "          <th>Faturamento Medio</th>";
		$dadosXls .= "          <th>Mark-UP</th>";
		$dadosXls .= "          <th>Marcas Principais</th>";
		$dadosXls .= "          <th>Instagran</th>";
		$dadosXls .= "          <th>Facebook</th>";
		$dadosXls .= "          <th>Preço Medio</th>";
		$dadosXls .= "          <th>Pronta Entrega</th>";
		$dadosXls .= "          <th>Cidade</th>";
		$dadosXls .= "          <th>UF</th>";
		$dadosXls .= "          <th>Metros Qtd loja</th>";
		$dadosXls .= "      </tr>";

		foreach($result as $res){
			$dadosXls .= "      <tr>";
			$dadosXls .= "          <td>".$res['id']."</td>";
			$dadosXls .= "          <td>".$res['nome_da_loja']."</td>";
			$dadosXls .= "          <td>".$res['numero_de_funcionario']."</td>";
			$dadosXls .= "          <td>".$res['faturamento_medio']."</td>";
			$dadosXls .= "          <td>".$res['mark_up']."</td>";
			$dadosXls .= "          <td>".$res['marcas_principais']."</td>";
			$dadosXls .= "          <td>".$res['instagram']."</td>";
			$dadosXls .= "          <td>".$res['facebook']."</td>";
			$dadosXls .= "          <td>".$res['preco_medio_varejo']."</td>";
			$dadosXls .= "          <td>".$res['pronta_entrega']."</td>";
			$dadosXls .= "          <td>".$res['cidade']."</td>";
			$dadosXls .= "          <td>".$res['uf']."</td>";
			$dadosXls .= "          <td>".$res['metros_quadrados_loja']."</td>";
			$dadosXls .= "      </tr>";
		}
		$dadosXls .= "  </table>";

		// Definimos o nome do arquivo que será exportado
		$arquivo = "MinhaPlanilha.xls";
		// Configurações header para forçar o download
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$arquivo.'"');
		header('Cache-Control: max-age=0');
		// Se for o IE9, isso talvez seja necessário
		header('Cache-Control: max-age=1');

		// Envia o conteúdo do arquivo
		echo $dadosXls;
		exit;



	}


}



?>

