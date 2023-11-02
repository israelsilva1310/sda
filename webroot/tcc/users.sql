create table users
(
    id         int unsigned auto_increment
        primary key,
    first_name varchar(255) default ''                not null,
    last_name  varchar(255) default ''                not null,
    email      varchar(255) default ''                not null,
    role_id    int                                    null,
    status     varchar(50)  default 'registered'      not null comment 'registered, confirmed',
    password   varchar(255) default ''                not null,
    forget     varchar(255)                           null,
    document   varchar(11)                            null,
    photo      varchar(255)                           null,
    created_at timestamp    default CURRENT_TIMESTAMP not null,
    updated_at timestamp                              null on update CURRENT_TIMESTAMP,
    level      int                                    null,
    constraint email
        unique (email),
    constraint users_roles_id_fk
        foreign key (role_id) references roles (id)
)
    charset = utf8mb3;

 charset = utf8mb3;

