function getRegistrationData(phone) {
  $.ajax({
    url: "index.php?controller=testDriver&action=getPhone&phone=" + phone,
    type: "GET",
    dataType: "json",
    success: function (data) {
      displayRegistrationData(data);
    },
    error: function () {
      alert("Failed to retrieve registration data.");
    },
  });
}

function displayRegistrationData(data) {
  var table = $('<table class="table">');
  var thead = $("<thead>").appendTo(table);
  var tbody = $("<tbody>").appendTo(table);
  var headers = [
    "Tên",
    "Email",
    "Số điện thoại",
    "Loại xe muốn lái thử",
    "Thời gian lái thử",
    "Địa điểm lái thử",
    "Ngày sinh",
    "Giới tính",
  ];

  var headerRow = $("<tr>").appendTo(thead);
  for (var i = 0; i < headers.length; i++) {
    $("<th>").text(headers[i]).appendTo(headerRow);
  }

  for (var j = 0; j < data.length; j++) {
    var row = $("<tr>").appendTo(tbody);
    $("<td>").text(data[j]["name"]).appendTo(row);
    $("<td>").text(data[j]["email"]).appendTo(row);
    $("<td>").text(data[j]["phone"]).appendTo(row);
    $("<td>").text(data[j]["carType"]).appendTo(row);
    $("<td>").text(data[j]["time"]).appendTo(row);
    $("<td>").text(data[j]["location"]).appendTo(row);
    $("<td>").text(data[j]["dob"]).appendTo(row);
    $("<td>").text(data[j]["gender"]).appendTo(row);
  }

  $("#registrationTable").html(table);
}
