create table rooms
(
    id       int unsigned auto_increment
        primary key,
    location varchar(255)                        not null,
    name     varchar(100)                        null,
    created  timestamp default CURRENT_TIMESTAMP null,
    modified timestamp default CURRENT_TIMESTAMP null on update CURRENT_TIMESTAMP,
    active   tinyint   default 1                 null
)
    comment 'Tb de salas';

 salas';

