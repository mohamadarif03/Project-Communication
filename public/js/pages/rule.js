new TomSelect('#type')
new TomSelect('#To',{
    plugins: ['remove_button'],
})

$('#btn-next').click(function(){
    $('#btn-close-modal1').click()
    $('#btn-open-modal-create1').click()
})
