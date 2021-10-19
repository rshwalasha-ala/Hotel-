<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/helper.css">
  <link rel="stylesheet" href="startseitehotel.css">
    <link rel="stylesheet" href="./css/zimmer.css">
    <link rel="stylesheet" href="./css/deinst.css">
  
  <title>Impressum</title>

  <style>

  </style>

</head>
<body>
  <div class="wrapper">

    <header>
          </header>
          <?php include 'navi.php';?>
<?php 
 echo'<div class="impressum pad-1 mar-1">
      <h2>Impressum</h2>
      <p>Angaben gemäß § 5 TMG</p>
      <p>Max Muster <br>Musterweg<br>12345 Musterstadt<br></p>
      <p> <strong class="impr">Vertreten durch: </strong><br>Max Muster<br></p>
      <p><strong class="impr">Kontakt:</strong><br>Telefon: 01234-789456<br>Fax: 1234-56789<br>E-Mail: <a href="mailto:rosen@muster.de">rosen@muster.de</a></p>
      <p><strong class="impr">Umsatzsteuer-ID: </strong> <br>Umsatzsteuer-Identifikationsnummer gemäß §27a Umsatzsteuergesetz: Musterustid.<br><br><strong>Wirtschafts-ID: </strong><br>Musterwirtschaftsid<br></p>
      <p><strong class="impr">Aufsichtsbehörde:</strong><br>Musteraufsicht Musterstadt<br></p>
      <p><strong class="impr">Haftungsausschluss: </strong class="impr"><br><br><strong class="impr">Haftung für Inhalte</strong><br><br>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br><br><strong class="impr">Haftung für Links</strong><br><br>
      Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.<br><br><strong class="impr">Urheberrecht</strong><br><br>
      Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
    </div>
  
     
    <!-- contact -->
    <a href="#open" class="open2" id="open">
      <span><img src="images/env.png" alt="Kontakt" width="64" height="64"></span>
    </a>

    <div class="contact">
      <form action="mailto:rosen@domain.tld" class="col-25 form">
        <a href="#" class="close2">
          <span>close X</span>
        </a>
        <h2>Kontakt</h2>
        <div>
          <label for="vname">Vorname</label>
          <input type="text" name="vname" id="vname">
        </div>
        <div>
          <label for="name">Nachname</label>
          <input type="text" name="name" value="" id="name">
        </div>
        <div class="required">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="rosen@domain.tld">
        </div>
        <div>
          <p id="label">Hinterlassen Sie einen Kommentar</p>
          <!-- mehrzeiliges Texteingabefeld-->
          <textarea name="message"  cols="30" rows="5" aria-labelledby="label"></textarea>
        </div>
        <input type="submit" value="senden">
      </form>
    </div>'
    ?>
     
  </div>
</body>
</html>