<?php
/**
 * Displays homepage content graph line section
 */
?>

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="/wp-content/themes/2017-child/assets/javascripts/graph-dragable.js"></script>

<div class="graph" id = "graph">

  <div class="graph-line-box" id="graph-line-box">


    <div class="graph-line" id="graph-line">&nbsp;
      <?php
        $dots = dot_list();
        foreach ($dots as $idx => $value) {
          set_query_var('dot', $value);
          get_template_part( 'template-parts/home/graph-left-line', 'dot' );
        }
        unset( $dot );
        unset( $dots );
      ?> 
    </div>

    <?php get_template_part( 'template-parts/home/graph-left-line', 'dragable'); ?>
    
  </div>

  <div class="legend"><b>VN₫ </b>x 1,000,000</div>

</div>  