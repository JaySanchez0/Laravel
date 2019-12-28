<html>
    <head><title>Hola</title></head>
    <body>
        <h1>Registro de materia</h1>
        <form method="POST" action="/Materia">
            @csrf
            Nombre: <input type="text" name="Nombre">
            <br>
            Sigla: <input type="text" name="sigla">
            <br>
            Creditos:<input type="number" name="creditos">
            <br>
            <input type="submit" value="registrar">
        </form>
    </body>
</html>