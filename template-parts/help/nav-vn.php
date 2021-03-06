<div class="row"> <!-- row -->

  <div  class="help-wrap options"> <div class="row">

    <div  id = "guide-link"
          
          data-toggle   = "collapse" 
          data-parent   = "#help-menu" 

          href          = "#guide-details"
          aria-controls =  "guide-details"
          
          aria-expanded = "true"
          class         = "links" 
     >
      <img src="<?php echo asset_uri('help/class1.png') ?>">
      <h4>Câu hỏi thường gặp khi đăng kí </h4>
      <a>Xem thêm</a>
      <span class="tooltip-arrow"></span>
    </div>

    <div id = "borrow-link"

          data-toggle   = "collapse" 
          data-parent   = "#help-menu" 
          
          href          = "#borrow-details"
          aria-controls =  "borrow-details"
          
          aria-expanded = "false"
          class         = "links collapsed"
      >
      <img src="<?php echo asset_uri('help/class2.png') ?>">
      <h4>Cách thức vay tiền</h4>
      <a href="">Xem thêm</a>
      <span class="tooltip-arrow"></span>
    </div>

    <div  id = "repay-link"

          data-toggle   = "collapse" 
          data-parent   = "#help-menu"

          href          = "#repay-details"
          aria-controls =  "repay-details"
    
          aria-expanded = "false"
          class         = "links collapsed"
      >
      <img src="<?php echo asset_uri('help/class3.png') ?>">
      <h4>Cách thức trả tiền</h4>
      <a href="">Xem thêm</a>
      <span class="tooltip-arrow"></span>
    </div>


  </div> </div>
</div>

<div class="menu-details" > <!-- row -->
  <div class="help-wrap">
    <div class="row">

      <div  id = "guide-details" 

            aria-labelledby = "guide-link"
            class           = "details collapse in"
          
            >  <!-- wrapper - not col- -->
        <?php get_template_part('template-parts/help/nav', 'guide-vn');  ?>
      </div>


      <div  id = "borrow-details" 

            aria-labelledby = "borrow-link"
            class           = "details collapse"

            >
        <?php get_template_part('template-parts/help/nav', 'borrow-vn');  ?>
      </div>


      <div  id = "repay-details"

            aria-labelledby = "repay-link"
            class           = "details collapse"
            
            >
        <?php get_template_part('template-parts/help/nav', 'repay-vn');  ?>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript" src="/wp-content/themes/2017-child/assets/javascripts/help-menu.js" ></script>