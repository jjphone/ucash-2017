<?php
/**
 * Displays homepage content graph LEFT section
 *
 */

?>
<!-- graph-left-en -->
<div class="graph-left-box">
  <div class="box-wrapper" >
    <h2>Your Loan</h2>
    <?php 
      get_template_part( 'template-parts/home/graph-left', 'line-en' );
      get_template_part( 'template-parts/home/graph-left', 'table-en' );
    ?>
    <!-- box-wrapper end -->
  </div>
</div>