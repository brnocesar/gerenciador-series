<?php

return [
    'confirm_password'              => 'As senhas devem ser iguais.',
    'email_unique'                  => 'Este e-mail já está sendo usado.',
    'max_char'                      => 'Máximo de caracteres ultrapassado',
    'min_password_length'           => 'A senha deve ter ao menos ',
    'missing_fields'                => 'Alguns campos são obrigatórios.',
    'should_be_an_email'            => 'Este campo deve ser um E-mail',
    
    'danger'                        => ['content' => "Conteúdo da mensagem de perigo.", 'status' => "danger"],
    'info'                          => ['content' => "Conteúdo da mensagem de informação.", 'status' => "info"],
    'success'                       => ['content' => "Conteúdo da mensagem de sucesso.", 'status' => "success"],
    'warning'                       => ['content' => "Conteúdo da mensagem de aviso.", 'status' => "warning"],

    'authentication' => [
        'user_already_logged'       => ['content' => "Usuário ja está logado!", 'status' => "success"],
        'session_closed'            => ['content' => "Sessão encerrada!", 'status' => "success"],
        'success_login'             => ['content' => "Login realizado!", 'status' => "success"],
        'user_created'              => ['content' => "Usuário registrado!", 'status' => "success"],
    ],

    'episodes' => [
        'watched_list_updated'      => ['content' => "A lista de episódios assistidos foi atualizada!", 'status' => "success"],
    ],

    'series' => [
        'serie_created'             => ['content' => "Série adicionada com sucesso!", 'status' => "success"],
        'serie_removed'             => ['content' => "Série removida com sucesso!", 'status' => "success"],
    ],
];
