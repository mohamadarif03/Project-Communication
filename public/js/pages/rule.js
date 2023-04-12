new TomSelect('#type')
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
$('#btn-back2').click(function(){
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
