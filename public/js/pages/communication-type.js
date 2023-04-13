var csrfToken = $('meta[name="csrf-token"]').attr('content');

new TomSelect('#forsearch')



function fetch() {
    var color = document.getElementById("color").value;
    document.getElementById("put").value = color;
}

function fetch_update() {
    var colorupdate = document.getElementById("update-color").value;
    document.getElementById("put2").value = colorupdate;
}

function create(){
    var type = $('#type').val()
    var color = $('#color').val()
    $.ajax({
        type:'POST',
        url:'/store-communication-type',
        data:{
            _token:csrfToken,
            type:type,
            color:color
        },
        
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New Type!',
                icon: 'success'
            })
            $('#type').val('')
            $('#color').val('')

            $('#btn-close-modal').click()
            location.reload()
        },
        error:function(response){
            var errors = response.responseJSON.errors;
            var errorMessage = '';

            $.each(errors, function(key, value) {
                errorMessage += '<p class="text-red-500">' + value + '</p>';
            });

            Swal.fire({
                title: 'Error!',
                html: errorMessage,
                // html: response.responseJSON.message,
                icon: 'error',
            })
        }
    })
}

function edit(id){
    var name = $('#btn-edit-'+id).data('name')
    var color = $('#btn-edit-'+id).data('color')
    $('#update-name').val(name)
    $('#update-color').val(color)
    $('#update-id').val(id)
    $('#btn-update-modal').click()
}

function update(){
    var name = $('#update-name').val()
    var color = $('#update-color').val()
    var id = $('#update-id').val()
    $.ajax({
        type:'PUT',
        url:'/update-communication-type/'+id,
        data:{
            _token:csrfToken,
            type:name,
            color:color,
        },
        success: function(response){
            Swal.fire({
                title: 'Success!',
                text: 'Success Update Data!',
                icon: 'success',
                timer: 4000
            })
            $('#update-name').val('')
            $('#update-color').val('')
            $('#update-id').val('')
            $('#btn-close-modal').click()
            location.reload()


        },
        error:function(response){
            var errors = response.responseJSON.errors;
            var errorMessage = '';

            $.each(errors, function(key, value) {
                errorMessage += '<p class="text-red-500">' + value + '</p>';
            });

            Swal.fire({
                title: 'Error!',
                // html: errorMessage,
                html: response.responseJSON.message,
                icon: 'error',
            })
        }
    })
}

function removemodal(id) {
    var name = $(this).data('name')
    $('#communication-name').html(name)
    $('#delete-id').val(id)
    $('#btn-delete-modal').click()
}

function remove() {
    var id = $('#delete-id').val()
    $.ajax({
      url: '/delete-communication-type/' +id,
      method: 'DELETE',
      data:{
        _token:csrfToken
      },
      success:function(response){
        Swal.fire({
            title: 'success!',
            text: 'Success Delete Data!',
            icon: 'success'
        })

        $('#btn-close-modal').click()
        location.reload()
    },
    error:function(response){
        var errors = response.responseJSON.errors;
        var errorMessage = '';

        $.each(errors, function(key, value) {
            errorMessage += '<p class="text-red-500">' + value + '</p>';
        });

        Swal.fire({
            title: 'Error!',
            // html: errorMessage,
            html: response.responseJSON.message,
            icon: 'error',
        })

    }
    });
  }
  