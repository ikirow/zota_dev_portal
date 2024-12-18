(function ($) {
  "use strict";

  $(function () {
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length
            ? target
            : $("[name=" + this.hash.slice(1) + "]");
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $("html, body").animate(
              {
                scrollTop: target.offset().top - 70,
              },
              600,
              function () {}
            );
          }
        }
      });

    document.addEventListener(
      "wpcf7mailsent",
      function (event) {
        location = "/" + localize.lang + "/thank-you";
      },
      false
    );

    scrollSpy();
    $(window).resize(function () {
      scrollSpy();
    });
    function scrollSpy() {
      if (window.innerWidth > 991) {
        $.each($(".wp-block-group, .wp-block-cover"), function (e) {
          let el = this;
          let id = $(el).attr("id");
          if (id) {
            let target = $('a[href="/#' + id + '"]');
            if (target) {
              ScrollTrigger.create({
                trigger: this,
                start: "top +=90px",
                end: "bottom +=90px",
                toggleClass: { targets: target, className: "active" },
                //markers: true
              });
            }
          }
        });
      }
    }
  });

  //   toggleTocAccordion();
  // Convert TOC to an accordion on mobile

  //   function toggleTocAccordion() {
  //     if (window.innerWidth <= 991) {
  //       const tocList = jQuery(".kb-table-of-content-list").detach();
  //       tocList.appendTo("body").css({
  //         "max-height": 0,
  //         margin: 0,
  //         padding: 0,
  //       });

  //       jQuery(".kb-table-of-contents-title-wrap").click(function () {
  //         jQuery(".wp-block-kadence-tableofcontents").css("position", "fixed");
  //         const maxHeightValue =
  //           tocList.css("max-height") === "0px"
  //             ? tocList.prop("scrollHeight") + "px"
  //             : "0px";
  //         tocList.css("max-height", maxHeightValue);
  //         jQuery(".wp-block-kadence-tableofcontents").css("position", "relative");
  //       });
  //     } else {
  //       jQuery(".kb-table-of-content-list").css("max-height", "0");
  //     }
  //   }
  // Convert TOC to an accordion on mobile
  function toggleTocAccordion() {
    if (window.innerWidth <= 767) {
      jQuery(".kb-table-of-content-list").each(function () {
        var tocWrap = jQuery(this);
        tocWrap.css("max-height", 0);
        jQuery(".kb-table-of-contents-title-wrap").click(function () {
          var maxHeightValue =
            tocWrap.css("max-height") === "0px"
              ? tocWrap.prop("scrollHeight") + "px"
              : "0px";
          tocWrap.css("max-height", maxHeightValue);
          jQuery(this).toggleClass("active"); // Add or remove 'active' class on title-wrap
        });
      });
    } else {
      jQuery(".kb-table-of-content-list").css("max-height", "initial");
      jQuery(".kb-table-of-contents-title-wrap").click(function () {});
      jQuery(".kb-table-of-contents-title-wrap");
    }
  }

  toggleTocAccordion();

  //   jQuery(window).resize(toggleTocAccordion);
})(jQuery);
