create table teacher_disponibilities
(
    id                int auto_increment
        primary key,
    teacher_id        int                                 null,
    disponibilitie_id int                                 null,
    created           datetime  default CURRENT_TIMESTAMP null,
    modified          timestamp default CURRENT_TIMESTAMP null
);

ll
);

