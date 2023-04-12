$('.btn-delete').click(function(){
    var name = $(this).data('name')
    $('#communication-name').html(name)
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){ 
    var name = $(this).data('name')
    var color = $(this).data('color')
    $('#update-color').val(color)
    $('#update-name').val(name)
    $('#btn-update-modal').click()
})