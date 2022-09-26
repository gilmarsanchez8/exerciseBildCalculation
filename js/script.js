$(document).ready(function () {
  $("#formCalculation").submit(function (e) {
    $("#tblInfoBildCalculation > tbody").html("");
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "inc/functions.php",
      data: $(this).serialize(),
      success: function (response) {
        var resultsCalculation = "";
        var jsonData = JSON.parse(response);
        if (jsonData.success == "1") {
          resultsCalculation += "<tr>";
          resultsCalculation += "<td>" + jsonData.valueBudget + "</td>";
          resultsCalculation +=
            "<td>" + jsonData.valueMaximumVehicleAmount + "</td>";
          resultsCalculation += "<td>" + jsonData.valueBasic + "</td>";
          resultsCalculation += "<td>" + jsonData.valueSpecial + "</td>";
          resultsCalculation += "<td>" + jsonData.valueAssociation + "</td>";
          resultsCalculation += "<td>" + jsonData.valueStorage + "</td>";
          resultsCalculation += "</tr>";
          $("#tblInfoBildCalculation > tbody tr")
            .remove()
            .append(resultsCalculation);
          $("#tblInfoBildCalculation > tbody").append(resultsCalculation);
        } else {
          alert("Error");
        }
      },
    });
  });
});
