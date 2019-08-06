$('#mydatattable').DataTable();

function assignData(url){
    $('#deleteConfirm').attr("action" , url);
}
$('#document').ready(function(){

    if($( "#selectStage option:selected") .val() == 2){
        $('#is_adaby').css('display','block')  
    } 

    $('#selectStage').change(function(){
        $("#selectStage option:selected" ).each(function() {
             if($( this ).val() == 2){
                $('#is_adaby').css('display','block')
             }else{
                $('#is_adaby').css('display','none')
             }
          });
    });

    $('#changeState').change(function(){
        $('#changeStateForm').submit();
    })


})
