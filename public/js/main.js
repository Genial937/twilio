$(".table").DataTable();
$("#client").hide();
$("#warn").hide();
$("#spin").hide();
$("#fail").hide();
$("#success").hide();
$("#alert").hide();
//word count
$("#message").keyup(function(){
    var words = $("#message").val();
    var num_contacts = $("#num").val();
    var length = words.length;
    var vendor = $("#vendor").val();
    //console.log(vendor);
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
    $("#spin").show();
    var tag_id = $("#tag_id").val();
    var message = $("#message").val();
    var price = document.getElementById("price").innerHTML;
    var balance = document.getElementById("balance").value;
    
    if (price > balance) {
        $("#warn").show();
    } else {
        $("#spin").show();
        data = {
            tag_id: tag_id,
            message: message,
            price: price,
            balance: balance
        };
        axios.post('/send/sms', data)
        .then((response) => {
            console.log(response);
            $("#spin").hide();
            var tag_id = $("#tag_id").val("");
            var message = $("#message").val("");
            $("#show").css("display","none");
            if (response.data === 400) {
                $("#warn").show();
            } else {
                $("#success").show();
            }
        })
        .catch((error)=>{
            var tag_id = $("#tag_id").val("");
            var message = $("#message").val("");
            $("#show").css("display","none");
            $("#fail").show();
            $("#spin").hide();
            console.log(error);
        })
    }

})

// Send airtime
$("#send-airtime").submit(function(e){
    e.preventDefault();
    $("#spin").show();
    var tag_id = $("#tag_id").val();
    var amount = $("#amount").val();
    var data = {
        tag_id: tag_id,
        amount: amount
    }
    axios.post('/send/airtime', data)
    .then((response)=>{
        $("#spin").hide();
        $("#alert").show();
        document.getElementById("response_text").innerHTML = response.data;
       console.log(response.data)
    })
    .catch((error) => {
        $("#spin").hide();
        console.log(error)
    })
})