<?php
require 'inc/head.php';
if (!empty($_POST['loginname'])) {
    $_SESSION["login"] = $_POST['loginname'];
    header ("location: index.php");
}
if ((!empty($_SESSION["login"])))
{
    //le login a ete enregistré proposer index.php
    header('Location:index.php');
}
var_dump($_SESSION);
?>
<div class="container" style="margin-top:40px">
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong> Se conntecter pour continuer</strong>
      </div>
      <div class="panel-body">
        <form role="form" action="#" method="POST">
          <fieldset>
            <div class="row">
              <div class="center-block">
                <img class="profile-img"
                  src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" placeholder="Nom" name="loginname" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter">
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="panel-footer ">
        <p class="protectedUser">Vous n'avez pas de compte ? N'hésitez pas à nous confier votre nom pour vous connecter ! Nous ne conserverons pas vos données une fois que vous vous serez déconnecté. 
      </div>
            </div>
  </div>
</div>
</div>
<?php require 'inc/foot.php'; ?>