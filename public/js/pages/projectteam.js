function GetData(){
    var spreadSheetId = $('#spreadSheetId').val()
    $.ajax({
        type:'GET',
        url:'/data-project-team',
        data:{
            id:spreadSheetId
        },
        success:function(response){
            console.log(response)
        },
        error:function(response){

        }
    })
}