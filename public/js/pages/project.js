var csrfToken = $('meta[name="csrf-token"]').attr('content');

new TomSelect('#host')
new TomSelect('#techniek')
new TomSelect('#muziek')
new TomSelect('#props')
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
                var row = '<option value="'+data.id+'">'+data.name+'</option>'
                $('#service').append(row)
                $('#service2').append(row)
                $('#office').append(row)
                $('#office2').append(row)
                $('#game_senior').append(row)
                $('#game_medior').append(row)
                $('#game_junior').append(row)
                $('#experience_senior').append(row)
                $('#experience_medior').append(row)
                $('#experience_junior').append(row)
                $('#ui_ux').append(row)
                $('#productonwerp_senior').append(row)
                $('#productonwerp_medior').append(row)
                $('#productonwerp_junior').append(row)
                $('#programmer_senior').append(row)
                $('#programmer_medior').append(row)
                $('#programmer_junior').append(row)
                $('#story_senior').append(row)
                $('#story_medior').append(row)
                $('#story_junior').append(row)
               
            })
            new TomSelect('#service',{
                plugins: ['remove_button'],
            })
            new TomSelect('#office',{
                plugins: ['remove_button'],
            })
            new TomSelect('#service2',{
                plugins: ['remove_button'],
            })
            new TomSelect('#office2',{
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
            new TomSelect('#productonwerp_senior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#productonwerp_medior',{
                plugins: ['remove_button'],
            })
            new TomSelect('#productonwerp_junior',{
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
           
        },
        error:function(response){
            console.log(response)
        }
    })
}
function download(){
    
}
function create(){

}
