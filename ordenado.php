
<html>
	<body>
		<?php
        		$hostname = "127.0.0.1";
        		$user = "root";
        		$password = "";
        		$database = "seguro";
        		
        		$conexao = new mysqli($hostname,$user,$password,$database);
        
        		$sql="SELECT * FROM `seguro`.`carro`;";
        
        		$resultado = $conexao->query($sql);
        		$dados = []; //Cria um array/vetor para armazenar os dados
        
        		// Armazena os dados em um array
        		while($row = mysqli_fetch_array($resultado)){
        			$dados[] = $row[1];  // Supondo que você quer ordenar a segunda coluna
        		}
        
        		// Ordena os dados pelo método SORT
        		sort($dados);
        		
        		/*RELEMBRANDO
        		Tipos Comuns de Algoritmos de Ordenação
                    Bubble Sort (Método da Bolha): Percorre a lista comparando elementos adjacentes e
					trocando-os se não estiverem na ordem desejada.
                    Selection Sort (Método da Seleção): Encontra o menor (ou maior) elemento da
					lista e o coloca na posição correta.
                    Insertion Sort (Método da Inserção): Constrói a lista final um item de cada
					vez, inserindo cada novo elemento na posição correta dentro da porção já ordenada da lista. 
                    Quick Sort: Usa a estratégia de "divisão e conquista", dividindo o problema de ordenar
					a lista em subproblemas menores até que todos estejam resolvidos. 
                    Merge Sort: Similar ao Quick Sort, também utiliza a técnica de "divisão e conquista",
					dividindo a lista em partes menores, ordenando-as em vetores paralelos e depois combinando
					as partes.*/
            
        		// Exibe os dados ordenados
        		echo '<hr>';
        		foreach($dados as $dado){
        			echo $dado;
        			echo '<br>';
        		}
        		//Até aqui
        		
        		$conexao -> close();
        ?>
	</body>
</html>
