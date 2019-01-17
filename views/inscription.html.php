 

  
   <span style="background-color:#87E990;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h1 class="panel-title">PAGE D'INSCRIPTION</h1>
                  </div>
                  <div class="panel-body">


    <p>Merci de remplir les champs ci-dessous,svp:</p><br />

    <?php if (isset($_SESSION['success'])){?>

    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>

    <?php } ?>



    
    <div class="form-group">
      <label for="username">NOM:</label>
      <input class="form-control" name="users_nom" id="users_nom" type="text">

    </div>
    <br />


    <div class="form-group">
      <label for="userprenom">PRENOM</label>
      <input class="form-control" name="users_prenom" id="users_prenom" type="text">

    </div>
    <br />


    <div class="form-group">
      <label for="email">EMAIL:</label>
      <input class="form-control" name="users_email" id="users_email" type="text">

    </div>
    <br />


    <div class="form-group"> 
      <label for="login">IDENTIFIANT:</label>
      <input class="form-control" name="users_login" id="users_login" type="text"> 

    </div>
    <br />


    <div class="form-group">
      <label for="password">MOT DE PASS:</label>
      <input class="form-control" name="users_mdp" id="users_mdp" type="password">

    </div>
    <br />                                                                                                                                  



              <div class="text-center">
                <input type="submit" class="btn btn-primary" name="validez" value="VALIDEZ" />
              </div>
            </form>
          </div>


        