var dataWork;
var dataCommercial;

$(document).ready( function () {

    $("#goWork").click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#codeWork").offset().top
        }, 2000);
    });

    $("#goCommercial").click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#codeCommercial").offset().top
        }, 2000);
    });

    fnSearch($('#codeWorkItems .container'), $('#txtSearchWork').val(), 'work/', '#token', 1);
    fnSearch($('#codeCommercialItems .container'), $('#txtSearchCommercial').val(), 'commercial/', '#tokenTwo', 2);

    $('#txtSearchWork').keypress(function (event) {
        if (event.which == 13) {
            fnSearch($('#codeWorkItems .container'), $('#txtSearchWork').val(), 'work/', '#token', 1);
        }
    });

    $('#txtSearchCommercial').keypress(function (event) {
        if (event.which == 13) {
            fnSearch($('#codeCommercialItems .container'), $('#txtSearchCommercial').val(), 'commercial/', '#tokenTwo', 2);
        }
    });

    $('#btnSearchWork').click(function () {
        fnSearch($('#codeWorkItems .container'), $('#txtSearchWork').val(), 'work/', '#token', 1);
    });

    $('#btnSearchCommercial').click(function () {
        fnSearch($('#codeCommercialItems .container'), $('#txtSearchCommercial').val(), 'commercial/', '#tokenTwo', 2);
    });

})


function fnSearch(display, search, url, idToken, identifier, link = 1) {

    var route = url + search;
    var token = $(idToken).val();

    display.html("");

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'json',
        data: {search: search},
        success:function (response) {

            var accountant = 0;
            var htmlContent = "";

            if ( identifier == 1 )
                dataWork = response;
            else
                dataCommercial = response;

            $(response.data).each( function (key, value) {

                if ( accountant == 0) {

                    $(value).each( function (datakey, data) {
                        htmlContent += "<div class='row'>";
                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this, " + identifier + ");' data-toggle='modal' data-target='#myModal'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 100) + "...</p>";
                        htmlContent += "    </div>";
                        htmlContent += "</div>";
                    });

                    accountant++;

                } else if ( accountant == 3 ) {

                    $(value).each( function (datakey, data) {

                        htmlContent += "<div class='col-md-3 text-center wow animated zoomIn'>";
                        htmlContent += "    <div class='service-item'>";
                        htmlContent += "        <div class='service-icon'>";
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this, " + identifier + ");' data-toggle='modal' data-target='#myModal'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 100) + "...</p>";
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
                        htmlContent += "            <i class='fa fa-gavel fa-3x' id='" + data.id + "' OnClick='Mostrar(this, " + identifier + ");' data-toggle='modal' data-target='#myModal'></i>";
                        htmlContent += "        </div>";
                        htmlContent += "        <h3>" + data.name + "</h3>"
                        htmlContent += "        <p>" + data.begin.substr(0, 100) + "...</p>";
                        htmlContent += "    </div>";
                        htmlContent += "</div>";
                    });

                    accountant++;

                }

            });

            display.append(htmlContent);

            if (link == 2)
                if ( identifier == 1 ) {
                    $('html,body').animate({
                        scrollTop: $("#codeWork").offset().top
                    }, 2000);
                }
                else {
                    $('html,body').animate({
                        scrollTop: $("#codeCommercial").offset().top
                    }, 2000);
                }
        }
    });
}

function Mostrar(btn, identifier) {
    var dataShow;
    // $('#learnings').remove();
    $('.modal-body').html('<h3 class="text-center">Cargando ...</h3>');

    if ( identifier == 1 )
    {    $(dataWork.data).each( function (key, value) {

                $(value).each( function (datakey, data) {

                    if ( data.id == btn.id )
                        dataShow = data;
                });
        });
    } else {
        $(dataCommercial.data).each( function (key, value) {

                $(value).each( function (datakey, data) {

                    if ( data.id == btn.id )
                        dataShow = data;
                });
        });
    }

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



    showComment('comment/', btn.id, htmlContent);


}

function showComment(url, id, htmlBefore) {
    $.ajax({
        url: url + id,
        type: 'GET',
        dataType: 'json',
        success: function (response) {

            // $('#showComments').remove();

            var div = "<div id='learnings'></div>";
            $('.modal-body').html(div);

            var div = "<h4>Descripción:</h4><div id='showComments'></div>";
            $('.modal-body').append(div);


            htmlContent = "";

            if ( response.data.description1 != null )
                htmlContent = "<div class='showComments-item'><p>" + response.data.description1 + "</p></div>";

            if ( response.data.description2 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description2 + "</p></div>";

            if ( response.data.description3 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description3 + "</p></div>";

            if ( response.data.description4 != null )
                htmlContent += "<div class='showComment-item'><p>" + response.data.description4 + "</p></div>";

            if ( response.data.description5 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description5 + "</p></div>";

            if ( response.data.description6 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description6 + "</p></div>";

            if ( response.data.description7 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description7 + "</p></div>";

            if ( response.data.description8 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description8 + "</p></div>";

            if ( response.data.description9 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description9 + "</p></div>";

            if ( response.data.description10 != null )
                htmlContent += "<div class='showComments-item'><p>" + response.data.description10 + "</p></div>";

            $('#learnings').append(htmlBefore);
            $('#showComments').append(htmlContent);


            fnSliderText();

            $('.linkGo').click(function (){
                $('#myModal').modal('hide');
                fnSearch($('#codeWorkItems .container'), $(this).data('search'), 'work/', '#token', 1, 2);
            });

            $('.linkGoCommercial').click(function (){
                $('#myModal').modal('hide');
                fnSearch($('#codeCommercialItems .container'), $(this).data('search'), 'commercial/', '#tokenTwo', 2, 2);
            });

            $('[data-toggle="popover"]').popover();

        }
    });

}

function fnSliderText () {

    var owl = $('.owl-carousel');

    var owlInstance = owl.data('owlCarousel');

    if(owlInstance != null)
        owlInstance.reinit();

    $("#learnings, #showComments").owlCarousel({
		navigation : true,
		pagination : false,
		slideSpeed : 700,
		paginationSpeed : 400,
		singleItem:true,
        items: 2,
		navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
	});
}
