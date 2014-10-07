$("#search_button").click(function(){alert("hallo");});

id=Array(1,2,3,4,5,6,7);

$("#search_input").keyup(function(){
    $.ajax({
        url: "search.php?q="+$("#search_input").val(),
    })
    .done(function( html ) {
        if(html=="MYSQL_ERROR"){
            alert("MYSQL_ERROR");
        }
        id.forEach(function(a){
                $("#"+a).css('display','none');
        });
        arr=html.split(";");
        arr.forEach(function(i){
            $("#"+i).css('display','inline');
        });
    });
    
    $(".dropdown-menu li a").text($("#search_input").val());
});