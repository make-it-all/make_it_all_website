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
</div>
