<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Log in / Sign up</title>
    <link rel="stylesheet" href="css/style-logins.css" />
  </head>
  <body>
    <div class="btn-back">
      <div class="btn">
        <a href="/index">Home</a>
      </div>
    </div>
    <div class="container">
      <div class="box"></div>
      <div class="container-forms">
        <div class="container-info">
          <div class="info-item">
            <div class="table">
              <div class="table-cell">
                <p>Have an account?</p>
                <div class="btn">Log in</div>
              </div>
            </div>
          </div>
          <div class="info-item">
            <div class="table">
              <div class="table-cell">
                <p>Don't have an account?</p>
                <div class="btn">Sign Up</div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-form">
          <form id="sign_in" action="/sign_in">
            <div class="form-item log-in">
              <div class="table">
                <div class="table-cell">
                  <input
                    name="username"
                    placeholder="Username"
                    type="text"
                    id="username"
                  /><input
                    name="password"
                    placeholder="Password"
                    type="Password"
                    id="password"
                  />
                  <button type="submit" form="sign_in" class="btn">
                    Log in
                  </button>
                </div>
              </div>
            </div>
          </form>
          <form id="sign_up" action="sign_up.php" method="get">
            <div class="form-item sign-up">
              <div class="table">
                <div class="table-cell">
                  <input
                    name="email"
                    placeholder="Email"
                    type="text"
                    id="email"
                  /><input
                    name="fullname"
                    placeholder="Full Name"
                    type="text"
                    id="fullname"
                  /><input
                    name="username"
                    placeholder="Username"
                    type="text"
                    id="username"
                  /><input
                    name="password"
                    placeholder="Password"
                    type="Password"
                    id="password"
                  />
                  <button type="submit" form="sign_up" class="btn">
                    Sign up
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script-logins.js"></script>
  </body>
</html>
