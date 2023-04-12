var csrfToken = $('meta[name="csrf-token"]').attr('content');


new TomSelect('#role',{
    plugins: ['remove_button'],
})

$('.btn-delete').click(function(){
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){
    $('#btn-update-modal').click()
})


function create(){
    var name = $('#name').val()
    var email = $('#email').val()
    var password = $('#password').val()
    var role = $('#role').val()
    var password_confirmation = $('#password_confirmation').val()
    $.ajax({
        type:'POST',
        url:'/store-user',
        data:{
            _token:csrfToken,
            name:name,
            email:email,
            password:password,
            role:role,
            password_confirmation:password_confirmation
        },
        
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New User!',
                icon: 'success'
            })
            $('#name').val('')
            $('#email').val('')
            $('#password').val('')
            $('#role').val('')

            $('#btn-close-modal').click()
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

$(document).ready(function() {
    $.ajax({
        url: "{{ route('users') }}", // URL untuk memanggil fungsi getData di Controller
        type: "GET",
        dataType: "json",
        success: function(data) {
            var html = '';
            $.each(data, function(key, value) {
                html += '<div class="my-auto">';
                html += '<h1 class="text-md font-semibold">'+ value.name +'</h1>';
                html += '<h3 class="text-sm">'+ value.email+ '</h3>';
                html += '</div>';
            });
            $('#get-data-users').html(html); // Masukkan data ke dalam tabel
        }
    });
});


