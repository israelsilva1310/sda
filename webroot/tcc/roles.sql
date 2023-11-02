create table roles
(
    id          int auto_increment
        primary key,
    description varchar(100)                         null,
    ativo       tinyint(1) default 1                 null,
    created     datetime   default CURRENT_TIMESTAMP null invisible,
    modified    timestamp  default CURRENT_TIMESTAMP null invisible
);

le
);

