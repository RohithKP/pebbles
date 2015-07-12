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
            <h1 class="cover-heading writer">FAQ</h1>
<div id="faqdiv" class="">
    <ul>
    <li id="li-one" onclick="paragraph(this.id);">First question</li>
    <p id="li-one-para">
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
    </p>

    <li id="li-two" onclick="paragraph(this.id);">Second question</li>
    <p id="li-two-para">
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
    </p>

    <li id="li-third" onclick="paragraph(this.id);">Third question</li>
    <p id="li-third-para">
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
    </p>

    <li id="li-fourth" onclick="paragraph(this.id);">Forth question</li>
    <p id="li-fourth-para">
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
      This is just an example of Simple Accordion
    </p>
    </ul>
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
   $("#faq").addClass('active');
});
</script>
