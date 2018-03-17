
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Centre Login | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <img src="{{ asset('images/logo-grid.png') }}" class="img-thumbnail" alt="Logo">
          <section class="login_content">
            <form action="{{ route('centre.authenticate') }}" method="POST">
              {{ csrf_field() }}
              <h1>Centre Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Username" name="centre_email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="centre_password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in"/>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> <strong>Request Account</strong> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <img src="{{ asset('images/logo-grid.png') }}" class="img-thumbnail" alt="Logo">
          <section class="login_content">
            <form method="POST" action="{{ route('centre.request.account.send') }}">
              {{ csrf_field() }}
              <h1>Request Account</h1>
              <h5>Interested in implementing the solution of your school/centre/outreach ?</h5>
              <h5>Fill in the details and hit request !</h5>
              <div>
                <input type="text" class="form-control" placeholder="Name" name="name" required="" />
              </div>
              <div>
                <label>Select Type : </label>
                <select class="form-control" name="type">
                  <option value="0">Special School</option>
                  <option value="1">Special Wing</option>
                  <option value="2">Outreach</option>
                  <option value="3">Individual</option>
                  <option value="4">Organisation</option>
                </select>
              </div>
              <br>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Address" name="address" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Request" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
