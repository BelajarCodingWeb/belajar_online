<div class="container" style="padding-top: 100px; padding-bottom: 50px" >
<div id="login-overlay">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
              <strong>Create Free Account</strong></h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-8">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="Email" class="control-label">Enter your Email Address</label>
                                  <input type="email" class="form-control" id="email" name="email" value="" required="" title="Please enter you email" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Choose a Username</label>
                                  <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="" required="" title="Please enter your username">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" >Pick a Password  
                                      <input type="checkbox" value=''> Show Password
                                  </label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <span>
                              <input type="checkbox" value=''> By checking this box and continuing, I aggre to the HoneyCode <a href="#">Terms of Use</a>
                              </span>
                              <br>
                              <br>
                              <br>
                              <br>
                              <button type="submit" class="btn btn-success btn-block btn-outline">Sign Up</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-4">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
</div>