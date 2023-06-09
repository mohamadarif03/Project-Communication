// new TomSelect('#type')
var csrfToken = $('meta[name="csrf-token"]').attr('content');

function getyear(){
    var yearSelect = $('#year');

    // ambil tahun saat ini
    var currentYear = new Date().getFullYear();

    var allYearsOption = document.createElement("option");
    allYearsOption.text = "All Years";
    allYearsOption.value = "-1";

    // buat opsi tahun dari 5 tahun ke belakang hingga 5 tahun ke depan
    for (var i = currentYear - 5; i <= currentYear + 5; i++) {
        yearSelect.append($('<option></option>').val(i).html(i));
    }

    // set nilai default menjadi tahun saat ini
    yearSelect.val(currentYear);
}
function getmonth(){
    var monthSelect = $('#month');
  
    // ambil bulan saat ini
    var currentMonth = new Date().getMonth() + 1;
  
    // set opsi default di select berdasarkan bulan saat ini
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
GetType()

$('#btn-next-create-step-2').click(function(){
    $('#btn-close-modal-create-step-1').click()
    $('#btn-open-modal-create-step-2').click()
})
$('#btn-next-create-step-3').click(function(){
    $('#btn-close-modal-create-step-2').click()
    $('#btn-open-modal-create-step-3').click()
})

$('#btn-back-create-step-1').click(function(){
    $('#btn-close-modal-create-step-2').click()
    $('#btn-open-crate-step-1').click()
})
$('#btn-back-create-step-2').click(function(){
    $('#btn-close-modal-create-step-3').click()
    $('#btn-open-modal-create-step-2').click()
})
var checks = $('#check').val()
if(checks == 'sent'){
    GetDataSent(1)
}else{
    GetTypeReceive()
    GetDataReceive(1)
}
function GetTypeReceive(){
    $.ajax({
        type:'GET',
        url:'/data-task-type-filter',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'">'+data.communicationtype.type+'</option>'
                $('#comtype').append(row)

            })
            
        },
        error:function(response){
            console.log(response)
        }
    })
}
function GetType(){
    $.ajax({
        type:'GET',
        url:'/data-task-type',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'" id="type-select-'+data.id+'" data-to="'+data.to+'">'+data.communicationtype.type+'</option>'
                $('#type').append(row)
                if(checks == 'sent'){
                    $('#comtype').append(row)
                }
            })
            type =  new TomSelect('#type')
            
        },
        error:function(response){
            console.log(response)
        }
    })
}
var type
var to_create = new TomSelect('#to')

