var csrfToken = $('meta[name="csrf-token"]').attr('content');

$('.btn-delete').click(function(){
    var name = $(this).data('name')
    $('#roles-name').html(name)
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){ 
    var name = $(this).data('name')
    $('#update-name').val(name)
    $('#btn-update-modal').click()
})

function create(){
    var name = $('#name').val()
    $.ajax({
        type:'POST',
        url:'/store-role',
        data:{
            _token:csrfToken,
            name:name
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New Role!',
                icon: 'success'
            })
        },
        error:function(response){
            var errors = response.responseJSON.errors;
            var errorMessage = '';

            $.each(errors, function(key, value) {
                errorMessage += '<p class="text-red-500">' + value + '</p>';
            });

            Swal.fire({
                title: 'Gagal!',
                html: errorMessage,
                icon: 'error',
            })
        }
    })
}

