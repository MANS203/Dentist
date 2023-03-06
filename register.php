<!DOCTYPE html>
<html>
  <head>
    <title> Registration Page </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <div class="container">
      <div class=" top row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1> Registration Form </h1>
          </div>
          <div class="panel-body"> 

            <!-- form -->

            <form  method="post">
              <?php include("back/back_reg.php") ?>

              <div class="form-group">
                <label for="firstname"></label>
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  name="firstname"
                  required
                  placeholder="first_name"
                />
              </div>
              <div class="form-group">
                <label for="lastName"></label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastname"
                  required
                  placeholder="Last_name"
                />
              </div>

                <div class="form-group">
                        
                        <label for="us"></label>
                          <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="username"
                            id="us"
                          >
                     
                
                   <!-- <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >-->
                
              </div>  
              <div class="form-group">
                <label for="email"></label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                  placeholder="EX:aaaammm@gmail.com"
                />
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="password"

                />
              </div>
              <div class="form-group">
                <label for="number"></label>
                <input
                  type="int"
                  class="form-control"
                  id="number"
                  name="phone_num"
                  placeholder="phone_number"
                />
              </div>
              <input type="submit" value="Register" name="submit" class="btn btn-primary" />
              <div class="signup_link">
                are you member? <a href="login.php"> Login </a>
            </div>
            </form>
          </div>
          <!-- <div class="panel-footer text-right">
            <small>&copy; Technical Babaji</small>
          </div> -->
        </div>
      </div>
    </div>
  <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> -->
  <!-- <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
 </div> -->
  </body>
</html>
