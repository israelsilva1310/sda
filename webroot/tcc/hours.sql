create table hours
(
    id           int auto_increment
        primary key,
    description  varchar(255)                        null,
    shift_id     varchar(10)                         null comment 'periodo ou turno das aulas',
    hour_initial time                                null,
    hour_final   time                                null,
    day_week     varchar(20) charset latin1          null,
    active       tinyint(1)                          null,
    created_at   datetime                            null,
    updated_at   timestamp default CURRENT_TIMESTAMP null on update CURRENT_TIMESTAMP
)
    charset = utf8mb3;

 = utf8mb3;

