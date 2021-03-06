<?php

$mail_ontv = 'marc0tjevp@gmail.com';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{#!
    if (empty($_POST['naam']))
        $naam_fout = 1;
    if (function_exists('filter_var') && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
            $email_fout = 1;
    if (!empty($_SESSION['antiflood']))
    {
        $seconde = 20;
        $tijd = time() - $_SESSION['antiflood'];
        if($tijd < $seconde)
            $antiflood = 1;
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($antiflood) || empty($_POST['naam']) || !empty($naam_fout) || empty($_POST['mail']) || !empty($email_fout) || empty($_POST['bericht']) )) || $_SERVER['REQUEST_METHOD'] == 'GET')
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (!empty($naam_fout))
            echo '<div class="card card-small deep-orange darken-1 white-text">Please enter your name</div>';
        elseif (!empty($email_fout))
            echo '<div class="card card-small deep-orange darken-1 white-text">Please enter a valid Email address</div>';
        elseif (!empty($antiflood))
            echo '<div class="card card-small deep-orange darken-1 white-text">You can only sent &eacute;&eacute;n messages every ' . $seconde . ' seconds.</div>';
        else
            echo '<div class="card card-small deep-orange darken-1 white-text">Please fill in al required fields.</div>';
    }

  echo '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" >

    <div class="input-field">
      <label class="white-text" for="naam">Name</label>
      <input type="text" class="white-text" id="naam" name="naam" value="' . (isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : '') . '" /><br />
    </div>

    <div class="input-field">
      <label class="white-text" for="mail" data-error="Please enter a valid email address" for="mail">Email</label>
      <input type="email" class="validate white-text" id="mail" name="mail" value="' . (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') . '" /><br />
    </div>

    <div class="input-field">
      <label class="white-text" for="bericht">Message or question</label>
      <textarea id="bericht" class="materialize-textarea white-text" name="bericht" rows="8">' . (isset($_POST['bericht']) ? htmlspecialchars($_POST['bericht']) : '') . '</textarea><br />
    </div>

      <button class="btn waves-effect white z-depth-2 waves black-text" type="submit" name="Submit">Send
      </button>

  </form>';
}

else
{
  $datum = date('d/m/Y H:i:s');
  $onderwerp = "Nieuw bericht via Portfolio (EN)";

  $inhoud_mail .= "Naam: " . htmlspecialchars($_POST['naam']) . "\n";
  $inhoud_mail .= "E-mail: " . htmlspecialchars($_POST['mail']) . "\n";
  $inhoud_mail .= "Bericht:\n\n";
  $inhoud_mail .= htmlspecialchars($_POST['bericht']) . "\n\n";

  $inhoud_mail .= "Verstuurd op " . $datum . " via het IP adres " . $_SERVER['REMOTE_ADDR'] . "\n\n";

  $inhoud_mail .= "\n\n";

  $headers = 'From: ' . htmlspecialchars($_POST['naam']) . ' <' . $_POST['mail'] . '>';

  $headers = stripslashes($headers);
  $headers = str_replace('\n', '', $headers); // Verwijder \n
  $headers = str_replace('\r', '', $headers); // Verwijder \r
  $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers)); // Slashes van quotes

  $_POST['onderwerp'] = str_replace('\n', '', $_POST['onderwerp']); // Verwijder \n
  $_POST['onderwerp'] = str_replace('\r', '', $_POST['onderwerp']); // Verwijder \r
  $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp'])); // Slashes van quotes

  if (mail($mail_ontv, $onderwerp , $inhoud_mail, $headers))
  {
      $_SESSION['antiflood'] = time();

      echo '<div class="column s12 m12 l9">
        <div class="card card-small green darken-1 white-text">Your message has been sent.</div>

      <p>Thank you for your message, I will contact you as soon as possible.</p></div>';
  }
  else
  {
      echo '<div class="column s12 m12 l9"><div class="card card-small red darken-1 white-text">Could not sent message</div>

      <p><b>My apologies.</b> You can also contact me at marc0tjevp@gmail.com</p></div>';
  }
}
?>
