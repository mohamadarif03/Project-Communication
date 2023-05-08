var csrfToken = $('meta[name="csrf-token"]').attr('content');

const icon = document.querySelector('.bi-clipboard');
const email = document.querySelector('#email');

icon.addEventListener('click', () => {
  const textarea = document.createElement('textarea');
  textarea.value = email.innerText;
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand('copy');
  document.body.removeChild(textarea);
  alert('Email copied to clipboard!');
});


new TomSelect('#project_size')

GetUser()

$('#stepper1-step2').click(function(){
    $('#stepper1').addClass('hidden');
    $('#form1').addClass('hidden');
    $('#stepper2').removeClass('hidden');
    $('#form2').removeClass('hidden');
})
$('#next1').click(function(){
    $('#stepper1').addClass('hidden');
    $('#form1').addClass('hidden');
    $('#stepper2').removeClass('hidden');
    $('#form2').removeClass('hidden');
})
$('#stepper1-step3').click(function(){
    $('#stepper1').addClass('hidden');
    $('#form1').addClass('hidden');
    $('#stepper3').removeClass('hidden');
    $('#form3').removeClass('hidden');
})
$('#stepper1-step4').click(function(){
    $('#stepper1').addClass('hidden');
    $('#form1').addClass('hidden');
    $('#stepper4').removeClass('hidden');
    $('#form4').removeClass('hidden');
})
$('#stepper2-step1').click(function(){
    $('#stepper2').addClass('hidden');
    $('#form2').addClass('hidden');
    $('#stepper1').removeClass('hidden');
    $('#form1').removeClass('hidden');
})
$('#stepper2-step3').click(function(){
    $('#stepper2').addClass('hidden');
    $('#form2').addClass('hidden');
    $('#stepper3').removeClass('hidden');
    $('#form3').removeClass('hidden');
})
$('#next2').click(function(){
    $('#stepper2').addClass('hidden');
    $('#form2').addClass('hidden');
    $('#stepper3').removeClass('hidden');
    $('#form3').removeClass('hidden');
})
$('#back2').click(function(){
    $('#stepper2').addClass('hidden');
    $('#form2').addClass('hidden');
    $('#stepper1').removeClass('hidden');
    $('#form1').removeClass('hidden');
})
$('#stepper2-step4').click(function(){
    $('#stepper2').addClass('hidden');
    $('#form2').addClass('hidden');
    $('#stepper4').removeClass('hidden');
    $('#form4').removeClass('hidden');
})
$('#stepper3-step1').click(function(){
    $('#stepper3').addClass('hidden');
    $('#form3').addClass('hidden');
    $('#stepper1').removeClass('hidden');
    $('#form1').removeClass('hidden');
})
$('#stepper3-step2').click(function(){
    $('#stepper3').addClass('hidden');
    $('#form3').addClass('hidden');
    $('#stepper2').removeClass('hidden');
    $('#form2').removeClass('hidden');
})
$('#stepper3-step4').click(function(){
    $('#stepper3').addClass('hidden');
    $('#form3').addClass('hidden');
    $('#stepper4').removeClass('hidden');
    $('#form4').removeClass('hidden');
})
$('#next3').click(function(){
    $('#stepper3').addClass('hidden');
    $('#form3').addClass('hidden');
    $('#stepper4').removeClass('hidden');
    $('#form4').removeClass('hidden');
})
$('#back3').click(function(){
    $('#stepper3').addClass('hidden');
    $('#form3').addClass('hidden');
    $('#stepper2').removeClass('hidden');
    $('#form2').removeClass('hidden');
})
$('#stepper4-step1').click(function(){
    $('#stepper4').addClass('hidden');
    $('#form4').addClass('hidden');
    $('#stepper1').removeClass('hidden');
    $('#form1').removeClass('hidden');
})
$('#stepper4-step2').click(function(){
    $('#stepper4').addClass('hidden');
    $('#form4').addClass('hidden');
    $('#stepper2').removeClass('hidden');
    $('#form2').removeClass('hidden');
})
$('#stepper4-step3').click(function(){
    $('#stepper4').addClass('hidden');
    $('#form4').addClass('hidden');
    $('#stepper3').removeClass('hidden');
    $('#form3').removeClass('hidden');
})
$('#back4').click(function(){
    $('#stepper4').addClass('hidden');
    $('#form4').addClass('hidden');
    $('#stepper3').removeClass('hidden');
    $('#form3').removeClass('hidden');
})

