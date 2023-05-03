

var csrfToken = $('meta[name="csrf-token"]').attr('content');
GetRole()
GetData(1)
var update_role = new TomSelect('#update-role')
function GetRole(){
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'">'+data.name+'</option>'
                $('#role').append(row)
                $('#search').append(row)
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

function GetData(page){
    var search = $('#search').val()
    $.ajax({
        type:'GET',
        url:'/data-user?page='+page,
        data:{
            search:search
        },
        success:function(response){
            $('#Data').html('')
            if(response.data.data.length > 0){
               
                $.each(response.data.data,function(index,data){
                    if(data.profile == 'default.jpg'){
                        var src = 'src="../default.jpg"'
                    }else{                 
                        var src = 'src="../storage/'+data.profile+'"'
                    }
                    var role = ''
                    $.each(data.userrole,function(index,item){
                        role += '<div class="rounded-md inline-block m-1 px-1 py-0 mt-1" style="background-color: #D9D9D9;">'+item.role.name+'</div>'
                    })
                    var row = '<div class="col-span-1 w-full h-full px-2 py-2 pb-1 mt-1 rounded-md bg-white">'+
                                '<div class="h-8 p-2 items-center relative w-full flex">'+
                                    '<button onclick="showdropdown('+index+')" class="ml-auto h-5 w-5 rounded-circle bg-transparent"'+
                                        'aria-expanded="false">'+
                                        '<svg class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24"'+
                                            'viewBox="0 96 960 960" width="48">'+
                                            '<path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z" />'+
                                        '</svg>'+
                                    '</button>'+
                                    '<ul id="dropdownlist-'+index+'" class="absolute dropdown-edit z-[1000] top-3 right-9 border-2 m-0 hidden min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg">'+
                                        '<li>'+
                                            '<button id="btn-edit-'+data.id+'" data-name="'+data.name+'" data-email="'+data.email+'" data-role="'+data.role+'" onclick="edit('+data.id+')" class=" flex items-center" data-name="'+data.name+'" data-email="'+data.email+'" data-role="'+data.userrole+'" onclick="edit('+data.id+')" >'+
                                                '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16"'+
                                                    'fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                    '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />'+
                                                '</svg>'+
                                                '<p class="my-auto">Edit</p>'+
                                            '</button>'+
                                        '</li>'+
                                        '<li>'+
                                            '<button class="btn-delete flex items-center" onclick="removeModal('+data.id+')">'+
                                                '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16"'+
                                                    'fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />'+
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />'+
                                                '</svg>'+
                                                '<p class="my-auto">Delete</p>'+
                                            '</button>'+
                                        '</li>'+
                                    '</ul>'+
                               '</div>'+
                                '<div class="h-16 flex p-2 pt-0 items-center w-full ">'+
                                    '<div class="h-12 flex w-12 overflow-hidden rounded-circle">'+
                                        '<img class="w-12 h-12 rounded-circle" '+src+' alt="">'+
                                    '</div>'+
                                    '<div class="ml-2 flex my-auto" id="get-data-users">'+
                                        '<div class="my-auto">'+
                                            '<h1 class="text-sm my-0 font-semibold">'+data.name+'</h1>'+
                                            '<h3 class="text-sm my-0">'+data.email+'</h3>'+
                                        '</div>'+
                                    '</div>'+
                                    '</div>'+
                                    role+
                            '</div>'
                    $('#Data').append(row)
                })
                $('#paginate').html(response.links);
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   
                '<div class="col-span-3 flex flex-col mt-6 items-center justify-center">'+
                '<img '+src+' class="w-[20%] mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no user found !</p>'+
                '</div'
                $('#paginate').html(row);

            }
        },
        error:function(response){
            console.log(response)
        }
    })
}

function showdropdown(index){
    $('.dropdown-edit').each(function() {
        if (!$(this).hasClass('hidden')  && $(this).attr('id') !== ('dropdownlist-' + index)) {
          $(this).addClass('hidden');
        }
    });
    $('#dropdownlist-'+index).toggleClass('hidden');
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
            password_confirmation:password_confirmation,
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New User!',
                icon: 'success'
            }).then(function() {
                location.reload();
            });
            $('#name').val('')
            $('#email').val('')
            $('#password').val('')
            $('#role').val('')
            $('#password_confirmation').val('')
            $('#btn-close-create').click()
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
    role = role.toString()
    if (role.includes(',')){
        var role_arr = role.split(',')
    }else{
        var role_arr =  []
        role_arr[1] = role
    }
    $('#update-role').html('')
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            update_role.destroy()
            $.each(response,function(index,data){
                var selected = ''
                console.log(data)
                console.log(role_arr)
                if(Array.isArray(role_arr)){
                    if(role_arr.includes(String(data.id))){
                        selected = 'selected'
                    }
                }else{
                    if(role_arr == data.id){
                        selected = 'selected'
                    }
                }
                console.log(role_arr == data.id)
                var row = '<option '+ selected +' value="'+data.id+'">'+data.name+'<option>'
                $('#update-role').append(row)
            })
            new TomSelect('#update-role')
            const remove = $('#update-role-form').find('.ts-wrapper:not(:first)');
                remove.remove();
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
                icon: 'success',
            })
            GetData(1)
            $('#btn-close-update').click()
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
            })
            GetData(1)
            $('#btn-close-delete').click()     
        },
        error:function(response){
            Swal.fire({
                title: 'error!',
                text: 'fail to delete user!',
                // html: errorMessage,
                // html: response.responseJSON.message,
                icon: 'error'
            })
        }
    })
}



