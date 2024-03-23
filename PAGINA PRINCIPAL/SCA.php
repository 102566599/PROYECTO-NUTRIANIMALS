<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="./index.html"   />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
<div class="start" id="img">
    </div>
    <div class="start" id="Botpa">
       <center><img class="imagen" src="./LOGO.png" alt=""></center>
      <a href="index.html"><button id="p1">Inicio</button></a>
      <a href="Animales.php"><button id="p2">Animales</button></a>
      <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
      <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
  </div>
  <style>
    #p1{
margin-left: 580px;
}
</style>




    <h1>Sistema de clasificacion de animales</h1>
    <form>
        <label for="animal">Escoje el animal:</label>
        <select id="animal" name="animal">
            <option value="dog">Vacas</option>
            <option value="cat">Caballos</option>
            <option value="bird">Ovejas</option>
            <option value="fish">Pez</option>
        </select>

        <label for="raza">Escoje la raza:</label>
        <select id="raza" name="raza" enabled>
            <option value="">Raza 1</option>
            <option value="">Raza 2</option>
            <option value="">Raza 3</option>
            <option value="">Raza 4</option>

        </select>

        <input type="submit" value="Submit">
    
    </form>

    <script src="scripts.js"></script>
    
    <table>
        <thead>
          <tr>
            <th>Animal</th>
            <th>Peso</th>
            <th>Raza</th>
            <th>Alimentacion</th>
            <th>Medicamentos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Vaca</td>
            <td>0-0 kg</td>
            <td>Raza</td>
            <td>Comida con 18-25% de proteina</td>
            <td>0 ml de metametrazona</td>
          </tr>
          <th>

          </th>
          <tr>
            <td>Caballo</td>
            <td>0-0 kg</td>
            <td>raza</td>
            <td>Comida de cabllo con 26-30% de proteina</td>
            <td>Vacunas</td>
          </tr>
          <tr>

          </tr>
          <tr>
            <td>Ovejas</td>
            <td>0-0 kg</td>
            <td>Raza</td>
            <td>Pasto y suplemetos</td>
            <td>Para mejorar la lana </td>
          </tr>
          <th>

          </th>
          <tr>
            <td>Peces</td>
            <td>0-0 kg</td>
            <td>Raza</td>
            <td>Comida para pez </td>
            <td>Cambiar el agua antes tempereandola </td>

          </tr>
        </tbody>
      </table>
    <!--PIE DE PAGINA-->
<div class="container" id="pag">
  <center><img src="./LOGOS.png" alt=""></center>
  <h4 id="titp">ACERCA DE NOSOTROS </h4>
<a href="somos.php">
  <button id="pbut">¿Quienes Somos?</button>
</a>
<a href="equipo.php">
  <button id="pbut2">Equipo de trabajo</button>
</a>
<a href="trabaja.php">
  <button id="pbut3">Trabaja con nosotros </button>
</a>
<a href="asociate.php">
  <button id="pbut4">Asociate con nosotros </button>
</a>
  <h4 id="ptit">AYUDA Y SOPORTE </h4>
  <a href="preguntas.php">
  <button id="botp">Preguntas frecuentes </button>
</a>
<a href="condiciones.php">
  <button id="botp2">Condiciones de servicio</button>
</a>
<a href="politica.php">
  <button id="botp3">Politica de privacidad</button>
</a>
<a href="cookies.php">
  <button id="botp4">Politica de cookies</button>
</a>
<a href="contacto.php">
  <button id="botp5">Contactanos</button>
</a>
</body>
</html>
<style>
<!--PIE DE PAGINA-->
#pag{
    background-color: rgb(0, 255, 34) ;
    margin-top:300px;
}

#titp{
    color: white;
}

#pbut{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut2{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut3{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut4{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 150px;
    height: 50px;
}

#ptit{
    color: white;
    margin-left: 800px;
}

#botp{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
    margin-left: 800px;
    
}

#botp2{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp3{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp4{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp5{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}
<!--fin PIE DE PAGINA-->
    .start{
    background-color: rgb(26, 255, 0);
  }
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;

    label {
        margin-bottom: 10px;
    }

    select {
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.1);
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
margin-top: 10px;
        padding: 10px 22px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
}
</style>