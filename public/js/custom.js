$('#mydatattable').DataTable({
        "dom": '<"pull-left"f><"pull-right"l>tip',
        "language": {
    "search": "بحث : ",
    "paginate": {
        "next":       "التالى",
        "previous":   "السابق"
    },
  }
});
// $('tableSelector').DataTable();
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

    $("input[name='is_mcq']").change(function(){
        $('#requireInfo').css('display','block');
        if($("input[name='is_mcq']:checked").val() == 1){
           
            $('#noMcqSection').css('display','none');
            $('#mcqSection').css('display','block');
        }else{
            
            $('#mcqSection').css('display','none');
            $('#noMcqSection').css('display','block');        
        }
    })
})
