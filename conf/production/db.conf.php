<?php
/** \file
 *  \brief      Database configurations.
 *  \copyright	Copyright (c) 2007-2016 Fernando Val
 *  \warning    Este arquivo é parte integrante do framework e não pode ser omitido.
 */

/**
 *  \defgroup dbcfg_production Configurações de acesso a banco de dados para o ambiente 'production'
 *  \ingroup dbcfg.
 *
 *  As entradas colocadas nesse arquivo serão aplicadas apenas ao ambiente 'production'.
 *
 *  Seu sistema pode não possuir esse ambiente, então use-o como modelo para criação do arquivo de
 *  parâmetros de configuração para os ambientes que seu sistema possua.
 *
 *  Veja \link dbcfg Configurações de acesso a banco de dados \endlink para entender as entradas de configuração possíveis.
 *
 *  \see dbcfg
 */
/**@{*/

/// Configurações para o ambiente de Produção
$conf = [
    'round_robin' => [
        'type'        => 'file',
        'server_addr' => sysconf('VAR_PATH'),
        'server_port' => 11211,
    ],
    'cache' => [
        'type'        => 'off',
        'server_addr' => '127.0.0.1',
        'server_port' => 11211,
    ],
    'default' => [
        'database_type' => 'mysql',
        'host_name'     => 'db',
        'user_name'     => 'root',
        'password'      => 'Test',
        'database'      => 'Test',
        'charset'       => 'utf8',
        'persistent'    => false,
    ],
];

/**@}*/
