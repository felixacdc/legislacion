var dataWork;

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
            dataWork = response;

            $(response.data).each( function (key, value) {

                if ( accountant == 0) {

                    $(value).each( function (datakey, data) {

                        htmlContent += "<div class='row'>";
                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'></i>";
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
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'></i>";
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
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'></i>";
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

function Mostrar(btn) {
    var dataShow;
    $('.learning-item').remove();

    $(dataWork.data).each( function (key, value) {

            $(value).each( function (datakey, data) {

                if ( data.id == btn.id )
                    dataShow = data;
            });
    });

    $('.modal-title').text(dataShow.name);
    htmlContent = "<div class='learning-item'><p>" + dataShow.description1 + "</p></div>";
    htmlContent += "<div class='learning-item'><p>" + dataShow.description2 + "</p></div>";

    $('#learnings').append(htmlContent);

    fnSliderText();

    var owl = $('.owl-carousel').data('#learnings');
    owl.onRefreshed();
}

function fnSliderText () {
    $("#learnings").owlCarousel({
		navigation : true,
		pagination : false,
		slideSpeed : 700,
		paginationSpeed : 400,
		singleItem:true,
		navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
	});
}
