create table shifts
(
    id              int auto_increment
        primary key,
    name            varchar(255)                        null comment 'nome do turno',
    sunday          tinyint(1)                          null comment 'domingo',
    monday          tinyint(1)                          null comment 'segunda',
    tuesday         tinyint(1)                          null comment 'Terça',
    wednesday       tinyint(1)                          null comment 'quarta',
    thursday        tinyint(1)                          null comment 'quinta',
    friday          tinyint(1)                          null comment 'sexta',
    saturday        tinyint(1)                          null comment 'sabado',
    amount_lessions int                                 null comment 'Quantidade de aulas',
    created         datetime  default CURRENT_TIMESTAMP null,
    modified        timestamp default CURRENT_TIMESTAMP null
)
    comment 'tabela de turnos e periodos';

s e periodos';