$('#type').change(function(){
    to_create.destroy()
    var id = $(this).val()
    var to = $('#type-select-'+id).data('to')
    to = to.toString()
    if (to.includes(',')){
        var to_arr = to.split(',')
    }else{
        var to_arr =  []
        to_arr[0] = to
    }
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var selected = ''
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
var checks = $('#check').val()
function GetData(page){
    if(checks !== 'sent'){
        GetDataReceive(page)
    }else{
        GetDataSent(page)     
    }
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
function GetDataReceive(page){ 
    var year = $('#year').val()
    var month = $('#month').val()
    var type = $('#comtype').val()
    var status = $('#status').val()

    $.ajax({
        type:'GET',
        url:'/data-receive-task?page='+page,
        data:{
            year:year,
            month:month,
            type:type,
            status:status
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
                    var row = '<div class="block '+bg+' rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3"'+border+'>'+
                                '<div class="h-8 p-2 items-center w-full flex justify-between">'+
                                '<a href="" onclick="checkget('+data.id+')" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">'+
                                    '<input type="checkbox" '+check+' '+disabled+' style="cursor: pointer;">'+
                                '</a>'+
                                    '<p class="rounded-md text-xs py-0.5 px-2" '+bgdate+'>'+formatDate(data.date)+'</p>'+
                                '</div>'+
                                '<div class="h-16 flex p-2 items-center w-full ">'+
                                    '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.rule.communication_type.color+'">'+
                                        '<p class="text-white m-auto font-semibold">'+getInitials(data.rule.communication_type.type)+'</p>'+
                                    '</div>'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h1 class="text-sm my-0 font-semibold">'+data.rule.communication_type.type+'</h1>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="h-8 w-full flex items-center">'+
                                    '<i class="mdi mdi-account"></i>'+
                                    '<p class=" ml-1.5 my-auto text-xs">'+data.user.userrole[0].role.name+'</p>'+
                                    '<div class="ml-auto mr-2 text-xs font-semibold">'+
                                    '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-link="'+data.link+'" data-how="'+data.rule.how+'" data-file="'+data.file+'" data-detail="'+data.rule.communication_type.description+'" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">'+
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
                '<img '+src+' class="w-[20%] mt-4" alt="">'+
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
    var status = $('#status').val()
    $.ajax({
        type:'GET',
        url:'/data-sent-task?page='+page,
        data:{
            year:year,
            month:month,
            type:type,
            status:status
        },
        success:function(response){
            $('#Sent').html('')
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
                    var row = '<div class="block '+bg+' rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3"'+border+'>'+
                                '<div class="h-8 p-2 items-center w-full flex justify-between">'+
                                    '<p class="rounded-md text-xs py-0.5 px-2" '+bgdate+'>'+formatDate(data.date)+'</p>'+
                                '</div>'+
                                '<div class="h-16 flex p-2 items-center w-full ">'+
                                    '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.rule.communication_type.color+'">'+
                                        '<p class="text-white m-auto font-semibold">'+getInitials(data.rule.communication_type.type)+'</p>'+
                                    '</div>'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h1 class="text-sm my-0 font-semibold">'+data.rule.communication_type.type+'</h1>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="h-8 w-full flex items-center">'+
                                    '<i class="mdi mdi-account"></i>'+
                                    '<p class=" ml-1.5 my-auto text-xs">'+data.user.userrole[0].role.name+'</p>'+
                                    '<div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">'+
                                    '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-link="'+data.link+'" data-how="'+data.rule.how+'" data-file="'+data.file+'" data-detail="'+data.rule.communication_type.description+'" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">'+
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
                '<img '+src+' class="w-[20%] mt-4" alt="">'+
                            '<p class="fotnt-semibold text-xl mt-2 text-gray-500"><span class="text-gray-600 font-bold">Oops,</span>no sent communication found !</p>'+
                '</div'
                $('#Sent').append(row)
            }
        },
        error:function(response){

        }
    })
}

function show(id){
    var link = $('#btn-show-'+id).data('link');
    var how = $('#btn-show-'+id).data('how');
    var file = $('#btn-show-'+id).data('file');
    var detail = $('#btn-show-'+id).data('detail');
    console.log(file)
    if (link == null) {
        $('#show-link').addClass('hidden');
      } else {
        $('#show-link').removeClass('hidden');
      }
    
      if (file == null) {
        $('#show-file').addClass('hidden');
      } else {
        $('#show-file').removeClass('hidden');
      }
    $('#show-how').text(how)
    $('#show-link').attr('href', link)
    $('#show-file').attr('href', '../storage/' + file);
    $('#show-detail').text(detail)
    $('#show-id').val(id)
}


function create(){
    var type = $('#type').val()
    var date = $('#date').val()
    var link = $('#link').val()
    var fileInput = $('#file')[0];
    var file = fileInput.files[0];
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    var formData = new FormData();
    formData.append('file', file);
    formData.append('_token', csrfToken);
    formData.append('type', type);
    formData.append('date', date);
    formData.append('link', link);
    if (file || link) {
        // Menambahkan validasi untuk tipe file
        if (file && !file.name.match(/\.(docx|xlsx|pdf)$/i)) {
        Swal.fire({
        title: 'Error!',
        html: 'File must be in docx,xlsx,pdf format.',
        icon: 'error'
        });
        return;
        }
        $.ajax({
            type:'POST',
            url:'/store-responsbility',
            data: formData,
            contentType: false,
            processData: false,
            success:function(response){
                Swal.fire({
                    title: 'success!',
                    text: 'Success Create New responsbility!',
                    icon: 'success'
                }).then(function() {
                    location.reload();
                });
                $('#type').val('')
                $('#date').val('')
                $('#link').val('')
                $('#file').val('')
                $('#btn-close-modal-create-step-3').click()
                GetData(1)
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
                    html: errorMessage,
                    icon: 'error',
                })
            }
        })
    } else {
        Swal.fire({
            title: 'Error!',
            html: 'Link Or File Must Be Filled',
            icon: 'error'
        })
    }
   
}
function checkget(id) {
    $('#check-id').val(id)
}

function check(){
    var id = $('#check-id').val()
    // console.log(id)
    $.ajax({
      url: '/done/'+id,
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
        })
        $('#btn-close').click()
        GetData(1)
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

  function search(){
    GetDataReceive(1)
    GetDataSent(1)
}