create table teachers
(
    id            int auto_increment
        primary key,
    qrcode        text                                 null,
    hash          varchar(255)                         null,
    first_name    varchar(255)                         not null,
    last_name     varchar(255)                         not null,
    acronym       varchar(10)                          null,
    user_id       int                                  null,
    discipline_id int                                  null,
    email         varchar(255)                         null,
    title         varchar(100)                         null comment 'titulo da graduação',
    phone         varchar(14)                          null,
    active        tinyint(1) default 1                 null,
    created_at    datetime                             null,
    updated_at    timestamp  default CURRENT_TIMESTAMP null on update CURRENT_TIMESTAMP
);

T_TIMESTAMP
);

