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
            <h1 class="cover-heading writer">Home</h1>
            <p class="lead">Cover is a one-page template for building
simple and beautiful home pages. Download, edit the text, and add your
own fullscreen background photo to make it your ownCover is a one-page template for building
simple and beautiful home pages. Download, edit the text, and add your
own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
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
   $("#home").addClass('active');
});
</script>
