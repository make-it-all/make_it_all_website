<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?? 'Make it all'; ?></title>
    <?php $this->include_stylesheet('normalize'); ?>
    <?php $this->include_stylesheet('application'); ?>
  </head>
  <body>
   <div id="page_wrapper">
     <div id="form_wrapper">
       <div id="form_panel">
         <?php $this->yield(); ?>
       </div>
     </div>
   </div>
  </body>
</html>