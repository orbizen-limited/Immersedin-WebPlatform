<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__));
    exit('Direct script access denied.'); 
}
?>

<div class="dark-transparent sidebartoggler"></div>
  <script src="/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="/assets/js/theme/app.dark.init.js"></script>
  <script src="/assets/js/theme/theme.js"></script>
  <script src="/assets/js/theme/app.min.js"></script>
  <script src="/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>

  <!-- highlight.js (code view) -->
  <script src="/assets/js/highlights/highlight.min.js"></script>
  <script>
  hljs.initHighlightingOnLoad();


  document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
    codeBlock.textContent = codeBlock.innerHTML;
  });
</script>
  <script src="/assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="/assets/js/apps/invoice.js"></script>
  <script src="/assets/js/apps/jquery.PrintArea.js"></script>
</body>

</html>