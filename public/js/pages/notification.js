notification()

function notification(){
    $.ajax({
        type:'GET',
        url:'/data-notification',
        success:function(response){
            if(response.length > 0){
                $.each(response,function(index,data){
                    var src = 'src="../profile/'+data.user.profile+'"'
                    var type = ''
                    if(data.communication_id != null){
                        type = data.communication.communication_type.type
                    }else if(data.responsbility_id != null){
                        type = data.responsbility.rule.communication_type.type
                    }
                    var row = '<a onclick="readNotification('+data.id+')">'+
                                '<div class="inbox-item">'+
                                    '<div class="inbox-item-img"><img '+src+' class="rounded-lg" alt=""></div>'+
                                    '<p class="inbox-item-author">'+type+'</p>'+
                                    '<p class="inbox-item-text text-truncate">'+data.user.name+'</p>'+
                                '</div>'+
                            '</a>'
                    $('#notification').append(row)
                })
            }else{
                var row = '<a>'+
                                '<div class="inbox-item">'+
                                    '<div class="inbox-item-img bg-slate-900"></div>'+
                                    '<p class="inbox-item-author">No Notification</p>'+
                                '</div>'+
                            '</a>'
                $('#notification').append(row)
            }
        },
        error:function(response){

        }
    })
}

function readNotification(id){
    $.ajax({
        type:'GET',
        url:'/read-notification/'+id,
        success:function(response){
            if(response == 'communication'){
                window.location.href = '../communication'
            }else if(response == 'responsbility'){
                window.location.href = '../responsbility'
            }
        },
        error:function(response){
            console.log(response)
        }
    })
}