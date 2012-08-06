      <!--  AMPLIAR OBRA  -->  
      <?php foreach ($obras as $res){ ?>

        <div id="ampliar_obra" class="div_obras">
          <div class="imagen"><img src="<?php echo base_url()."backend/public_html/imagenes/obras/big/".$res->Nombre;?>" /></div>
          <ul class="datos_obra">    
            <li> <h2><?= $res->Epigrafe ?></h2> </li>
            <li> <p class="caract_obra"><b>Tecnica:</b> <?= $res->Tecnica ?></p> </li>
            <li> <p class="caract_obra"><b>Medidas:</b> <?= $res->Medidas ?></p> </li>
            <li> <p class="caract_obra"><b>A&ntilde;o:</b> <?= $res->Anio ?></p> </li>
            <li>   
              <div class="valor_ref">
                <p class="tit_valor_ref">Valor de referencia</p>
                <p class="total_valor">$ <?= $res->Valor ?></p>
              </div>
            </li>    
          </ul>
        </div>
       <? }?>
      <!-- -->  