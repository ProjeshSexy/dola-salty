$(document).ready(function(){
$("#buy-form").validate({
    rules:{
        "qty1":{
            required: true,

        },
        
        
        "title1":{
            required: true,
            

        },
        "author1":{
            required: true,

        },
        

        
    }


});




$("#buy_submit").click(function(){
    
    if($("#buy-form").valid()){

    var number1 = $('#qty1').val();  
    var number11 = $('#title1').val(); 
    var number111 = $('#author1').val(); 

    var number1111 = $('#publishers1').val(); 
    var number11111 =  $('#isbn1').val(); 

    var number2 = $('#qty2').val();   
    var number22 =$('#title2').val(); 
    
    var number222 = $('#author2').val(); 
    var number2222 = $('#publishers2').val(); 
    var number22222 = $('#isbn2').val(); 

    var number3 = $('#qty3').val();   
    var number33 = $('#title3').val();  
    var number333 =  $('#author3').val();  
    var number3333 = $('#publishers3').val();  
    var number33333 = $('#isbn3').val();  

    var number4 = $('#qty4').val();  
    var number44 =  $('#title4').val();  
    var number444 =  $('#author4').val(); 
    var number4444 = $('#publishers4').val();
    var number44444 =$('#isbn4').val(); 

    var number5 = $('#qty5').val();   
    var number55 = $('#title5').val(); 
    var number555 = $('#author5').val();
    var number5555 = $('#publishers5').val(); 
    var number55555 =$('#isbn5').val(); 

    var number6 = $('#qty6').val();   
    var number66 = $('#title6').val(); 
    var number666 = $('#author6').val();
    var number6666 = $('#publishers6').val(); 
    var number66666 = $('#isbn6').val(); 

   

    var number7 = $('#qty7').val();   
    var number77 = $('#title7').val(); 
    var number777 =$('#author7').val();
    var number7777 = $('#publishers7').val(); 
    var number77777 =$('#isbn7').val(); 

    var number8 =$('#qty8').val();   
    var number88 =$('#title8').val();  
    var number888 = $('#author8').val();
    var number8888 =$('#publishers8').val(); 
    var number88888 =  $('#isbn8').val(); 

    var number9 =$('#qty9').val();  
    var number99 =  $('#title9').val();   
    var number999 = $('#author9').val();
    var number9999 = $('#publishers9').val(); 
    var number99999 =  $('#isbn9').val(); 

    var number10 = $('#qty10').val();   
    var number10_2 =  $('#title10').val(); 
    var number10_3 = $('#author10').val(); 
    var number10_4 = $('#publishers10').val(); 
    var number10_5 = $('#isbn10').val(); 

    var number11 = $('#qty11').val();    
    var number11_2 = $('#title11').val();  
    var number11_3 =  $('#author11').val(); 
    var number11_4 = $('#publishers11').val(); 
    var number11_5 = $('#isbn11').val(); 

    var number12 = $('#qty12').val();   
    var number12_2 = $('#title12').val();  
    var number12_3 = $('#author12').val();  
    var number12_4 = $('#publishers12').val();  
    var number12_5 = $('#isbn12').val(); 




var myArray = Array(number1,number11,number111,number1111,number11111,
number2,number22,number222,number2222,number22222,
number3,number33,number333,number3333,number33333,
number4,number44,number444,number4444,number44444,

number5,number55,number555,number5555,number55555,
number6,number66,number666,number6666,number66666,

number7,number77,number777,number7777,number77777,
number8,number88,number888,number8888,number88888,

number9,number99,number999,number9999,number99999,
number10,number10_2,number10_3,number10_4,number10_5,

number11,number11_2,number11_3,number11_4,number11_5,
number12,number12_2,number12_3,number12_4,number12_5);

var myArray=JSON.stringify(myArray);
     $.ajax({
        type:"post",
            url:"../buy-from-us/buy_ajax.php",
    
            data:{
                
                "saleinfo":myArray,

                
                
            },
            success:function(msg){
             if(msg==0){
                //alert(msg);
                 $('#ModalLogin').modal();

                 checklogin();
                            
             //alert(msg);
                }else{
                    alert('success');
                    information(myArray);
                    window.location = '../success/success.php';
                }

                }   
                
                
            
});
 }
});


$("#sale-form").validate({
    rules:{
        "qty1":{
            required: true,

        },
        
        
        "title1":{
            required: true,
            

        },
        "author1":{
            required: true,

        },
        

        
    }


});

 $("#buy_submit_sale").click(function(){
    
 if($("#sale-form").valid()){
       var number1 = $('#qty1').val();  
    var number11 = $('#title1').val(); 
    var number111 = $('#author1').val(); 

    var number1111 = $('#publishers1').val(); 
    var number11111 =  $('#isbn1').val(); 

    var number2 = $('#qty2').val();   
    var number22 =$('#title2').val(); 
    
    var number222 = $('#author2').val(); 
    var number2222 = $('#publishers2').val(); 
    var number22222 = $('#isbn2').val(); 

    var number3 = $('#qty3').val();   
    var number33 = $('#title3').val();  
    var number333 =  $('#author3').val();  
    var number3333 = $('#publishers3').val();  
    var number33333 = $('#isbn3').val();  

    var number4 = $('#qty4').val();  
    var number44 =  $('#title4').val();  
    var number444 =  $('#author4').val(); 
    var number4444 = $('#publishers4').val();
    var number44444 =$('#isbn4').val(); 

    var number5 = $('#qty5').val();   
    var number55 = $('#title5').val(); 
    var number555 = $('#author5').val();
    var number5555 = $('#publishers5').val(); 
    var number55555 =$('#isbn5').val(); 

    var number6 = $('#qty6').val();   
    var number66 = $('#title6').val(); 
    var number666 = $('#author6').val();
    var number6666 = $('#publishers6').val(); 
    var number66666 = $('#isbn6').val(); 

   

    var number7 = $('#qty7').val();   
    var number77 = $('#title7').val(); 
    var number777 =$('#author7').val();
    var number7777 = $('#publishers7').val(); 
    var number77777 =$('#isbn7').val(); 

    var number8 =$('#qty8').val();   
    var number88 =$('#title8').val();  
    var number888 = $('#author8').val();
    var number8888 =$('#publishers8').val(); 
    var number88888 =  $('#isbn8').val(); 

    var number9 =$('#qty9').val();  
    var number99 =  $('#title9').val();   
    var number999 = $('#author9').val();
    var number9999 = $('#publishers9').val(); 
    var number99999 =  $('#isbn9').val(); 

    var number10 = $('#qty10').val();   
    var number10_2 =  $('#title10').val(); 
    var number10_3 = $('#author10').val(); 
    var number10_4 = $('#publishers10').val(); 
    var number10_5 = $('#isbn10').val(); 

    var number11 = $('#qty11').val();    
    var number11_2 = $('#title11').val();  
    var number11_3 =  $('#author11').val(); 
    var number11_4 = $('#publishers11').val(); 
    var number11_5 = $('#isbn11').val(); 

    var number12 = $('#qty12').val();   
    var number12_2 = $('#title12').val();  
    var number12_3 = $('#author12').val();  
    var number12_4 = $('#publishers12').val();  
    var number12_5 = $('#isbn12').val(); 




var myArray = Array(number1,number11,number111,number1111,number11111,
number2,number22,number222,number2222,number22222,
number3,number33,number333,number3333,number33333,
number4,number44,number444,number4444,number44444,

number5,number55,number555,number5555,number55555,
number6,number66,number666,number6666,number66666,

number7,number77,number777,number7777,number77777,
number8,number88,number888,number8888,number88888,

number9,number99,number999,number9999,number99999,
number10,number10_2,number10_3,number10_4,number10_5,

number11,number11_2,number11_3,number11_4,number11_5,
number12,number12_2,number12_3,number12_4,number12_5);

var myArray=JSON.stringify(myArray);
     $.ajax({
        type:"post",
            url:"../buy-from-us/buy_ajax.php",
    
            data:{
                
                "saleinfo":myArray,

                
                
            },
            success:function(msg){
             if(msg==0){
                //alert(msg);
                 $('#ModalLogin').modal();

                 checklogin();
                            
             //alert(msg);
                }else{
                    alert('success');
                    information(myArray);
                    window.location = '../success/success.php';
                }

                }   
                
                
            
});
 }
});
 function information(myArray){

    $.ajax({
            type:"post",
            url: "../success/mail_success.php",
            data:{
                "saleinfo":myArray,
                "op":"refresh-info",
            },
            success:function(msg){
                //$(".cart-items-inner").prepend(msg);
                //alert(msg);
                
            }
        });



 }

  function information_sale(myArray){

    $.ajax({
            type:"post",
            url: "../success/mail_success.php",
            data:{
                "saleinfo":myArray,
                "op":"refresh-sale",
            },
            success:function(msg){
                //$(".cart-items-inner").prepend(msg);
                //alert(msg);
                
            }
        });



 }

 
function checklogin(){

         $(".login_btn_page").click(function(){
    

    var saleinfo= $("#divForm").text();

    var u_name=$("#username_page").val();

    var password=$("#password_page").val();

    if(u_name=='' || password==''){
        $("#top").html("<p style='color:red'>please enter all the fields</p>");

    
    }else{
    
    $.ajax({
            type:"post",
            url: "../includes/models/m_log_reg.php",
            data:{
                
                "u-name":u_name,
                "password":password,
                "saleinfo":saleinfo,
                
                "op":"verify_user"
            },
            success:function(msg){
                //alert(msg);
                if(msg==1){
                    ////alert(msg);
                     $('#ModalLogin').hide();
                    window.location = '../success/success.php';

                  }else{
                    
                    $("#top").html("<p style='color:red'>please enter correct information</p>");

                    $('#ModalLogin').show();
                     
                      //success();
                    //window.location = '../buy-from-us/';
                }
                
                
            },
        
        });
}
});

    }


});



