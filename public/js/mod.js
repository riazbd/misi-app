var labels = document.querySelectorAll("label");

labels.forEach(function (label) {
    label.addEventListener("click", function (event) {
        event.preventDefault();
    });
});

function fetchUserInfo(ticketId) {
    $.ajax({
        url: "/to-formula",
        method: "get",
        data: { ticketId: ticketId },
        success: function (response) {
            console.log(response);
            console.log("Success");
            let textType = [];
            let numberType = [];
            let checkType = [];

            response.forEach((el) => {
                if (el.question.answer_type == "number") {
                    numberType.push(el);
                }

                if (el.question.answer_type == "text") {
                    textType.push(el);
                }

                if (el.question.answer_type == "check") {
                    checkType.push(el);
                }
            });

            console.log(numberType);

            if (numberType.length > 0) {
                let numberForm = $("#pib-pit-table-number-form");
                let numberTable = $('<table class="table table-bordered">');

                let th1 = $("<th>").text("Vragen");
                let th2 = $(
                    '<th style="width: 10%; word-wrap: break-word;">'
                ).text("ErnstSchaal 0-10");

                let headerRow = $("<tr>");

                headerRow.append(th1);
                headerRow.append(th2);

                numberTable.append(headerRow);

                numberForm.append(numberTable);

                numberType.forEach((el) => {
                    var tr = $("<tr>");

                    // Create and append the td elements to the tr
                    var td1 = $("<td>").text(el.question.question);
                    var td2 = $("<td >")
                        .html(
                            '<input style="width: 100%; border: none; border-bottom: 1px solid black;" type="number">'
                        )
                        .val(el.answer.answer);
                    tr.append(td1);
                    tr.append(td2);
                    // Append the tr to the table
                    numberTable.append(tr);
                });
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        },
    });
}

$(".pib-form-open").click(function () {
    var ticketId = $(this).data("ticket-id");
    fetchUserInfo(ticketId);
    $("#pib-form-modal").modal("show");
});
