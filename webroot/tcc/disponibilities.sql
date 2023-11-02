create table disponibilities
(
    id         int auto_increment
        primary key,
    active     tinyint(1) default 1                 null,
    teacher_id int                                  not null,
    hour_id    int                                  not null,
    updated_at timestamp  default CURRENT_TIMESTAMP null on update CURRENT_TIMESTAMP,
    created_at timestamp  default CURRENT_TIMESTAMP null,
    `07:00`    tinyint(1)                           null,
    constraint fk_hour_id
        foreign key (hour_id) references hours (id),
    constraint fk_teache
        foreign key (teacher_id) references teachers (id)
)
    comment 'Table of disponibilityes in hours' charset = utf8mb3;

create index hour_id
    on disponibilities (hour_id);

create index teacher_id
    on disponibilities (teacher_id);

ities (teacher_id);

