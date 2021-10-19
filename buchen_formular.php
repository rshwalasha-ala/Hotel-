

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>HOTEL ROSEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="startseitehotel.css">
    <link rel="stylesheet" href="./css/buchen.css">
    <link rel="stylesheet" href="./css/deinst.css">

</heade>
<style>



</style>

   


<?php
echo'<form   onsubmit="return handleData()" action="ende_buchen.php" method="post">
    <div class="elem-group">
        <label for="name">First Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="John " pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
        <label for="name">Last Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="Doe" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
    </div>
    <div class="elem-group">
        <label for="phone"> Phone</label>
        <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
    </div>
    <hr>
    <div class="elem-group inlined">
        <label for="adult">Erwachsene</label>
        <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
    </div>
    <div class="elem-group inlined">
        <label for="child">Children</label>
        <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkin-date">Check-in Date</label>
        <input type="date" id="checkin-date" name="checkin" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkout-date">Check-out </label>
        <input type="date" id="checkout-date" name="checkout" required>
    </div>
    <div class="elem-group">
        <label for="room-selection">Wählen Sie die Zimmerpräferenz</label>
        <select id="room-selection" name="room_preference" required>
          <option value="">Wählen Sie einen Raum aus der Liste</option>
          <option value="connecting">Verbinden</option>
          <option value="adjoining">Angrenzend</option>
          <option value="adjacent">Angrenzend</option>
      </select>
      <hr>
     <p>Anzahl der Reservierungstage:</p> 
      <div style="visibility:hidden; color:red; " id="chk_option_error">
      Bitte wählen Sie mindestens eine Option aus.
      </div>
      <div>
      <input type="checkbox" name="langs[]" id="langs_javascript" value="JavaScript" checked> <label for="langs_javascript">WOCHE</label>
      </div>
      <div>
      <input type="checkbox" name="langs[]" id="langs_perl" value="Perl"  > <label for="langs_perl">TAG</label>
      </div>
      <div>
      <input type="checkbox" name="langs[]" id="langs_php" value="PHP" checked> <label for="langs_php">MONAT</label>
      </div>
      
      
      
      

    
 <br><hr>
 <div class="elem-group">
 
    <p for="room-selection"  required>ESSEN</p>
    <input class="acb" type="radio" name="acheckboxxxx[]" value="1" onclick="deRequire("acb")" required><strong class="radi">Frühstück</strong>
    <input class="acb" type="radio" name="acheckboxxxx[]" value="2" onclick="deRequire("acb")" required><strong>Mittagessen</strong>
    <input class="acb" type="radio" name="acheckboxxxx[]" value="2" onclick="deRequire("acb")" required><strong>Abendessen</strong>
   
</div>
  <hr>
    <div class="elem-group">
        <label for="message">Bitte beschreiben Sie Ihre Bedürfnisse</label>
        <textarea id="message" name="visitor_message" placeholder="Sagen Sie uns, was sonst noch wichtig sein könnte." required></textarea>
    </div>

   




    <button type="submit" name="submit" value="Submit">JETZT BUCHEN</button>
   
    
    <a  " class="back"  href="zimmerrufe.php" title="buchen">BACK</a>
   

</form>
<script>

function handleData()
{
    var form_data = new FormData(document.querySelector("form"));
    
    if(!form_data.has("langs[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }
    
}



</script>

<script>
    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);

    if (date < 10) {
        date = 0 + date;
    }
    if (month < 10) {
        month = 0 + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#checkin-date");
    var checkoutElem = document.querySelector("#checkout-date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function() {
        checkoutElem.setAttribute("min", this.value);
    }
</script>


<script>
function deRequireCb(elClass) {
    el=document.getElementsByClassName(elClass);

    var atLeastOneChecked=false;//at least one cb is checked
    for (i=0; i<el.length; i++) {
        if (el[i].checked === true) {
            atLeastOneChecked=true;
        }
    }

    if (atLeastOneChecked === true) {
        for (i=0; i<el.length; i++) {
            el[i].required = false;
        }
    } else {
        for (i=0; i<el.length; i++) {
            el[i].required = true;
        }
    }
}






</script>'
?>
</body>
</html>