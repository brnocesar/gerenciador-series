@extends('components.layout')

@section('cabecalho')
(novo) Adicionar Série
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

    <form method="POST" action="{{ route('serie.action.store') }}">
        @csrf

        @include('components.form-input', ['type' => 'text', 'required' => 'true', 'name' => 'nome', 'label' => 'Nome'])

        <div class="row">

            @include('components.form-input', ['type' => 'number', 'min' => 1, 'max' => 50, 'col' => 'col-6', 'required' => 'true', 'name' => 'qtd_temporadas', 'label' => 'Temporadas'])
            
            <div class="form-group col-6 quantity">
                <label class="default-input" for="ep_por_temporada">Ep. / temporada</label>
                <input type="number" id="ep_por_temporada" name="ep_por_temporada" min="1" max="50" class="form-control default-input">
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
