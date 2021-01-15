jQuery(function ($) {

  // Reference to body data
  var baseDir = $("body").attr("data-base-dir");

  var scroll = new SmoothScroll('a[href*="#"]');
  function createText() {
    var wrapper = $(".beeta-bg");
    var i = 0;
    while (i < 15) {
      wrapper.append(
        '<svg class="beetasvg-' +
          i +
          '" viewBox="0 0 501 60"> <path class="st0" d="M16.04 56L1.14 2.8h11.02l10.18 39.44L33.44 2.8h8.97l11.17 39.44L63.76 2.8h11.02L59.89 56H47.96L37.92 20.89 27.97 56H16.04zM84.13 40.03c1.32 4.76 4.89 7.14 10.72 7.14 3.75 0 6.59-1.27 8.51-3.8l7.9 4.56c-3.75 5.42-9.27 8.13-16.57 8.13-6.28 0-11.32-1.9-15.12-5.7-3.8-3.8-5.7-8.59-5.7-14.36 0-5.73 1.87-10.5 5.62-14.33 3.75-3.82 8.56-5.74 14.44-5.74 5.57 0 10.17 1.93 13.79 5.78 3.62 3.85 5.43 8.61 5.43 14.29 0 1.27-.13 2.61-.38 4.03H84.13zm-.15-7.6h19.38c-.56-2.58-1.71-4.51-3.46-5.78-1.75-1.27-3.74-1.9-5.97-1.9-2.63 0-4.81.67-6.54 2.01-1.71 1.35-2.85 3.24-3.41 5.67zM173.66 56l-3.19-9.58h-21.2l-3.2 9.58h-11.32l18.62-53.2h13l18.7 53.2h-11.41zm-21.05-19.38h14.59l-7.3-21.74-7.29 21.74zM199.58 24.54c.91-2.43 2.42-4.26 4.52-5.47 2.1-1.22 4.45-1.82 7.03-1.82v10.94c-2.99-.35-5.66.25-8.02 1.82-2.36 1.57-3.53 4.18-3.53 7.83V56h-9.8V18h9.8v6.54zM223.67 40.03c1.32 4.76 4.89 7.14 10.72 7.14 3.75 0 6.59-1.27 8.51-3.8l7.9 4.56c-3.75 5.42-9.27 8.13-16.57 8.13-6.28 0-11.32-1.9-15.12-5.7-3.8-3.8-5.7-8.59-5.7-14.36 0-5.73 1.87-10.5 5.62-14.33 3.75-3.82 8.56-5.74 14.44-5.74 5.57 0 10.17 1.93 13.79 5.78 3.62 3.85 5.43 8.61 5.43 14.29 0 1.27-.13 2.61-.38 4.03h-28.64zm-.16-7.6h19.38c-.56-2.58-1.71-4.51-3.46-5.78-1.75-1.27-3.74-1.9-5.97-1.9-2.63 0-4.81.67-6.54 2.01-1.71 1.35-2.85 3.24-3.41 5.67zM311.14 28.41c4.66 2.69 6.99 6.74 6.99 12.16 0 4.51-1.6 8.21-4.79 11.1S306.23 56 301.57 56H279V2.8h20.98c4.56 0 8.4 1.41 11.51 4.22 3.12 2.81 4.67 6.4 4.67 10.75 0 4.41-1.67 7.96-5.02 10.64zM299.97 12.6h-10.49v11.7h10.49c1.62 0 2.98-.56 4.07-1.67 1.09-1.11 1.63-2.51 1.63-4.18s-.53-3.06-1.6-4.18c-1.06-1.11-2.43-1.67-4.1-1.67zm1.6 33.6c1.77 0 3.24-.59 4.41-1.79 1.17-1.19 1.75-2.7 1.75-4.52 0-1.77-.58-3.25-1.75-4.45-1.17-1.19-2.63-1.79-4.41-1.79h-12.08V46.2h12.08zM333.41 40.03c1.32 4.76 4.89 7.14 10.72 7.14 3.75 0 6.59-1.27 8.51-3.8l7.9 4.56c-3.75 5.42-9.27 8.13-16.57 8.13-6.28 0-11.32-1.9-15.12-5.7-3.8-3.8-5.7-8.59-5.7-14.36 0-5.73 1.87-10.5 5.62-14.33 3.75-3.82 8.56-5.74 14.44-5.74 5.57 0 10.17 1.93 13.79 5.78 3.62 3.85 5.43 8.61 5.43 14.29 0 1.27-.13 2.61-.38 4.03h-28.64zm-.15-7.6h19.38c-.56-2.58-1.71-4.51-3.46-5.78-1.75-1.27-3.74-1.9-5.97-1.9-2.64 0-4.81.67-6.54 2.01-1.72 1.35-2.86 3.24-3.41 5.67zM377.26 40.03c1.32 4.76 4.89 7.14 10.72 7.14 3.75 0 6.59-1.27 8.51-3.8l7.9 4.56c-3.75 5.42-9.27 8.13-16.57 8.13-6.28 0-11.32-1.9-15.12-5.7-3.8-3.8-5.7-7.59-5.7-13.36 0-5.73 1.87-11.5 5.62-15.33 3.75-3.82 8.56-5.74 14.44-5.74 5.57 0 10.17 1.93 13.79 5.78 3.62 3.85 5.43 9.61 5.43 15.29 0 1.27-.13 1.61-.38 3.03h-28.64zm-.15-7.6h19.38c-.56-2.58-1.71-4.51-3.46-5.78-1.75-1.27-3.74-1.9-5.97-1.9-2.64 0-4.81.67-6.54 2.01-1.71 1.35-2.85 3.24-3.41 5.67zM433.73 27.42h-8.59v15.81c0 1.32.33 2.28.99 2.89.66.61 1.62.95 2.89 1.03 1.27.08 2.84.06 4.71-.04V56c-6.74.76-11.49.13-14.25-1.9s-4.14-5.65-4.14-10.87V27.42h-6.61V18h6.61v-7.68l9.8-2.96V18h8.59v9.42zM468.38 17h9.8v38h-9.8v-4.48c-2.94 3.7-7.07 5.55-12.39 5.55-5.07 0-9.41-1.94-13.03-5.81-3.62-3.88-5.43-8.63-5.43-14.25s1.81-10.37 5.43-14.25c3.62-3.88 7.97-5.81 13.03-5.81 5.32 0 9.45 1.85 12.39 5.55V17zM450.3 43.71c1.98 2 4.48 3 7.52 3s5.56-1 7.56-3 3-4.57 3-7.71c0-3.14-1-5.71-3-7.71s-4.52-3-7.56-3-5.55 1-7.52 3c-1.98 2-2.96 4.57-2.96 7.71-.01 3.14.98 5.71 2.96 7.71zM497.34 54.09c-1.27 1.27-2.79 1.9-4.56 1.9s-3.29-.63-4.56-1.9c-1.27-1.27-1.9-2.79-1.9-4.56 0-1.77.63-3.29 1.9-4.56 1.27-1.27 2.79-1.9 4.56-1.9s3.29.63 4.56 1.9c1.27 1.27 1.9 2.79 1.9 4.56 0 1.77-.63 3.29-1.9 4.56z"/> </svg>'
      );
      i++;
    }
  }

  createText();

  var controller = new ScrollMagic.Controller();

  // Lottie icons animation
  if ($(".core-motto-beyond").length) {
    $(".core-motto-beyond").each(function () {
      lottie.loadAnimation({
        container: this,
        path:
          baseDir +"/wp-content/themes/beeta/assets/images/animated/beyond_icon.json",
        renderer: "svg",
        loop: true,
        autoplay: true,
      });
    });
    $(".core-motto-build").each(function () {
      lottie.loadAnimation({
        container: this,
        path: baseDir +"/wp-content/themes/beeta/assets/images/animated/build_icon.json",
        renderer: "svg",
        loop: true,
        autoplay: true,
      });
    });
    $(".core-motto-brand").each(function () {
      lottie.loadAnimation({
        container: this,
        path: baseDir +"/wp-content/themes/beeta/assets/images/animated/brand_icon.json",
        renderer: "svg",
        loop: true,
        autoplay: true,
      });
    });
  }

  if ($("#joined-icons").length) {
    lottie.loadAnimation({
      container: document.getElementById("joined-icons"),
      path: baseDir +"/wp-content/themes/beeta/assets/images/animated/joinedicons.json",
      renderer: "svg",
      loop: true,
      autoplay: true,
    });
  }

  if ($(".animated-holder").length) {
    $(".animated-holder").each(function (i) {
      lottie.loadAnimation({
        container: this,
        path:
          baseDir +"/wp-content/themes/beeta/assets/images/animated/animated" +
          (i + 1) +
          ".json",
        renderer: "svg",
        loop: true,
        autoplay: true,
      });
    });
  }
  $(".work-carousel").slick({
    slidesToShow: 1,
    infinite: false,
    lazyLoad: "ondemand",
    arrows: true,
  });

  $(".review-slider").slick({
    slidesToShow: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 7000,
  });
  setTimeout(function () {
    TweenMax.to($(".custom-slick"), 1, { opacity: 1 });
  }, 500);
  var content =
    "A specialist software solutions business based in the hive of Manchester, the tech capital of the North.";
  var ele = "<span>" + content.split("").join("</span><span>") + "</span>";
  $(ele).appendTo(".typer");
  $(".typer span").each(function () {
    $(this).css({
      opacity: 0,
    });
  });
  var maxHeight = -1;
  $(".rolling-posts .slick-slide").each(function () {
    if ($(this).height() > maxHeight) {
      maxHeight = $(this).height();
    }
  });
  $(".rolling-posts .slick-slide").each(function () {
    if ($(this).height() < maxHeight) {
      $(this).css(
        "margin",
        Math.ceil((maxHeight - $(this).height()) / 2) + "px 0"
      );
    }
  });

  if ($(window).width() > 767) {
    $(".rolling-posts").slick({
      slidesToShow: 3,
      vertical: true,
      arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 3500,
      pauseOnFocus: false,
    });
  }

  if ($("#front-logo").length) {
    new Vivus("front-logo", {
      duration: 150,
      pathTimingFunction: Vivus.EASE_OUT,
      start: "manual",
      selfDestroy: true,
      onReady: function () {
        $("#front-logo-wrapper").addClass("ready");
      },
    }).play(function () {
      var delayTime = 35;
      $("#front-logo-wrapper").addClass("done");
      $(".typer span").each(function (i) {
        $(this)
          .delay(delayTime * i)
          .animate(
            {
              opacity: 1,
            },
            100
          );
      });
      setTimeout(function () {
        $(".header-text p").addClass("rotate-header");
      }, 103 * delayTime + 550);
      setTimeout(function () {
        $(".beeta-bg").fadeIn(1500);
      }, 103 * delayTime + 1100);
    });
  }

  // Nav animation

  const navTrigger = $(".custom-navbar .menu"),
    base = $(".custom-navbar"),
    nav = $(".beeta-nav");
  navTrigger.on("click", function () {
    if (!base.hasClass("nav-open")) {
      TweenMax.to($(this), 0.5, {
        boxShadow: "0 0 0 100vw #0b0b0b, 0 0 0 100vh #0b0b0b",
        borderRadius: "0",
        ease: Circ.easeIn,
        onComplete: function () {
          setTimeout(function () {
            base.addClass("nav-open");
            nav.addClass("nav-open");
          }, 800);
        },
      });
    } else {
      TweenMax.to($(this), 0.5, {
        boxShadow: "0 0 0 0 #0b0b0b, 0 0 0 0 #0b0b0b",
        borderRadius: "50%",
        ease: Circ.easeIn,
        onComplete: function () {
          base.removeClass("nav-open");
          nav.removeClass("nav-open");
        },
      });
    }
  });
  // Home Page Animation

  var pHeight = [];
  var mHeight;
  $(".front-what-wrapper li").each(function () {
    $(this).on("click", function () {
      $(".front-what-wrapper li").removeClass("feature-active");
      $(this).addClass("feature-active");

      var tabNumber = $(this).attr("data-tab");

      TweenMax.to(".front-what-wrapper p", 0.75, {
        y: -50,
        display: "none",
        opacity: 0,
        onComplete: function () {
          TweenMax.to(".what-tab-wrapper #what" + tabNumber, 0.75, {
            y: 0,
            display: "block",
            opacity: 1,
            delay: 0.25,
          });
        },
      });
    });
  });

  $(".front-what-wrapper p").each(function () {
    pHeight.push($(this).height());
  });
  mHeight = Math.max.apply(Math, pHeight);

  $(".what-tab-wrapper").css("min-height", mHeight);

  new ScrollMagic.Scene({
    triggerElement: "#front-what",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineLite()
        .staggerFrom("#front-what ul li", 1, { opacity: 0, y: 50 }, 0.5)
        .from("#front-what .col-md-7", 1, { opacity: 0 })
    )
    .addTo(controller);
  var tweenTop = TweenMax.staggerFromTo(
    $("#brand-core .col-md-4"),
    1,
    { opacity: 0, y: 50 },
    { opacity: 1, y: 0 },
    1
  );

  new ScrollMagic.Scene({
    triggerElement: "#bee-log",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineLite().staggerFrom(
        $(".bee-log-container .col-12"),
        1,
        { opacity: 0, y: 50 },
        0.5
      )
    )
    .addTo(controller);

  // What we do Animation

  const wedoTl = new TimelineMax();
  
  wedoTl.from($(".what-intro-wrapper #joined-icons"), 0.65, {
    opacity: 0,
    y: 50,
    delay: 1,
  });
  wedoTl.staggerFrom($('.what-intro-wrapper-content p'), 0.65, {
    opacity:0,
    y:50,
  },0.5)

  const wedoBrand = new TimelineMax();
  wedoBrand.staggerFrom($('#brand-core').find('.col-4'),0.65,{
    opacity:0,
    y:50
  },0.5);
  new ScrollMagic.Scene({
    triggerElement: '#brand-core',
    triggerHook: 0.8,
  })
    .setTween(wedoBrand)
    .reverse(false)
    .addTo(controller);

  $(".feature-wrapper").each(function() {
    const currentFeature = this;
    const tweenFeature = new TimelineLite()
    .from($(this).find('.motto-icon'), 1, {
      opacity:0,
      x:120
    })
    .from($(this).find('.motto-title'), 1, {
      opacity:0,
      x:-50
    })
    .from($(this).find('.motto-separator'), 0.65, {
      scale:0,
      delay:-1
    })
    .staggerFrom($(this).find('.motto-img'),1, {
      x:-50,
      opacity:0,
    },0.35)
    .staggerFrom($(this).find('.motto-copy'),1, {
      y:50,
      opacity:0,
    },0.35,'-=1.35')

    new ScrollMagic.Scene({
      triggerElement: currentFeature,
      triggerHook: 0.8,
    })
      .setTween(tweenFeature)
      .reverse(false)
      .addTo(controller);
  })

  // Single Case Study Animation

  $(".single-motto-stage").each(function () {
    var currentFeature = this;
    var tweenRight = new TimelineLite()
      .from($(this).find(".col-md-6 .what-brand-single"), 0.65, {
        opacity: 0,
        y: 50,
      })
      .from($(this).find(".step-line"), 0.5, {
        scale: 0,
      })
      .from($(this).find(".single-motto-feature .col-9"), 0.65, {
        opacity: 0,
        x: 50,
      })
      .from($(this).find(".hidden-dot .step-horizontal-line-right"), 0.65, {
        scaleX: 0,
        transformOrigin: "right",
      })
      .from($(this).find(".hidden-dot .step-horizontal-line"), 0.65, {
        scaleX: 0,
        transformOrigin: "left",
      })
      .from($(this).find(".single-motto-feature .d-md-flex"), 0.65, {
        opacity: 0,
        x: -50,
      });

    new ScrollMagic.Scene({
      triggerElement: currentFeature,
      triggerHook: 0.8,
    })
      .setTween(tweenRight)
      .reverse(false)
      .addTo(controller);
  });

  // Who We Are Animations

  TweenMax.from($("#who-intro-section h1"), 1, { opacity: 0, x: 50 });
  new TimelineLite()
    .from($("#who-motto .shift-image"), 0.5, {
      y: 50,
    })
    .from($("#who-motto .col-md-6"), 1, { opacity: 0, x: 50 });

  new ScrollMagic.Scene({
    triggerElement: "#who-challenge",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineLite()
        .from($("#who-challenge .col-md-4"), 1, { opacity: 0, x: -50 })
        .staggerFrom($(".challenge-image"), 1, { opacity: 0 }, 0.5)
    )
    .addTo(controller);

  $(".roster-section").each(function () {
    new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.7,
    })
      .reverse(false)
      .setTween(
        new TimelineLite()
          .from($(this).find(".col-md-7"), 1, { opacity: 0, x: -50 })
          .staggerFrom(
            $(this).find(".client-roster img"),
            1,
            { opacity: 0 },
            0.15
          )
      )
      .addTo(controller);
  });

  new ScrollMagic.Scene({
    triggerElement: "#front-wedo",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineLite()
        .staggerFrom(
          $(".wedo-single"),
          1,
          {
            opacity: 0,
            y: 50,
          },
          0.5
        )
        .from($("#front-wedo .crounded-wrapper"), 1, {
          opacity: 0,
          y: 50,
        })
    )
    .addTo(controller);

  $(".remember").on("dblclick", function () {
    $(this)
      .find("p")
      .fadeIn(500, function () {
        setTimeout(function () {
          $(".remember p").fadeOut(500);
        }, 3000);
      });
  });

  //Blog Animation

  new TimelineMax()
    .staggerFrom($("#blog-categories ul li"), 1, { opacity: 0, y: 50 }, 0.3)
    .from($("#blog-main-container .col-md-6:first-child"), 1, {
      opacity: 0,
      x: -50,
    })
    .from($("#blog-main-container .col-md-6:nth-child(2)"), 1, {
      opacity: 0,
      x: 50,
    })
    .from($("#more-posts"), 1, { opacity: 0, y: 50 });
  // Contact Animation

  new ScrollMagic.Scene({
    triggerElement: "#contact-info",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineMax()
        .from($("#contact-info h1"), 1, { opacity: 0, y: 50 })
        .staggerFrom(
          $("#contact-info form .col-md-5 input"),
          1,
          { opacity: 0, y: 50 },
          0.4
        )
        .from($("#contact-info form textarea"), 1, { opacity: 0, y: 50 }, 0.4)
        .from($("#contact-info .col-sm-12 input"), 1, { opacity: 0, y: 50 })
    )
    .addTo(controller);

  // Careers Animation
  $(".career-single").each(function () {
    var currentCareer = this;
    var tweenCareer = new TimelineLite()
      .from($(this).find(".career-icon"), 0.5, {
        opacity: 0,
        y: 50,
      })
      .from($(this).find("h1"), 0.5, { opacity: 0, x: 50 })
      .from($(this).find("h2"), 0.5, { opacity: 0, x: 50 }, "-=0.5")
      .from($(this).find(".col-12 .career-copy"), 0.5, {
        opacity: 0,
        y: 50,
      })
      .from(
        $(this).find(".col-md-5 .career-copy"),
        0.5,
        {
          opacity: 0,
          x: -50,
        },
        "-=0.5"
      )
      .from($(this).find(".col-md-6 .career-image-wrapper"), 0.5, {
        opacity: 0,
        x: 50,
      });

    new ScrollMagic.Scene({
      triggerElement: currentCareer,
      triggerHook: 0.8,
    })
      .setTween(tweenCareer)
      .reverse(false)
      .addTo(controller);
  });

  new ScrollMagic.Scene({
    triggerElement: "#roles-section",
    triggerHook: 0.7,
  })
    .reverse(false)
    .setTween(
      new TimelineLite().staggerFrom(
        $(".role-container .col-md-6"),
        1,
        {
          opacity: 0,
          y: 50,
        },
        0.5
      )
    )
    .addTo(controller);


  // Career Job Desc Animations
  new TimelineLite()
  .from($('#jobdesc-header').find("h1"), 0.5, { opacity: 0, x: 50 })

  .from($('#jobdesc-header').find(".job-intro"), 0.5, {
    opacity: 0,
    y: 50,
  })
  .from($('#jobdesc-header').find(".job-f"), 0.5, {
    opacity: 0,
    y: 50,
  })
  .from(
    $('#jobdesc-header').find(".svg-wrapper"),
    0.5,
    {
      opacity: 0,
      x: 150,
    },
  )

  $('.career-single-content').each(function () {
    var currentSingle = this;
    var tweenCareerContent = new TimelineLite()
    .from($(this).find("h2"), 0.5, {
      opacity: 0,
      x: 50,
    })
    
    .from($(this).find('li'), 0.5, {
      y:55,
      opacity:0,
      stagger:0.15
    })
    .from($(this).find(".svg-wrapper"), 0.5, {
      opacity: 0,
        x: 150,
    })

    new ScrollMagic.Scene({
      triggerElement: currentSingle,
      triggerHook: 0.8,
    })
    .setTween(tweenCareerContent)
    .reverse(false)
    .addTo(controller);
  })
});
