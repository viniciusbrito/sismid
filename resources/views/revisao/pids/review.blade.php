@extends('app')
@section('content')
    {!! Breadcrumbs::render('pidReviewConfirm') !!}
    <div class="row">
        <div class="col-sm-12">
            <legend><i class="glyphicon glyphicon-edit"></i> Revisão de PID</legend>
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

        <div class="col-sm-12">

            @include('revisao.pids.partials.form_review')

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <button class="btn btn-success" type="submit" v-on:click="salvarPid($event)"><span class="glyphicon glyphicon-save"></span> Enviar</button>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-default" href="{{ route('review.pid.index') }}">Cancerlar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection