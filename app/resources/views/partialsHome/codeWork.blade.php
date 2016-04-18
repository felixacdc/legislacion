<!-- Service section -->
<section id="codeWork">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2 class="wow animated bounceInLeft">Codigo de Trabajo</h2>

                <div class="conteiner">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
                            <div class="input-field">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                                <input type="text" id="txtSearchWork" class="subscribe form-control" placeholder="Busca un articulo...">
                                <button type="button" class="submit-icon" id="btnSearchWork">
                                    <i class="fa fa-search fa-lg"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div id="codeWorkItems">
                <div class="container">

                </div>
            </div>


        </div>
    </div>
</section>
<!-- end Service section -->
