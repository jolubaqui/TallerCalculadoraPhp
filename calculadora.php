<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace de hojas de estilo de bootstrap -->

    <title>Taller Calculadora de PHP</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora PHP</h1>
        <hr>
        <form method="post">
            <label>Número 1</label>
            <input type="number" max=10000 min=0 name="numero1" placeholder="0" required autofocus >
            <label>Número 2</label>
            <input type="number" max=10000 min=0 name="numero2" placeholder="0" required >
            <hr>
            <input type="radio" class="form-check-input" name="option" value="sumar" required> Sumar
            <input type="radio" class="form-check-input" name="option" value="restar" required> Restar
            <input type="radio" class="form-check-input" name="option" value="multiplicar" required> Multiplicar
            <input type="radio" class="form-check-input" name="option" value="division" required> División
            <input type="radio" class="form-check-input" name="option" value="potenciacion" required> Potenciación
            <input type="radio" class="form-check-input" name="option" value="concatenacion" required> Concatenación
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar" >
            <input type="reset" class="btn btn-danger w-25" value="Limpiar" >
            <hr>
        </form>
    </div>
    <div class="container">
        <?php
            if ($_POST){
                function Sumar (){
                    echo "La suma de los números es: ".($_POST['numero1']+$_POST['numero2']);
                }
                        
                function Restar (){
                    echo "La resta de los números es: ".($_POST['numero1']-$_POST['numero2']);
                }
                
                function Multiplicar (){
                    echo "La multiplicación de los números es: ".($_POST['numero1']*$_POST['numero2']);
                }
                
                function Division (){
                    if ($_POST['numero2']==0)
                        $d="Error: División por 0";
                    else
                        $d=$_POST['numero1']/$_POST['numero2'];
                    echo "La división de los números es: ".$d;
                }
                
                function Potenciacion (){
                    echo "La potenciación de los números es: ".(pow($_POST['numero1'],$_POST['numero2']));
                }
                
                function Concatenacion (){
                    echo "La concatenación de los números es: ".($_POST['numero1'].$_POST['numero2']);

                }

                switch($_POST['option']){
                    case 'sumar':
                        Sumar();
                        break;
                    case 'restar':
                        Restar();
                        break;
                    case 'multiplicar':
                        Multiplicar();
                        break;
                    case 'division':
                        Division();
                        break;
                    case 'potenciacion':
                        Potenciacion();
                        break;
                    case 'concatenacion':
                        Concatenacion();
                        break;
                    default:
                        echo "Error en la opción seleccionada";
                        break;
                }
            }
        ?>
    </div>   
</body>
</html>