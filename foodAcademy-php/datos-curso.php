    <!-- //////// DATOS ////////// -->
    <?php
        // variable que llama al grupo
        $curso= get_field('curso');	

        // si se ha rellenado el grupo aparece
        if( $curso ): ?>

        <ul class="info row g-0 text-center">
            <li class="info__plazas col-6">
                <i class="ico-plazas"></i>
                <h3>Plazas</h3>
                <p><?php echo $curso['plazas']; ?></p>
            </li>
            <li class="info__fecha col-6">
                <i class="ico-fecha"></i>
                <h3>Fecha</h3>
                <p><?php echo $curso['fecha']; ?></p>
            </li>
            <li class="info__tiempo col-6">
                <i class="ico-tiempo"></i>
                <h3>Duración</h3>
                <p><?php echo $curso['duracion']; ?></p>
            </li>
            <li class="info__precio col-6">
                <i class="ico-precio"></i>
                <h3>Precio</h3>
                <p><?php echo $curso['precio']; ?></p>
            </li>
        </ul>

        <div class="d-flex justify-content-center">
            <a href="<?php echo $curso['informacion']; ?>" class="boton-dark">Me interesa</a>
        </div>

    <?php endif; ?>