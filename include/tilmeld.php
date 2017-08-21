
    <div class="container">

<!-- Her oprettes en præ-designet contact form  -->
<!-- Domænet hvorpå den skal sende mail fra skrives i action -->

<form class="well form-horizontal" action="www.j-wiberg.dk/events.php" method="post"  id="contact_form" accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; 
        document.charset = 'ISO-8859-1'; 
        window.onbeforeunload = function () {document.charset=originalCharset;};">
<fieldset>


<legend id="scrollto1">Tilmelding til event</legend>
<p>Tilmeldingen foregår ved at udfylde den nedenstående formular,<br> hvor du herefter får en mail om bekræftelse.<br><span style="font-weight:bold"> Pris: 35 kr.</span> - der kan betales med kontant eller mobilepay<br> Du kan også tilmelde dig på:<span style="font-weight:bold"> 41857829</span> </p>


<!-- Hvert felt i contact form bliver wrapped i en form-group -->
<div class="form-group"> 
<!-- control-label på vores label gør at vi kan validate de indtastede svar -->
  <label class="col-md-4 control-label">Event*</label>
    <div class="col-md-4 selectContainer">
<!-- Her oprettes input til valg af event. input-group gør at vi kan få et ikon før input. -->      
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="eventpick" class="form-control selectpicker" id="eventpick" >
      <!-- Hver option får en value vi skal bruge i JS -->
      <option value="" >Vælg venligst event</option>
      <option value="A">Vi leger med mad</option>
      <option value="B">Madlavning uden alder</option>
      <option value="C">Madmekka</option>
      <option value="D">Kollegie pop-up</option>
      

   
    </select>
  </div>
  </div>
    
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Fornavn</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="Fornavn" class="form-control"  type="text">
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Efternavn</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Efternavn" class="form-control"  type="text">
    </div>
  </div>
</div>


       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="recipient" placeholder="E-Mail adresse" class="form-control"  type="text">
  <input type="hidden" name="recipient" value="joachimpw@gmail.com" />
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label">Telefon </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="Telefonnummer" class="form-control" type="text">
    </div>
  </div>
</div>


  


  
<div class="form-group">
  <label class="col-md-4 control-label">Kommentar</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Eventuel kommentar"></textarea>
  </div>
  </div>
</div>



<!-- Knap -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" value="Send" name="submit">Tilmeld <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Tak for din tilmelding, du får nu en bekræftelse med videre informationer på mail</div>

</fieldset>
</form>
</div>




<!-- Kommenteret -->