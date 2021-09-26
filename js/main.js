
$(document).ready(function(){
  let lrn_group = $("#lrn_group").val().trim();
  let fname = $("#fname").val().trim();
  let sname = $("#sname").val().trim();
  let birthdate = $("#birthdate").val().trim();

  $("#sendData").bind("click",function(){
    
    if(lrn_group==""){
      $(".message span").text("Введите группу");
      return false;
    } else if(fname==""){
      $(".message span").text("Введите Имя");
      return false;
    } else if(sname==""){
      $(".message span").text("Введите Фамилию");
      return false;
    } else if(birthdate==""){
      $(".message span").text("Введите Дату");
      return false;
    } else{

    }

    if ($(".message span").text()!=""){
      $(".message").css("bottom","10%");
      $(".message").css("animation","fadeMessage 4.5s ease-out");
    }

    $.ajax({
      url:"db.php",
      type:"POST",
      cache:false,
      data:{'lrn_group':lrn_group, 'fname':fname, 'sname':sname, 'birthdate':birthdate},
      dataType:'html',
      beforeSend: function(){
        $("#sendData").css("background","rgb(0, 122, 122)");
        $("#sendData").prop("disabled",true);
      },
      success: function(data){
        
        $("#sendData").css("background","rgb(0, 122, 122)");
        $("#sendData").prop("disabled",true);
      }
    });

    // $(".lrn_group").val('');
    // $(".fname").val('');
    // $(".sname").val('');
    // $(".birthdate").val('');

  });
});

