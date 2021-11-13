$(".table").DataTable();
$("#client").hide();

//word count
$("#message").keyup(function(){
    var words = $("#message").val();
    var num_contacts = $("#num").val();
    var length = words.length;
    var unit = Math.ceil(length/160);
    var price = unit*1*num_contacts;
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


function getContacts(id){
    axios.get('get/contacts/'+id)
    .then((response) => {
        document.getElementById("num").value = response.data;
        console.log(response.data);
    })
    .catch((error)=>{
        console.log(error);
    })
}