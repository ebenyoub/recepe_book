<div class="card mt-4 mx-auto">
  <div class="card-header">
	<h1 class="text-center">Ajouter un contact</h1>
  </div>
  <div class="card-body">
	<form method="POST" action="index.php">
		<div class="separate">
			<label for="civil" class="sep_form aster">Civilité</label>
			<div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="monsieur" value="M">
					<label class="form-check-label" for="monsieur">Monsieur</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="madame"value="F">
					<label class="form-check-label" for="madame">Madame</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="civil" id="autre" value="I" checked="">
					<label class="form-check-label" for="autre">Autre</label>
				</div>
			</div>
		</div>


		<div class="my-2">
			<label class="sep_form aster" for='nom'>Nom</label>
			<input type='text' name='nom' v-model="nom" required="required">
		</div>
		<div class="my-2">
			<label class="sep_form aster" for='prenom'>Prénom</label>
			<input type='text' name='prenom' v-model="prenom" required="required">
		</div>
		<div class="my-2">
			<label class="sep_form aster" for='tel'>Téléphone</label>
			<input type='tel' name='tel' v-model="tel" required="required">
		</div>
		 <div class="my-2">
			<label class="sep_form aster" for='email'>Email</label>
			<input type='email' name='email' v-model="email" required="required">
		</div>

	    <div class="container bg-light">
	        <div class="col-md-12 text-center">
				<input type="submit" class="btn btn-success" value="Ajouter">
	        </div>
		</div>

	</form>
  </div>
</div>
