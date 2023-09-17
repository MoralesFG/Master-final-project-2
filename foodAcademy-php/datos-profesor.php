<!-- //////// PROFESOR ////////// -->
<?php
        // variable que llama al grupo
        $profesor = get_field('profesor_info');	
        
        // si se ha rellenado el grupo aparece
        if( $profesor ): ?>
        <div class="profesor row g-0 align-items-center">
        
        <!-- los nombres de los subcampos son los parámetros -->
            <div class="col-4 col-md-12 d-flex justify-content-md-center">
                <img class="profesor__foto mb-2" src="<?php echo $profesor['foto']; ?>">
            </div>
            <div class="profesor__contenido col-8 col-md-12 text-md-center ps-3 ps-md-0">
                <h3 class="profesor__nombre mb-md-2"><?php echo $profesor['nombre']; ?></h3>
                <p class="profesor__bio"><?php echo $profesor['bio']; ?></p>
            </div>
        </div>
    <?php endif; ?>
    <!-- //////// FIN PROFESOR ////////// -->