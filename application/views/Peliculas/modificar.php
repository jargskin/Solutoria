
<body align="center">
    <h3>Modificar Peliculas al Listado</h3>
    <br><br><br>
    <?= form_open("/peliculas/actualizar/".$id) ?>
    <?php
        $nombre = array(
            'name' => 'nombre',
            'placeholder' => 'Nombre Pelicula',
            'value' => $pelicula->result()[0]->nombrePelicula
        );
        $disponible = array(
            'name' => 'disponible',
            'placeholder' => 'Si/No',
            'value' => $pelicula->result()[0]->disponible
        );
        $codigo = array(
            'name' => 'codigo',
            'placeholder' => 'Codigo Unico',
            'value' => $pelicula->result()[0]->codigo
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
            <?= form_submit('', 'Modificar Pelicula', $attr_btn) ?>
            <a href="../" class="btn btn-danger"> Volver </a>
        <?= form_close() ?>
    </div>
</body>
<script>
        $( "#Name" ).change(function() {
            $('#codigoUnico').val( $('#Name').val() + '%123' );
        });
</script>
</html>
