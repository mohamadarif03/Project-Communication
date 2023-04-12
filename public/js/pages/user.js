new TomSelect('#type',{
    plugins: ['remove_button'],
})

$('.btn-delete').click(function(){
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){
    $('#btn-update-modal').click()
})