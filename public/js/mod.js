let labels = document.querySelectorAll("label");

labels.forEach(function (label) {
    label.addEventListener("click", function (event) {
        event.preventDefault();
    });
});

function fetchFormInfo(ticketId, formType) {
    $.ajax({
        url: "/to-formula",
        method: "get",
        data: { ticketId: ticketId, formType: formType },
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
                    let td2 = $("<td >").html(
                        '<input style="width: 100%; border: none; border-bottom: 1px solid black;" type="number" name="' +
                            el.answer.id +
                            '" value="' +
                            el.answer.answer +
                            '">'
                    );
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
                    let options = el.question.options.split(/\s*,\s*/);

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
                        ).html(
                            '<input type="radio" name="' +
                                el.answer.id +
                                '" class="group-checkbox" data-group="group' +
                                el.answer.id +
                                '" value="' +
                                option +
                                '">'
                        );

                        let innerTd2 = $("<td>").text(option);
                        console.log(el.answer.answer);
                        console.log(option);

                        if (option == el.answer.answer) {
                            console.log("matched");

                            innerTd1 = $(
                                '<td class="" style="width: 5%">'
                            ).html(
                                '<input type="radio" name="' +
                                    el.answer.id +
                                    '" class="group-checkbox" data-group="group' +
                                    el.answer.id +
                                    '" value="' +
                                    option +
                                    '" checked>'
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
                    let td2 = $("<td >").html(
                        '<input style="width: 100%; border: none; border-bottom: 1px solid black;" type="text" name="' +
                            el.answer.id +
                            '" value="' +
                            el.answer.answer +
                            '">'
                    );
                    tr.append(td1);
                    tr.append(td2);
                    // Append the tr to the table
                    textTable.append(tr);
                });
            }

            // let form = $("#pib-pit-table-form");

            $("#pib-form-modal").modal("show");
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        },
    });
}

$(".pib-form-open").click(function () {
    let ticketId = $(this).data("ticket-id");
    let formType = $(this).data("form-type");

    // $("#pib-form-modal").data("ticket-id", ticketId);
    // $("#pib-form-modal").data("form-type", formType);

    fetchFormInfo(ticketId, formType);
});

// $("#pib-form-modal").on("shown.bs.modal", function () {
//     let ticketId = $(this).data("ticket-id");
//     let formType = $(this).data("form-type");

//     fetchFormInfo(ticketId, formType);
//   });

$("#pib-form-modal").on("hidden.bs.modal", function () {
    $("#pib-pit-table-form").empty();
});

document
    .getElementById("pib-pit-submit")
    .addEventListener("click", function () {
        $("#pib-pit-table-form").submit();
    });
$("#pib-pit-table-form").submit(function (event) {
    event.preventDefault(); // Prevent form submission

    var formData = $(this).serialize(); // Serialize form data
    console.log(formData);

    $.ajax({
        url: $(this).attr("action"),
        type: "GET",
        data: formData,
        success: function (response) {
            // Handle success response
            console.log(response);
            Swal.fire("Success!", "Form updated", "success");
        },
        error: function (xhr) {
            // Handle error response
            console.log(xhr.responseText);
            Swal.fire("Error!", "Request failed", "error");
        },
    });
});

function getHistories(ticketId) {
    $.ajax({
        url: '/get-histories', // Replace with your Laravel route
        type: 'GET',
        data: {
            id: ticketId
        },
        success: function(response) {
            // Populate the "Assign To" select input with the retrieved users
            var history_card = $('#history-card');
            const histories = [];
            $.each(response.histories, function(index, history) {

                var history_content = $('<div class="card p-5"></div>').html(
                    '<div class="card-body" id="history-body"></div>').html(
                    history.comment);

                histories.push(history_content)


            });

            history_card.html(histories);

            console.log(response.histories)
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
