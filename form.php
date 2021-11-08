<?php

if (isset($_POST['submit'])) {
    /* print_r($_POST['Nome']);
    print_r('<br>');
    print_r($_POST['URL']);
    print_r('<br>');
    print_r($_POST['Assunto']);
    print_r('<br>');
    print_r($_POST['valor']);
    print_r('<br>');
    print_r($_POST['pago']);
    print_r('<br>');
    print_r($_POST['nivel']);
    print_r('<br>');
    print_r($_POST['submit']); */

    include_once('./config.php');

    $course_name = $_POST['Nome'];
    $course_url = $_POST['URL'];
    $course_theme = $_POST['Assunto'];
    $course_cost = $_POST['valor'];
    $course_value = $_POST['pago'];
    $course_level = $_POST['nivel'];

    $result = mysqli_query($conexao, "INSERT INTO course(course_name, course_url, course_theme, course_cost, course_value, course_level) VALUES ('$course_name', '$course_url', '$course_theme', '$course_cost', '$course_value', '$course_level') ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <script type="text/javascript" src="./js/main.js"></script>
    <title>Formulário</title>
</head>

<body>

    <div id="courses">
        <div class="box">
            <form action="form.php" method="POST">
                <fieldset>
                    <legend><b>Me sugira um curso</b></legend>
                    <br><br>
                    <!-- NOME -->
                    <div class="inputBox">
                        <input type="text" name="Nome" id="course_nome" class="inputUser" required>
                        <label for="course_nome" class="labelInput">Nome do Curso</label>
                    </div>
                    <!-- //NOME -->
                    <br><br>
                    <!-- URL -->
                    <div class="inputBox">
                        <input type="text" name="URL" id="fomr_url" class="inputUser" required>
                        <label for="fomr_url" class="labelInput">URL do curso</label>
                    </div>
                    <!-- //URL -->
                    <br><br>
                    <!-- TEMA -->
                    <div class="inputBox">
                        <input type="text" name="Assunto" id="fomr_tema" class="inputUser" required>
                        <label for="fomr_tema" class="labelInput">Tema</label>
                    </div>
                    <!-- //TEMA -->

                    <!-- CUSTO -->
                    <div class="inputBox">
                        <p>Custo:</p>

                        <!-- PAGO -->
                        <input type="radio" id="pago" name="valor" value="Pago" onclick="Habilita('cost')" required>
                        <label for="valor">Pago: </label>
                        <br><br>
                        <div class="inputBox">
                            <div id="cost">
                                <input type="number" name="pago" id="custo" class="inputUser" required>
                                <label for="valor" class="labelInput custo">Valor</label>
                                <style>
                                    input[type=number]::-webkit-inner-spin-button,
                                    input[type=number]::-webkit-outer-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                    }
                                </style>
                            </div>
                        </div>
                        <!-- //PAGO -->
                        <br>
                        <!-- GRATUITO -->
                        <input type="radio" id="gratuito" name="valor" value="Gratuito" onclick="Esconde('cost')" required>
                        <label for="valor">Gratuito</label>
                        <!-- //GRATUITO -->
                    </div>
                    <!-- //CUSTO -->
                    <br><br>
                    <!-- NIVEL -->
                    <div class="inputBox">
                        <label for="nivel">Nível: <br>Básico
                            <input type="range" min="1" max="5" id="nivel" name="nivel" onchange="fetch()" required>
                            Avançado
                        </label>
                        <!-- //NIVEL -->
                    </div>
                    <br>

                    <input type="submit" name="submit" id="submit">

                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>