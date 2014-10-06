$("#search_button").click(function(){alert("hallo");});

$("#search_input").keyup(function(e){
    $.ajax({
        url: "search.php?q="+$("#search_input").val(),
    })
    .done(function( html ) {
        if(html=="MYSQL_ERROR"){
            alert("MYSQL_ERROR");
        }
        arr=html.split(";");
        arr.forEach(function(i){
            $("#"+i).css('background-color','red')
            
        });
    });
    
    $(".dropdown-menu li a").text($("#search_input").val());
});