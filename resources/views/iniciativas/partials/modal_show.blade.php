<!-- Modal Info -->
<div class="modal fade"     id="modalInfo" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="glyphicon glyphicon-info-sign"></i> @{{ info.nome | uppercase }}</h4>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#iniInfo" aria-controls="iniInfo" role="tab" data-toggle="tab">Informações</a></li>
                    <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a></li>
                    <li role="presentation"><a href="#instituicoes" aria-controls="instituicoes" role="tab" data-toggle="tab">Instituições</a></li>
                    <li role="presentation"><a href="#dimensoes" aria-controls="dimensoes" role="tab" data-toggle="tab">Dimensões</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="iniInfo">
                        <br/>
                        <div class="row">
                            <div class="col-sm-6">
                                <p v-show="info.tipo.length > 0 "><strong>Tipo:</strong> @{{ info.tipo | uppercase }}</p>
                                <p v-show="info.categoria.length > 0 "><strong>Categoria:</strong> @{{ info.categoria | uppercase }}</p>
                                <p v-show="info.fonte.length > 0 "><strong>Fonte:</strong> <a href="@{{ info.fonte }}">@{{ info.fonte }}</p>
                                <p v-show="info.url.length > 0 "><i class="glyphicon glyphicon-link"></i> <a href="@{{ info.url }}">@{{ info.url }}</a></p>
                                <p v-show="info.email != ''"><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:@{{ info.email }}">@{{ info.email }}</a></p>
                            </div>

                            <div class="col-sm-6">
                                <p>
                                <div v-for="t in info.telefones">
                                    <i class="glyphicon" v-bind:class="{'glyphicon-phone': t.telefoneTipo_id == 1,'glyphicon-phone-alt': t.telefoneTipo_id == 2,'glyphicon-earphone': t.telefoneTipo_id == 3 }"></i> @{{ t.telefone }} - @{{ t.responsavel }}
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="row" v-show="info.objetivo.length > 0">
                            <div class="col-sm-12">
                                <h3>Objetivo</h3>
                                <p class="text-justify">@{{ info.objetivo }}</p>
                            </div>
                        </div>

                        <div class="row" v-show="info.informacaoComplementar.length > 0">
                            <div class="col-sm-12">
                                <h3><i class="fa fa-info"></i> Informações Complementares</h3>
                                <p class="text-justify">@{{ info.informacaoComplementar }}</p>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="endereco">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="thumbnail">
                                    <img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=800x350&maptype=roadmap&markers=color:red%7Clabel:%7C@{{ info.endereco.latitude }},@{{ info.endereco.longitude }}&key=AIzaSyCsOdEoVwUQhPynqvu6OeA6qC9jsVniSlE" alt="Localização"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <strong>
                                    @{{ info.endereco.logradouro | uppercase }},
                                    @{{ info.endereco.numero }},
                                    @{{ info.endereco.complemento | uppercase }} <br/>
                                    @{{ info.endereco.bairro | uppercase }} <br/>
                                    @{{ info.endereco.cep }} - @{{ info.endereco.cidade | uppercase }} - @{{ info.endereco.uf }}
                                </strong>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="instituicoes">
                        <br/>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="it in info.instituicoes">
                                @{{ it.nome }} - @{{ it.nomeCidade }} - @{{ it.uf }} -- @{{ it.tipoVinculo }}
                            </li>
                        </ul>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="dimensoes">
                        <br/>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-group">
                                    <li class="list-group-item" v-for="di in info.dimensoes">
                                        @{{ di }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fim Modal Info -->