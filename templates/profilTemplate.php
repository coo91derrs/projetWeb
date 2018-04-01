<div class="container text-center" >
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h1 class="post-title"><?php echo 'Bonjour ' .$_SESSION['login']. '.'; ?></h1>
				<?php if(isset($this->getArg()['inscErrorText'])){ echo '<span class="error">' . $this->getArg()['inscErrorText'] . '</span>'; } ?>
			</div>
        </div>
		<div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <form action="index.php?controller=user&action=profil" method="post" id="contactForm" novalidate>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls">
							<label>NOMLIEU</label>
							<input type="text" class="form-control" name="NOMLIEU" placeholder="NOMLIEU" required>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls">
							<label>Password</label>
							<input type="text" class="form-control" name="CODEPOSTAL" placeholder="CODEPOSTAL" required>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="form-group">
						<button type="submit" name='action' value="creerLieu" class="btn btn-primary" id="sendMessageButton">Creer le lieu</button>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>

<hr>