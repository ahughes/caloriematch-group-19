<?php echo '

<div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactUs">
          <div class="form-group">
            <input type="email" class="form-control" id="username" placeholder="Email">
            <div class="form-control-feedback" hidden>Invalid email address.</div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="inputMessage" placeholder="Message" rows="3"></textarea>
          </div>
          <fieldset>
            <div class="form-group float-right">
              <button type="submit" class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

'; ?>