<?php include 'includes/doc.php';?>

<?php include 'includes/banner.php';?>

<div id="wrapper">

<?php include 'includes/nav.php';?>

<div id="address">
<h2>We'd love to hear from you</h2>

<h3>We are located at:</h3>
<p>5456 Leary Ave NW</p>
<p>Seattle, WA 98107</p>
<p>(206) 781-9204</p>

<h3>Location Hours:</h3>
<p>Monday - Thursday</p>
<p>7am - 4pm</p>
</div><!--end address-->

<div id="form">
<form action="formhandler.php" method="post" id="form">
<fieldset>
<label>Name</label>
<input type="text" name="name" id="name">

<label>Phone</label>
<input type="number" name="phone" id="phone">

<label>Email</label>
<input type="email" name="email" id="email">

<label>Comment</label>
<textarea rows="4" id="textarea">
</textarea>

<input type="submit" name="submit" id="submit">
</fieldset>
</form>
</div><!--end form-->

<div id="social">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d671.7076573506625!2d-122.38405099999999!3d47.668286599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015c672cc9e4b%3A0xa41edf6c88c4bb1b!2s5465+Leary+Ave+NW%2C+Seattle%2C+WA+98107!5e0!3m2!1sen!2sus!4v1417726507254" width="400" height="300" frameborder="0" style="border:0"></iframe>

<a class="lefticon" href="https://www.facebook.com/jonathan.su.37"><img src="images/facebook.png" alt="facebook"></a>
<a class="righticon" href="https://plus.google.com/"><img src="images/google.png" alt="google plus"></a>

</div><!--end social-->

</div><!--end wrapper-->

<?php include 'includes/footer.php';?>

</body>


</html>
