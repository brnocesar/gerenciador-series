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

    'account' => [
        'password_updated'          => ['content' => "Senha atualizada.", 'status' => "success"],
        'password_not_updated'      => ['content' => "Não foi possível atualizar a senha.", 'status' => "danger"],

        'must_be_different'         => 'A antiga senha está incorreta.',
        'you_are_not'               => 'Você não é você.',
    ],

    'admin' => [
        'you_are_not'               => ['content' => "Você não é um Super Admin!", 'status' => "warning"],
    ],

    'authentication' => [
        'user_already_logged'       => ['content' => "Usuário ja está logado!", 'status' => "success"],
        'session_closed'            => ['content' => "Sessão encerrada!", 'status' => "success"],
        'success_login'             => ['content' => "Login realizado!", 'status' => "success"],
        'user_created'              => ['content' => "Usuário registrado!", 'status' => "success"],
    ],

    'episodes' => [
        'not_found'                 => ['content' => "Episódio não encontrado!", 'status' => "danger"],
        'watched_episode'           => ['content' => "Episódio assistido!", 'status' => "success"],
    ],

    'series' => [
        'added'                     => ['content' => "Série adicionada a sua lista.", 'status' => "success"],
        'already_added'             => ['content' => "Série já está na sua lista.", 'status' => "warning"],
        'not_found'                 => ['content' => "Série não encontrada!", 'status' => "danger"],
        'serie_created'             => ['content' => "Série adicionada com sucesso!", 'status' => "success"],
        'serie_removed'             => ['content' => "Série removida com sucesso!", 'status' => "success"],
    ],

    'temporadas' => [
        'not_found'                 => ['content' => "Temporada não encontrada!", 'status' => "danger"],
        'serie_removed'             => ['content' => "Série removida com sucesso!", 'status' => "success"],
    ],
];
