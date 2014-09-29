$("#search_button").click(function(){alert("hallo");});

$("#search_input").keypress(function(){
    i=$(".master div").first();
    while(typeof i !== "undefined"){
        alert(i.html());
        i=i.next(".col-md-2");
    }
    
    $(".dropdown-menu li a").text($("#search_input").val());
});