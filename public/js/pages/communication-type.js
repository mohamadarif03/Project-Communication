$('.btn-delete').click(function(){
    var name = $(this).data('name')
    $('#communication-name').html(name)
    $('#btn-delete-modal').click()
})

$('.btn-edit').click(function(){ 
    var name = $(this).data('name')
    var color = $(this).data('color')
    $('#get2').val(color)
    fetch()
    $('#put').val(color)
    $('#update-name').val(name)
    $('#btn-update-modal').click()
})

function fetch() {
    var get = document.getElementById("get2").value;
    document.getElementById("put2").value = get;
}