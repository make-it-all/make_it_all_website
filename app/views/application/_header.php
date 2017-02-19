<header id="header">
  <div id="logo_container">
    <?php echo $this->image_tag('logo'); ?>
  </div>
  <div id="session_info">
    <p> <?php echo $this->i('header.signed_in_message') . $this->link_to($this->i('header.logout'),'/logout');?></p>
  </div>
</header>
