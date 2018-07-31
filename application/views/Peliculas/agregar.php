
<body align="center">
    <h3>Agregar Peliculas al Listado</h3>
    <br><br><br>
    <?= form_open("/peliculas/recibirdatos") ?>
    <?php
        $nombre = array(
            'name' => 'nombre',
            'placeholder' => 'Nombre Pelicula'
        );
        $disponible = array(
            'name' => 'disponible',
            'placeholder' => 'Si/No'
        );
        $codigo = array(
            'name' => 'codigo',
            'placeholder' => 'Codigo Unico'
        );
    ?>
    <div class="container">
        <?php
            $attr_cod = array( 'readonly' => true, 'id' => 'codigoUnico');
            $attr_name = array( 'id' => 'Name');
            $attr_btn = array('class' => 'btn btn-success', 'id' => 'btnSubmit')
         ?>

        <?= form_label('Nombre', 'nombre') ?><br>
            <?= form_input($nombre, '' ,$attr_name) ?>
            <br><br>
            
            <?= form_label('Disponible', 'disponible') ?><br> 
            <?= form_input($disponible) ?>
            <br><br>    

            <?= form_label('Codigo Unico', 'codigo') ?><br>   
            <?= form_input($codigo, '', $attr_cod) ?>
            <br><br>
            <?= form_submit('', 'Crear Pelicula', $attr_btn) ?> 
        <?= form_close() ?>
        <a href="../peliculas" class="btn btn-primary"> Volver al listado de peliculas</a>

    </div>
</body>
<script>
        $( "#Name" ).change(function() {
            $('#codigoUnico').val( $('#Name').val() + '%123' );
        });
</script>
</html>
