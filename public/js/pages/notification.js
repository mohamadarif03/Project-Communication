notification()

function notification(){
    $.ajax({
        type:'GET',
        url:'/data-notification',
        success:function(response){
            $.each(response,function(index,data){
                var src = 'src="../profile/'+data.user.profile+'"'
                var type = ''
                if(data.communication_id != null){
                    type = data.communication.communication_type.type
                }else if(data.responsbility_id != null){
                    type = data.responsbility.rule.communication_type.type
                }
                var row = '<a href="#">'+
                            '<div class="inbox-item">'+
                                '<div class="inbox-item-img"><img '+src+' class="rounded-lg" alt=""></div>'+
                                '<p class="inbox-item-author">'+type+'</p>'+
                                '<p class="inbox-item-text text-truncate">'+data.user.name+'</p>'+
                            '</div>'+
                        '</a>'
                $('#notification').append(row)
            })
            
        },
        error:function(response){

        }
    })
}