create table sectors
(
    id       int auto_increment
        primary key,
    active   tinyint(1) default 1                 null,
    name     varchar(255)                         null,
    created  datetime   default CURRENT_TIMESTAMP null,
    modified timestamp  default CURRENT_TIMESTAMP null
);

ll
);

