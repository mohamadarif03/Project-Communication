var csrfToken = $('meta[name="csrf-token"]').attr('content');
function getyear(){
    var yearSelect = $('#year');

    
    var currentYear = new Date().getFullYear();


    for (var i = currentYear - 5; i <= currentYear + 5; i++) {
        yearSelect.append($('<option></option>').val(i).html(i));
    }

    yearSelect.val(currentYear);
}
function getmonth(){
    var monthSelect = $('#month');
  
    var currentMonth = new Date().getMonth() + 1;
  
    monthSelect.val(monthSelect.find('option').eq(currentMonth).val());
}
    const inputDate = document.getElementById('date');

    const today = new Date();
    const day = today.getDate();
    const month = today.getMonth() + 1;
    const year = today.getFullYear();

inputDate.value = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;

getmonth()
getyear()
var checks = $('#check').val()
function GetData(page){
    if(checks !== 'sent'){
        GetDataReceive(page)
    }else{
        GetDataSent(page)     
    }
}
GetDataReceive(1)
GetDataSent(1)
function GetDataReceive(page){
    var year = $('#year').val()
    var month = $('#month').val()
    var type = $('#comtype').val()
    $.ajax({
        type:'GET',
        url:'/data-receive-communication?page='+page,
        data:{
            year:year,
            month:month,
            type:type
        },
        success:function(response){
            $('#Receive').html('')
            if(response.data.data.length > 0){
                $.each(response.data.data,function(index,data){
                    var border = 'style="border: 2px solid green"'
                    var bg = 'bg-green-200'
                    var check = 'checked'
                    var bgdate = 'style="background-color: green; color: white;"'
                    var show = 'text-black'
                    var disabled = 'disabled'
                    if (data.status == 0) {
                        border = ''
                        bg = 'bg-white'
                        check = ''
                        bgdate = 'style="background-color: #E0E0E0; color: black;"'
                        show = 'text-yellow-400'
                        disabled = ''
                    }
                    if (data.communication_type.type.length > 30) {
                        var sizeTextcommunication = 'style="font-size:9px;"'
                        var sizeTextrole = 'text-[10px]'
                    } else if (data.communication_type.type.length > 25){
                        var sizeTextcommunication = 'style="font-size:11px;"'
                        var sizeTextrole = 'text-[12px]'
                    }else{
                        var sizeTextcommunication = 'style="font-size:12px;"'
                        var sizeTextrole = 'text-[12px]'
                    }
                    var row = '<div class="block '+bg+' rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3"'+border+'>'+
                                '<div class="h-8 p-2 items-center w-full flex justify-between ">'+
                                    '<p class="rounded-md text-xs py-0.5 px-2" '+bgdate+'>'+formatDate(data.date)+'</p>'+
                                '</div>'+
                                '<div class="h-16 flex p-2 items-center w-full ">'+
                                    '<div class="h-11 flex w-11 rounded-circle" style="background-color:'+data.communication_type.color+'">'+
                                        '<p class="text-white m-auto font-semibold">'+getInitials(data.communication_type.type)+'</p>'+
                                    '</div>'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h1 class="my-0 font-semibold" '+sizeTextcommunication+'>'+data.communication_type.type+'</h1>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="h-8 w-full flex items-center">'+
                                    '<i class="mdi mdi-account"></i>'+
                                    '<p class=" ml-1.5 my-auto '+sizeTextrole+'">'+data.user.userrole[0].role.name+'</p>'+
                                    '<div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">'+
                                        '<a href="" onclick="show1('+data.id+')" id="btn-show1-'+data.id+'" data-message="'+data.message+'" data-detail="'+data.communication_type.description+'" class="'+show+'" data-te-toggle="modal" data-te-target="#show1">'+
                                            'Show >'+
                                        '</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                    $('#Receive').append(row)
                })
                $('#pagination-receive').html(response.links)
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   
                '<div class="lg:col-span-3 md:col-span-2 col-span-1 flex flex-col mt-6 items-center justify-center">'+
                '<img '+src+' class="w-[30%] mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no receive communication found !</p>'+
                '</div'
                $('#Receive').append(row)
            }
        },
        error:function(response){
            
        }
    })
}
function GetDataSent(page){
    var year = $('#year').val()
    var month = $('#month').val()
    var type = $('#comtype').val()
    console.log(year)
    $.ajax({
        type:'GET',
        url:'/data-sent-communication?page='+page,
        data:{
            year:year,
            month:month,
            type:type
        },
        success:function(response){
            $('#Sent').html('')
            if(response.data.data.length > 0){
                $.each(response.data.data,function(index,data){
                    if (data.communication_type.type.length > 30) {
                        var sizeTextcommunication = 'style="font-size:9px;"'
                        var sizeTextrole = 'text-[10px]'
                    } else if (data.communication_type.type.length > 25){
                        var sizeTextcommunication = 'style="font-size:11px;"'
                        var sizeTextrole = 'text-[12px]'
                    }else{
                        var sizeTextcommunication = 'style="font-size:12px;"'
                        var sizeTextrole = 'text-[12px]'
                    }
                    
                    var row = '<div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3">'+
                                '<div class="h-6 p-2 items-center w-full flex justify-between ">'+
                                   
                                    '<p class="bg-slate-300 rounded-md text-xs py-0.5 px-2">'+formatDate(data.date)+'</p>'+
                                '</div>'+
                                '<div class="h-16 flex p-2 items-center w-full ">'+
                                    '<div class="h-11 flex w-11 rounded-circle" style="background-color:'+data.communication_type.color+'">'+
                                        '<p class="text-white m-auto font-semibold">'+getInitials(data.communication_type.type)+'</p>'+
                                    '</div>'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h1 class="my-0 font-bold"'+sizeTextcommunication+'>'+data.communication_type.type+'</h1>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="h-8 w-full flex items-center">'+
                                    '<i class="mdi mdi-account"></i>'+
                                    '<p class=" ml-1.5 my-auto '+sizeTextrole+'">'+data.user.userrole[0].role.name+'</p>'+
                                    '<div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">'+
                                    '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-message="'+data.message+'" data-detail="'+data.communication_type.description+'" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">'+
                                    'Show >'+
                                '</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                    $('#Sent').append(row)
                })
                $('#pagination-sent').html(response.links)
            }else{
                var src = "src='../img/not-found.svg'";
                var row =   
                '<div class="md:col-span-2 col-span-1 lg:col-span-3 flex flex-col mt-6 items-center justify-center">'+
                '<img '+src+' class="md:w-2/12 w-1/2 mt-4" alt="">'+
                            '<p class="fotnt-semibold mx-auto text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no sent communication found !</p>'+
                '</div'
                $('#Sent').append(row)
            }
        },
        error:function(response){

        }
    })
}

