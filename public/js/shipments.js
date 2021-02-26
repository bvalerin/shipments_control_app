$(function() {

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $('body').on('click', '#input_search_customer', function() {
    $(this).val('');
  });
    
  $('body').on('change', '#input_search_customer', function() {
    const customer_id = $('#input_search_customer').val();

    "input[name='_token']"

    $.ajax({
      url: base_path + "clientes/" + customer_id + "/json",
      dataType: 'json',
      method: 'GET',
      success: (r) => {
        $('#new_shipment_label').html("Nuevo despacho para " + r.name);
      }
    });

  });



});

//######### otras funciones #######################################################

