@extends('components.layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')

@include('components.messages.flash')
@include('components.messages.error')

<div class="d-flex justify-content-end">
    @include('components.link-button', [
        'href'   => route('series.page.index'),
        'color'  => 'back-btn', 
        'margin' => 'mb-2', 
        'icon'   => 'fas fa-arrow-left', 
        'label'  => 'Voltar', 
    ])
</div>

<form method="POST" action="{{ route('registra_serie') }}">
    @csrf

    <div class="form-group">
        <label class="series" for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control series">
    </div>

    <div class="row">
        <div class="form-group col-6">
            <label class="series" for="qtd_temporadas">Temporadas</label>
            <input type="number" id="qtd_temporadas" name="qtd_temporadas" min="1" max="50" class="form-control series">
        </div>
        <div class="form-group col-6 quantity">
            <label class="series" for="ep_por_temporada">Ep. / temporada</label>
            <input type="number" id="ep_por_temporada" name="ep_por_temporada" min="1" max="50" class="form-control series">
            <div class="arrows-qtd">
                <div class="quantity-button arrows-up" onclick="btnUp()">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="quantity-button arrows-down" onclick="btnDown()">
                    <i class="fas fa-minus"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-2">
        @include('components.button', [
            'color'  => 'series', 
            'icon'   => 'fas fa-save', 
            'label'  => 'Salvar'
        ])
    </div>
</form>

<script>
    function btnUp() {
        var input = document.querySelector("#ep_por_temporada");
        var oldValue = parseFloat(input.value);
        var max = input.getAttribute('max');

        if ( isNaN(oldValue) ) {
            input.value = 1;
            return;
        }
        
        if ( oldValue >= max ) {
            var newVal = max;
        } else {
            var newVal = oldValue + 1;
        }
        input.value = newVal;
    };

    function btnDown() {
        var input = document.querySelector("#ep_por_temporada");
        var oldValue = parseFloat(input.value);
        var min = input.getAttribute('min');

        if ( isNaN(oldValue) ) {
            input.value = 1;
            return;
        }
        
        if ( oldValue <= min ) {
            var newVal = min;
        } else {
            var newVal = oldValue - 1;
        }
        input.value = newVal
    };
</script>

@endsection
