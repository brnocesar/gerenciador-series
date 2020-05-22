<div class="row fluid">
    @include('components.widgets.info-board',[
        'classCol'  => 'col-12 col-md-6 col-xl-3',
        'number'    => '1',
        'color'     =>'info',
        'icon'      =>'fas fa-users',
        'content'   => $users ?? 'erro',
        'label'     => 'Usuários registrados'
    ])
    @include('components.widgets.info-board',[
        'classCol'  => 'col-12 col-md-6 col-xl-3',
        'number'    => '2',
        'color'     =>'success',
        'icon'      =>'fas fa-chart-line',
        'content'   => $activeUsers ?? 'erro',
        'label'     => 'Usuários ativos hoje'
    ])
    @include('components.widgets.info-board',[
        'classCol'   => 'col-12 col-md-6 col-xl-3',
        'number'    => '3',
        'color'      =>'danger',
        'icon'       =>'fas fa-film',
        'content'    => $series ?? 'erro',
        'label'      => 'Séries registradas'
    ])
    @include('components.widgets.info-board',[
        'classCol'    => 'col-12 col-md-6 col-xl-3',
        'number'    => '4',
        'color'       =>'warning',
        'icon'        =>'fe-eye',
        'content'     => $episodios ?? 'erro',
        'label'       => 'Episódios assistidos hoje'
    ])
</div>