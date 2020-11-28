drop table if EXISTS members;

create table members (
  id bigint not null auto_increment primary key,
  name VARCHAR(100),
  email VARCHAR(255),
  password VARCHAR(255),
  created datetime);
