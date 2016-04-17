$(document).ready( function () {
    fnSearch();
})


$('#btnSearchWork').click(fnSearch);

function fnSearch() {
    var search = $('#txtSearchWork').val();
    var route = 'work/' + search;
    var token = $('#token').val();
    var display = $('#codeWorkItems');

    // alert(search + route + token);

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {search: search},
        success:function (response) {
            $(response.data).each( function (key, value) {

                $(value).each( function (datakey, data) {

                    htmlContent = "<br><br><br>";
                    htmlContent += "<div class='col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn'>";
                    htmlContent += "    <div class='service-item'>";
                    htmlContent += "        <div class='service-icon'>";
                    htmlContent += "            <i class='fa fa-home fa-3x'></i>";
                    htmlContent += "        </div>";
                    htmlContent += "        <h3>" + data.name + "</h3>"
                    htmlContent += "        <p>" + data.description1.substr(0, 120) + "...</p>";
                    htmlContent += "    </div>";
                    htmlContent += "</div>";

                    display.append(htmlContent);
                    console.log(data.id);
                });

            });
        }
    });
}
