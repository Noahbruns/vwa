$("#search_input").keyup(function(key){
    $.ajax({
        url: "search.php?q="+$("#search_input").val(),
    })
    .done(function( html ) {
        if(html=="MYSQL_ERROR"){
            alert("MYSQL_ERROR");
        }
        
        $("#element_container").children().css('display','none');
        
        arr=html.split(";");
        arr.forEach(function(i){
            $("#element_"+i).css('display','inline');
        });
        
        $(".dropdown-menu li a.searchitem_master").html($("#search_input").val() != "" ? $("#element_"+arr[0]).text() : "<font color='gray'>Type something to search</font>");
        $(".dropdown-menu li a.searchitem_count").children().html((arr.length-1)+" elements found");
    });
    
    if(key.keyCode==13){
        load_element(arr[0]);
    }
});

function load_element(id) {
    $.ajax({
        url: "element_pop.php?id="+id,
    })
    .done(function( html ) {
        arr=html.split(";", 2);
        
        $(".modal-title").html(arr[1]);
        $(".modal-body").html(arr[2]);
        
        $('#element_modal').modal('show');
    });
}