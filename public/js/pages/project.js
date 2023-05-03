
new TomSelect('#service')
new TomSelect('#office')
new TomSelect('#service2')
new TomSelect('#office2')
new TomSelect('#game_senior')
new TomSelect('#game_medior')
new TomSelect('#game_junior')
new TomSelect('#experience_senior')
new TomSelect('#experience_medior')
new TomSelect('#experience_junior')
new TomSelect('#ui_ux')


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
