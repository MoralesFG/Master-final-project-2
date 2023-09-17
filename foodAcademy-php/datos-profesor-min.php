    <!-- //////// PROFESOR MIN ////////// -->
    <?php
		
        // variable que llama al grupo
        $profesor = get_field('profesor_info');	
        
        // si se ha rellenado el grupo aparece
        if( $profesor ): ?>
        <div class="profesor-min d-flex align-items-center">
        <!-- los nombres de los subcampos son los parámetros -->
            <img class="profesor-min__foto" src="<?php echo $profesor['foto']; ?>">
            <p class="profesor-min__nombre"><?php echo $profesor['nombre']; ?></p>
        </div>
        
    <?php endif; ?>
    <!-- //////// FIN PROFESOR ////////// -->