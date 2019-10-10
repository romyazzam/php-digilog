console.log('oke');
$(function() {

  $('.modalEditData').on('click', function(){

  const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/digilog/modalpanelinout1.php',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        // console.log(data);
        // $('#gambar').html(data.gambar);
        $('#panel').html(data.panel);
        $('#port').html(data.port);
      }
    });

  });

});
