// new TomSelect('#type')
$(document).ready(function() {
    // dapatkan elemen select year
    var yearSelect = $('#year');

    // ambil tahun saat ini
    var currentYear = new Date().getFullYear();

    // buat opsi tahun dari 5 tahun ke belakang hingga 5 tahun ke depan
    for (var i = currentYear - 5; i <= currentYear + 5; i++) {
        yearSelect.append($('<option></option>').val(i).html(i));
    }

    // set nilai default menjadi tahun saat ini
    yearSelect.val(currentYear);
});

$(document).ready(function() {
    // dapatkan elemen select month
    var monthSelect = $('#month');
  
    // ambil bulan saat ini
    var currentMonth = new Date().getMonth();
  
    // set opsi default di select berdasarkan bulan saat ini
    monthSelect.val(monthSelect.find('option').eq(currentMonth).val());
  });
  

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
