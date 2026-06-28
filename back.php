<script src="../js/lordicon.js"></script>
          <div class="icon-back popupbox">
            <a href="../projects.php">
 <lord-icon
  src="https://cdn.lordicon.com/zmkotitn.json"
  trigger="hover"
  colors="primary:#949494,secondary:#949494"
  style="width:40px;height:40px; transform: scaleX(-1);">
</lord-icon>
        </a></div>

            <!--img src="../images/icon-back.png" -->
			
			
			
  <script>
    $(function () {
      let scrollTimer;
      let idleTimer;
      let isVisible = false;
      const $popup = $(".popupbox");
      const $tab = $(".popup-tab");

      // Show popup: slide up + fade in
      function showPopup() {
        if (!isVisible) {
          $popup.stop(true, true).show().animate(
            { bottom: "20px", opacity: 1 },
            800, "swing"
          );
          $tab.hide();
          isVisible = true;
        }
      }

      // Hide popup: slide down + fade out
      function hidePopup(showTab = false) {
        if (isVisible) {
          $popup.stop(true, true).animate(
            { bottom: "-200px", opacity: 0 },
            800, "swing",
            function () {
              $popup.hide();
              if (showTab) {
                $tab.show();
              }
            }
          );
          isVisible = false;
        }
      }

      // Show immediately on page load
      showPopup();

      // Scroll → hide popup silently (no tab)
      $(window).on("scroll", function () {
        hidePopup(false);
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(showPopup, 800);
      });

      // Idle detection → show popup
      function resetIdleTimer() {
        clearTimeout(idleTimer);
        idleTimer = setTimeout(showPopup, 800);
      }
      $(document).on("mousemove keydown", resetIdleTimer);
      resetIdleTimer();

      // Click tab → show popup
      $tab.on("click", function () {
        showPopup();
      });
    });
  </script>  

