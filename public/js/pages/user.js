var csrfToken = $('meta[name="csrf-token"]').attr('content');
GetRole()
function GetRole(){
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'">'+data.name+'</option>'
                $('#role').append(row)
            })
            new TomSelect('#role',{
                plugins: ['remove_button'],
            })   
        },
        error:function(response){
            console.log(response)
        }
    })
}

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
            }).then((result) => {
                if(result.isConfirmed){
                   location.reload()
                }
            })
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
    var email = $('#btn-edit-'+id).data('email')
    var role = $('#btn-edit-'+id).data('role')
    $('#update-role').html('')
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var selected = ''
                if(role.includes(data.id)){
                    selected = 'selected'
                }
                var row = '<option '+ selected +' value="'+data.id+'">'+data.name+'<option>'
                $('#update-role').append(row)
            })
            new TomSelect('#update-role',{
                plugins: ['remove_button'],
            })
        },
        error:function(response){
            console.log(response)
        }
    })
    $('#update-name').val(name)
    $('#update-email').val(email)
    $('#update-id').val(id)
    $('#btn-update-modal').click()
}

function update(){
    var id = $('#update-id').val()
    var name = $('#update-name').val()
    var email = $('#update-email').val()
    var password = $('#update-password').val()
    var password_confirmation = $('#update-password_confirmation').val()
    var role = $('#update-role').val()
    $.ajax({
        type:'PUT',
        url:'/update-user/'+id,
        data:{
            _token:csrfToken,
            name:name,
            email:email,
            password:password,
            password_confirmation:password_confirmation,
            role:role
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Update User!',
                icon: 'success'
            }).then((result) => {
                if(result.isConfirmed){
                    location.reload()
                }
            })
        },
        error:function(response){
            var errors = response.responseJSON.errors;
            var errorMessage = '';

            $.each(errors, function(key, value) {
                errorMessage += '<p class="text-red-500">' + value + '</p>';
            });

            Swal.fire({
                title: 'Error!',
                html:response.responseJSON.message,
                // html: response.responseJSON.message,
                icon: 'error',
            })
        }
    })
}

function removeModal(id){
    var name = $('#btn-edit-'+id).data('name')
    $('#delete-name').html(name)
    $('#delete-id').val(id)
    $('#btn-delete-modal').click()
}

function remove(){
    var id = $('#delete-id').val()
    $.ajax({
        type:'DELETE',
        url:'/delete-user/'+id,
        data:{
            _token:csrfToken
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Delete User!',
                icon: 'success'
            }).then((result) => {
                if(result.isConfirmed){
                    location.reload()
                }
            })      
        },
        error:function(response){
            Swal.fire({
                title: 'error!',
                text: 'fail to delete user!',
                icon: 'error'
            })
        }
    })
}



