var csrfToken = $('meta[name="csrf-token"]').attr('content');
$('.my-checkbox').change(function() {
    var checkboxValues = [];

    $(':checkbox[name="my-checkbox"]').filter(':checked').each(function() {
    checkboxValues.push($(this).val());
    });
    if(checkboxValues.length === 0){
        checkboxValues[0] = 'null'
    }
    GetData(checkboxValues)
});
var first_filter = [];
first_filter[0] = 'startProject'
GetData(first_filter)
function GetData(filter){
    var project_id = $('#project-id').val()
    var size = $('#project-size').val()
    $.ajax({
        type:'GET',
        url:'/data-project-responsbility',
        data:{
            project_id:project_id,
            filter:filter
        },
        beforeSend:function(){
            var load =  `<div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>
                        <div class="col-span-1 h-36 bg-slate-300 rounded-md animate-pulse"></div>`
            $('#Data').html(load)
        },
        success:function(response){
            if(size === 'Small'){

            }else if(size === 'Medium'){
                $('#Data').html('')

                $.each(response.startProject.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'A'+(index+5)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+100)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+100)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+100)+`"  onclick="mark(`+(index+100)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.humanDesign.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'C'+(index+5)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+200)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+200)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+200)+`"  onclick="mark(`+(index+200)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.experienceDesign.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'G'+(index+5)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+300)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+300)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+300)+`"  onclick="mark(`+(index+300)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.brainStrom.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'F'+(index+5)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+400)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+400)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+400)+`"  onclick="mark(`+index+400+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.gameTrust.values,function(index, data){
                    if(index !== 3 && index !== 7 && index !== 11 && index !== 15 && index !== 18){
                        if(data[0] == 'x' || data[0] == 'X'){
                            var style = 'bg-green-200';
                            var style2 = 'border:solid green 2px'
                        }else{
                            var style = 'bg-white';
                            var style2 = ''
                        }
                        var coordinate = 'A'+(index+23);
                        var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                    <div class="h-8 p-2 items-center w-full relative flex">
                                        <button onclick="showdropdown(`+(index+500)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                            <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                        </button>
                                        <ul id="dropdownlist-`+(index+500)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                            <li>
                                                <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+400)+`"  onclick="mark(`+(index+400)+`)" class="btn-mark-done flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                    <p class="my-auto">Mark As Done</p>
                                                </button>       
                                            </li>
                                        </ul>           
                                    </div>
                                    <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                        
                                        <div class="ml-2 flex my-auto">
                                            <div class="my-auto">
                                                <h1 class="text-sm my-0">`+data[1]+`</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
    
                        $('#Data').append(row)
                    }
                })

                $.each(response.wowDesign.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'C'+(index+23)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+600)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+600)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+600)+`"  onclick="mark(`+(index+600)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.levering.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'E'+(index+23)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+700)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+700)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+700)+`"  onclick="mark(`+(index+700)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })

                $.each(response.afsluiting.values,function(index, data){
                    if(data[0] == 'x' || data[0] == 'X'){
                        var style = 'bg-green-200';
                        var style2 = 'border:solid green 2px'
                    }else{
                        var style = 'bg-white';
                        var style2 = ''
                    }
                    var coordinate = 'G'+(index+23)
                    var row =  `<div id="card-`+coordinate+`" class="h-36 px-2 py-1 mt-1 rounded-md `+style+`" style="`+style2+`"> 
                                <div class="h-8 p-2 items-center w-full relative flex">
                                    <button onclick="showdropdown(`+(index+800)+`)" class="ml-auto h-5 w-5 rounded-circle bg-transparent">
                                        <svg  class="h-5 w-5 font-bold" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="48"><path d="M479.858 896Q460 896 446 881.858q-14-14.141-14-34Q432 828 446.142 814q14.141-14 34-14Q500 800 514 814.142q14 14.141 14 34Q528 868 513.858 882q-14.141 14-34 14Zm0-272Q460 624 446 609.858q-14-14.141-14-34Q432 556 446.142 542q14.141-14 34-14Q500 528 514 542.142q14 14.141 14 34Q528 596 513.858 610q-14.141 14-34 14Zm0-272Q460 352 446 337.858q-14-14.141-14-34Q432 284 446.142 270q14.141-14 34-14Q500 256 514 270.142q14 14.141 14 34Q528 324 513.858 338q-14.141 14-34 14Z"/></svg>
                                    </button>
                                    <ul id="dropdownlist-`+(index+800)+`" class="absolute dropdown-edit hidden z-[1000] float-left right-9 top-3 border-2 m-0 min-w-max list-none overflow-hidden rounded-lg p-1 border-none bg-white bg-clip-padding text-left text-base shadow-lg" >
                                        <li>
                                            <button data-coordinate="`+coordinate+`" id="btn-mark-`+(index+800)+`"  onclick="mark(`+(index+800)+`)" class="btn-mark-done flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                                <p class="my-auto">Mark As Done</p>
                                            </button>       
                                        </li>
                                    </ul>           
                                </div>
                                <div class="h-16 flex p-2 pt-0 items-center w-full ">
                                    
                                    <div class="ml-2 flex my-auto">
                                        <div class="my-auto">
                                            <h1 class="text-sm my-0">`+data[1]+`</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    $('#Data').append(row)
                })
            }else if(size === 'Large'){

            }
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

function showdropdown(index){
    $('.dropdown-edit').each(function() {
        if (!$(this).hasClass('hidden')  && $(this).attr('id') !== ('dropdownlist-' + index)) {
          $(this).addClass('hidden');
        }
    });
    $('#dropdownlist-'+index).toggleClass('hidden');
}


function mark(index){
      var coordinate = $('#btn-mark-'+index).data('coordinate')
      var id = $('#project-id').val()
      $.ajax({
        type:'PUT',
        url:'/mark-project-responsbility',
        data:{
            coordinate:coordinate,
            project_id:id,
            _token:csrfToken
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
                text: 'success mark done!',
                icon: 'success'
            })

            $('#card-'+coordinate).removeClass('bg-white').addClass('bg-green-200').css('border', 'solid 2px green');
            $('.dropdown-edit').each(function() {
                if (!$(this).hasClass('hidden')) {
                  $(this).addClass('hidden');
                }
            });
        },
        error:function(xhr,status,error){
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

