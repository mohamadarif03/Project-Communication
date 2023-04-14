var csrfToken = $('meta[name="csrf-token"]').attr('content');
load()
GetData()
GetRole()
function GetRole(){
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'">'+data.name+'</option>'
                $('#To').append(row)
                $('#search').append(row)
            })
            new TomSelect('#To',{
                plugins: ['remove_button'],
            })   
        },
        error:function(response){
            console.log(response)
        }
    })
}
function load(){
    var html = `<div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>`
    $('#Data').html(html)
}

function GetData(){
    $.ajax({
        type:'GET',
        url:'/data-rule',
        success:function(response){
            $('#Data').html('')
            if(response.length > 0){
                $.each(response,function(index,data){
                    var row = '<div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">'+
                            '<div class="h-8 p-2 items-center w-full flex" data-te-dropdown-ref>'+
                                '<button class="ml-auto h-5 w-5 rounded-circle bg-transparent" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">'+
                                    '<svg class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>'+
                                '</button>'+
                                '<ul class="absolute z-[1000] float-left border-2 m-0 hidden min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"'+
                                    'aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>'+
                                    '<li>'+
                                            '<button class="btn-edit flex items-center">'+
                                                '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                    '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                '</svg>'+
                                                '<p>Edit</p>'+
                                            '</button>'+       
                                        '</li>'+
                                        '<li>'+
                                            '<button class="btn-delete flex items-center">'+
                                                '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'+
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>'+
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>'+
                                                '</svg>'+
                                                '<p>Delete</p>'+
                                            '</button>'+
                                        '</li>'+
                                '</ul>'+           
                            '</div>'+
                            '<div class="h-16 flex p-2 pt-0 items-center w-full ">'+
                                '<div class="h-12 flex w-12 rounded-circle" style="background-color: '+data.communication_type.color+'">'+
                                    '<p class="text-white m-auto font-semibold">'+ getInitials(data.communication_type.type) +'</p>'+
                                '</div>'+
                                '<div class="ml-2 flex my-auto">'+
                                    '<div class="my-auto">'+
                                        '<h1 class="text-sm my-0 font-semibold">'+data.communication_type.type+'</h1>'+
                                        '<h3 class="text-xs text-slate-500 my-0">'+data.how+'</h3>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="h-8 w-full flex items-center">'+
                                '<i class="mdi mdi-account"></i>'+
                                '<p class=" ml-1.5 my-auto text-xs">head finance</p>'+
                                '<div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">'+
                                    'Show >'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    $('#Data').append(row)
                })
            }else{

            }
        },
        error:function(response){
            console.log(error)
        }
    })
}

function getInitials(name) {
    var words = name.split(' ');
    var initials = words.map(function(word) {
      return word.charAt(0);
    });
    return initials.join('');
}

new TomSelect('#communication_type_id')
new TomSelect('#type2')

new TomSelect('#To2',{
    plugins: ['remove_button'],
})

$('#btn-next').click(function(){
    $('#btn-close-modal1').click()
    $('#btn-open-modal-create1').click()
})

$('#btn-back').click(function(){
    $('#btn-create').click()
})
$('#btn-back-update').click(function(){
    $('#btn-update-modal').click()
})

$('.btn-edit').click(function(){
    $('#btn-update-modal').click()
})

$('#btn-next2').click(function(){
    $('#btn-close-modal2').click()
    $('#btn-open-modal-update1').click()
})

$('.btn-delete').click(function(){
    $('#btn-delete-modal').click()
})


function create(){
    var communication_type_id = $('#communication_type_id').val()
    var how = $('#how').val()
    var To = $('#To').val()
    $.ajax({
        type:'POST',
        url:'/store-rule',
        data:{
            _token:csrfToken,
            communication_type:communication_type_id,
            how:how,
            to:To
        },
        
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New Type!',
                icon: 'success'
            })
            $('#communication_type_id').val('')
            $('#how').val('')

            $('#btn-close-modal1').click()
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

function edit(id){

}

function update(){

}

function removeModal(){

}

function remove(id){

}