<div class="fluid" style="background: #354349">
    <div class="row">
        @include('components.widgets.info-board',[
            'classCol'  => 'col-12 col-md-6 col-xl-3',
            'color'     =>'info',
            'icon'      =>'fas fa-users',
            'content'       => $dashboard['nao_atribuidas'] ?? 'erro',
            'label'     => 'Usuários registrados'
        ])
        @include('components.widgets.info-board',[
            'classCol'  => 'col-12 col-md-6 col-xl-3',
            'color'     =>'success',
            'icon'      =>'fas fa-chart-line',
            'content'       => $dashboard['em_operacao'] ?? 'erro',
            'label'     => 'Usuários ativos hoje'
        ])
        @include('components.widgets.info-board',[
            'classCol'   => 'col-12 col-md-6 col-xl-3',
            'color'      =>'danger',
            'icon'       =>'',
            'content'        => $dashboard['tres_min'] ?? 'erro',
            'label'      => 'Séries registradas'
        ])
        @include('components.widgets.info-board',[
            'classCol'    => 'col-12 col-md-6 col-xl-3',
            'color'       =>'warning',
            'icon'        =>'fe-eye',
            'content'         => $dashboard['cinco_min'] ?? 'erro',
            'label'       => 'Episódios assistidos'
        ])
    </div>
</div>