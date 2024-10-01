

************************************* AULA 18/09******************************************
<!DOCTYPE html>

<html>

<head>

	<title>catalogo</title>

	<meta charset="utf-8">

</head>

<body>


 <h1>Cátalogo de produtos</h1>

 <form action="index.php" method="post">

 <label for="Nome">Nome do produto:</label>


 <select name="catalogo" id="id_produto">

 	<option value="Monitor" id="1">Monitor</option>

 	<option value="Mouse" id="2">Mouse</option>

 	<option value="CPU" id="3">CPU</option>

 	<option value="Estabilizador" id="4">Estabilizador</option>

 	
 </select><br><br>



 <input type="submit" name="ver" value="ver detalhes">



</form>



 <?php 
 $produto=null;
 //@$produto = $_POST['catalogo'];
 $produto = isset($_POST['catalogo']) ? $_POST['catalogo'] : null;


   echo "<h1>Detalhes do produto</h1> <br>". "detalhes do ".$produto;

  ?>



</body>

</html>











***********************  11/09 **********************************


INDEX.PHP

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> TESTA O PHP <h1>
<form action="chama.php" method="post">


<input type="submit" name="ver" value="chama">
</form>  
</body>
</html>




CHAMA.PHP

<?php
Aula01
echo "CHAMOU PAPAI?"

?>



























<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples com Divs e Footer</title>
    <style>
        /* Estilos para organizar o layout */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        footer {
            margin-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Formulário de Contato</h1>
    
    <form>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Ensviar">
        </div>

    </form>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Seu Nome. Todos os direitos reservados.</p>
        <p><a href="mailto:seuemail@dominio.com">Contato</a></p>
    </footer>
</body>
</html>
