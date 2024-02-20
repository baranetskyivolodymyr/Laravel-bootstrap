$(function () {
  'use strict';

  $(window).scroll(function () {
    var winScrollTop = $(this).scrollTop();

    $('.main__reviewTripsYears').each(function () {
      if (winScrollTop > $(this).offset().top) {
        $('.sticky-header').css('display', 'flex')
      } else {
        $('.sticky-header').css('display', 'none')
      }
    });
  });

});

  var footer = document.querySelector(".footer");
  var modal = document.querySelector(".modal");
  var trigger = document.querySelector(".trigger");
  var closeButton = document.querySelector(".close-button");

  function toggleModal() {
      modal.classList.toggle("show-modal");
  }

  function windowOnClick(event) {
      if (event.target === modal) {
          toggleModal();
      }
  }

  trigger.addEventListener("click", toggleModal);
  window.addEventListener("click", windowOnClick);
  closeButton.addEventListener("click", toggleModal);