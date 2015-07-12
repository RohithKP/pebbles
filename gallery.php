<?php
if(isset($_GET['rel']))
{
if($_GET['rel']!='menu'){
	include 'header.php';
	echo "<div id='content'>";
}
}else{
	include 'header.php';
	echo "<div id='content'>";
}
?>
<div class="inner cover">
<h1 class="cover-heading writer">Gallery</h1>
<div class="row hovergallery" >
<div class="col-lg-3 col-md-3 col-sm-3 "><img src="img/coconut.jpg" class="img-responsive" /></div>
<div class="col-lg-3 col-md-3 col-sm-3 "><img src="img/sunbreakthrough.jpg" class="img-responsive" /></div>
<div class="col-lg-3 col-md-3 col-sm-3 "><img src="img/desert.jpg" class="img-responsive" /></div>
<div class="col-lg-3 col-md-3 col-sm-3 "><img src="img/sunflower.jpg" class="img-responsive"  /></div>
<div class="col-lg-3 col-md-3 col-sm-3 "><img src="img/duck.jpg" class="img-responsive"  /></div>
</div>
</div>
<?php
if(isset($_GET['rel']))
{
if($_GET['rel']!='menu'){
	echo "</div>";
	include 'footer.php';
}
}
else{
	echo "</div>";
	include 'footer.php';
}
?>
<script type="text/javascript">
$(document).ready(function(){
   $(".masthead-nav a").removeClass('active');
   $("#gallery").addClass('active');
});
</script>
