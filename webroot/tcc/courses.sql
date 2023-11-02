create table courses
(
    id                  int unsigned auto_increment
        primary key,
    teacher_coordinator varchar(255)      null,
    acronym             varchar(10)       null comment 'Sigla',
    name                varchar(50)       not null,
    requisito           varchar(255)      null,
    carga_horaria       smallint unsigned null
);

ull
);