function GetUser(){
    $.ajax({
        type:'GET',
        url:'/data-user-value',
        success:function(response){
            $.each(response,function(index,data){
                var row = '<option value="'+data.name+'">'+data.name+'</option>'
                $('#service_manager').append(row)
                $('#product_manager').append(row)
                $('#office').append(row)
                $('#senior').append(row)
                $('#game_senior').append(row)
                $('#game_medior').append(row)
                $('#game_junior').append(row)
                $('#experience_senior').append(row)
                $('#experience_medior').append(row)
                $('#experience_junior').append(row)
                $('#ui_ux').append(row)
                $('#productontwerp_senior').append(row)
                $('#productontwerp_medior').append(row)
                $('#productontwerp_junior').append(row)
                $('#programmer_senior').append(row)
                $('#programmer_medior').append(row)
                $('#programmer_junior').append(row)
                $('#story_senior').append(row)
                $('#story_medior').append(row)
                $('#story_junior').append(row)
                $('#host').append(row)
                $('#techniek').append(row)
                $('#muziek').append(row)
                $('#props').append(row)
            })
            new TomSelect('#service_manager',{
                plugins: ['remove_button'],
            })
            new TomSelect('#office',{
                plugins: ['remove_button'],
            })
            new TomSelect('#product_manager',{
                plugins: ['remove_button'],
            })
            new TomSelect('#senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#game_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#game_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#game_junior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#experience_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#experience_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#experience_junior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#ui_ux',{
                plugins: ['remove_button'],
            })
            new TomSelect('#productontwerp_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#productontwerp_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#productontwerp_junior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#programmer_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#programmer_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#programmer_junior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#story_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#story_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#story_junior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#host',{
                plugins: ['remove_button'],
            })
            new TomSelect('#techniek',{
                plugins: ['remove_button'],
            })
            new TomSelect('#muziek',{
                plugins: ['remove_button'],
            })        
            new TomSelect('#props',{
                plugins: ['remove_button'],
            })      
        },
        error:function(response){
            console.log(response)
        }
    })
}
function download(){
    var type = $('#project_size').val()
    console.log(type)  
    if(type === 'Small'){
        console.log('tes')
        window.location.href = '../download-template/small'
    }else if(type === 'Medium'){
        window.location.href = '../download-template/medium'
    }else if(type === 'Large'){
        window.location.href = '../download-template/large'
    }else{
        Swal.fire({
            title:'Error!',
            icon:'error',
            html:'<p class="text-red-500"> Choose Project Size! </p>'
        })
    }
 
}
function create(){
    var service_manager = $('#service_manager').val()
    var product_manager = $('#product_manager').val()
    var office = $('#office').val()
    var senior = $('#senior').val()
    var game_senior= $('#game_senior').val()
    var game_medior = $('#game_medior').val()
    var game_junior = $('#game_junior').val()
    var experience_senior = $('#experience_senior').val()
    var experience_medior = $('#experience_medior').val()
    var experience_junior = $('#experience_junior').val()
    var ui_ux = $('#ui_ux').val()
    var productontwerp_senior = $('#productontwerp_senior').val()
    var productontwerp_medior = $('#productontwerp_medior').val()
    var productontwerp_junior = $('#productontwerp_junior').val()
    var programmer_senior = $('#programmer_senior').val()
    var programmer_medior = $('#programmer_medior').val()
    var programmer_junior = $('#programmer_junior').val()
    var story_senior = $('#story_senior').val()
    var story_medior = $('#story_medior').val()
    var story_junior = $('#story_junior').val()
    var host = $('#host').val()
    var techniek = $('#techniek').val()
    var muziek = $('#muziek').val()
    var props = $('#props').val()
    var link = $('#link').val()
    var type = $('#project_size').val()
    var title = $('#project-name').val()
    $.ajax({
        type:'POST',
        url:'/create-project',
        data:{
            _token:csrfToken,
            service_manager:service_manager,
            product_manager:product_manager,
            office_manager:office,
            senior:senior,
            gamedesigner_senior:game_senior,
            gamedesigner_medior:game_medior,
            gamedesigner_junior:game_junior,
            experience_senior:experience_senior,
            experience_medior:experience_medior,
            experience_junior:experience_junior,
            ui_ux:ui_ux,
            productontwerp_senior:productontwerp_senior,
            productontwerp_medior:productontwerp_medior,
            productontwerp_junior:productontwerp_junior,
            programmer_senior:programmer_senior,
            programmer_medior:programmer_medior,
            programmer_junior:programmer_junior,
            story_senior:story_senior,
            story_medior:story_medior,
            story_junior:story_junior,
            host:host,
            techniek:techniek,
            muziek:muziek,
            props:props,
            link:link,
            size:type,
            project_name:title
        },
        beforeSend:function(){
            Swal.fire({
                title: 'Loading...',
                html: 'Please Wait',
                icon: 'info',
                showConfirmButton: false,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            })
        },
        success:function(response){
            Swal.fire({
                title: 'success!',
                text: 'success create new project!',
                icon: 'success'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../project'
                }
            })
        },
        error: function(xhr, status, error) {
            if(xhr.status == 422){
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
    
                $.each(errors, function(key, value) {
                    errorMessage += '<p class="text-red-500">' + value + '</p>';
                });
    
                Swal.fire({
                    title: 'Gagal!',
                    html: errorMessage,
                    icon: 'error',
                })
            }else if(xhr.status == 400){
                Swal.fire({
                    title: 'Gagal!',
                    text: JSON.parse(xhr.responseText).error,
                    icon: 'error'
                })
            }else{
                Swal.fire({
                    title: 'Gagal!',
                    text: xhr.responseJSON.message,
                    icon: 'error'
                })
            }
        }
    })
}
