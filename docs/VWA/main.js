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
                $("#element_"+a).css('display','none');
        });
        arr=html.split(";");
        arr.forEach(function(i){
            $("#element_"+i).css('display','inline');
        });
        
        $(".dropdown-menu li a.searchitem_master").html($("#search_input").val() != "" ? $("#element_"+arr[0]).text() : "<font color='gray'>Type something to search</font>");
    });
});