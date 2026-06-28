  <script src="js/lordicon.js"></script>
     <div class="social-list social-list-bottom boxed" style="display:block">
        <div class="contact-item">
          <div class="icon-email popupbox"><a href="mailto:kuvymk@gmail.com">
            <lord-icon src="https://cdn.lordicon.com/ehfubvwr.json" trigger="hover" colors="primary:#949494,secondary:#949494" style="width:40px;height:40px;"></lord-icon></a></div>
        </div> </div>	 
		
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