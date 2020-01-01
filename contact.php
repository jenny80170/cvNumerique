<?php
// Entête avec barre de navigation
include 'header.php';
// Variable permettant de changer le titre du head
$page = 'Contact';
?>
<p class="pContenu text-center fontSize">Vous voulez me contacter ? Remplissez le formulaire de contact ci-dessous et le tour est jouer !</p>
<!--Début du formulaire de contact-->
<div class="row">
  <div class="col-md-12">
    <form class="mt-3">
      <div class="form-group d-flex justify-content-center formColor font-weight-bold">
        <label for="surname">Entrez votre nom :</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="surname" name="surname" value="" placeholder="Exemple : Foucart" required>
      </div>
      <div class="form-group d-flex justify-content-center formColor font-weight-bold">
        <label for="firstname">Entrez votre prénom : </label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="firstname" name="firstname" value="" placeholder="Exemple : Florian" required>
      </div>
      <div class="form-group d-flex justify-content-center formColor font-weight-bold font-weight-bold">
        <label for="numberPhone">Entrez votre numéro de téléphone :</label>
        <input type="tel" class=" formContact inputFormContact mt-4 text-white font-weight-bold" id="numberPhone" name="numberPhone" value="" placeholder="Exemple : 06 ** ** ** **" required>
      </div>
      <div class="form-group d-flex justify-content-center formColor font-weight-bold">
        <label for="email">Entrez votre adresse mail :</label>
        <input type="text" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="email" name="email" value="" placeholder="Exemple : exemple@gmail.fr" required>
      </div>
      <div class="form-group d-flex justify-content-center formColor font-weight-bold">
        <label for="message">Entrez votre message :</label>
        <textarea name="message" class="formContact inputFormContact mt-4 text-white font-weight-bold" id="message" rows="8" cols="80" placeholder="Taper votre message" required></textarea>
      </div>
      <div class="d-flex justify-content-center formColor font-weight-bold">
        <input type="submit" class="formContact inputFormContact mb-3 mt-3 text-white font-weight-bold" id="validate" name="validate" value="Envoyer">
      </div>
    </div>
  </div>
</form>
<!--Fin du formulaire de contact-->
<p class="pContenu text-center fontSize">Je vous remercie de votre visite et a très bientot j'espère !!!</p>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
