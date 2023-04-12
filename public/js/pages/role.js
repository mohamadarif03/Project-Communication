$('.btn-delete').click(function(){
    var name = $(this).data('name')
    $('#roles-name').html(name)
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){ 
    var name = $(this).data('name')
    $('#update-name').val(name)
    $('#btn-update-modal').click()
})

