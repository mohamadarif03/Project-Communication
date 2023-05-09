

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

GetDataUncomplete() 
GetDataComplete() 

  function GetDataUncomplete(){

    $.ajax({
        type:'GET',
        url:'/data-receive-responsbility-dashboard-uncomplete',
        success:function(response){
                $.each(response,function(index,data){
                  console.log(index)
                  var row = '<div class="block rounded-lg p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] mr-3" style="border: 2px solid green;">'+
                  '<div class="h-8 p-2 items-center w-full flex justify-between">'+
                  '<a href="" onclick="checkget('+data.id+')" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">'+
                      '<input type="checkbox" style="cursor: pointer;">'+
                  '</a>'+
                      '<p class="rounded-md text-xs py-0.5 px-2" style="background-color: #E0E0E0; color: black;">'+formatDate(data.date)+'</p>'+
                  '</div>'+
                  '<div class="h-16 flex p-2 items-center w-full ">'+
                      '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.rule+'">'+
                        //   '<p class="text-white m-auto font-semibold">'+getInitials(data.rule.communication_type.type)+'</p>'+
                      '</div>'+
                      '<div class="ml-2 flex my-auto">'+
                          '<div class="my-auto">'+
                              '<h1 class="text-sm my-0 font-semibold">'+data.rule+'</h1>'+
                          '</div>'+
                      '</div>'+
                  '</div>'+
                  '<div class="h-8 w-full flex items-center">'+
                      '<i class="mdi mdi-account"></i>'+
                    //   '<p class=" ml-1.5 my-auto text-xs">'+data.user.userrole[0].role.name+'</p>'+
                      '<div class="ml-auto mr-2 text-xs font-semibold">'+
                    //   '<a href="" onclick="show('+data.id+')" id="btn-show-'+data.id+'" data-link="'+data.link+'" data-how="'+data.rule.how+'" data-file="'+data.file+'" data-detail="'+data.rule.communication_type.description+'" class="text-yellow-400" data-te-toggle="modal" data-te-target="#show">'+
                      'Show >'+
                  '</a>'+
                      '</div>'+
                  '</div>'+
              '</div>'
                    $('#Uncomplete').append(row)
                })
        },
        error:function(response){
            console.log(response)
        }
    })
}
  function GetDataComplete(){

    $.ajax({
        type:'GET',
        url:'/data-receive-communication-dashboard-complete',
        success:function(response){
                $.each(response,function(index,data){
                  console.log(index)
                  var row = '<div class="block bg-green-200 rounded-lg p-3 mb-2" style="border: 2px solid green">'+
                  '<div class="h-2 p-2 items-center w-full flex justify-between ">'+
                      '<a href="" onclick="checkget('+data.id+')" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">'+
                          '<input type="checkbox" checked disabled style="cursor: pointer;">'+
                      '</a>'+
                      '<p class="rounded-md text-xs py-0.5 px-2 mt-3" style="background-color: green; color: white;">'+formatDate(data.date)+'</p>'+
                  '</div>'+
                  '<div class="h-16 flex p-2 items-center w-full ">'+
                      '<div class="h-12 flex w-12 rounded-circle" style="background-color:'+data.communication_type.color+'">'+
                          '<p class="text-white m-auto font-semibold">'+getInitials(data.communication_type.type)+'</p>'+
                      '</div>'+
                      '<div class="ml-2 flex my-auto">'+
                          '<div class="my-auto">'+
                              '<h1 class="text-sm my-0 font-semibold">'+data.communication_type.type+'</h1>'+
                          '</div>'+
                      '</div>'+
                  '</div>'+
                  '<div class="h-8 w-full flex items-center">'+
                      '<i class="mdi mdi-account"></i>'+
                      '<p class=" ml-1.5 my-auto text-xs">'+data.user.name+'</p>'+
                      '<div class="ml-auto mr-2 text-xs text-yellow-400 font-semibold">'+
                          '<a href="" id="btn-show1-'+data.id+'" data-message="'+data.message+'" data-detail="'+data.communication_type.description+'" class="text-black" data-te-toggle="modal" data-te-target="#show1">'+
                              'Show >'+
                          '</a>'+
                      '</div>'+
                  '</div>'+
              '</div>'
                    $('#Complete').append(row)
                })
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