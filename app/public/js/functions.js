$(document).ready( function () {
    fnSearch();
})


$('#btnSearchWork').click(fnSearch);

function fnSearch() {
    var search = $('#txtSearchWork').val();
    var route = 'work/' + search;
    var token = $('#token').val();
    var display = $('#codeWorkItems .container');

    display.html("");

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {search: search},
        success:function (response) {

            var accountant = 0;
            var htmlContent = "";

            $(response.data).each( function (key, value) {

                if ( accountant == 0) {

                    $(value).each( function (datakey, data) {

                        htmlContent += "<div class='row'>";
                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-home fa-3x'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 120) + "...</p>";
                        htmlContent += "    </div>";
                        htmlContent += "</div>";
                    });

                    accountant++;

                } else if ( accountant == 3 ) {

                    $(value).each( function (datakey, data) {

                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-home fa-3x'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 120) + "...</p>";
                        htmlContent += "    </div>";
                        htmlContent += "</div>";
                        htmlContent += "</div>";
                    });

                    accountant = 0;

                } else {

                    $(value).each( function (datakey, data) {

                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-home fa-3x'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 120) + "...</p>";
                        htmlContent += "    </div>";
                        htmlContent += "</div>";
                    });

                    accountant++;

                }

            });

            display.append(htmlContent);
        }
    });
}
