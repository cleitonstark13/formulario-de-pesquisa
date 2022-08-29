<?php
$nome = null;
$idade = null;
$dispositivo = null;
$dispositivo1 = null;
$dispositivo2 = null;
$sexo = null;
$exp = null;
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de pesquisa</title>
    <link rel="stylesheet" href="stile.css" />
</head>
<body>
<fieldset><legend>Desenvolvedor:</legend>
		CLEITON ALVES E SILVA JÚNIOR</br>
		<b>Formulário de pesquisa</b><br></fieldset>
		
       <form method="post" action="ativ_resultado.php">
         <fieldset><legend>Formulário 2</legend>
		 
		 <fieldset><legend>Nome:</legend>
		<?php
			if(isset($_POST['nome']))
			{
				$nome = $_POST['nome'];?>
			<?php 
			}if($nome == null){?>
				<?php
				$nome = "Nome não informado!";
				echo "$nome";?>
			<?php 
			}else{?>
			<?php echo "$nome";}?>
			</fieldset>
		 
		 <fieldset><legend>Idade:</legend>
		 <?php 
			if(isset($_POST['idade']))
			{
				$idade = $_POST['idade'];?>
			<?php
			}if($idade == null){?>
				<?php
				$idade = "Idade não informada!";
				echo "$idade";?>
			<?php
			}else{?>
			<?php echo "$idade";}?>
			</fieldset>
		 
		 <fieldset><legend>Sexo:</legend>
		 <?php if(isset($_POST['sexo']))
			{
				$sexo = $_POST['sexo'];
			}?>
		<?php if($sexo == null){
				$sexo = "Sexo não informado!";
				echo "$sexo";?>
		<?php
		}else{?>
		 <?php echo "$sexo";}?>
         </fieldset>
		 
		 <fieldset><legend>Dispositivo(s):</legend>
		 <?php
			 if(isset($_POST['dispositivo']))
			{
				$dispositivo = $_POST['dispositivo'];
			}
			if($dispositivo!=null){
				echo "$dispositivo"."</br>";
				$resultado=$dispositivo?>
				<textarea name="mensagem"></textarea>
			<?php
			}
			if(isset($_POST['dispositivo1'])){
				$dispositivo1 = $_POST['dispositivo1'];
			}
			if($dispositivo1!=null)
			{
				echo "</br>$dispositivo1</br>";
				$resultado1=$dispositivo1?>
				<textarea name="mensagem1"></textarea>
			<?php
			}
			if(isset($_POST['dispositivo2']))
			{
				$dispositivo2 = $_POST['dispositivo2'];
			}
			if($dispositivo2!=null)
			{
				echo "</br>$dispositivo2</br>";
				$resultado2=$dispositivo2?>
				<textarea name="mensagem2"></textarea>
				<?php
				
			}if($dispositivo == null && $dispositivo1 == null && $dispositivo2 == null)
			{
				echo "Nenhuma opção selecionada!";}?>

		 </fieldset>
		 
		 <fieldset><legend>Experiência:</legend>
		 
		 <?php if(isset($_POST['operacao']))
			{
				$exp = $_POST['operacao'];
			}
			if($exp == null)
			{
				$exp = "Nenhuma opção selecionada!";
				echo "$exp";
			}?>
		 <?php if($exp == "Não possui")
				{
					echo "$exp";?>
				<?php
				} if($exp == "Iniciante" || $exp == "Intermediário" || $exp == "Avancado")
				{?>
				<?php echo "Experiência: $exp"."<br>"."<b>";
					echo "Indique as línguagens que possui experiência:"."<br>"."<b>";?>
					<select name="linguagemdeprogramacao">
					<option value=""></option>
					<option value="C">C</option>
					<option value="C++">C++</option>
					<option value="Java">Java</option>
					<option value="PHP">PHP</option>
					<option value="Python">Python</option>
					<option value="Perl">Perl</option>
					<option value="Ruby">Ruby</option>
					<option value="Outras">Outras</option>
				<?php }?>
				<input type="hidden" name="NOME" value=" <?php echo $nome;?>">
				<input type="hidden" name="IDADE" value=" <?php echo $idade;?>">
				<input type="hidden" name="SEXO" value=" <?php echo $sexo;?>">
				<input type="hidden" name="EXP" value=" <?php echo $exp;?>">
				<input type="hidden" name="DISPOSITIVO" value=" <?php echo $resultado;?>">
				<input type="hidden" name="DISPOSITIVO1" value=" <?php echo $resultado1;?>">
				<input type="hidden" name="DISPOSITIVO2" value=" <?php echo $resultado2;?>">
				</fieldset>
				<input type="submit" name="Enviar" value="Enviar" />
				<a href="ativ_formulario.php">Voltar</a>
				</fieldset>					
    </form>
</body>
</html>