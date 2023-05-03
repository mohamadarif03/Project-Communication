
new TomSelect('#game_senior')
new TomSelect('#game_medior')
new TomSelect('#game_junior')
new TomSelect('#experience_senior')
new TomSelect('#experience_medior')
new TomSelect('#experience_junior')
new TomSelect('#ui_ux')
new TomSelect('#productonwerp_senior')
new TomSelect('#productonwerp_medior')
new TomSelect('#productonwerp_junior')
new TomSelect('#programmer_senior')
new TomSelect('#programmer_medior')
new TomSelect('#programmer_junior')
new TomSelect('#story_senior')
new TomSelect('#story_medior')
new TomSelect('#story_junior')
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
               
            })
            service =  new TomSelect('#service',{
                plugins: ['remove_button'],
            })
            service =  new TomSelect('#office',{
                plugins: ['remove_button'],
            })
            service =  new TomSelect('#service2',{
                plugins: ['remove_button'],
            })
            service =  new TomSelect('#office2',{
                plugins: ['remove_button'],
            })
           
        },
        error:function(response){
            console.log(response)
        }
    })
}
