// new TomSelect('#type')

GetType()

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

function GetType(){
    $.ajax({
        type:'GET',
        url:'/data-task-type',
        success:function(response){
            console.log(response)
            $.each(response,function(index,data){
                var row = '<option value="'+data.id+'" id="type-select-'+data.id+'" data-to="'+data.to+'">'+data.communicationtype.type+'</option>'
                $('#type').append(row)
            })
            type =  new TomSelect('#type')
            
        },
        error:function(response){
            console.log(response)
        }
    })
}
var type
var to_create = new TomSelect('#to')

$('#type').change(function(){
    to_create.destroy()
    var id = $(this).val()
    var to = $('#type-select-'+id).data('to')
    if (to.length > 1){
        var to_arr = to.split(',')
    }else{
        var to_arr =  to
    }
    $.ajax({
        type:'GET',
        url:'/data-role',
        success:function(response){
            $.each(response,function(index,data){
                var selected = ''
                console.log(to_arr)
                console.log(data.id)
                if(Array.isArray(to_arr)){
                    if(to_arr.includes(String(data.id))){
                        selected = 'selected'
                    }
                }else{
                    if(to_arr == data.id){
                        selected = 'selected'
                    }
                }
                
                var row = '<option '+ selected +' value="'+data.id+'">'+data.name+'<option>'
                $('#to').append(row)
            })   
            new TomSelect('#to',{
                plugins: ['remove_button'],
            })
            const remove = $('#to-form').find('.ts-wrapper:not(:first)');
            remove.remove();
        },
        error:function(response){
            console.log(response)
        }
    })
})