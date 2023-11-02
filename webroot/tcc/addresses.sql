create table addresses
(
    user_id    int unsigned  null,
    id         int unsigned auto_increment
        primary key,
    cep        int default 8 not null,
    street     varchar(255)  null,
    number     varchar(255)  null,
    complement varchar(255)  null,
    district   varchar(255)  null,
    constraint user_id
        foreign key (user_id) references users (id)
            on delete cascade
)
    charset = utf8mb3;

create index addr_user
    on addresses (user_id);

sses (user_id);

