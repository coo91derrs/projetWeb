<div class="container text-center">
	<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h2 class="post-title">Connexion</h2>
<?php
	if(isset($this->getArg()['inscErrorText'])){
		echo '<span class="error">' . $this->getArg()['inscErrorText'] . '</span>';
	}
?>

		<form action="index.php?action=validateConnexion" method="post" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Login</label>
                <input type="text" class="form-control" name="connLogin" placeholder="Login" id="name" required data-validation-required-message="Please enter your login.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Password</label>
                <input type="password" class="form-control" name="connPassword" placeholder="Password" required data-validation-required-message="Please enter your password.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
			<br>
            <div id="success"></div>
			<div class="form-group">
              <button type="submit" name='action' value="validateConnexion" class="btn btn-primary" id="sendMessageButton">Se connecter</button>
            </div>
				</form>
			</div>
		</div>
	</div>
</div>