drop table if EXISTS cars;

create table cars (
  id bigint not null auto_increment primary key,
  name VARCHAR(255),
  maker VARCHAR(255),
  price VARCHAR(255),
  style VARCHAR(255),
  size VARCHAR(255),
  country VARCHAR(255),
  uses VARCHAR(255));

insert into
 cars(name,maker,price,style,size,country,uses)
  values(
  -- 国産
  -- トヨタ
  -- コンパクト
  'アクア',
  'TO',
  '180~260',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  ('ヤリス',
  'TO',
  '140~250',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('パッソ',
  'TO',
  '120~190',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('スペイド',
  'TO',
  '190~220',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('カローラスポーツ',
  'TO',
  '220~290',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('ルーミー',
  'TO',
  '160~210',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  -- セダン
  ('プレミオ',
  'TO',
  '200~270',
  'おしゃれ',
  'おおきい',
  '国産車',
  '街乗り'),
  ('カローラ',
  'TO',
  '190~290',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('プリウス',
  'TO',
  '260~360',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('プリウスPHV',
  'TO',
  '330~440',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('カムリ',
  'TO',
  '350~460',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('クラウン',
  'TO',
  '490~740',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('MIRAI',
  'TO',
  '740~',
  'おしゃれ',
  'おおきい',
  '国産車',
  '街乗り'),
  ('センチュリー',
  'TO',
  '2000~',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
-- ミニバン
  ('アルファード',
  'TO',
  '350~760',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('ヴェルファイア',
  'TO',
  '350~760',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('ヴォクシー',
  'TO',
  '280~340',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('ノア',
  'TO',
  '250~340',
  'シンプル',
  'おおきい',
  '国産車',
  '街乗り'),
  ('エスクァイア',
  'TO',
  '300~350',
  'おしゃれ',
  'おおきい',
  '国産車',
  '街乗り'),
  ('グランエース',
  'TO',
  '620~650',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('ハイエース',
  'TO',
  '290~400',
  'シンプル',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('シエンタ',
  'TO',
  '180~260',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  -- ワゴン
  ('カローラツーリング',
  'TO',
  '200~360',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- SUV
  ('ハリアー',
  'TO',
  '300~500',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('RAV4',
  'TO',
  '270~400',
  'かっこいい',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('ランドクルーザー',
  'TO',
  '480~700',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  'アウトドア'),
  ('ランドクルーザープラド',
  'TO',
  '360~550',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  'アウトドア'),
  ('ハイラックス',
  'TO',
  '350~390',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  'アウトドア'),
  ('C-HR',
  'TO',
  '240~310',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('ライズ',
  'TO',
  '170~210',
  'おしゃれ',
  'ふつう',
  '国産車',
  'アウトドア'),
  ('ヤリスクロス',
  'TO',
  '180~280',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- スポーツ
  ('コペンGR',
  'TO',
  '240~',
  'かっこいい',
  'ちいさい',
  '国産車',
  'スポーツ'),
  ('スープラ',
  'TO',
  '500~730',
  'かっこいい',
  'ふつう',
  '国産車',
  'スポーツ'),
  ('86',
  'TO',
  '270~350',
  'かっこいい',
  'ふつう',
  '国産車',
  'スポーツ'),
  -- レクサス
  -- コンパクト
  ('CT',
  'LE',
  '390~490',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  -- セダン
  ('LS',
  'LE',
  '1070~1730',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('ES',
  'LE',
  '600~710',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('IS',
  'LE',
  '480~650',
  'かっこいい',
  'おおきい',
  '国産車',
  'スポーツ'),
  -- クーペ
  ('LC',
  'LE',
  '1350~1500',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  'スポーツ'),
  ('RC',
  'LE',
  '580~730',
  'かっこいい',
  'おおきい',
  '国産車',
  'スポーツ'),
  -- アウトドア
  ('LX',
  'LE',
  '1140~',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  'アウトドア'),
  ('RX',
  'LE',
  '520~800',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('NX',
  'LE',
  '450~610',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('UX',
  'LE',
  '400~540',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  -- MITSUOKA
  ('ビュート',
  'MT',
  '260~320',
  'レトロ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('ロックスター',
  'MT',
  '480~530',
  'レトロ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('ヒミコ',
  'MT',
  '520~620',
  'レトロ',
  'おおきい',
  '国産車',
  '街乗り'),
  ('リューギ',
  'MT',
  '260~360',
  'レトロ',
  'おおきい',
  '国産車',
  '街乗り'),
  -- 日産
  -- 軽
  ('デイズ',
  'NI',
  '130~170',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ルークス',
  'NI',
  '140~190',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  -- コンパクト
  ('ノート',
  'NI',
  '140~220',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  ('マーチ',
  'NI',
  '130~190',
  'かわいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- セダン
  ('シーマ',
  'NI',
  '820~930',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('フーガ',
  'NI',
  '500~720',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('スカイライン',
  'NI',
  '450~620',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('ティアナ',
  'NI',
  '260~360',
  'シンプル',
  'おおきい',
  '国産車',
  '街乗り'),
  ('シルフィ',
  'NI',
  '200~270',
  'シンプル',
  'おおきい',
  '国産車',
  '街乗り'),
  ('リーフ',
  'NI',
  '330~500',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- ミニバン
  ('エルグランド',
  'NI',
  '370~760',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('セレナ',
  'NI',
  '260~420',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('キャラバン',
  'NI',
  '220~420',
  'シンプル',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('バネット',
  'NI',
  '180~270',
  'シンプル',
  'おおきい',
  '国産車',
  '街乗り'),
  -- SUV
  ('エクストレイル',
  'NI',
  '250~390',
  'かっこいい',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('キックス',
  'NI',
  '270~290',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  -- スポーツ
  ('GT-R',
  'NI',
  '1080~2420',
  'かっこいい',
  'おおきい',
  '国産車',
  'スポーツ'),
  ('フェアレディZ',
  'NI',
  '390~650',
  'かっこいい',
  'おおきい',
  '国産車',
  'スポーツ'),
  -- ホンダ
  -- 軽
  ('N-ONE',
  'HO',
  '160~200',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('N-WGN',
  'HO',
  '130~180',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('N-BOX',
  'HO',
  '140~220',
  'かっこいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('S660',
  'HO',
  '200~230',
  'かっこいい',
  'ちいさい',
  '国産車',
  'スポーツ'),
  -- コンパクト
  ('フィット',
  'HO',
  '150~230',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('シャトル',
  'HO',
  '180~280',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('シビック',
  'HO',
  '300~',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  -- セダン
  ('クラリティ',
  'HO',
  '600~',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('レジェンド',
  'HO',
  '720~',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('アコード',
  'HO',
  '460~',
  'かっこいい',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  ('インサイト',
  'HO',
  '330~370',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  -- ミニバン
  ('オデッセイ',
  'HO',
  '350~430',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('ステップワゴン',
  'HO',
  '270~410',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('フリード',
  'HO',
  '200~300',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
-- SUV
  ('CR-V',
  'HO',
  '340~460',
  'シンプル',
  'おおきい',
  '国産車',
  '街乗り'),
  ('ヴェゼル',
  'HO',
  '210~360',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- スポーツ
  ('NSX',
  'HO',
  '2420~',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
-- マツダ
-- コンパクト
  ('MAZDA2',
  'MA',
  '140~280',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('MAZDA3',
  'MA',
  '220~400',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  -- セダン
  ('MAZDA6',
  'MA',
  '290~450',
  'おしゃれ',
  'おおきい',
  '国産車',
  '街乗り'),
  -- SUV
  ('CX-3',
  'MA',
  '190~340',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  ('CX-30',
  'MA',
  '240~400',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('CX-5',
  'MA',
  '260~410',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('CX-8',
  'MA',
  '290~490',
  'おしゃれ',
  'すごくおおきい',
  '国産車',
  '街乗り'),
  -- スポーツ
  ('ロードスター',
  'MA',
  '260~390',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  -- スバル
  ('レヴォーグ',
  'SB',
  '310~410',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('インプレッサスポーツ',
  'SB',
  '200~290',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  -- SUV
  ('XV',
  'SB',
  '220~290',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('フォレスター',
  'SB',
  '290~330',
  'かっこいい',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('レガシィアウトバック',
  'SB',
  '340~360',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  -- スポーツ
  ('WRX',
  'SB',
  '420~470',
  'かっこいい',
  'おおきい',
  '国産車',
  'スポーツ'),
  -- ダイハツ
  -- 軽
  ('ミライース',
  'DA',
  '85~140',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ミラトコット',
  'DA',
  '110~150',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('キャスト',
  'DA',
  '130~170',
  'おしゃれ',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('タフト',
  'DA',
  '130~170',
  'おしゃれ',
  'ちいさい',
  '国産車',
  'アウトドア'),
  ('ムーヴ',
  'DA',
  '140~180',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('タント',
  'DA',
  '120~200',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ムーヴキャンバス',
  'DA',
  '130~170',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ウェイク',
  'DA',
  '140~190',
  'シンプル',
  'ちいさい',
  '国産車',
  'アウトドア'),
  ('コペン',
  'DA',
  '190~',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  -- スズキ
  -- 軽
  ('アルト',
  'SZ',
  '85~130',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('アルトワークス',
  'SZ',
  '150~170',
  'シンプル',
  'ちいさい',
  '国産車',
  'スポーツ'),
  ('ラパン',
  'SZ',
  '120~150',
  'かわいい',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ワゴンR',
  'SZ',
  '110~160',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ハスラー',
  'SZ',
  '130~180',
  'おしゃれ',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('スペーシア',
  'SZ',
  '160~200',
  'シンプル',
  'ちいさい',
  '国産車',
  '街乗り'),
  ('ジムニー',
  'SZ',
  '150~190',
  'おしゃれ',
  'ちいさい',
  '国産車',
  'アウトドア'),
  -- コンパクト
  ('イグニス',
  'SZ',
  '140~200',
  'かわいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('クロスビー',
  'SZ',
  '180~225',
  'おしゃれ',
  'ふつう',
  '国産車',
  '街乗り'),
  ('スイフト',
  'SZ',
  '140~210',
  'かっこいい',
  'ふつう',
  '国産車',
  'スポーツ'),
  ('ソリオ',
  'SZ',
  '150~210',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  ('エスクード',
  'SZ',
  '270~280',
  'おしゃれ',
  'ふつう',
  '国産車',
  'アウトドア'),
  -- SUV
  ('ジムニーシエラ',
  'SZ',
  '180~210',
  'おしゃれ',
  'ふつう',
  '国産車',
  'アウトドア'),
  -- 三菱
  -- コンパクト
  ('ミラージュ',
  'MI',
  '140~160',
  'シンプル',
  'ふつう',
  '国産車',
  '街乗り'),
  -- ミニバン
  ('デリカD:5',
  'MI',
  '390~440',
  'かっこいい',
  'おおきい',
  '国産車',
  'アウトドア'),
  -- SUV
  ('アウトランダー',
  'MI',
  '270~340',
  'かっこいい',
  'おおきい',
  '国産車',
  'アウトドア'),
  ('アウトランダーPHEV',
  'MI',
  '440~530',
  'かっこいい',
  'おおきい',
  '国産車',
  '街乗り'),
  ('エクリプスクロス',
  'MI',
  '260~350',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  ('RVR',
  'MI',
  '210~230',
  'かっこいい',
  'ふつう',
  '国産車',
  '街乗り'),
  -- 外車
  -- メルセデスベンツ
  -- コンパクト
  ('Aクラス',
  'ME',
  '360~800',
  'かっこいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('Bクラス',
  'ME',
  '420~450',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  -- セダン
  ('Cクラス',
  'ME',
  '490~1460',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('Eクラス',
  'ME',
  '730~1880',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('Sクラス',
  'ME',
  '1200~2620',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- SUV
  ('EQC',
  'ME',
  '1080~',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('Gクラス',
  'ME',
  '1240~2200',
  'おしゃれ',
  'おおきい',
  '外車',
  'アウトドア'),
  ('GLA',
  'ME',
  '500~900',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('GLB',
  'ME',
  '510~700',
  'おしゃれ',
  'おおきい',
  '外車',
  'アウトドア'),
  ('GLC',
  'ME',
  '700~1500',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('GLE',
  'ME',
  '950~1330',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('GLS',
  'ME',
  '950~1330',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- ミニバン
  ('Vクラス',
  'ME',
  '780〜940',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- クーペ
  ('CLAクラス',
  'ME',
  '470~870',
  'かっこいい',
  'おおきい',
  '外車',
  'スポーツ'),
  ('CLSクラス',
  'ME',
  '840~1340',
  'かっこいい',
  'すごくおおきい',
  '外車',
  'スポーツ'),
  ('SLクラス',
  'ME',
  '1340~2400',
  'かっこいい',
  'おおきい',
  '外車',
  'スポーツ'),
-- メルセデスAMG
  ('GT',
  'AM',
  '1780~2450',
  'かっこいい',
  'おおきい',
  '外車',
  'スポーツ'),
-- smart
  ('フォーツー',
  'MC',
  '270~310',
  'かわいい',
  'ちいさい',
  '外車',
  '街乗り'),
  ('フォーフォー',
  'MC',
  '220~320',
  'かわいい',
  'ふつう',
  '外車',
  '街乗り'),
  -- BMW
  -- コンパクト
  ('1シリーズ',
  'BM',
  '340~640',
  'かっこいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('2シリーズ',
  'BM',
  '390~530',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  -- セダン
  ('3シリーズ',
  'BM',
  '490~1010',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  ('5シリーズ',
  'BM',
  '680~1800',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('7シリーズ',
  'BM',
  '1100~2600',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- SUV
  ('X1',
  'BM',
  '440~540',
  'かっこいい',
  'ふつう',
  '外車',
  'アウトドア'),
  ('X2',
  'BM',
  '450~700',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('X3',
  'BM',
  '670~1210',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  ('X4',
  'BM',
  '690~1240',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('X5',
  'BM',
  '940~1860',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('X6',
  'BM',
  '990~1900',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('X7',
  'BM',
  '1100~1600',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- クーペ
  ('2シリーズクーペ',
  'BM',
  '550~900',
  'かっこいい',
  'ふつう',
  '外車',
  'スポーツ'),
  ('Z4',
  'BM',
  '580~860',
  'かっこいい',
  'ふつう',
  '外車',
  'スポーツ'),
  ('i3',
  'BM',
  '500~610',
  'おしゃれ',
  'ふつう',
  '外車',
  'スポーツ'),
  ('i8',
  'BM',
  '2130~2280',
  'かっこいい',
  'おおきい',
  '外車',
  'スポーツ'),
  -- アウディ
  ('A1',
  'AD',
  '290~390',
  'かっこいい',
  'ふつう',
  '外車',
  '街乗り'),
  -- セダン
  ('A3',
  'AD',
  '350~870',
  'かっこいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('A4',
  'AD',
  '460~1250',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  ('A5',
  'AD',
  '560~1340',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  ('A6',
  'AD',
  '750~1300',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('A7',
  'AD',
  '810~1370',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('A8',
  'AD',
  '1170~2010',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- SUV
  ('Q2',
  'AD',
  '310~600',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('Q3',
  'AD',
  '440~840',
  'かっこいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('Q5',
  'AD',
  '650~910',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  ('Q7',
  'AD',
  '960~1020',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('Q8',
  'AD',
  '1010~1120',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- クーペ
  ('TT',
  'AD',
  '490~610',
  'かっこいい',
  'ふつう',
  '外車',
  'スポーツ'),
  ('R8',
  'AD',
  '3030~',
  'かっこいい',
  'おおきい',
  '外車',
  'スポーツ'),
-- フォルクスワーゲン
-- コンパクト
  ('up!',
  'VW',
  '170~230',
  'かわいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('ポロ',
  'VW',
  '220~390',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('ゴルフ',
  'VW',
  '260~590',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('ゴルフトゥーラン',
  'VW',
  '400~480',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('シャラン',
  'VW',
  '420~540',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('ビートル',
  'VW',
  '250~360',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  -- セダン
  ('アルテオン',
  'VW',
  '630~',
  'かっこいい',
  'すごくおおきい',
  '外車',
  '街乗り'),
  ('パサート',
  'VW',
  '440~530',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  -- SUV
  ('T-Roc',
  'VW',
  '380~450',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('T-Cross',
  'VW',
  '300~340',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('ティグアン',
  'VW',
  '410~590',
  'かっこいい',
  'おおきい',
  '外車',
  '街乗り'),
  -- ミニ
  ('ミニ',
  'MN',
  '270~580',
  'かわいい',
  'ふつう',
  '外車',
  '街乗り'),
  ('ミニクロスオーバー',
  'MN',
  '350~610',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  ('ミニクラブマン',
  'MN',
  '330~620',
  'おしゃれ',
  'ふつう',
  '外車',
  '街乗り'),
  -- ポルシェ
  ('718',
  'PO',
  '770~1290',
  'おしゃれ',
  'ふつう',
  '外車',
  'スポーツ'),
  ('911',
  'PO',
  '1400~3180',
  'おしゃれ',
  'ふつう',
  '外車',
  'スポーツ'),
  ('パナメーラ',
  'PO',
  '1250~30000',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り'),
  -- SUV
  ('マカン',
  'PO',
  '740~1250',
  'おしゃれ',
  'おおきい',
  '外車',
  '街乗り'),
  ('カイエン',
  'PO',
  '1070~2460',
  'おしゃれ',
  'すごくおおきい',
  '外車',
  '街乗り');
