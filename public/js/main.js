$(".table").DataTable();
$("#client").hide();
$("#warn").hide();
$("#spin").hide();
//word count
$("#message").keyup(function(){
    var words = $("#message").val();
    var num_contacts = $("#num").val();
    var length = words.length;
    var unit = Math.ceil(length/160);
    var price = unit*1*num_contacts;
    var balance = $("#balance").val();
    if (balance < price) {
        $("#warn").show();
    }
    $("#show").css("display","block");
    document.getElementById("count").innerHTML = length;
    document.getElementById("price").innerHTML = price;
    
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
        
    })
    .catch((error)=>{
        console.log(error);
    })
}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Send Sms
$("#send-sms").submit(function(e){
    e.preventDefault();
    var tag_id = $("#tag_id").val();
    var message = $("#message").val();
    var price = document.getElementById("price").innerHTML;
    var balance = document.getElementById("balance").value;
    
    if (price < balance) {
        alert(balance)
        $("#warn").show();
    } else {
        $("#spin").show();
        data = [
            tag_id,
            message,
            price,
            balance
        ]
        axios.post('/send/sms', data)
        .then((response) => {
            $("#spin").show();
            console.log(response);
        })
        .catch((error)=>{
            console.log(error);
        })
    }

})
