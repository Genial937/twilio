$(".table").DataTable();
$("#client").hide();

//word count
$("#message").keyup(function(){
    var words = $("#message").val();
    var length = words.length;
    var price = length*1;
    $("#show").css("display","block");
    $("#count").html(length);
    $("#price").html(price);
    console.log(length);
})

$("#show-client").on('change', function(){
    var name = this.value;
    if (name == 'Client') {
        $("#client").show();
    }else{
        $("#client").hide();
    }
})
