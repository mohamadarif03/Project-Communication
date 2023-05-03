var csrfToken = $('meta[name="csrf-token"]').attr('content');



GetData(1)
var current_page = 1
function GetData(page){
    var search = $('#search').val()
    console.log(search)
    $.ajax({
        type:'GET',
        url:'/data-role-paginate?page='+page,
        data:{
            search:search
        },
        success:function(response){
            console.log(response)
            var html = '<table class="min-w-full text-left text-sm font-light">'+
                            '<thead class="border-b font-medium ">'+
                                '<tr>'+
                                    '<th scope="col" class="px-6 py-4">#</th>'+
                                    '<th scope="col" class="px-6 py-4">Name</th>'+
                                    '<th scope="col" class="px-6 py-4">Action</th>'+     
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="Data">'+
                            '</tbody>'+
                        '</table>'
            $('#table').html(html)
            if(response.data.data.length > 0){
                $.each(response.data.data,function(index,data){
                    var row = '<tr class="border-b border-dashed ">'+
                                '<td class="whitespace-nowrap px-6 py-4 font-medium">'+(response.pagination.from+index)+'</td>'+ 
                                '<td class="whitespace-nowrap px-6 py-4" style="color: rgb(24, 24, 24); font-weight: 400;">'+data.name+'</td>'+ 
                                '<td class="whitespace-nowrap px-6 py-4 flex" style="color: rgb(24, 24, 24); font-weight: 400;">'+ 
                                '<button onclick="edit('+data.id+')" id="btn-edit-'+data.id+'" data-name="'+data.name+'">'+ 
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>'+ 
                                '</button>'+ 
                                '<button onclick="removeModal('+data.id+')" id="btn-delete-'+data.id+'" class="btn-delete" data-name="'+data.name+'">'+ 
                                    '<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" style="margin-left: 30px;" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+ 
                                        '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>'+ 
                                        '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>'+ 
                                    '</svg>'+ 
                                '</button>'+                                    
                                '</td>'+                                  
                            '</tr>'
                    $('#Data').append(row)
                })
                $('#paginate').html(response.links);
                current_page = response.pagination.current_page
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   '<img '+src+' class="w-[20%] mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no role found !</p>'
                $('#table').append(row)
                $('#paginate').html('');

            }
            
        }
    })
}

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
            $('#name').val('')
            $('#btn-close-add').click()
            GetData(1)
        },
        error:function(response){
            var errors = response.responseJSON.errors;
            var errorMessage = '';

            $.each(errors, function(key, value) {
                errorMessage += '<p class="text-red-500">' + value + '</p>';
            });

            Swal.fire({
                title: 'Gagal!',
                html: response.responseJSON.message,
                icon: 'error',
            })
        }
    })
}

function removeModal(id){
    var name = $('#btn-delete-'+id).data('name')
    $('#roles-name').html(name)
    $('#delete-id').val(id)
    $('#btn-delete-modal').click()
}

function edit(id){
    var name = $('#btn-edit-'+id).data('name')
    $('#update-name').val(name)
    $('#update-id').val(id)
    $('#btn-update-modal').click()
}

function update(){
    var name = $('#update-name').val()
    var id = $('#update-id').val()
    $.ajax({
        type:'PUT',
        url:'/update-role/'+id,
        data:{
            _token:csrfToken,
            name:name
        },
        success: function(response){
            Swal.fire({
                title: 'Success!',
                text: 'Success Update Role!',
                icon: 'success',
                timer: 4000
            })
            $('#update-name').val('')
            $('#update-id').val('')
            $('#btn-close-update').click()
            GetData(current_page)
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

function remove(){ 
    var id = $('#delete-id').val()
    console.log(id)
    $.ajax({
        type:'DELETE',
        url:'/delete-role/'+id,
        data:{
            _token:csrfToken
        },
        success: function(response){
            Swal.fire({
                title: 'Success!',
                text: 'Success Delete Role!',
                icon: 'success',
                timer: 4000
            })
            $('#btn-close-delete').click()
            GetData(1)
        },
        error: function(response){
            Swal.fire({
                title: 'Error!',
                text: JSON.parse(response.responseText).error,
                icon: 'error'
            })
        }
    })
}

