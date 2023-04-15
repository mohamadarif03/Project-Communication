var csrfToken = $('meta[name="csrf-token"]').attr('content');

new TomSelect('#to',{
    plugins: ['remove_button'],
})  
GetCommunication()

function GetCommunication(){
    $.ajax({
        type:'GET',
        url:'/data-communication-type-standart',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'">'+data.type+'</option>'
                $('#type').append(row)
            })
            new TomSelect('#type',{
            })  
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