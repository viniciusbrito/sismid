@extends('app')
@section('content')
    {!! Breadcrumbs::render('pidReviewEdit') !!}
    <div class="row">
        <div class="col-sm-12">
            <legend><i class="glyphicon glyphicon-edit"></i> Atualizar PID</legend>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    @include('partials.template_listagem')

    <div class="row" id="PID">

        {{-- Div Mensagem Alerta --}}
        <div class="col-sm-12">
            <div class="alert" v-bind:class="{ 'alert-danger':response.error, 'alert-success':!response.error }" v-show="response.show">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <div v-for="er in response.msg"><strong>@{{ er }}</strong><br/></div>
            </div>
        </div>
        {{-- Fim Div Mensagem Alerta --}}

        {{-- Div Mensagem Final--}}
        <div class="col-sm-12" v-show="sent">
            <p>
                Os dados foram enviados para revisão. Assim que possível será publicado. <br/>
                Agradecemos a sua contribuição
            <p/>
        </div>
        {{-- Fim Div Mensagem Final--}}

        <div class="col-sm-12" v-show="!sent">

            @include('revisao.pids.partials.form')

            <input type="hidden" name="session_email" id="session_email" value="{{ session('email') }}" v-model="session_email"/>
            <input type="hidden" name="session_pass" id="session_pass" value="{{ session('pass') }}" v-model="session_pass"/>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <button class="btn btn-success" type="submit" v-on:click="salvarPid($event)"><span class="glyphicon glyphicon-save"></span> Enviar</button>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-default" href="#cancelar">Cancerlar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection