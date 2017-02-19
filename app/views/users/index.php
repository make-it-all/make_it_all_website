<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' Users'; ?></h1>
      <?php $this->link_to('New +', '#'); ?>
    </div>
    <?php if (isset($facts)): ?>
      <div id="page_stats">
        <?php foreach ($facts as $fact): ?>
          <p><?php echo $fact; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
  <div id="page_filter">
    <div id="type_filter">
      <h5>Type</h5>
      <a href="#">Hardware <?php $this->icon('desktop'); ?></a>
      <a href="#">Software <?php $this->icon('file-code-o'); ?></a>
    </div>
    <?php $this->render('search_form', ['var'=>45]); ?>

  </div>
</div>
        <div id="page_body">
            <div id="pagination">
                <div id="pagination_links">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
                <div id="pagination_results">
                    <p>Showing 1-6 of 136</p>
                </div>
            </div>
            <table class="index_table">
                <tr>
                    <th>Problem ID</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Keywords</th>
                    <th>Created at</th>
                    <th> Status</th>
                    <th> Edit</th>
                </tr>
                <tr>
                    <td>555</td>
                    <td> <i class="fa fa-desktop" aria-hidden="true"></i></td>
                    <td>Monitor not coming on</td>
                    <td>monitor</td>
                    <td>6:10pm</td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>565</td>
                    <td><i class="fa fa-file-code-o" aria-hidden="true"></i></td>
                    <td>Computer screen blank</td>
                    <td>screen</td>
                    <td>6:10pm</td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>566</td>
                    <td> <i class="fa fa-file-code-o" aria-hidden="true"></i></td>
                    <td>Computer screen blank</td>
                    <td>screen</td>
                    <td>6:10pm</td>
                    <td><i id="completed" class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>567</td>
                    <td> <i class="fa fa-desktop" aria-hidden="true"></i></td>
                    <td>Broken Printer</td>
                    <td>broken</td>
                    <td>6:10pm</td>
                    <td><i class="fa fa-circle-o blue" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>568</td>
                    <td><i class="fa fa-file-code-o" aria-hidden="true"></i></td>
                    <td>Computer screen blank</td>
                    <td>screen</td>
                    <td>6:10pm</td>
                    <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>569</td>
                    <td><i class="fa fa-file-code-o" aria-hidden="true"></i></td>
                    <td>Computer screen blank</td>
                    <td>screen</td>
                    <td>6:10pm</td>
                    <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
            </table>

        </div>
    </div>
</div>
</div>
