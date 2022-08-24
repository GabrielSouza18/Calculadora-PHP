<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Exemplo Formulario Work Var</title>
</head>

<body>

    <form action="exemploswitch.php" method="post" name="switch">
        <center>
            <div class="card" style="width: 19rem; margin-top: 35px;">
                <div class="card-body">

                    <center>
                        <h1 style="margin-top: 25px;"> Calculadora PHP</h1>
                        <p>Digite dois numeros para realizar um calculo (+,-,/,*)</p>
                        <label>Numero 1: </label> <input type="number" name="num1" maxlength="84"
                            style="margin-top: 25px;" /><br>
                        <label> Numero 2: </label> <input type="number" name="num2" maxlength="84"
                            style="margin-top: 25px;" /><br>


                        <!-- <p id="exibir"><b>Resultado: </b></p> -->
                        <input type="submit" name="calculo" class="btn btn-outline-primary" value="Somar"
                            style="margin-top: 15px;">
                            <input type="submit" name="calculo" class="btn btn-outline-primary" value="Subtrair"
                            style="margin-top: 15px;">
                            <input type="submit" name="calculo" class="btn btn-outline-primary" value="Dividir"
                            style="margin-top: 15px;">
                            <input type="submit" name="calculo" class="btn btn-outline-primary" value="Multiplicar"
                            style="margin-top: 15px;">


                </div>
            </div>
        </center>
    </form>
</body>

</html>