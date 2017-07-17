<?php get_header(); ?>

          <div class="container">
<?php
//Display the header
//Display the page content/body
if ( have_posts() ) while ( have_posts() )
{
the_post();?>
<h2><?php the_title(); ?></h2>
<?php
the_content();
}
?>
          </div>

          <div class="mastfoot">
            <div class="inner">
            </div>
          </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>
$(document).ready(function(){
    $('.play').click(function(){
     var cdbaby = "http://widget.cdbaby.com/" + this.dataset.widget + "/mini/light/opaque";
  }); 
});
</script>
  </body>
</html>

