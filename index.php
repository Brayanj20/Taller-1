<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
    body:{
      margin: 0;  
     
    }
    .login{
      width: 100%;
      height: 100vh;
      display: grid;
      place-items: center;
      background-color: #195D8B;
    }

    .form {
      display: flex;
      flex-direction: column;
      
    }

  
    label {
      font-weight: bold;
      margin-bottom: 4px;
    }
    .input {
      
      border: none;
      border-radius: 8px;
      height: 30px;
      padding: 6px;
      margin-bottom: 12px;
    }

    .primary-button {

      margin-top: 30px;
      border-radius: 8px;
      border: none;     
      width: 100%;
      cursor: pointer;
      font-weight: bold;
      height: 50px;
    }
    

    .rta{
      margin-top: 0;
    }

    

  </style>
</head>
<body>
  <div class = 'login'>
    <form  class='form' method="post">
    	<h1>Hola Registrate!</h1>
    	<input type="text" name="name" placeholder="Nombre completo" class="input">
    	<input type="email" name="email" placeholder="Email" class="input">
      <input type="text" name="telefono" placeholder="Número de teléfono" class="input">
      <input type="text" name="curso" placeholder="Curso" class="input">
      <!--<select name="curso" class="input">
        <option value="javascript">Curso JavaScript</option>
        <option value="php">Curso PHP</option>
        <option value="java">Curso  Java</option>
        <option value="golang">Curso  Golang</option>
        <option value="python">Curso Python</option>
        <option value="c#">Curso  C#</option>
        <option value="C++">Curso  C++</option>
      </select>-->
    	<input type="submit" name="registra" class='primary-button'>
    
    </form>
        <div class='rta'>
        <?php 
        include("crearService.php");
        ?>
        </div>
   </div>
</body>
</html>