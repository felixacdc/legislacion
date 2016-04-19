var dataWork;

$(document).ready( function () {
    fnSearch($('#codeWorkItems .container'), $('#txtSearchWork').val());
    
    $('#btnSearchWork').click(function () {
        fnSearch($('#codeWorkItems .container'), $('#txtSearchWork').val());
    });
})


function fnSearch(display, search) {

    var route = 'work/' + search;
    var token = $('#token').val();

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
    $('#learnings').remove();
    var div = "<div id='learnings'></div>";
    $('.modal-body').append(div);


    $(dataWork.data).each( function (key, value) {

            $(value).each( function (datakey, data) {

                if ( data.id == btn.id )
                    dataShow = data;
            });
    });

    $('.modal-title').text(dataShow.name);

    if ( dataShow.description1 != null )
        htmlContent = "<div class='learning-item'><p>" + dataShow.description1 + "</p></div>";

    if ( dataShow.description2 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description2 + "</p></div>";

    if ( dataShow.description3 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description3 + "</p></div>";

    if ( dataShow.description4 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description4 + "</p></div>";

    if ( dataShow.description5 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description5 + "</p></div>";

    if ( dataShow.description6 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description6 + "</p></div>";

    if ( dataShow.description7 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description7 + "</p></div>";

    if ( dataShow.description8 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description8 + "</p></div>";

    if ( dataShow.description9 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description9 + "</p></div>";

    if ( dataShow.description10 != null )
        htmlContent += "<div class='learning-item'><p>" + dataShow.description10 + "</p></div>";

    $('#learnings').append(htmlContent);

    fnSliderText();
}

function fnSliderText () {

    var owl = $('.owl-carousel');

    var owlInstance = owl.data('owlCarousel');

    if(owlInstance != null)
        owlInstance.reinit();

    $("#learnings").owlCarousel({
		navigation : true,
		pagination : false,
		slideSpeed : 700,
		paginationSpeed : 400,
		singleItem:true,
        items: 2,
		navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
	});
}
