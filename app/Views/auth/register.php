<?php ob_start(); ?>

<div class="header">
  <h1>Créer un compte<br />La Tchatche</h1>

  <p>Service 100% anonyme et gratuit. Pensez à noter votre mot de passe quelque part !</p>
</div>


<form action="/register" method="post">
  <label for="username" class="input full">
    <div class="label">
      Nom d'utilisateur
    </div>
    <input type="text" id="username" name="username" required>
  </label>

  <label for="password" class="input full">
    <div class="label">
      Mot de passe
    </div>
    <input type="password" id="password" name="password" required pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}">
  </label>


  <button class="button primary" type="submit">
    S'inscrire
  </button>
</form>

<p class="alternative">
  Déjà parmi nous ? <a href="/login">Connectez-vous</a> !
</p>

<?php if (isset($error)): ?>
  <p class="error"><?= $error ?></p>
<?php endif; ?>

<?php $slot = ob_get_clean(); ?>