$("document").ready(function(){


    $(".toggle-btn").click(function(){
        $("#networkForm").toggle();
    });

    $("#official").click(function(){
        alert("You'll be redirected to STC Official Website");
    });

    $("#insta").click(function(){
        alert("You'll be redirected to Instagram");
    });

    $("#face").click(function(){
        alert("You'll be redirected to Facebook");
    });

    $("#ordersPortal").click(function(){
        $("#orderTable").show();
        $("#enquiryTable").hide();
        $("#testimoinials").hide();
        $("#customerTable").hide();
        $("#enquiryTableCus").hide();
    });

    $("#enquiryPortal").click(function(){
        $("#orderTable").hide();
        $("#enquiryTable").show();
        $("#testimoinials").hide();
        $("#customerTable").hide();
        $("#enquiryTableCus").hide();
    });
    $("#testiPortal").click(function(){
        $("#orderTable").hide();
        $("#enquiryTable").hide();
        $("#testimoinials").show();
        $("#customerTable").hide();
        $("#enquiryTableCus").hide();
    });
    $("#orderCustomers").click(function(){
        $("#orderTable").hide();
        $("#enquiryTable").hide();
        $("#testimoinials").hide();
        $("#customerTable").show();
        $("#enquiryTableCus").hide();
    });
    $("#enquiryCustomers").click(function(){
        $("#orderTable").hide();
        $("#enquiryTable").hide();
        $("#testimoinials").hide();
        $("#customerTable").hide();
        $("#enquiryTableCus").show();
    });
});