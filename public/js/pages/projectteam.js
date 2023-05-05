GetData()
function GetData(){
    var spreadSheetId = $('#spreadSheetId').val()
    $.ajax({
        type:'GET',
        url:'/data-project-team',
        data:{
            id:spreadSheetId
        },
        success:function(response){
            $('#team').html('')
            $.each(response.team,function(index,data){
                $.each(data[1],function(index,user){
                    if(user.profile == 'default.jpg'){
                        var src = 'src="../default.jpg"'
                    }else{                 
                        var src = 'src="../storage/'+user.profile+'"'
                    }
                    var row = '<div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">'+
                                '<div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">'+
                                    '<img '+src+' class="h-12 w-12 rounded-circle" alt="" srcset="">'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h3 class="text-xs font-bold text-slate-900 my-0">'+user.name+'</h3>'+
                                            '<h3 class="text-xs text-slate-500 my-0">'+user.email+'</h3>'+
                                            '<h3 class="text-xs text-black rounded-lg font-bold my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">'+data[0]+'</h3>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                    $('#team').append(row)
                })
            })


            $('#creative').html('')
            $.each(response.creative,function(index,data){
                $.each(data[1],function(index,user){
                    if(user.profile == 'default.jpg'){
                        var src = 'src="../default.jpg"'
                    }else{                 
                        var src = 'src="../storage/'+user.profile+'"'
                    }
                    var row = '<div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">'+
                                '<div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">'+
                                    '<img '+src+' class="h-12 w-12 rounded-circle" alt="" srcset="">'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h3 class="text-xs font-bold text-slate-900 my-0">'+user.name+'</h3>'+
                                            '<h3 class="text-xs text-slate-500 my-0">'+user.email+'</h3>'+
                                            '<h3 class="text-xs text-black rounded-lg font-bold my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">'+data[0]+'</h3>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                    $('#creative').append(row)
                })
            })

            $('#chaperone').html('')
            $.each(response.chaperone,function(index,data){
                $.each(data[1],function(index,user){
                    if(user.profile == 'default.jpg'){
                        var src = 'src="../default.jpg"'
                    }else{                 
                        var src = 'src="../storage/'+user.profile+'"'
                    }
                    var row = '<div class="col-span-1 w-full h-36 px-2 py-1 mt-1 rounded-md bg-white">'+
                                '<div class="h-16 flex p-2 pt-0 w-full" style="margin-top: 30px">'+
                                    '<img '+src+' class="h-12 w-12 rounded-circle" alt="" srcset="">'+
                                    '<div class="ml-2 flex my-auto">'+
                                        '<div class="my-auto">'+
                                            '<h3 class="text-xs font-bold text-slate-900 my-0">'+user.name+'</h3>'+
                                            '<h3 class="text-xs text-slate-500 my-0">'+user.email+'</h3>'+
                                            '<h3 class="text-xs text-black rounded-lg font-bold my-0 absolute" style="background-color: #D9D9D9; color:black; padding:2px">'+data[0]+'</h3>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                    $('#chaperone').append(row)
                })
            })
        },
        error:function(response){
            console.log(response)
        }
    })
}


                