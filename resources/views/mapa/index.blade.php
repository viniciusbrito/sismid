@extends('app')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                {!! Form::label('uf', 'UF') !!}
                <select name="uf" id="uf" class="form-control">
                    <option value="0">Todos UF</option>
                    @foreach($uf as $index => $u)
                        <option value="{{ $index }}">{{ $u }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                {!! Form::label('cidade_id', 'Cidade') !!}
                {!! Form::select('cidade_id', [], null, ["class" => "form-control"]) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('agrupamento', 'Agrupamento') !!}
                {!! Form::select('agrupamento', [0 => 'Sem Agrupamento', 'estado' => 'Agrupar por estado', 'regiao' => 'Agrupar por região'], null, ["class" => "form-control"]) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-primary" id="btnFiltrar">Consultar</button>
                <button class="btn btn-sm btn-default" id="btnClear">Limpar</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
    </div>

@endsection
@section('script')
    @parent
    <script src="{{ asset('/assets/js/cidades.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0.2/src/markerclusterer.js"></script>
    <script src="{{ asset('/assets/js/estados/acCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/alCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/amCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/apCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/baCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/ceCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/dfCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/esCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/goCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/maCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/mgCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/msCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/mtCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/paCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/pbCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/peCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/piCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/prCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/rjCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/rnCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/roCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/rrCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/rsCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/scCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/seCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/spCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/estados/toCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/regioes/coCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/regioes/nCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/regioes/neCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/regioes/sCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/regioes/seCoords.js') }}"></script>
    <script src="{{ asset('/assets/js/mapa.js') }}"></script>

@stop