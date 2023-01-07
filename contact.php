<!-- CREATION DE SESSION -->
<?php
	session_start();
?>
<!-- FIN CREATION DE SESSION -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>CONTACT</title>
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<!-- MESSAGES D'ERREURS -->
        <?php if (isset($_SESSION['monapp']['errors'])): ?>
        		<div class="alert-errors">
        			<?php echo implode('<br>', $_SESSION['monapp']['errors']); ?>
        		</div>
        <?php endif?>
<!-- FIN MESSAGES D'ERREURS -->

<!-- MESSAGE DE SUCCES -->
        <?php if (isset($_SESSION['monapp']['success'])): ?>
            <div class="alert-success">
              Votre message a bien été envoyé !
            </div>
        <?php endif?>
<!-- FIN MESSAGE DE SUCCES -->

<!-- FORMULAIRE DE CONTACT -->
        <div class="cnt_form">
                <form action="https://getform.io/f/edde65a6-dca2-414f-b26e-70ca6045b0c6" method="POST" class="form" >
                  <h1>Contact</h1>
                  <div class="form-group">
                    <input class="inptform" type="text" id="name" name="name" value="<?php echo isset($_SESSION['monapp']['data_memory']['name']) ? $_SESSION['monapp']['data_memory']['name'] : ''; ?>" required>
                    <label class="lblform" for="name">Nom</label>
                  </div>
                  <div class="form-group">
                    <input class="inptform" type="text" id="email" name="email" value="<?php echo isset($_SESSION['monapp']['data_memory']['email']) ? $_SESSION['monapp']['data_memory']['email'] : ''; ?>" required>
                    <label class="lblform" for="email">Email</label>
                  </div>
                  <div class="form-group">
                    <input class="inptform" type="text" id="object"  name="object" value="<?php echo isset($_SESSION['monapp']['data_memory']['object']) ? $_SESSION['monapp']['data_memory']['object'] : ''; ?>" required>
                    <label class="lblform" for="object">Objet</label>
                  </div>
                  <div class="form-group">
                    <textarea type="text" id="message"  name="message" rows="10" cols="10" required><?php echo isset($_SESSION['monapp']['data_memory']['message']) ? $_SESSION['monapp']['data_memory']['message'] : ''; ?></textarea>
                    <label class="lblform" for="message">Message</label>
                  </div>
                  <button type="submit" class="send-btn">Envoyer</button>
                </form>
        </div>
<!-- FIN FORMULAIRE DE CONTACT -->
    </body>

</html>

<!-- DESTRUCTION DES SESSIONS -->
<?php

    unset($_SESSION['monapp']['data_memory']);
    unset($_SESSION['monapp']['errors']);
    unset($_SESSION['monapp']['success']);

?>
<!-- FIN DESTRUCTION DES SESSIONS -->