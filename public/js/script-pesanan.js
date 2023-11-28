$('.editStatus').click(function () {
    var id = $(this).data('id');
  
    $.ajax({
        url: 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/getPesananByID?id=' + id,
        type: 'GET',
        success: function (res) {
            var data = res[0];
  
            $('#modalStatus').modal('show');
  
            $('#id').val(data._id);
            $('#status').val(data.status).toString();
            
  
        },
        error: function (err) {
            console.log(err);
        }
    });
  });