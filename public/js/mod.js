var labels = document.querySelectorAll("label");

labels.forEach(function (label) {
    label.addEventListener("click", function (event) {
        event.preventDefault();
    });
});


function fetchUserInfo(ticketId) {
    $.ajax({
      url: '/to-formula',
      method: 'get',
      data: { ticketId: ticketId },
      success: function(response) {
        console.log(response);
        console.log('Success');
      },
      error: function(xhr) {
        console.error(xhr.responseText);
      }
    });
  }


$('.pib-form-open').click(function () {
    var ticketId = $(this).data('ticket-id');
    fetchUserInfo(ticketId);
    $('#pib-form-modal').modal('show');
  });
