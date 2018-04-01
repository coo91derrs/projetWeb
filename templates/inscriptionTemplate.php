<div class="container text-center">
	<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h2 class="post-title">Inscription</h2>
<?php
	if(isset($this->getArg()['inscErrorText'])){
		echo '<span class="error">' . $this->getArg()['inscErrorText'] . '</span>';
	}
?>
		<form action="index.php?action=validateInscription" method="post" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Login</label>
                <input type="text" class="form-control" name="inscLogin" placeholder="Login" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Password</label>
                <input type="password" class="form-control" name="inscPassword" placeholder="Password" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" name="mail" placeholder="Email" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
			<div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
				<button type="submit" name='action' value="validateInscription" class="btn btn-primary" id="sendMessageButton">S'inscrire</button>
            </div>
		</form>

			</div>
		</div>
	</div>
</div>






