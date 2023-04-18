notification()

function notification(){
    $.ajax({
        type:'GET',
        url:'/data-notification',
        success:function(response){
            
        },
        error:function(response){

        }
    })
}