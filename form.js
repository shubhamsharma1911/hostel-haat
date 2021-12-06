 $("#seeAnotherFieldGroup").change(function() {
    if ($(this).val() == "one") {
      $('#otherFieldGroupDiv1').show();
      $('#otherFieldGroupDiv2').hide();
      $('#otherFieldGroupDiv3').hide();
      $('#otherFieldGroupDiv4').hide();
      $('#otherField1').attr('required', '');
      $('#otherField1').attr('data-error', 'This field is required.');
      $('#otherField2').attr('required', '');
      $('#otherField2').attr('data-error', 'This field is required.');
    } else if ($(this).val() == "two"){
      $('#otherFieldGroupDiv1').show();
      $('#otherFieldGroupDiv2').show();
      $('#otherFieldGroupDiv3').hide();
      $('#otherFieldGroupDiv4').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } else if ($(this).val() == "three"){
      $('#otherFieldGroupDiv1').show();
      $('#otherFieldGroupDiv2').show();
      $('#otherFieldGroupDiv3').show();
      $('#otherFieldGroupDiv4').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } else  {
      $('#otherFieldGroupDiv1').show();
      $('#otherFieldGroupDiv2').show();
      $('#otherFieldGroupDiv3').show();
      $('#otherFieldGroupDiv4').show();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } 
  });
  $("#seeAnotherFieldGroup").trigger("change");

  