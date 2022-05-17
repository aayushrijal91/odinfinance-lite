AOS.init({ duration: 1000 });

document.querySelectorAll('a[href="#about"],a[href="#services"],a[href="#lenders"],a[href="#testimonials"],a[href="#faqs"],a[href="#form"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

$(() => {
  $(".accordion-head").on('click', function () {
    if ($('.accordion-body').is(':visible')) {
      $(".accordion-body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion-body").is(':visible')) {
      $(this).next(".accordion-body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion-body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
  AOS.refresh();
  
  $(".banner").slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3300,
  });

  AOS.refresh();

  $(".our-deals").slick({
    slidesToShow: 1,
    arrows: false,
    dots: true,
  })

  $("#view_socials").on('click', function(e){
    e.preventDefault();

    $(".socials").slideToggle('show');
  })

  AOS.refresh();

  var $slider = $('.service-slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $('.slider__label');

  $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc);

    $progressBarLabel.text(calc + '% completed');
  });

  $slider.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: $("#prevArrow"),
    nextArrow: $("#nextArrow"),
    responsive: [
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 3,
        }
      },{
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $(".vertical-divider").height($("section.services").height());

  AOS.refresh();

  $(".lenders-slider").slick({
    slidesToShow: 2,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  })

  AOS.refresh();

  $(".testimonial-slider").slick({
    slidesToShow: 3,
    arrows: false,
    dots: true,
    autoplay: true,
    
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  AOS.refresh();

  $('.testimonials .accordion .tabs').on('click', function (e) {
    e.preventDefault();
    $('.testimonials .accordion .tabs').removeClass('active');
    $(this).addClass('active');
  })
})

$(window).on('scroll', () => {
  if ($(this).scrollTop() >= 600) {
    $('#return-to-top').fadeIn(300);
  } else {
    $('#return-to-top').fadeOut(300);
  }
});

$('#return-to-top').on('click', () => {
  $('body,html').animate({
    scrollTop: 0
  }, 500);
});

function countup(el, target) {
  let data = { count: 0 };
  anime({
    targets: data,
    count: [0, target],
    duration: 2000,
    round: 1,
    delay: 200,
    easing: 'easeOutCubic',
    update() {
      el.innerText = data.count.toLocaleString();
    }
  });
}

function makeCountup(el) {
  const text = el.textContent;
  const target = parseInt(text, 10);

  const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        countup(el, target);
        io.unobserve(entry.target);
      }
    });
  });

  io.observe(el);
}

const els = document.querySelectorAll('[data-countup]');

els.forEach(makeCountup);

$(".toggle_overlay_sm").on('click', function (e) {
  e.preventDefault();

  $(this).parents('.service-content').find('.overlay').toggleClass('toggle-overlay');
});

$(".lender-company").mouseover(function(e){
  e.preventDefault();

  $(this).parents('.lenders').find('.lenders-eftpos .lenders-eftpos-client').removeClass().addClass('lenders-eftpos-client');
  $(this).parents('.lenders').find('.lenders-eftpos .lenders-eftpos-client').addClass($(this).attr("dname"));
})

$(".lender-company").mouseout(function(e){
  e.preventDefault();

  $(this).parents('.lenders').find('.lenders-eftpos .lenders-eftpos-client').removeClass().addClass('lenders-eftpos-client');
})

$(window).on('resize', function(e){
  e.preventDefault();

  AOS.refresh();
});

$(".video_option").on('click', function(e){
  e.preventDefault();
  let vname = $(this).attr('vname');
  
  if(vname == 'online-presence') {
    $(this).parents('.learning').find("#learning-laptop-sm video").remove();
    $(this).parents('.learning').find("#learning-laptop video").remove();
    $(this).parents('.learning').find("#learning-text-sm").removeClass('h5-upper').addClass('h4');
    $(this).parents('.learning').find("#learning-text-lg").removeClass('h5-upper').addClass('h4');
    $(this).parents('.learning').find("#learning-text-sm").html('How having an <span class="text-primary">Online Presence</span> affects your Loan');
    $(this).parents('.learning').find("#learning-text-lg").html('How having an <span class="text-primary">Online Presence</span> affects your Loan');
    $(this).parents('.learning').find("#learning-laptop-sm").append('<video poster="./assets/images/lib/online-presence-thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/online-presence.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
    $(this).parents('.learning').find("#learning-laptop").append('<video poster="./assets/images/lib/online-presence-thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/online-presence.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
  }
  else if(vname == 'paying-gst') {
    $(this).parents('.learning').find("#learning-laptop-sm video").remove();
    $(this).parents('.learning').find("#learning-laptop video").remove();
    $(this).parents('.learning').find("#learning-text-sm").removeClass('h4').addClass('h5-upper');
    $(this).parents('.learning').find("#learning-text-lg").removeClass('h4').addClass('h5-upper');
    $(this).parents('.learning').find("#learning-text-sm").html('How paying your <span class="text-primary">GST and Tax on time</span> benefits your Loan Application');
    $(this).parents('.learning').find("#learning-text-lg").html('How paying your <span class="text-primary">GST and Tax on time</span> benefits your Loan Application');
    $(this).parents('.learning').find("#learning-laptop-sm").append('<video poster="./assets/images/lib/video_thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/paying-gst.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
    $(this).parents('.learning').find("#learning-laptop").append('<video poster="./assets/images/lib/video_thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/paying-gst.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
  }
  else if(vname == 'offering-deposit') {
    $(this).parents('.learning').find("#learning-laptop-sm video").remove();
    $(this).parents('.learning').find("#learning-laptop video").remove();
    $(this).parents('.learning').find("#learning-text-sm").removeClass('h4').addClass('h5-upper');
    $(this).parents('.learning').find("#learning-text-lg").removeClass('h4').addClass('h5-upper');
    $(this).parents('.learning').find("#learning-text-sm").html('How <span class="text-primary">offering a deposit</span> in a Loan Application improves your chances');
    $(this).parents('.learning').find("#learning-text-lg").html('How <span class="text-primary">offering a deposit</span> in a Loan Application improves your chances');
    $(this).parents('.learning').find("#learning-laptop-sm").append('<video poster="./assets/images/lib/video_thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/offering-deposit.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
    $(this).parents('.learning').find("#learning-laptop").append('<video poster="./assets/images/lib/video_thumbnail.png" controls><source src="https://www.odinassetfinance.com.au/assets/video/offering-deposit.mp4" type="video/mp4">Your browser does not support HTML video.</video>');
  }
});