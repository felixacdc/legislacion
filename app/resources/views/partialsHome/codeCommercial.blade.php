<!-- Service section -->
<section id="codeCommercial">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2 class="wow animated bounceInLeft">Codigo de Comercio</h2>

                <div class="conteiner">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="subscribe-form wow animated fadeInUp">
                            <div class="input-field">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenTwo">
                                <input type="text" id="txtSearchCommercial" class="subscribe form-control" placeholder="Busca un articulo...">
                                <button type="button" class="submit-icon" id="btnSearchCommercial">
                                    <i class="fa fa-search fa-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div id="codeCommercialItems">
                <div class="container">

                </div>
            </div>

        </div>
    </div>
</section>
<!-- end Service section -->
