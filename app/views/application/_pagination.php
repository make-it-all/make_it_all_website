<div id="pagination">
  <div id="pagination_links">
    <?php if (($records->class::count() % 10) == 0) {
      for ($i=0; $i < ($records->class::count() % 10)+1; $i++) {
        echo $this->link_to($i+1, Application::$request->path.'?page=' . ($i+1));
      }
    } else{
      for ($i=0; $i < (intdiv($records->class::count() , 10)+1); $i++) {
        echo $this->link_to($i+1, Application::$request->path.'?page=' . ($i+1));
      }
    } ?>
  </div>
  <div id="pagination_results">
    <p>Showing <?php echo $offset+1 ?>-<?php
    if ($offset+10 > ($records->class::count()-1)) {
      echo $total_records;
    }else {
      echo $offset+10;
    } ?> of <?php echo $total_records; ?></p>
  </div>
</div>
