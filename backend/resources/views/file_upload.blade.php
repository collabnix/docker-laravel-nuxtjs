<h1>Subir archivo</h1>

<form method="POST" action="" enctype="multipart/form-data">
    <fieldset>
        <legend>Sección para probar si hay problemas registrando archivos, o con permisos de escritura.</legend>
        @csrf
        <input type="file" name="fileUpload" id="fileUpload" required>
        <br>
        <input type="submit">
    </fieldset>
</form>
