<div class="my-2"></div>
<div class="card mt-4 mx-auto">
  <div class="card-header">
	<h1 class="text-center">Modifier un contact</h1>
  </div>
  <div class="card-body">
	<form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
		<div class="separate">
			<label for="civil" class="sep_form aster">Civilité</label>
			<div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="monsieur" value="M" <?php echo $contact['civil'] === 'M' ? 'checked="yes"' : "" ?>>
					<label class="form-check-label" for="monsieur">Monsieur</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="madame" value="F" <?php echo $contact['civil'] === 'F' ? 'checked="yes"'  : "" ?>>
					<label class="form-check-label" for="madame">Madame</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="autre" value="I" <?php echo $contact['civil'] === 'I' ? 'checked="yes"'  : "" ?>>
					<label class="form-check-label" for="autre">Autre</label>
				</div>
			</div>
		</div>


		<div class="my-2">
			<label class="sep_form aster" for='nom'>Nom</label>
			<input type='text' name='nom' v-model="nom" required="required" <?php echo 'value=' . $contact['nom'] ?>>
		</div>
		<div class="my-2">
			<label class="sep_form aster" for='prenom'>Prénom</label>
			<input type='text' name='prenom' v-model="prenom" required="required" <?php echo 'value=' . $contact['prenom'] ?>>
		</div>
		<div class="my-2">
			<label class="sep_form aster" for='tel'>Téléphone</label>
			<input type='tel' name='tel' v-model="tel" required="required" <?php echo 'value=' . $contact['tel'] ?>>
		</div>
		 <div class="my-2">
			<label class="sep_form aster" for='email'>Email</label>
			<input type='email' name='email' v-model="email" required="required" <?php echo 'value=' . $contact['email'] ?>>
		</div>

	    <div class="container bg-light">
	        <div class="col-md-12 text-center">
				<input type="submit" class="btn btn-primary" value="Modifier">
	        </div>
		</div>

	</form>
  </div>
</div>

