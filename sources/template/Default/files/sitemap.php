<?php
/*
 * sitemap.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

  require($CLICSHOPPING_Template->getTemplateFiles('breadcrumb'));
?>
<section class="index" id="index">
  <div class="contentContainer">
    <div class="contentText">
      <?php echo $CLICSHOPPING_Template->getBlocks('modules_sitemap'); ?>
    </div>
  </div>
</section>
