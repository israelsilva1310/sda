create table periods
(
    id       int auto_increment
        primary key,
    period int null,
    bimester int                                 null,
    semester int                                 null,
    year     year                                null,
    created  datetime  default CURRENT_TIMESTAMP null,
    modified timestamp default CURRENT_TIMESTAMP null
);

null
);

