<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Catalogo A</title>
    <script src="https://code.jquery.com/jquery-4.0.0.js"></script>
</head>
<body>
    <x-header />
    <div class="main-slide">
        <h1>Holaas</h1>
        <form action="guardar.php" name="formulario-alumno" method="post">
            <H3>Datos del Alumno:</H3>
            <input type="text" placeholder="Escribe tu nombre" id="name" class="input-c">
            <input type="email" placeholder="Escribe tu email" id="mail" class="input-c">
            <h3>Actividades Extraesculares</h3>
            <input type="checkbox" id="deporte" class="checks">
            <label for="deporte">Deporte (Futbol,etc)</label>
            <br>
            <input type="checkbox" id="programacion" class="checks">
            <label for="deporte">Club de Programacion</label>
            <br>
            <input type="checkbox" id="sistemas" class="checks">
            <label for="deporte">Capitulo de Sistemas</label>
            <br>
            <h3>Dominio del Idioma Ingles</h3>
            <input type="radio" id="avanzado">
            <label for="avanzado">avanzado</label>
            <br>
            <input type="radio" id="intermedio">
            <label for="intermedio">intermedio</label>
            <br>
            <input type="radio" id="basico">
            <label for="basico">basico</label>
            <br>
            <h3>Unidades</h3>
            <select name="unidades" id="unidades" class="sel">
                <option value="">Selecciona una Unidad</option>
                <option value="1">Unidad 1</option>
                <option value="2">Unidad 2</option>
                <option value="3">Unidad 3</option>
            </select>
            <button type="button" class="btn-enviar" id="enviar">Enviar</button>
        </form>
    </div>
<script>
    $("#enviar").click(function (){
        if ($("#name").val().trim() == ''){
            alert('NO escribiste tu NOMBRE');
            $("#name").focus();
            return 0;
        }
        if ($("#mail").val().trim() == ''){
            alert('NO escribiste tu EMAIL');
            $("#mail").focus();
            return 0;
        }
        else{
            document.formulario-alumno.submit();
        }
}
);
</script>
</body>
</html>