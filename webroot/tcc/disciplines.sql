create table disciplines
(
    id         int auto_increment
        primary key,
    name       varchar(255)                        not null,
    teacher_id int                                 null,
    course_id  int                                 null,
    workload   int                                 null comment 'carga horaria',
    created    datetime  default CURRENT_TIMESTAMP null,
    modified   timestamp default CURRENT_TIMESTAMP null,
    room_id    int                                 null comment 'Numero da sala'
);

sala'
);