function show(id){
    var message = $('#btn-show-'+id).data('message')
    var detail = $('#btn-show-'+id).data('detail')
    $('#show-message').text(message)
    $('#show-detail').text(detail)
    $('#show-id').val(id)
}
function show1(id){
    var message = $('#btn-show1-'+id).data('message')
    var detail = $('#btn-show1-'+id).data('detail')
    $('#show-message1').text(message)
    $('#show-detail1').text(detail)
    $('#show-id1').val(id)
}

GetCommunication()
var type
var to_create = new TomSelect('#to')
function GetCommunication(){
    $.ajax({
        type:'GET',
        url:'/data-communication-type-standart',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'" data-to="'+data.to+'" id="type-select-'+data.id+'">'+data.type+'</option>'
                $('#comtype').append(row)
                $('#type').append(row)
            })
            
            new TomSelect('#type')  
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
function formatDate(dateString) {
    const date = new Date(dateString);
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    return date.toLocaleDateString('en-US', options);
}



$('#btn-next-create-step-2').click(function(){
    $('#btn-close-modal-create-step-1').click()
    $('#btn-open-modal-create-step-2').click()
})
$('#btn-next-create-step-3').click(function(){
    $('#btn-close-modal-create-step-2').click()
    $('#btn-open-modal-create-step-3').click()
})

function search(){
    GetDataReceive(1)
    GetDataSent(1)
}

$('#btn-back-create-step-1').click(function(){
    $('#btn-close-modal-create-step-2').click()
    $('#btn-open-crate-step-1').click()
})
$('#btn-back-create-step-2').click(function(){
    $('#btn-close-modal-create-step-3').click()
    $('#btn-open-modal-create-step-2').click()
})

$('#type').change(function(){
    to_create.destroy()
    $('#to').removeAttr('disabled')
    var id = $(this).val()
    var to = $('#type-select-'+id).data('to')
    if (to.length > 1){
        var to_arr = to.split(',')
    }else{
        var to_arr =  to
    }
    $.ajax({
        type:'GET',
        url:'/data-user-value',
        success:function(response){
            $.each(response,function(index,data){
                var selected = ''
                console.log(to_arr)
                console.log(data.id)
                if(Array.isArray(to_arr)){
                    if(to_arr.includes(String(data.id))){
                        selected = 'selected'
                    }
                }else{
                    if(to_arr == data.id){
                        selected = 'selected'
                    }
                }
                
                var row = '<option '+ selected +' value="'+data.id+'">'+data.name+'<option>'
                $('#to').append(row)
            })   
            new TomSelect('#to',{
                plugins: ['remove_button'],
            })
            const remove = $('#to-form').find('.ts-wrapper:not(:first)');
            remove.remove();
        },
        error:function(response){
            console.log(response)
        }
    })
})

function create(){
    var type = $('#type').val()
    var date = $('#date').val()
    var message = $('#message').val()
    var to = $('#to').val()
   
    $.ajax({
        type:'POST',
        url:'/store-communication',
        data:{
            _token:csrfToken,
            type:type,
            date:date,
            to:to,
            message:message,
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New Communication!',
                icon: 'success'
            }).then(function() {
                location.reload();
            });
            $('#type').val('')
            $('#date').val('')
            $('#message').val('')
            $('#to').val('')
            $('#btn-close-modal-create-step-3').click()
           
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

function checkget(id) {
    $('#check-id').val(id)
}

function check() {
    var id = $('#check-id').val()
    // console.log(id)
    $.ajax({
      url: '/check/'+id,
      type: 'PUT',
      data:{
        _token:csrfToken
      },
      success: function(response){
        Swal.fire({
            title: 'Success!',
            text: 'Success Delete Responsbility!',
            icon: 'success',
            timer: 4000
        }).then(function() {
            location.reload();
        });
        $('#btn-close').click()
        GetData()
    },
    error: function(response){
        Swal.fire({
            title: 'Error!',
            html: response.responseJSON.message,

            icon: 'error'
        })
    }
    });
  }