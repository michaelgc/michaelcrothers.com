<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Just For Fun</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="../formalize/css/formalize.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="../formalize/js/jquery.formalize.min.js"></script>
</head>

<body>
<div id="wrapper" class="wrapper">
  <div id="header_container" class="header-container">
    <header>
      <h1 id="site_name" class="site-name">Just For Fun</h1>
    </header>
  </div>
  <div id="content_container" class="content-container">
    <div id="slideshow_container" class="slideshow-container">
      <div id="slideshow" class="slideshow">
        <div><img src="images/slideshow-images/1.png" alt="1" /></div>
        <div><img src="images/slideshow-images/2.png" alt="2" /></div>
      </div>
    </div>
    <article id="welcome" class="content">
      <header>
        <h2>Welcome to Just For Fun</h2>
      </header>
      <section>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis neque, commodo eget interdum quis, tristique at eros. Sed et ante justo. Integer mi nisi, feugiat nec semper sit amet, scelerisque lobortis massa. Sed sit amet sollicitudin libero. Vivamus volutpat auctor dui, sed fermentum sapien dignissim in. Suspendisse viverra quam sit amet nisl feugiat semper. Morbi hendrerit nisi eu eros tempor vitae consectetur mi auctor. Sed convallis sagittis massa sit amet suscipit.</p>
        <p>Morbi faucibus nunc elit, ac semper lorem. Integer condimentum scelerisque ligula, sit amet tincidunt libero pellentesque at. Phasellus non enim eu ligula dignissim iaculis. Fusce erat quam, tempus et convallis et, laoreet id diam. Pellentesque turpis elit, scelerisque ac ultrices sit amet, gravida tempor sapien. Suspendisse sagittis magna id nunc molestie egestas. Nunc quis arcu non dolor elementum auctor. Sed id eros quam. Nunc pharetra mollis ipsum, quis pharetra libero venenatis ac. Vestibulum et erat eget lectus commodo ornare. In hac habitasse platea dictumst. Fusce dapibus rutrum dui consectetur lacinia. Ut sit amet lectus sed lacus molestie semper. Sed lacinia, dolor quis ultrices lobortis, eros tortor sollicitudin metus, ut cursus ligula risus sit amet ante.</p>
      </section>
      <footer>
        <p>Praesent cursus ultrices lectus sed malesuada. Praesent nulla mauris, blandit vel ultrices sit amet, blandit id orci. Vestibulum eu adipiscing urna. Maecenas pulvinar nibh quis purus adipiscing consequat. Maecenas viverra risus sit amet sem accumsan blandit. Quisque tincidunt, eros vitae bibendum dignissim, dolor ante interdum metus, in aliquam mauris est sed magna. Maecenas lobortis egestas massa sit amet ullamcorper.</p>
      </footer>
    </article>
    <aside>
      <div id="enquiry_form_container" class="enquiry-form-container">
        <form id="enquiry_form" class="enquiry form">
        <h2>Contact Us</h2>
        <div id="message"></div>
          <label for="enquiry">Enquiry: </label>
          <textarea name="enquiry" id="enquiry" class="enquiry" required></textarea><br />
          <label for="firstname">First Name: </label>
          <input type="text" name="firstname" id="firstname" class="first-name" required /><br />
          <label for="lastname">Last Name: </label>
          <input type="text" name="lastname" id="lastname" class="last-name" />
          <input type="submit" name="submitenquiry" id="submitenquiry" class="submit button" value="Submit" />
        </form>
      </div>
    </aside>
  </div>
  <div id="push" class="push"></div>
</div>
<div id="footer_container" class="footer-container">
  <footer id="footer" class="footer">
    <p><a href="#">Site Use</a> | <a href="#">Security &amp; Privacy</a> | Just For Fun &copy; 2012. All Rights Reserved. 
  </footer>
</div>
<script src="scripts.js"></script>
</body>
</html>
