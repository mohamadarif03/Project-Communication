getyear()
function getyear(){
    var yearSelect = $('#year');

    
    var currentYear = new Date().getFullYear();


    for (var i = currentYear - 5; i <= currentYear + 5; i++) {
        yearSelect.append($('<option></option>').val(i).html(i));
    }

    yearSelect.val(currentYear);
}
function showdropdown(index){
    $('.dropdown-edit').each(function() {
        if (!$(this).hasClass('hidden')  && $(this).attr('id') !== ('dropdownlist-'+index)) {
          $(this).addClass('hidden');
        }
    });
    $('#dropdownlist-'+index).toggleClass('hidden');
}
var current_page = 1
GetData(1)
function GetData(page){
    var year = $('#year').val()
    var status = $('#status').val()
    $.ajax({
        type:'GET',
        url:'/data-project?page='+page,
        data:{
            year:year,
            status:status,
        },
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
                                        '<div class="h-12 flex w-12 rounded-circle" style="background-color: blue">'+
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
                $('#paginate').html(response.links);
                current_page = response.pagination.current_page
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   
                '<div class=" flex flex-col mt-6 items-center justify-center">'+
                '<img '+src+' class="w-[20%] mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no rule found !</p>'+
                '</div'
                $('#paginate').html(row)
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
