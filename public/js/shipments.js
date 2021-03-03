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

    $.ajax({
      url: base_path + "clientes/" + customer_id + "/json",
      dataType: 'json',
      method: 'GET',
      success: (r) => {
        $('#new_shipment_label').html("Nuevo despacho para " + r.name);
        $('#h3_customer').html("<h3>Cliente: " + r.name + "</h3>");
      }
    });
    
  });

  $('body').on('change', '#input_search_driver', function() {
    const driver_id = $('#input_search_driver').val();
    $.ajax({
      url: base_path + "choferes/" + driver_id + "/json",
      dataType: 'json',
      method: 'GET',
      success: (r) => {
        $('#h3_driver').html("<h3>Chofer: " + r.name + "</h3>");
        $('#vehicle_plate').val(r.vehicle_plate);
      }
    });
  });

  




});

//######### otras funciones #######################################################

