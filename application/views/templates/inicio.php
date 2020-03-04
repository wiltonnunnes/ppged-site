<style>

    .box-subitens {
        position: absolute;
        right: 35px;
        margin-right: 11px;
        top: 25px;
        z-index: 999;
    }

    @media only screen and (max-width: 900px) {    
        .box-subitens {
            top: 100px;
        }  
    }


    @media only screen and (min-width: 992px) {
        .navbar-custom-nav.sub-itens {
            margin: 3px 0;
        }
    }

    .navbar-custom-nav.sub-itens {
        background-color: #164194;
        border-bottom: none;
        margin: 0px 0 3px 5px;
        background-color: transparent;
        font-size: 14px;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .box-subitens .navbar-custom-nav {
        float: left;
        display: -ms-flexbox;
        display: flex;
    }

    @media only screen and (min-width: 1200px) {
        .navbar-custom-nav {
            margin-left: 0px;
        }
    }

    @media only screen and (min-width: 992px){
        .navbar-custom-nav {
        background-color: transparent;
        border-bottom: none;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        margin-left: 0;
        padding-top: 0px;
        }
    }

    .nav:before, .nav:after {
        position: absolute;
        display: table;
        content: " ";
    }

    @media only screen and (min-width: 376px) {
        .navbar-custom-nav.sub-itens>li {
            margin-left: 2px;
        }
    }

    .navbar-custom-nav.sub-itens>li {
        border-bottom: none;
        margin-left: 0px;
    }

    @media only screen and (min-width: 992px) {
        .navbar-custom-nav>li {
            background-color: transparent;
            padding: 0;
        }
    }

    .navbar-custom-nav>li {
        color: #fff;
    }

    .nav>li {
        position: relative;
        display: block;
    }

    .navbar-custom-nav.sub-itens .fa:not(.pull-right) {
        margin-right: -5px;
    }

    .box-subitens>ul>li>i.fa.fa-globe {
        padding-right: 10px;
    }

    .fa-globe:before {
        content: "\f0ac";
    }

    @media only screen and (min-width: 992px) {
        .navbar-custom-nav>li:after {
            border-bottom: none;
        }
    }

    .navbar-custom-nav>li:after {
        display: block;
        content: " ";
        border-bottom: 1px solid rgba(225,225,225,0.2);
        width: calc(100% - 30px);
        margin-left: auto;
        margin-right: auto;
        margin-bottom: -1px;
        z-index: 1;
        position: relative;
    }

    .navbar-custom-nav.sub-itens .idiomas {
        position: relative;
        background-color: transparent;
        padding-left: 0;
        box-shadow: none;
        border-top: none;
    }

    @media only screen and (min-width: 376px) {    
        .navbar-custom-nav.sub-itens>li {
            margin-left: 2px;
        }   
    }

    .navbar-custom-nav.sub-itens>li {
        border-bottom: none;
        margin-left: 0px;
    }

    .navbar-custom-nav.sub-itens .idiomas.ativo a {
        color: #79CBF2;
    }

    .navbar-custom-nav.sub-itens>li>a {
        text-transform: uppercase;
        font-weight: normal;
        padding: 0 3px;
    }

    .navbar-custom-nav>li>a {
        display: block;
    }

    @media only screen and (min-width: 992px) {
        .navbar-custom-nav>li>a, .navbar-custom-nav>li>a:hover, .navbar-custom-nav>li>a:focus {
            background-color: transparent;
        }
    }

    .navbar-custom-nav>li>a, .navbar-custom-nav>li>a:hover, .navbar-custom-nav>li>a:focus {
       
    }

    .navbar-custom-nav>li>a {
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        padding-left: 15px;
        padding-right: 15px;
        transition: all 250ms linear 0ms;
        border-bottom: none;
        padding-left: 15px;
        padding-right: 15px;
        display: inline-block;
    }

    @media only screen and (max-width: 992px) {
        .navbar-custom-nav>li>a {
            color: #fff;
        }

        #top_logo {
            margin-top:80%;
            margin-bottom:-110%;
        }
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }
    
    @media only screen and (min-width: 992px) {
        .navbar-custom-nav>li:after {
            border-bottom: none;
        }
    }
    
    .navbar-custom-nav>li:after {
        display: block;
        content: " ";
        border-bottom: 1px solid rgba(225,225,225,0.2);
        width: calc(100% - 30px);
        margin-left: auto;
        margin-right: auto;
        margin-bottom: -1px;
        z-index: 1;
        position: relative;
    }

    @media only screen and (min-width: 992px){
        .navbar-custom-nav.sub-itens {
            margin: 3px 0;
        }
    }

    .navbar-custom-nav.sub-itens {
        background-color: #164194;
        border-bottom: none;
        margin: 0px 0 3px 5px;
        background-color: transparent;
        font-size: 14px;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    @media (max-width: 1199px){
        .navbar-custom-nav {
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }

    .navbar-custom-nav.sub-itens .container-idiomas {
        background-color: #658EE0;
        font-size: 12px;
        border-radius: 3px;
        padding: 2px 6px;
        margin-top: -1.6px;
        color: #fff;
    }

    @media only screen and (min-width: 376px){
        .navbar-custom-nav.sub-itens>li {
            margin-left: 2px;
        }
    }

    .navbar-custom-nav.sub-itens>li {
        border-bottom: none;
        margin-left: 0px;
    }

    .navbar-custom-nav>li:last-of-type:after {
        border-bottom: none;
    }

    .navbar-custom-nav.sub-itens .container-idiomas a {
        background-color: transparent;
        transition: all 250ms linear 0ms;
    }

    .navbar-custom-nav.sub-itens .container-idiomas>a {
        padding: 0;
    }

    .navbar-custom-nav.sub-itens>li>a {
        text-transform: uppercase;
    }

    .collapse.in {
        display: block;
    }

    .navbar-custom-nav.sub-itens .idiomas li.ativo {
        display: none;
    }

    .navbar-custom-nav.sub-itens .idiomas li {
        padding: 0;
        border-bottom: none;
        margin: 7px 0;
    }

    .navbar-custom-subnav>li {
        display: block;
    }

    .navbar-custom-nav.sub-itens .idiomas li a {
        display: block;
        padding: 0;
        min-width: 10px;
        font-size: 12px;
        color: #fff;
    }

    .navbar-custom-nav.sub-itens .idiomas li a {
        text-transform: uppercase;
    }
    

</style>

<section class="intro carousel slide bg-overlay-light h-auto" id="carouselExampleCaptions">
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">

                    <nav class="navbar navbar-light justify-content-between" style="margin-top:8%">
                    <a class="navbar-brand" href="https://ufrn.br/">
                        <img src="img/brasao-ufrn.png" class="d-inline-block align-top" alt="logo UFRN" id="top_logo">
                    </a>
                    <form class="form-inline">
                    <div class="box-subitens">
                        <ul class="nav navbar-custom-nav sub-itens colapse d-none d-lg-flex">
                        <li><i class="fa fa-globe"></i></li>
                            <li class="idiomas ativo"><a title="Ir para versão em Português" href="/">PT</a></li>
                            <li><a title="Go to the version in English" href="en">en</a></li>
                            <li><a title="Ir para la versión en Español" href="es">es</a></li>
                            <li><a title="Aller à la version en Anglais" href="fr">fr</a></li>
                        </ul>
                        <ul class="nav navbar-custom-nav sub-itens d-lg-none">
                            <li class="divisor hidden-xs hidden-sm hidden-md"></li>
                            <li class="container-idiomas"><a title="Abrir/Fechar itens do sub-menu" href="#menuIdiomas" data-toggle="collapse" role="button" aria-expanded="false"><span class="ativo">PT</span><i class="fa fa-angle-down pull-right"></i></a>
                                <ul class="navbar-custom-subnav idiomas collapse" id="menuIdiomas">
                                    <li class="ativo"><a title="Ir para versão em Português" href="/">PT</a></li>
                                    <li><a title="Go to the version in English" href="en">en</a></li>
                                    <li><a title="Ir para la versión en Español" href="es">es</a></li>
                                    <li><a title="Aller à la version en Anglais" href="fr">fr</a></li>
                                </ul>
                            </li>
                        </ul>
                            
                    </form>
                    </nav>

                    

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
    </div>

</section>
