$(document).ready(function() {
    var date = new Date();
    var today = date.toISOString().slice(0, 10);
    document.getElementById('checkDate').valueAsDate = date;
    $("#checkDate").val(today);
    $("#checkDate").attr('min', today);

    $(".timePicker").click(function() {
        alert("Handler for .click() called.");
    });

    $('.phonenumb').inputmask("+7 (999) 999-99-99");

});

function getdate(e) {
    // var date = e.target.value
    var date = $('#checkDate').val() ;
    var houseid = $('.form-select').val();
    console.log(date, houseid)
    getTimes(date, houseid);
}

function getTimes(date, houseid) {
    $.ajax({
            method: "POST",
            url: "/api/time-request.php",
            data: {
                date: date,
                houseid: houseid
            },
        })
        .done(function(response) {
            $(".showTime").html(response);
        });
}

function getHouses() {
    $.ajax({
            method: "POST",
            url: "/api/houses-request.php"
        })
        .done(function(response) {
            $(".showTime").html(response);
        });
}

function sendForm() {
  var date = $('#checkDate').val();
  var houseid = $('.form-select').val();
  var phonenumb = $('.phonenumb').val().replace(/[^+\d]/g, '');
  var flatnumb = $('#flat-select').val();
  var transfer_date = $('.checkbox-item:checked').val();
  console.log(date, houseid, phonenumb, flatnumb, transfer_date);
      $.ajax({
            method: "POST",
            url: "/api/send-form.php",
            data: {
                date: date,
                houseid: houseid,
                phonenumb: phonenumb,
                flatnumb: flatnumb,
                transfer_date: transfer_date
            },
        })
        .done(function(response) {
          // alert(response)
            $(".send-result").html(response);
        });
}
