
var csrfToken = $('meta[name="csrf-token"]').attr('content');

new TomSelect('#to',{
    plugins: ['remove_button'],
}) 
new TomSelect('#to2',{
    plugins: ['remove_button'],
}) 

function fetch() {
    var color = document.getElementById("color").value;
    document.getElementById("put").value = color;
}

function fetch_update() {
    var colorupdate = document.getElementById("update-color").value;
    document.getElementById("put2").value = colorupdate;
}



GetData()
function GetData(){
    $.ajax({
        type:'GET',
        url:'/data-communication-type-standart',
        success:function(response){
            var html = '<table class="min-w-full text-left text-sm font-light">'+
                            '<thead class="border-b font-medium ">'+
                                '<tr>'+
                                    '<th scope="col" class="px-6 py-4">#</th>'+
                                    '<th scope="col" class="px-6 py-4">Name</th>'+
                                    '<th scope="col" class="px-6 py-4">Color</th>'+        
                                    '<th scope="col" class="px-6 py-4">Action</th>'+     
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="Data">'+
                            '</tbody>'+
                        '</table>'
            $('#table').html(html)
            if(response.length > 0){
                $.each(response,function(index,data){
                    var row = '<tr class="border-b border-dashed ">'+
                                '<td class="whitespace-nowrap px-6 py-4 font-medium">'+(index+1)+'</td>'+ 
                                '<td class="whitespace-nowrap px-6 py-4" style="color: rgb(24, 24, 24); font-weight: 400;">'+data.type+'</td>'+ 
                                '<td class="whitespace-nowrap px-6 py-4">'+
                                '<div class="rounded-circle w-8 h-8"'+
                                'style=" background-color:'+data.color+'"></div>'+
                        '</td>'+ 
                                '<td class="whitespace-nowrap px-6 py-4 flex" style="color: rgb(24, 24, 24); font-weight: 400;">'+ 
                                '<button onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-description="'+data.description+'">'+ 
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">'+
  '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>'+
  '<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>'+
'</svg>'+
                                '</button>'+ 
                                '<button onclick="edit('+data.id+')" id="btn-edit-'+data.id+'" data-name="'+data.type+'" data-color="'+data.color+'" data-description="'+data.description+'">'+ 
                                    '<svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 30px;" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>'+ 
                                '</button>'+ 
                                '<button onclick="removeModal('+data.id+')" id="btn-delete-'+data.id+'" class="btn-delete" data-name="'+data.type+'" data-color="'+data.color+'" data-description="'+data.description+'">'+ 
                                    '<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" style="margin-left: 30px;" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+ 
                                        '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>'+ 
                                        '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>'+ 
                                    '</svg>'+ 
                                '</button>'+                                  
                                '</td>'+                                  
                            '</tr>'
                    $('#Data').append(row)
                })
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   '<img '+src+' class="w-1/4 mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no role found !</p>'
                $('#table').append(row)
            }
            
        }
    })
}



function create(){
    var type = $('#type').val()
    var color = $('#color').val()
    var description = $('#description').val()
    $.ajax({
        type:'POST',
        url:'/store-communication-type-standart',
        data:{
            _token:csrfToken,
            type:type,
            color:color,
            description:description
        },
        
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New Role!',
                icon: 'success'
            })
            $('#type').val('')
            $('#color').val('')
            $('#description').val('')
            $('#btn-close-modal').click()
            GetData()
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

function edit(id){
    var name = $('#btn-edit-'+id).data('name')
    var color = $('#btn-edit-'+id).data('color')
    var description = $('#btn-edit-'+id).data('description')
    $('#update-name').val(name)
    $('#update-color').val(color)
    $('#update-description').val(description)
    $('#update-id').val(id)
    $('#btn-update-modal').click()
}
function show(id){
    var description = $('#btn-show-'+id).data('description')
    $('#update-description').val(description)
    $('#update-id').val(id)
    $('#btn-show-modal').click()
}

function update(){
    var name = $('#update-name').val()
    var color = $('#update-color').val()
    var description = $('#update-description').val()
    var id = $('#update-id').val()
    $.ajax({
        type:'PUT',
        url:'/updastandart/'+id,
        data:{
            _token:csrfToken,
            type:name,
            color:color,
            description:description,
        },
        success: function(response){
            Swal.fire({
                title: 'Success!',
                text: 'Success Update Role!',
                icon: 'success',
                timer: 4000
            })
            $('#update-name').val('')
            $('#update-color').val('')
            $('#update-description').val('')
            $('#update-id').val('')
            $('#btn-close-update').click()
            GetData()
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

function removeModal(id) {
    var type = $('#btn-delete-'+id).data('type')
    $('#responbilities-type').html(type)
    $('#delete-id').val(id)
    $('#btn-delete-modal').click()
}


function remove() {
    var id = $('#delete-id').val()
    $.ajax({
      url: '/delestandart/' +id,
      method: 'DELETE',
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
        GetData()
    },
    error: function(response){
        Swal.fire({
            title: 'Error!',
            text: JSON.parse(response.responseText).error,
            icon: 'error'
        })
    }
    });
  }
  