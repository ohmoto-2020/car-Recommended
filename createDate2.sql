drop table if EXISTS members;

create table members (
  id bigint not null auto_increment primary key,
  name VARCHAR(100),
  email VARCHAR(255),
  password VARCHAR(255),
  created datetime);

  insert into
  members(name,email,password)
    values(
    'おーもと',
    'vitamin29290209@gmail.com',
    '70c881d4a26984ddce795f6f71817c9cf4480e79');
