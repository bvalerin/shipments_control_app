$(function() {
    
  $('body').on('change', '#input_search_customer', function() {
    const customer_id = $('#input_search_customer').val();
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

