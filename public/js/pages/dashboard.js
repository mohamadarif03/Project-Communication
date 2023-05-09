

  $(document).ready(function() {
    // dapatkan elemen select month
    var monthSelect = $('#month');
  
    // ambil bulan saat ini
    var currentMonth = new Date().getMonth();
  
    // set opsi default di select berdasarkan bulan saat ini
    monthSelect.val(monthSelect.find('option').eq(currentMonth).val());
  });
  function getInitials(name) {
    var words = name.split(' ');
    var initials = words.map(function(word) {
      return word.charAt(0);
    });
    return initials.join('');
}
function formatDate(dateString) {
    const date = new Date(dateString);
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    return date.toLocaleDateString('en-US', options);
}
function show(id){
    var link = $('#btn-show-'+id).data('link');
    var how = $('#btn-show-'+id).data('how');
    var file = $('#btn-show-'+id).data('file');
    var detail = $('#btn-show-'+id).data('detail');
    console.log(file)
    if (link == null) {
        $('#show-link').addClass('hidden');
      } else {
        $('#show-link').removeClass('hidden');
      }
    
      if (file == null) {
        $('#show-file').addClass('hidden');
      } else {
        $('#show-file').removeClass('hidden');
      }
    $('#show-how').text(how)
    $('#show-link').attr('href', link)
    $('#show-file').attr('href', '../storage/' + file);
    $('#show-detail').text(detail)
    $('#show-id').val(id)
}
GetDataUncomplete() 
GetDataComplete() 

  function GetDataUncomplete(){

    $.ajax({
        type:'GET',
        url:'/data-receive-responsbility-dashboard-uncomplete',
        success:function(response){
            console.log(response)
                $.each(response,function(index,data){
                  console.log(index)
                  var row = '<div class="block w-full rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3 my-2" style="border:1px solid gray">'+
                  '<div class="h-4 p-2 items-center w-full flex justify-between">'+
                  '<a href="" onclick="checkget('+data.id+')" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">'+
                      '<input type="checkbox" style="cursor: pointer;">'+
                  '</a>'+
                      '<p class="rounded-md text-xs py-0.5 px-2" style="background-color: #E0E0E0; color: black;">'+formatDate(data.date)+'</p>'+
                  '</div>'+
                  '<div class="h-16 flex p-2 items-center w-full ">'+
                      '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.rule.communication_type.color+'">'+
                          '<p class="text-white m-auto font-semibold">'+getInitials(data.rule.communication_type.type)+'</p>'+
                      '</div>'+
                      '<div class="ml-2 flex my-auto">'+
                          '<div class="my-auto">'+
                              '<h1 class="text-sm my-0 font-semibold">'+data.rule.communication_type.type+'</h1>'+
                          '</div>'+
                      '</div>'+
                  '</div>'+
                  '<div class="h-8 w-full flex items-center">'+
                      '<i class="mdi mdi-account"></i>'+
                      '<p class=" ml-1.5 my-auto text-xs">'+data.user.userrole[0].role.name+'</p>'+
                      '<div class="ml-auto mr-2 text-xs font-semibold" style="color: black>'+
                      '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-link="'+data.link+'" data-how="'+data.rule.how+'" data-file="'+data.file+'" data-detail="'+data.rule.communication_type.description+'" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">'+
                      'Show >'+
                  '</a>'+
                      '</div>'+
                  '</div>'+
              '</div>'
                    $('#Uncomplete').append(row)
                })
                var see = '<a href="responsbility-receive" class="text-black flex justify-center font-bold py-2">See All</a>'
                $('#Uncomplete').append(see)
        },
        error:function(response){
            console.log(response)
        }
    })
}
  function GetDataComplete(){

    $.ajax({
        type:'GET',
        url:'/data-receive-responsbility-dashboard-complete',
        success:function(response){
                $.each(response,function(index,data){
                  console.log(index)
                  var row = '<div class="block w-full bg-green-200 rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3 my-2" style="border: 2px solid green">'+
                  '<div class="h-4 p-2 items-center w-full flex justify-between">'+
                  '<a href="" onclick="checkget('+data.id+')" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">'+
                      '<input type="checkbox" checked disabled style="cursor: pointer;">'+
                  '</a>'+
                      '<p class="rounded-md text-xs py-0.5 px-2" style="background-color: green; color: white;">'+formatDate(data.date)+'</p>'+
                  '</div>'+
                  '<div class="h-16 flex p-2 items-center w-full ">'+
                      '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.rule.communication_type.color+'">'+
                          '<p class="text-white m-auto font-semibold">'+getInitials(data.rule.communication_type.type)+'</p>'+
                      '</div>'+
                      '<div class="ml-2 flex my-auto">'+
                          '<div class="my-auto">'+
                              '<h1 class="text-sm my-0 font-semibold">'+data.rule.communication_type.type+'</h1>'+
                          '</div>'+
                      '</div>'+
                  '</div>'+
                  '<div class="h-8 w-full flex items-center">'+
                      '<i class="mdi mdi-account"></i>'+
                      '<p class=" ml-1.5 my-auto text-xs">'+data.user.userrole[0].role.name+'</p>'+
                      '<div class="ml-auto mr-2 text-xs font-semibold" style="color: black>'+
                      '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-link="'+data.link+'" data-how="'+data.rule.how+'" data-file="'+data.file+'" data-detail="'+data.rule.communication_type.description+'" data-te-toggle="modal" data-te-target="#show">'+
                      'Show >'+
                  '</a>'+
                      '</div>'+
                  '</div>'+
              '</div>'
                    $('#Complete').append(row)
                })
                var see = '<a href="responsbility-receive" class="text-black flex justify-center font-bold py-2">See All</a>'
                $('#Complete').append(see)
        },
        error:function(response){
            console.log(response)
        }
    })
}
function show1(id){
    var message = $('#btn-show1-'+id).data('message')
    var detail = $('#btn-show1-'+id).data('detail')
    $('#show-message1').text(message)
    $('#show-detail1').text(detail)
    $('#show-id1').val(id)
    // $('#btn-show-modal1').click()
}