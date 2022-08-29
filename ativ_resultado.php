<!Doctype html>
<?php 
			$nome = null;
			$idade = null;
			$sexo = null;
			$desc=null;
			$desc1=null;
			$desc2=null;
			$linguagem = null;
			$resultado="";
			$resultado1="";
			$resultado2="";
			$exp = null;			
			?>
<html lang="pt-br">
    <head>
	<meta charset="UTF-8">
	    <title>Formulário de pesquisa</title>
	</head>
	<body>
	<fieldset><legend>Desenvolvedor:</legend>
		CLEITON ALVES E SILVA JÚNIOR</br>
		<b>Formulário de pesquisa</b><br></fieldset>
	<div>
	<form method="post"> 
		<fieldset><legend>Formulário Resultado</legend>
			
			<fieldset><legend>Nome:</legend>
			<?php
			if(isset($_POST['NOME']))
			{
				$nome = $_POST['NOME'];?>
			<?php 
			}if($nome != null){?>
			<?php echo "$nome";}?>
			</fieldset>
			
			<fieldset><legend>Idade:</legend>
			<?php 
			if(isset($_POST['IDADE']))
			{
				$idade = $_POST['IDADE'];			
			}
			if($idade != null)
			{
				echo "$idade"."<br/>";}?>
			</fieldset>
			
			<fieldset><legend>Sexo:</legend>
			<?php 
			if(isset($_POST['SEXO']))
			{
				$sexo = $_POST['SEXO'];
			}
			if($sexo != null)
			{
				echo "$sexo"."<br/>";}?>
			</fieldset>
			<fieldset><legend>Dispositivo(s):</legend>
			
			<?php if(isset($_POST['mensagem'])){
				$desc = $_POST['mensagem'];
			}
			if($desc!=null){
			$resultado=$_POST['DISPOSITIVO'];
			$desc='<textarea name="lista">'.$desc.' </textarea>';
		    }
			if(isset($_POST['mensagem1'])){
				$desc1 = $_POST['mensagem1'];
			}
			if($desc1!=null){
			$resultado1=$_POST['DISPOSITIVO1'];
			$desc1='<textarea name="lista">'.$desc1.' </textarea>';
			}
			if(isset($_POST['mensagem2'])){
				$desc2 = $_POST['mensagem2'];
			}
			if($desc2!=null){
			$resultado2=$_POST['DISPOSITIVO2'];
			$desc2='<textarea name="lista">'.$desc2.' </textarea>';?>
			<?php
			}if($desc == null && $desc1 == null && $desc2 == null){
			echo "Nenhuma opção selecionada!";?>
			<?php
			}else{?>
			<?php
			echo "$resultado</br>$desc</br>";
			echo "$resultado1</br>$desc1</br>";
			echo "$resultado2</br>$desc2</br>";}?>
			
			</fieldset>
			<fieldset><legend>Experiência em programação:</legend> 
			 <?php if(isset($_POST['EXP']))
			{
				$exp = $_POST['EXP'];
			}
			if($exp != null)
			{
			echo "$exp";}?>
			<?php
			if($exp == "Não possui")
			{
				echo "$exp"."<br/>";?>
			<?php
			}else{?>
					<?php 
					if(isset($_POST['linguagemdeprogramacao']))
					{
						$linguagem = $_POST['linguagemdeprogramacao'];
						echo "<br>"."Linguagem selecionada: $linguagem"."</br>";
					}
				 }?>
				  <?php if($linguagem == null)
				  {
					echo "<br>"."Nenhuma linguagem selecionada!"."</br>";
				  }?>
				 </fieldset>
				 <a href="ativ_formulario.php">Responder Novamente!</a>
		</fieldset>
		</form>
	</div>	
	</body>
</html>	