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
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Informações</a></li>
                    <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a></li>
                    <li role="presentation"><a href="#instituicoes" aria-controls="instituicoes" role="tab" data-toggle="tab">Instituições</a></li>
                    <li role="presentation"><a href="#iniciativas" aria-controls="iniciativas" role="tab" data-toggle="tab">Iniciativa</a></li>
                    <li role="presentation"><a href="#servicos" aria-controls="servicos" role="tab" data-toggle="tab">Serviços</a></li>
                    <li role="presentation"><a href="#fotos" aria-controls="fotos" role="tab" data-toggle="tab">Fotos</a></li>
                    <li role="presentation"><a href="#sendLink" aria-controls="sendLink" role="tab" data-toggle="tab">Enviar p/ Revisão</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="home">
                        <br/>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-info"></i></div>
                                    <div class="panel-body">
                                        <p v-if="info.destaque == 1"><i class="fa fa-star fa-2x gold-star"></i></p>
                                        <p v-show="info.tipo.length > 0 "><strong>Tipo:</strong> @{{ info.tipo | uppercase }}</p>
                                        <p v-show="info.url.length > 0 "><i class="glyphicon glyphicon-link"></i> <a href="@{{ info.url }}">@{{ info.url }}</a></p>
                                        <p v-show="info.email != ''"><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:@{{ info.email }}">@{{ info.email }}</a></p>
                                        <p><strong>Última Atualização:</strong> @{{ info.updated_at }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-phone"></i></div>
                                    <div class="panel-body">
                                        <div v-for="t in info.telefones">
                                            <i class="glyphicon" v-bind:class="{'glyphicon-phone': t.telefoneTipo_id == 1,'glyphicon-phone-alt': t.telefoneTipo_id == 2,'glyphicon-earphone': t.telefoneTipo_id == 3 }"></i> @{{ t.telefone }} - @{{ t.responsavel }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default" v-show="info.objetivo.length > 0">
                                    <div class="panel-heading"><i class="fa fa-info"></i> Objetivo</div>
                                    <div class="panel-body">
                                        @{{ info.objetivo }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default" v-show="info.informacaoComplementar.length > 0">
                                    <div class="panel-heading"><i class="fa fa-info"></i> Informações Complementares</div>
                                    <div class="panel-body">
                                        @{{ info.informacaoComplementar }}
                                    </div>
                                </div>
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
                            <div class="col-sm-6">

                                <strong>Localidade:</strong> @{{ info.endereco.localidade | uppercase }} <br/>
                                <strong>Localização:</strong> @{{ info.endereco.localizacao | uppercase }}
                            </div>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="instituicoes">
                        <br/>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="it in info.instituicoes">
                                @{{ it.nome }} - @{{ it.nomeCidade }} - @{{ it.uf }}
                            </li>
                        </ul>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="iniciativas">
                        <br/>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-group">
                                    <li class="list-group-item" v-for="inic in info.iniciativas">
                                        @{{ inic.nome }} - @{{ inic.nomeCidade }} - @{{ inic.uf }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="servicos">
                        <br/>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-group">
                                    <li class="list-group-item" v-for="sv in info.servicos">
                                        @{{ sv }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="fotos">
                        <br/>
                        <div class="row" v-show="info.fotos.length > 0">
                            <div class="col-xs-6 col-md-3" v-for="foto in info.fotos">
                                <a href="#" class="thumbnail" v-on:click.prevent>
                                    <img src="/api/@{{ id }}/fotos/@{{ foto.nome }}" alt="@{{ foto.nome }}">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="sendLink">
                        <br/>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <p>
                                        <strong>Link para visualização dos dados deste PID:</strong> <a href="/pid/@{{ info.idPid }}/ver" target="_blank">{{ url('/') }}/pid/@{{ info.idPid }}/ver</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="sendEmail">Enviar p/ o e-mail:</label>
                                    <input type="text" name="sendEmail" class="form-control" value="@{{ info.email }}" v-model="sendEmail.email"/>
                                </div>
                                <div class="form-group">
                                    <button id="btnSendLink" class="btn btn-success" v-on:click="enviarLink($event)""><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div v-show="sendEmail.error" class="alert alert-danger">Não foi possivel enviar o e-mail.</div>
                                <div v-show="sendEmail.error_two" class="alert alert-danger">Este PID já se encontra em revisão.</div>
                                <div v-show="sendEmail.success" class="alert alert-success">E-mail enviado com sucesso.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button id="btnClose" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fim Modal Info -->