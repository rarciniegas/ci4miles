<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Login</h3>
        <hr>

        <form class="" action="/" method="post">
          <div class="form-group">
           <label for="user_name">Vehicle name</label>
           <input type="text" class="form-control" name="vehicle_name" id="vehicle_name" value="<?= set_value('vehicle_name') ?>">
          </div>
          <div class="form-group">
           <label for="password">License</label>
           <input type="password" class="form-control" name="password" id="password" value="">
          </div>

          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a href="/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>