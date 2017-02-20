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
    <?php if ($offset+10 > ($records->class::count()-1)) {?>
      <p> <?php echo $this->i('pagination.showing_text', ['low'=>($offset+1), 'high'=>$total_records, 'total'=>$total_records]);?> </p>
    <?php } else{?>
      <p> <?php echo $this->i('pagination.showing_text', ['low'=>($offset+1), 'high'=>($offset+10), 'total'=>$total_records]);?> </p>
    <?php }?>
  </div>
</div>
