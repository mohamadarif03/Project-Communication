var csrfToken = $('meta[name="csrf-token"]').attr('content');
function showdropdown(index){
    $('.dropdown-edit').each(function() {
        if (!$(this).hasClass('hidden')  && $(this).attr('id') !== ('dropdownlist-'+index)) {
          $(this).addClass('hidden');
        }
    });
    $('#dropdownlist-'+index).toggleClass('hidden');
}
GetData()
function GetData(){
    $.ajax({
        type:'GET',
        url:'/data-project',
        success:function(response){
            if(response.data.data.length > 0){
                $('#Data').html('')
                $.each(response.data.data,function(index,data){
                    if(data.status == 'done'){
                        var style = 'bg-green-200'
                        var style2 = 'border:border 2px green'
                    }else{
                        var style = 'bg-white'
                        var style2 = ''
                    }
                    var row =     '<div id="card-'+data.id+'" class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md '+style+'" style="'+style2+'">'+
                                    '<div class="h-8 p-2 items-center w-full relative flex">'+
                                        '<button onclick="showdropdown('+index+')" class="ml-auto h-5 w-5 rounded-circle bg-transparent">'+
                                            '<svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>'+
                                        '</button>'+
                                        '<ul id="dropdownlist-'+index+'" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >'+
                                                '<li>'+
                                                    '<button onclick="detail('+data.id+')" class="btn-edit flex items-center">'+
                                                        '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                            '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                        '</svg>'+
                                                        '<p class="my-auto">Detail</p>'+
                                                    '</button>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<button onclick="mark('+data.id+')" class="btn-edit flex items-center">'+
                                                        '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                            '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                        '</svg>'+
                                                        '<p class="my-auto">Mark as done</p>'+
                                                    '</button>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<button onclick="edit('+data.id+')" class="btn-edit flex items-center">'+
                                                        '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                            '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                        '</svg>'+
                                                        '<p class="my-auto">Edit</p>'+
                                                    '</button>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<button onclick="delete('+data.id+')" class="btn-edit flex items-center">'+
                                                        '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                            '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                        '</svg>'+
                                                        '<p class="my-auto">Delete</p>'+
                                                    '</button>'+
                                                '</li>'+
                                        '</ul>'+           
                                    '</div>'+
                                    '<div class="h-16 flex p-2 pt-0 items-center w-full ">'+
                                        '<div class="h-12 flex w-12 rounded-circle" style="background-color: red">'+
                                            '<p class="text-white m-auto font-semibold"> '+getInitials(data.name)+' </p>'+
                                        '</div>'+
                                        '<div class="ml-2 flex my-auto">'+
                                            '<div class="my-auto">'+
                                                '<h1 class="text-sm my-0 font-semibold">'+data.name+'</h1>'+
                                                '<h3 class="text-xs text-slate-500 my-0 rounded-full" style="background-color: #D6F7E4; color: #27AE60; position:absolute; padding:2px 5px ">'+data.size+'</h3>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'
                    $('#Data').append(row)
                })
            }else{
                
            }
        },
        error:function(response){
            console.log(response)
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

function detail(id){
    window.location.href = '../project-team/'+id
}

function edit(id){
    window.location.href = '../edit-project/'+id
}
function remove(id){
    
}
function mark(id){
    $.ajax({
        type:'PUT',
        url:'/mark-project/'+id,
        data:{
            _token:csrfToken
        },
        beforeSend:function(){
            Swal.fire({
                title: 'Loading...',
                html: 'Please Wait',
                icon: 'info',
                showConfirmButton: false,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            })
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'success mark done!',
                icon: 'success'
            })

            $('#card-'+id).removeClass('bg-white').addClass('bg-green-200').css('border', 'solid 2px green');
            $('.dropdown-edit').each(function() {
                if (!$(this).hasClass('hidden')) {
                  $(this).addClass('hidden');
                }
            });
        },
        error:function(xhr,status,error){
            if(xhr.status == 422){
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
    
                $.each(errors, function(key, value) {
                    errorMessage += '<p class="text-red-500">' + value + '</p>';
                });
    
                Swal.fire({
                    title: 'Gagal!',
                    html: errorMessage,
                    icon: 'error',
                })
            }else if(xhr.status == 400){
                Swal.fire({
                    title: 'Gagal!',
                    text: JSON.parse(xhr.responseText).error,
                    icon: 'error'
                })
            }else{
                Swal.fire({
                    title: 'Gagal!',
                    text: xhr.responseJSON.message,
                    icon: 'error'
                })
            }
        }
    })
}