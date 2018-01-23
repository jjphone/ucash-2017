<?php
/**
 * Displays homepage content graph LEFT section
 *
 */

?>
<div class="graph-left-box">
  <div class="box-wrapper" >
    <h2>Lựa chọn khoản vay</h2>
    <?php 
      get_template_part( 'template-parts/home/graph-left', 'line' );
      get_template_part( 'template-parts/home/graph-left', 'table' );
    ?>
  </div>
</div>