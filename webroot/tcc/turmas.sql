create table turmas
(
    id            int unsigned auto_increment
        primary key,
    teacher_id    int                                 not null comment 'professor cordenador',
    cursos_id     int unsigned                        not null,
    sector_id     int                                 null,
    period_id     int                                 null,
    data_inicio   date                                null,
    data_final    date                                null,
    carga_horaria smallint unsigned                   null,
    name          varchar(255)                        null,
    acronym       varchar(10)                         null comment 'sigla da turma',
    collor        varchar(20)                         null,
    created       datetime  default CURRENT_TIMESTAMP null,
    modified      timestamp default CURRENT_TIMESTAMP null,
    constraint turmas_ibfk_1
        foreign key (cursos_id) references courses (id)
);

create index turmas_FKIndex1
    on turmas (cursos_id);

create index turmas_FKIndex2
    on turmas (teacher_id);

n turmas (teacher_id);

