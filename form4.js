$("#test").change(function() {
    if ($(this).val() == 1) {
      $('#seeAnotherFieldGroup').show();
      $('#seeAnotherFieldGroup1').hide();
      $('#seeAnotherFieldGroup2').hide();
      $('#seeAnotherFieldGroup3').hide();
      $('#otherField1').attr('required', '');
      $('#otherField1').attr('data-error', 'This field is required.');
      $('#otherField2').attr('required', '');
      $('#otherField2').attr('data-error', 'This field is required.');
    } else if ($(this).val() == 2 ){
      $('#seeAnotherFieldGroup').hide();
      $('#seeAnotherFieldGroup1').show();
      $('#seeAnotherFieldGroup2').hide();
      $('#seeAnotherFieldGroup3').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } else if ($(this).val() == 3){
      $('#seeAnotherFieldGroup').hide();
      $('#seeAnotherFieldGroup1').hide();
      $('#seeAnotherFieldGroup2').show();
      $('#seeAnotherFieldGroup3').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } 
    else if ($(this).val() == 4) {
        $('#seeAnotherFieldGroup').show();
        $('#seeAnotherFieldGroup1').hide();
        $('#seeAnotherFieldGroup2').hide();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').attr('required', '');
        $('#otherField1').attr('data-error', 'This field is required.');
        $('#otherField2').attr('required', '');
        $('#otherField2').attr('data-error', 'This field is required.');
      } else if ($(this).val() == 5 ){
        $('#seeAnotherFieldGroup').hide();
        $('#seeAnotherFieldGroup1').show();
        $('#seeAnotherFieldGroup2').hide();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      } else if ($(this).val() == 6){
        $('#seeAnotherFieldGroup').hide();
        $('#seeAnotherFieldGroup1').hide();
        $('#seeAnotherFieldGroup2').show();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ($(this).val() == 7) {
        $('#seeAnotherFieldGroup').show();
        $('#seeAnotherFieldGroup1').hide();
        $('#seeAnotherFieldGroup2').hide();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').attr('required', '');
        $('#otherField1').attr('data-error', 'This field is required.');
        $('#otherField2').attr('required', '');
        $('#otherField2').attr('data-error', 'This field is required.');
      } else if ($(this).val() == 8 ){
        $('#seeAnotherFieldGroup').hide();
        $('#seeAnotherFieldGroup1').show();
        $('#seeAnotherFieldGroup2').hide();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      } else if ($(this).val() == 9){
        $('#seeAnotherFieldGroup').hide();
        $('#seeAnotherFieldGroup1').hide();
        $('#seeAnotherFieldGroup2').show();
        $('#seeAnotherFieldGroup3').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      } 
      else if ($(this).val() == 10) {
          $('#seeAnotherFieldGroup').show();
          $('#seeAnotherFieldGroup1').hide();
          $('#seeAnotherFieldGroup2').hide();
          $('#seeAnotherFieldGroup3').hide();
          $('#otherField1').attr('required', '');
          $('#otherField1').attr('data-error', 'This field is required.');
          $('#otherField2').attr('required', '');
          $('#otherField2').attr('data-error', 'This field is required.');
        } else if ($(this).val() == 11 ){
          $('#seeAnotherFieldGroup').hide();
          $('#seeAnotherFieldGroup1').show();
          $('#seeAnotherFieldGroup2').hide();
          $('#seeAnotherFieldGroup3').hide();
          $('#otherField1').removeAttr('required');
          $('#otherField1').removeAttr('data-error');
          $('#otherField2').removeAttr('required');
          $('#otherField2').removeAttr('data-error');
        } else if ($(this).val() == 12){
          $('#seeAnotherFieldGroup').hide();
          $('#seeAnotherFieldGroup1').hide();
          $('#seeAnotherFieldGroup2').show();
          $('#seeAnotherFieldGroup3').hide();
          $('#otherField1').removeAttr('required');
          $('#otherField1').removeAttr('data-error');
          $('#otherField2').removeAttr('required');
          $('#otherField2').removeAttr('data-error');
        }
    else  {
      $('#seeAnotherFieldGroup').show();
      $('#seeAnotherFieldGroup1').hide();
      $('#seeAnotherFieldGroup2').hide();
      $('#seeAnotherFieldGroup3').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } 
  });
  $("#test").trigger("change");

  