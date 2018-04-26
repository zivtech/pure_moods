/**
 * @file
 */

(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.pureMoodsLectureForm = {
    attach: function (context) {

      // Simple 1 cardinality select2.
      $('#edit-field-category, #edit-field-building-name, .country.form-select', context).select2({ width: '100%' });

      // Make big radio buttons work.
      $('.big-radio input', context).change(function() {
        setRadioStates(context);
      });
      setRadioStates(context);

      function setRadioStates(context) {
        $('label:has(input:radio:checked)', context).addClass('active');
        $('label:has(input:radio:not(:checked))', context).removeClass('active');
      }
    },
  };

})(jQuery, Drupal);
