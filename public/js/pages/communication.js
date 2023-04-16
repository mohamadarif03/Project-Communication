var csrfToken = $('meta[name="csrf-token"]').attr('content');

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
                $('#type').append(row)
            })
            new TomSelect('#type')  
        },
        error:function(response){
            console.log(response)
        }
    })
}


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
        url:'/data-role',
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
   
    $.ajax({
        type:'POST',
        url:'/store-communication',
        data:{
            _token:csrfToken,
            type:type,
            date:date,
            message:message,
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'Success Create New User!',
                icon: 'success'
            })
            GetData()
            $('#btn-close-modal-create-step-1').click()
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