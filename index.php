<!DOCTYPE html>
<html manifest="roffianos.manifest" type="text/cache-manifest">
<head>
  <title>ROFFianos</title>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <link rel="apple-touch-startup-image" href="splash.png" />
  <link rel="apple-touch-icon" href="roff.jpg"/>

  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/jquery.mobile-1.2.0.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/bookmark.js"></script>


  <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
  <link rel="stylesheet" href="css/new-icons.css" />
  <link rel="stylesheet" href="css/bookmark.css" />
</head>
<body>

<div data-role="page">

  <div data-role="header">
    <h1>Contactos</h1>
  </div><!-- /header -->

  <div data-role="content">

   <div class="content loading" align="center">
     A carregar contactos...
   </div>
   <div class="content-primary" style="display:none;">
      <ul data-role="listview" data-divider-theme="a" data-filter="true" data-filter-placeholder="Procurar Roffiano..." data-autodividers="true">
        <?php include('contacts.html'); ?>
      </ul>
      </div><!--/content-primary -->

  </div><!-- /content -->

</div><!-- /page -->
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'MO-37260702-1', 'auto');
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
</body>
</html>