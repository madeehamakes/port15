(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.accordion = {
    attach: function (context, settings) {

      //Note use .svg-inline-fa because code uses svg for icons.



      // Add minus icon for collapse element which is open by default
      $(".collapse.show").each(function () {
        $(this).prev(".card-header").find(".icon").addClass("la-drupal").removeClass("la-github");

      });

      // Toggle plus minus icon on show hide of collapse element
      $(".collapse").on('show.bs.collapse', function () {
        $(this).prev(".card-header").find(".icon").removeClass("la-github").addClass("la-drupal");


      }).on('hide.bs.collapse', function () {
        $(this).prev(".card-header").find(".icon").removeClass("la-drupal").addClass("la-github");


      });







    }
  };

})(jQuery, Drupal);
