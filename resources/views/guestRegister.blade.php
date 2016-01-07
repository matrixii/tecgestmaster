
@extends('layouts.base')

@section('title', 'Page Title')
@section('bclass', 'menubar-hoverable header-fixed ')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-5/libs/wizard/wizard.css" />
    <style>
        .select2-drop{
            background: #e6e5e5;
        }
        input{
            background: transparent!important;
        }
        .select2-dropdown-open .select2-choice {
            background: transparent!important;
        }
        .select2-drop-active {
            border: 1px solid rgba(12, 12, 12, 0.12);
            border-top: 3px solid #eb0038;
            margin-top: -1px;

        }
        .select2-results .select2-highlighted {
            background: #D73855;
            color: #fff;
        }
        .form-wizard.form-wizard-horizontal .nav {

            padding-bottom: 14px;
        }
        .dropzone {
        width: 50%;
        height: 28px!important;
        float: right;
        margin-right: 76px;
        border: 2px solid #eb0038;
        margin-bottom: 22px;
        }

    </style>
@endsection

@section('content')
    <section class="section-account">
        <div class="img-backdrop" style="background-image: url('/assets/img/img16p.png')"></div>
        <div class="spacer"></div>
        <div class="card contain-sm style-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <br/>
                        <span class="text-lg text-bold text-primary">Registrazione</span>
                        <br/><br/>

                        <div id="wizard" class="form-wizard form-wizard-horizontal">
                            <form class="form-horizontal" role="form" novalidate="novalidate">
                                <div class="form-wizard-nav">
                                    <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                    <ul class="nav nav-justified">
                                        <li class="active"><a href="#tab1" data-toggle="tab"><span class="step">1</span> <span class="title">Informazioni generali</span></a></li>
                                        <li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span class="title">Indirizzi</span></a></li>
                                        <li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span class="title">Settaggi</span></a></li>
                                        <li><a href="#tab4" data-toggle="tab"><span class="step">4</span> <span class="title">Conferma</span></a></li>
                                    </ul>
                                </div><!--end .form-wizard-nav -->

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab1">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nome" class="control-label">Nome</label>
                                            <input type="text" name="nome" id="Nome" class="form-control">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Address" class="control-label">Cognome</label>
                                            <input type="text" name="Address" id="Address" class="form-control">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">Codice Fiscale</label>
                                                <input type="text" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">Email</label>
                                                <input type="text" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>


                                    </div><!--end #tab1 -->
                                    <div class="tab-pane" id="tab2">


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="provincia" class="control-label">Regione</label>
                                                <select name="provincia" class="form-control" id="regione">
                                                    <option></option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="comune" class="control-label">Provincia</label>
                                                <select name="comune" class="form-control" id="provincia">
                                                    <option></option>
                                                    <option value="-1">Selezionare</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cap" class="control-label">Cap</label>
                                                <select name="cap" class="form-control">
                                                    <option></option>
                                                    <option value="-1">Selezionare</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">Indirizzo</label>
                                                <input type="text" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">Civico</label>
                                                <input type="text" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>

                                    </div><!--end #tab2 -->
                                    <div class="tab-pane" id="tab3">
                                        <div class="col-sm-12">
                                                <img class="" src="/assets/img/avatar1.jpg" alt="">
                                                    <div class="dropzone dz-clickable" id="my-awesome-dropzone">

                                                        <div class="dz-message">
                                                            <h3>Trascina qui il file della tua foto profilo per caricarla</h3>
                                                            <em>(la foto non verra' caricata fino ad avvenuta registrazione)</em>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">NickName</label>
                                                <input type="text" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Address" class="control-label">Password</label>
                                                <input type="password" name="Address" id="Address" class="form-control">
                                            </div>
                                        </div>
                                    </div><!--end #tab3 -->
                                    <div class="tab-pane" id="tab4">
                                        <button type="button" class="btn btn-default-bright btn-block">Completa Registrazione</button>
                                    </div><!--end #tab4 -->
                                </div><!--end .tab-content -->
                                <ul class="pager wizard">
                                    <li class="previous first"><a href="javascript:void(0);">First</a></li>
                                    <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                    <li class="next last"><a href="javascript:void(0);">Last</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next</a></li>
                                </ul>
                            </form>
                        </div><!--end #rootwizard -->

                    </div><!--end .col -->

                </div><!--end .row -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </section>

@endsection
@section('footer_script')
    @parent
    <script src="/assets/js/libs/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript">

        function selectRegione()
        {
            var option;
            //$('#provincia').select2('destroy');
            $('#regione').find('option').remove();
            $.getJSON( "/ajax/province").done(function(data2) {
                var keys = [];
                $.jresults = data2;
                console.log($.jresults);
                $.jresults.forEach(function (element, index) {
                    console.log(element);
                    option = "<option value='" + element.id + "'>" + element.regione + "</option>";
                    $('#regione').append(option);
                });
            });
        }
        function selectProvincia(idComune)
        {
            var option;
            //$('#provincia').select2('destroy');
            $('#provincia').find('option').remove();
            $.getJSON( "/ajax/comuni/"+idComune).done(function(data2) {
                var keys = [];
                $.jresults = data2;
                console.log($.jresults);
                $.jresults.forEach(function (element, index) {
                    console.log(element);
                    option = "<option value='" + element.id + "'>" + element.descrizione + "</option>";
                    $('#provincia').append(option);
                });
            });
        }

        $(document).ready(function() {
            //inizializzo il wizard
            $('#wizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#wizard').find('.progress-bar').css({width:$percent+'%'});
            }});
            //chiamate ajax comuni
            selectRegione();
            $('#regione').on('change',function(e)
            {
                selectProvincia(e.val);
            });
        });

    </script>

@endsection