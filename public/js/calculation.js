function sendGetDracmaCalculation(urlURI) {
    var reputation = document.getElementById("reputacao");
    var lb = document.getElementById("LB");
    var afb = document.getElementById("AFB");
    var ab = document.getElementById("AB");
    var mb = document.getElementById("MB");
    var re = document.getElementById("RE");
    $.ajax({
        type: "POST", url: urlURI + "/GetCalculationDracma",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { 
            "reputation": reputation.options[reputation.selectedIndex].text,
            "LightsBlessing" : lb.checked,
            "AfroditeBlessing" : afb.checked,
            "ArcaneBlessing" : ab.checked,
            "MidaBlessing" : mb.checked,
            "RankEpico" : re.checked
        },
        success: function(response) {
            document.getElementById("calculo").innerHTML = response;
        }
    });
}