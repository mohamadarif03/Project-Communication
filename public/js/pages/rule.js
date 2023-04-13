var csrfToken = $('meta[name="csrf-token"]').attr('content');


new TomSelect('#communication_type_id')
new TomSelect('#type2')


new TomSelect('#To',{
    plugins: ['remove_button'],
})
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
    $.ajax({
        type:'POST',
        url:'/store-rule',
        data:{
            _token:csrfToken,
            communication_type_id:communication_type_id,
            how:how
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