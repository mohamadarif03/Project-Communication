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
                                                        // '<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'+
                                                        //     '<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>'+
                                                        // '</svg>'+
                                                        '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">'+
                                                            '<path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>'+
                                                            '<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>'+
                                                        '</svg>'+
                                                        '<p class="my-auto">Detail</p>'+
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
