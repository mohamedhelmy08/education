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
    
    if($("input[name='is_mcq']:checked").val() == 1){
        $('#requireInfo').css('display','block');    
        $('#noMcqSection').css('display','none');
        $('#mcqSection').css('display','block');
    }else{
        $('#requireInfo').css('display','block');
        $('#mcqSection').css('display','none');
        $('#noMcqSection').css('display','block');        
    }

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

        window.MathJax = {
        jax: ["input/TeX", "output/HTML-CSS"],
        extensions: ["tex2jax.js", "[Contrib]/arabic/arabic.js"],
        TeX: {
          extensions: ["AMSmath.js", "AMSsymbols.js", "autoload-all.js"]
        },
        'HTML-CSS': {
              undefinedFamily: 'Amiri'
          },
        tex2jax: {
          inlineMath: [
            ['$', '$'],
            ["\\(", "\\)"]
          ],
          processEscapes: true
        },
        AuthorInit: function() {
          MathJax.Hub.Register.StartupHook("Begin", function() {
            MathJax.Ajax.config.path["Contrib"] = "https://cdn.mathjax.org/mathjax/contrib";
              // your code to run once MathJax is ready, e.g., custom extensions etc.        
            MathJax.Hub.Queue( function(){
              // something to queue after the initial typesetting is done
            }
            );
          });
        }
      };
      
      (function(d, script) {
        script = d.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.onload = function() {
          // remote script has loaded
        };
        script.src = 'https://cdn.mathjax.org/mathjax/latest/MathJax.js';
        d.getElementsByTagName('head')[0].appendChild(script);
      }(document));
})
