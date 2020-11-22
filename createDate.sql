drop table if EXISTS cars;

create table cars (
  id bigint not null auto_increment primary key,
  name VARCHAR(255),
  maker VARCHAR(255),
  price VARCHAR(255),
  style VARCHAR(255),
  size VARCHAR(255),
  country VARCHAR(255));

insert into
 cars(name,maker,price,style,size,country)
  values(
  'エクストレイル',
  'NI',
  '250~400',
  'かわいい',
  'おおきめ',
  '国産車'),
  ('A4',
  'AD',
  '450~600',
  'かっこいい',
  'ふつう',
  '外車'),
  ('Aクラス',
  'ME',
  '400~500',
  'かっこいい',
  'ふつう',
  '外車'),
  ('1シリーズ',
  'BM',
  '400~500',
  'かっこいい',
  'ふつう',
  '外車')
  ;
