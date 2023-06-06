let labels = document.querySelectorAll("label");

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
                let numberForm = $("#pib-pit-table-form");
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
                    let tr = $("<tr>");

                    // Create and append the td elements to the tr
                    let td1 = $("<td>").text(el.question.question);
                    let td2 = $("<td >")
                        .html(
                            '<input style="width: 100%; border: none; border-bottom: 1px solid black;" type="number" name="' +
                                el.answer.id +
                                '">'
                        )
                        .val(el.answer.answer);
                    tr.append(td1);
                    tr.append(td2);
                    // Append the tr to the table
                    numberTable.append(tr);
                });
            }

            if (checkType.length > 0) {
                let checkForm = $("#pib-pit-table-form");
                let checkTable = $(
                    '<table class="table table-bordered"></table>'
                );

                checkForm.append(checkTable);

                checkType.forEach((el) => {
                    let tr = $("<tr>");
                    let options = el.question.options.split(",");

                    console.log(options);

                    // Create and append the td elements to the tr
                    let td1 = $('<td class="w-25">').text(el.question.question);
                    tr.append(td1);

                    let td2 = $('<td class="p-0">');
                    let innerTable = $('<table class="w-100">');

                    options.forEach((option) => {
                        let innerTr = $("<tr>");
                        let innerTd1 = $(
                            '<td class="" style="width: 5%">'
                        ).html('<input type="checkbox" name="option">');

                        let innerTd2 = $("<td>").text(option);

                        if (option == el.answer.answer) {
                            innerTd1 = $(
                                '<td class="" style="width: 5%">'
                            ).html(
                                '<input type="checkbox" name="option" checked>'
                            );
                        }

                        innerTr.append(innerTd1);
                        innerTr.append(innerTd2);
                        innerTable.append(innerTr);
                    });

                    td2.append(innerTable);
                    tr.append(td2);

                    // Append the tr to the table
                    checkTable.append(tr);
                });
            }

            if (textType.length > 0) {
                let textForm = $("#pib-pit-table-form");
                let textTable = $('<table class="table table-bordered">');

                textForm.append(textTable);

                textType.forEach((el) => {
                    let tr = $("<tr>");

                    // Create and append the td elements to the tr
                    let td1 = $('<td style="width: 35%">').text(
                        el.question.question
                    );
                    let td2 = $("<td >")
                        .html(
                            '<input style="width: 100%; border: none; border-bottom: 1px solid black;" type="text" name="' +
                                el.answer.id +
                                '">'
                        )
                        .val(el.answer.answer);
                    tr.append(td1);
                    tr.append(td2);
                    // Append the tr to the table
                    textTable.append(tr);
                });
            }

            // let form = $("#pib-pit-table-form");
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        },
    });
}

$(".pib-form-open").click(function () {
    let ticketId = $(this).data("ticket-id");
    fetchUserInfo(ticketId);
    $("#pib-form-modal").modal("show");
});
