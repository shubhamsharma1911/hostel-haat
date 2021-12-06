$("#seeAnotherFieldGroup").change(function() {
    if ($(this).val() == "" || $(this).val() == "1_one" || $(this).val() == "2_one" || $(this).val() == "3_one" 
    || $(this).val() == "5_one" || $(this).val() == "7_one" || $(this).val() == "9_one" 
    || $(this).val() == "10_one" || $(this).val() == "11_one" || $(this).val() == "12_one"
    ) {
      $('#otherFieldGroupDiv1').show();
      $('#otherFieldGroupDiv2').hide();
      $('#otherFieldGroupDiv3').hide();
      $('#otherFieldGroupDiv4').hide();
      $('#otherFieldGroupDiv5').hide();
      $('#otherFieldGroupDiv6').hide();
      $('#otherFieldGroupDiv7').hide();
      $('#otherFieldGroupDiv8').hide();
      $('#otherFieldGroupDiv9').hide();
      $('#otherFieldGroupDiv10').hide();
     
     
      $('#otherField1').attr('required', '');
      $('#otherField1').attr('data-error', 'This field is required.');
      $('#otherField2').attr('required', '');
      $('#otherField2').attr('data-error', 'This field is required.');
    } else if ($(this).val() == "2_two"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').hide();
        $('#otherFieldGroupDiv4').hide();
        $('#otherFieldGroupDiv5').hide();
        $('#otherFieldGroupDiv6').hide();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } else if ($(this).val() == "4_three" || $(this).val() == "6_three" || $(this).val() == "8_three"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').hide();
        $('#otherFieldGroupDiv5').hide();
        $('#otherFieldGroupDiv6').hide();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    }  else if ($(this).val() == "4_four" || $(this).val() == "6_four" || $(this).val() == "8_four"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').hide();
        $('#otherFieldGroupDiv6').hide();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ( $(this).val() == "4_five" || $(this).val() == "6_five" || $(this).val() == "8_five"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').hide();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ($(this).val() == "4_six" || $(this).val() == "6_six" || $(this).val() == "8_six"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').show();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ( $(this).val() == "6_seven" || $(this).val() == "8_seven"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').show();
        $('#otherFieldGroupDiv7').show();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ($(this).val() == "6_eight" || $(this).val() == "8_eight"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').show();
        $('#otherFieldGroupDiv7').show();
        $('#otherFieldGroupDiv8').show();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ($(this).val() == "6_nine" || $(this).val() == "8_nine"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').show();
        $('#otherFieldGroupDiv7').show();
        $('#otherFieldGroupDiv8').show();
        $('#otherFieldGroupDiv9').show();
        $('#otherFieldGroupDiv10').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
      else if ($(this).val() == "6_ten" || $(this).val() == "8_ten"){
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').show();
        $('#otherFieldGroupDiv3').show();
        $('#otherFieldGroupDiv4').show();
        $('#otherFieldGroupDiv5').show();
        $('#otherFieldGroupDiv6').show();
        $('#otherFieldGroupDiv7').show();
        $('#otherFieldGroupDiv8').show();
        $('#otherFieldGroupDiv9').show();
        $('#otherFieldGroupDiv10').show();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
      }
    else  {
        $('#otherFieldGroupDiv1').show();
        $('#otherFieldGroupDiv2').hide();
        $('#otherFieldGroupDiv3').hide();
        $('#otherFieldGroupDiv4').hide();
        $('#otherFieldGroupDiv5').hide();
        $('#otherFieldGroupDiv6').hide();
        $('#otherFieldGroupDiv7').hide();
        $('#otherFieldGroupDiv8').hide();
        $('#otherFieldGroupDiv9').hide();
        $('#otherFieldGroupDiv10').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherField2').removeAttr('required');
      $('#otherField2').removeAttr('data-error');
    } 
  });
  $("#seeAnotherFieldGroup").trigger("change");
  $('#test').change(function(){
    $("#seeAnotherFieldGroup")[0].selectedIndex = '1_one' ;
    //$('#seeAnotherFieldGroup').prop('selected', function() {
    //    return this.defaultSelected;
   // });
})