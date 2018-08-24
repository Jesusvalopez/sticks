$('#sales').DataTable();
$(".select2").select2();


$("#deliveryCheckbox").on('change', function (e) {


    var checked = $(this).is(':checked');

    if(checked){

        $('#deliveryAmount').removeAttr("disabled");

    }else{

        $('#deliveryAmount').attr("disabled", true);


    }
});

$("#newSaleBtn").click(function(){
    $("#saleContainer").slideToggle();
});
