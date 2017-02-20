<form action="/users?flash=User+Updated" method="POST" class="with_panels">

  <div id="main_form_panel">
    <div class="field">
      <label>Name</label>
      <input type="text" name="name" value="James Limon"/>
    </div>
    <div class="field">
      <label>Email</label>
      <input type="email" name="name" value="james.limon@make-it-all.co.uk"/>
    </div>
    <div class="field">
      <label>Password</label>
      <input type="password" name="name"/>
    </div>
    <div class="actions">
      <input type="submit" name="commit" value="Update User"/ >
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2">
      <input type="radio" class="tab_controller" name="tab" id="tab_3">
      <input type="radio" class="tab_controller" name="tab" id="tab_4">
      <input type="radio" class="tab_controller" name="tab" id="tab_5">
      <div class="tab_heads_container">
        <label for="tab_1">Outstanding Jobs</label>
        <label for="tab_2">Completed Jobs</label>
        <label for="tab_3">Specialisations</label>
        <label for="tab_4">History</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <table class="index_table">
            <thead>
              <tr>
                <th class="narrow_column"></th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Given</th>
                <th class="narrow_column">View</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="fa fa-exclamation-triangle warning" aria-hidden="true"></i></td>
                <td>Bob's PC</td>
                <td>When he presses the on button, nothing happe...</td>
                <td>Not started</td>
                <td>40 days ago</td>
                <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>Roberts Printer</td>
                <td>When he presses the print on button, nothin...</td>
                <td>In progress</td>
                <td>10 minutes ago</td>
                <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
              </tr>
              <tr>
                <td><i class="fa fa-exclamation-circle error" aria-hidden="true"></i></td>
                <td>Billy's Desk</td>
                <td>He once punched a hole in it and now theres a hole in...</td>
                <td>Not Started</td>
                <td>2 years ago</td>
                <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab_panel">
          TAB 2
        </div>
        <div class="tab_panel">
          <select multiple="multiple">
            <option value="microsoft office">Microsoft Office</option>
            <option value="microsoft office">Microsoft Word</option>
            <option value="microsoft office">Microsoft Word Printing</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Styling</option>
            <option value="microsoft office">Microsoft Excel</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Formulas</option>
          </select>
        </div>
        <div class="tab_panel">
          history of user
        </div>
      </div>
    </div>


  </div>

</form>
