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

        <form method="post" action="ativ_formulario2.php">
      	<fieldset><legend>Formulário</legend>
		<fieldset><b>Nome:
		<input type="text" name="nome"/>
		<br></br>
		
		Idade:
        <input type="number" name="idade"/>
        <br></br></fieldset>
		
		<fieldset>Sexo:
         <input type="radio" name="sexo" value="Feminino"/> Feminino
         <input type="radio" name="sexo" value="Masculino"/> Masculino
		 <br></br></fieldset>
		 
        <fieldset>Dispositivos:<br>
		    <input type="checkbox" name="dispositivo" value="Computador">Computador<br>
            <input type="checkbox" name="dispositivo1" value="Notebook">Notebook<br>
			<input type="checkbox" name="dispositivo2" value="Smartfone">Smartfone
			<br></br></fieldset>
			
		<fieldset>Experiência com programação:
		 <select name="operacao">
                    <option value=""></option>
                    <option value="Não possui">Não possui</option>
                    <option value="Iniciante">Iniciante</option>
                    <option value="Intermediário">Intermediário</option>
					<option value="Avancado">Avançado</option></select>
        <br></br>
		</b></fieldset>
		<input type="submit" name="Enviar" value="Enviar" />
		<input type="reset" value="Limpar"/>
		<br></br>
		</fieldset>
		</form>
</body>

</html>