<div id="side_bar">
  <section>
    <?php echo $this->link_to('Dashboard'); ?>
  </section>
  <section>
    <h4>CALLS</h4>
    <?php echo $this->link_to('All', '/calls'); ?>
    <?php echo $this->link_to('New'); ?>
  </section>
  <section>
    <h4>PROBLEMS</h4>
    <?php echo $this->link_to('All', '/problems'); ?>
    <?php echo $this->link_to('New'); ?>
    <?php echo $this->link_to('Completed'); ?>
    <?php echo $this->link_to('Outstanding'); ?>
  </section>
  <section>
    <h4>PERSONNEL</h4>
    <?php echo $this->link_to('All', '/personnel'); ?>
    <?php echo $this->link_to('Operators'); ?>
    <?php echo $this->link_to('Specialists'); ?>
    <?php echo $this->link_to('Admins'); ?>
  </section>
  <section>
    <h4>USERS</h4>
    <?php echo $this->link_to('All', '/users'); ?>
    <?php echo $this->link_to('Operators'); ?>
    <?php echo $this->link_to('Specialists'); ?>
    <?php echo $this->link_to('Admins'); ?>
  </section>
  <section>
    <h4>REPORTS</h4>
    <?php echo $this->link_to('Generate'); ?>
    <?php echo $this->link_to('View Archieved'); ?>
  </section>
  <section>
    <?php echo $this->link_to('Settings'); ?>
  </section>
  <div id="language_selector">
    <input type="checkbox" class="dropdown_controller" id="language_dropdown"/>
    <div class="dropdown_content">
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('arabic-flag'); ?>العربية</a></div>
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('chinese-flag'); ?>中文</a></div>
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('german-flag'); ?>Deutsch</a></div>
    </div>
    <label for="language_dropdown"><?php echo $this->image_tag('uk-flag'); ?>English</label>
  </div>
</div>
