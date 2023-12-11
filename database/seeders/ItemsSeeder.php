<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => '函館山ロープウェイ',
                'type_id' => '2',
                'prefecture_id' => '1',
                'city' => '函館市元町１９−７',
                'address' => '北海道函館市元町１９−７',
                'level_id' => '3',
                'url' => 'https://334.co.jp/',
                ],
                [
                'name' => '弘前公園',
                'type_id' => '5',
                'prefecture_id' => '2',
                'city' => '弘前市下白銀町1',
                'address' => '青森県弘前市下白銀町1',
                'level_id' => '1',
                'url' => 'https://www.hirosakipark.jp/',
                ],
                [
                'name' => '中尊寺金色堂',
                'type_id' => '5',
                'prefecture_id' => '3',
                'city' => '西磐井郡平泉町平泉衣関202',
                'address' => '岩手県西磐井郡平泉町平泉衣関202',
                'level_id' => '1',
                'url' => 'https://www.chusonji.or.jp/know/konjikido.html',
                ],
                [
                'name' => '田代島',
                'type_id' => '2',
                'prefecture_id' => '4',
                'city' => '石巻市田代浜',
                'address' => '宮城県石巻市田代浜',
                'level_id' => '1',
                'url' => 'https://www.city.ishinomaki.lg.jp/cont/10053500/0050/3639/3639.html',
                ],
                [
                'name' => '角館武家屋敷通り',
                'type_id' => '5',
                'prefecture_id' => '5',
                'city' => '仙北市角館町東勝楽丁10',
                'address' => '秋田県仙北市角館町東勝楽丁10',
                'level_id' => '1',
                'url' => 'https://tazawako-kakunodate.com/ja/course/1',
                ],
                [
                'name' => '銀山温泉',
                'type_id' => '10',
                'prefecture_id' => '6',
                'city' => '尾花沢市銀山新畑４２９',
                'address' => '山形県尾花沢市銀山新畑４２９',
                'level_id' => '1',
                'url' => 'https://www.ginzanonsen.jp/',
                ],
                [
                'name' => '大内宿',
                'type_id' => '5',
                'prefecture_id' => '7',
                'city' => '南会津郡下郷町大字大内',
                'address' => '福島県南会津郡下郷町大字大内',
                'level_id' => '1',
                'url' => 'https://ouchi-juku.com/',
                ],
                [
                'name' => '国営ひたち海浜公園',
                'type_id' => '2',
                'prefecture_id' => '8',
                'city' => 'ひたちなか市馬渡字大沼605-4',
                'address' => '茨城県ひたちなか市馬渡字大沼605-4',
                'level_id' => '3',
                'url' => 'https://hitachikaihin.jp/',
                ],
                [
                'name' => '日光東照宮',
                'type_id' => '5',
                'prefecture_id' => '9',
                'city' => '日光市山内２３０１',
                'address' => '栃木県日光市山内２３０１',
                'level_id' => '1',
                'url' => 'https://www.toshogu.jp/',
                ],
                [
                'name' => '草津温泉',
                'type_id' => '10',
                'prefecture_id' => '10',
                'city' => '吾妻郡草津町草津',
                'address' => '群馬県吾妻郡草津町草津',
                'level_id' => '2',
                'url' => 'https://www.kusatsu-onsen.ne.jp/',
                ],
                [
                'name' => '東武動物公園',
                'type_id' => '12',
                'prefecture_id' => '11',
                'city' => '南埼玉郡宮代町須賀110',
                'address' => '埼玉県南埼玉郡宮代町須賀110',
                'level_id' => '1',
                'url' => 'https://www.tobuzoo.com/',
                ],
                [
                'name' => '東京ドイツ村',
                'type_id' => '11',
                'prefecture_id' => '12',
                'city' => '袖ケ浦市永吉419',
                'address' => '千葉県袖ケ浦市永吉419',
                'level_id' => '1',
                'url' => 'https://t-doitsumura.co.jp/',
                ],
                [
                'name' => '東京スカイツリー',
                'type_id' => '2',
                'prefecture_id' => '13',
                'city' => '墨田区押上１丁目１−２',
                'address' => '東京都墨田区押上１丁目１−２',
                'level_id' => '1',
                'url' => 'https://www.tokyo-skytree.jp/',
                ],
                [
                'name' => 'みなとみらい21',
                'type_id' => '8',
                'prefecture_id' => '14',
                'city' => '横浜市西区',
                'address' => '神奈川県横浜市西区',
                'level_id' => '1',
                'url' => 'https://minatomirai21.com/',
                ],
                [
                'name' => '彌彦神社',
                'type_id' => '5',
                'prefecture_id' => '15',
                'city' => '西蒲原郡弥彦村弥彦2887-2',
                'address' => '新潟県西蒲原郡弥彦村弥彦2887-2',
                'level_id' => '1',
                'url' => 'https://www.yahiko-jinjya.or.jp/',
                ],
                [
                'name' => '黒部ダム',
                'type_id' => '2',
                'prefecture_id' => '16',
                'city' => '新川郡立山町芦峅寺',
                'address' => '山県中新川郡立山町芦峅寺',
                'level_id' => '1',
                'url' => 'https://www.kurobe-dam.com/',
                ],
                [
                'name' => '兼六園',
                'type_id' => '5',
                'prefecture_id' => '17',
                'city' => '金沢市丸の内1番1号',
                'address' => '石川県金沢市丸の内1番1号',
                'level_id' => '1',
                'url' => 'https://www.pref.ishikawa.jp/siro-niwa/kenrokuen/',
                ],
                [
                'name' => '東尋坊',
                'type_id' => '6',
                'prefecture_id' => '18',
                'city' => '坂井市三国町安島',
                'address' => '福井県坂井市三国町安島',
                'level_id' => '1',
                'url' => 'https://kanko-sakai.com/tojinbo/',
                ],
                [
                'name' => '富士急ハイランド',
                'type_id' => '11',
                'prefecture_id' => '19',
                'city' => '富士吉田市新西原５丁目６−１',
                'address' => '山梨県富士吉田市新西原５丁目６−１',
                'level_id' => '1',
                'url' => 'https://www.fujiq.jp/index.html',
                ],
                [
                'name' => '松本城',
                'type_id' => '5',
                'prefecture_id' => '20',
                'city' => '松本市丸の内４−１',
                'address' => '長野県松本市丸の内４−１',
                'level_id' => '1',
                'url' => 'https://www.matsumoto-castle.jp/',
                ],
                [
                'name' => '下呂温泉',
                'type_id' => '10',
                'prefecture_id' => '21',
                'city' => '下呂市湯之島801-2',
                'address' => '岐阜県下呂市湯之島801-2',
                'level_id' => '1',
                'url' => 'https://www.gero-spa.or.jp/',
                ],
                [
                'name' => '富士サファリパーク',
                'type_id' => '12',
                'prefecture_id' => '22',
                'city' => '裾野市須山字藤原2255-27',
                'address' => '静岡県裾野市須山字藤原2255-27',
                'level_id' => '2',
                'url' => 'https://www.fujisafari.co.jp/',
                ],
                [
                'name' => '名古屋港水族館',
                'type_id' => '12',
                'prefecture_id' => '23',
                'city' => '名古屋市港区港町1番3号',
                'address' => '愛知県名古屋市港区港町1番3号',
                'level_id' => '1',
                'url' => 'https://nagoyaaqua.jp/',
                ],
                [
                'name' => 'なばなの里',
                'type_id' => '11',
                'prefecture_id' => '24',
                'city' => '桑名市長島町駒江漆畑270',
                'address' => '三重県桑名市長島町駒江漆畑270',
                'level_id' => '1',
                'url' => 'https://www.nagashima-onsen.co.jp/nabana/',
                ],
                [
                'name' => '比叡山延暦寺',
                'type_id' => '5',
                'prefecture_id' => '25',
                'city' => '大津市坂本本町４２２０',
                'address' => '滋賀県大津市坂本本町４２２０',
                'level_id' => '1',
                'url' => 'https://www.hieizan.or.jp/',
                ],
                [
                'name' => '伏見稲荷大社',
                'type_id' => '5',
                'prefecture_id' => '26',
                'city' => '京都市伏見区深草藪之内町６８',
                'address' => '京都府京都市伏見区深草藪之内町６８',
                'level_id' => '1',
                'url' => 'https://inari.jp/',
                ],
                [
                'name' => '海遊館',
                'type_id' => '12',
                'prefecture_id' => '27',
                'city' => '大阪市港区海岸通１丁目１−１０',
                'address' => '大阪府大阪市港区海岸通１丁目１−１０',
                'level_id' => '1',
                'url' => 'https://www.kaiyukan.com/',
                ],
                [
                'name' => '姫路城',
                'type_id' => '5',
                'prefecture_id' => '28',
                'city' => '本町68番地',
                'address' => '姫路市本町68番地',
                'level_id' => '1',
                'url' => 'https://www.city.himeji.lg.jp/castle/',
                ],
                [
                'name' => '奈良公園',
                'type_id' => '5',
                'prefecture_id' => '29',
                'city' => '奈良市春日野町',
                'address' => '奈良県奈良市春日野町',
                'level_id' => '1',
                'url' => 'https://www3.pref.nara.jp/park/',
                ],
                [
                'name' => 'アドベンチャーワールド',
                'type_id' => '11',
                'prefecture_id' => '30',
                'city' => '西牟婁郡白浜町堅田２３９９',
                'address' => '和歌山県西牟婁郡白浜町堅田２３９９',
                'level_id' => '1',
                'url' => 'https://www.aws-s.com/',
                ],
                [
                'name' => '水木しげる記念館',
                'type_id' => '4',
                'prefecture_id' => '31',
                'city' => '境港市本町5番地',
                'address' => '鳥取県境港市本町5番地',
                'level_id' => '3',
                'url' => 'http://mizuki.sakaiminato.net/',
                ],
                [
                'name' => '出雲大社',
                'type_id' => '5',
                'prefecture_id' => '32',
                'city' => '出雲市大社町杵築東195',
                'address' => '島根県出雲市大社町杵築東195',
                'level_id' => '1',
                'url' => 'https://izumooyashiro.or.jp/',
                ],
                [
                'name' => '倉敷美観地区',
                'type_id' => '8',
                'prefecture_id' => '33',
                'city' => '倉敷市中央',
                'address' => '岡山県倉敷市中央',
                'level_id' => '1',
                'url' => 'https://www.okayama-kanko.jp/feature/machiaruki/1',
                ],
                [
                'name' => '厳島神社',
                'type_id' => '5',
                'prefecture_id' => '34',
                'city' => '廿日市市宮島町１−１',
                'address' => '広島県廿日市市宮島町１−１',
                'level_id' => '1',
                'url' => 'https://www.itsukushimajinja.jp/',
                ],
                [
                'name' => '秋芳洞',
                'type_id' => '6',
                'prefecture_id' => '35',
                'city' => '美祢市秋芳町秋吉3449番地1',
                'address' => '山口県美祢市秋芳町秋吉3449番地1',
                'level_id' => '1',
                'url' => 'https://akiyoshidai-park.com/spot/akiyoshi-do.html',
                ],
                [
                'name' => 'あすたむらんど徳島',
                'type_id' => '11',
                'prefecture_id' => '36',
                'city' => '板野郡板野町那東字キビガ谷45-22',
                'address' => '徳島県板野郡板野町那東字キビガ谷45-22',
                'level_id' => '1',
                'url' => 'https://asutamuland.jp/',
                ],
                [
                'name' => '金刀比羅宮',
                'type_id' => '5',
                'prefecture_id' => '37',
                'city' => '仲多度郡琴平町892－1',
                'address' => '香川県仲多度郡琴平町892－1',
                'level_id' => '1',
                'url' => 'https://www.konpira.or.jp/',
                ],
                [
                'name' => '道後温泉本館・別館 飛鳥乃湯泉・椿の湯',
                'type_id' => '10',
                'prefecture_id' => '38',
                'city' => '松山市道後湯之町１９−２２',
                'address' => '愛媛県松山市道後湯之町１９−２２',
                'level_id' => '1',
                'url' => 'https://dogo.jp/onsen/asuka',
                ],
                [
                'name' => '桂浜水族館',
                'type_id' => '12',
                'prefecture_id' => '39',
                'city' => '高知市浦戸778',
                'address' => '高知県高知市浦戸778',
                'level_id' => '1',
                'url' => 'https://katurahama-aq.jp/',
                ],
                [
                'name' => '太宰府天満宮',
                'type_id' => '5',
                'prefecture_id' => '40',
                'city' => '太宰府市宰府4丁目7-1',
                'address' => '福岡県太宰府市宰府4丁目7-1',
                'level_id' => '1',
                'url' => 'https://www.dazaifutenmangu.or.jp/',
                ],
                [
                'name' => '唐津くんち',
                'type_id' => '13',
                'prefecture_id' => '41',
                'city' => '唐津市南城内3-13',
                'address' => '佐賀県唐津市南城内3-13',
                'level_id' => '1',
                'url' => 'https://www.karatsu-jinja.org/kunti',
                ],
                [
                'name' => 'ハウステンボス',
                'type_id' => '11',
                'prefecture_id' => '42',
                'city' => '佐世保市ハウステンボス町１−１',
                'address' => '長崎県佐世保市ハウステンボス町１−１',
                'level_id' => '2',
                'url' => 'https://www.huistenbosch.co.jp/',
                ],
                [
                'name' => 'グリーンランド',
                'type_id' => '11',
                'prefecture_id' => '43',
                'city' => '荒尾市緑ヶ丘',
                'address' => '熊本県荒尾市緑ヶ丘',
                'level_id' => '1',
                'url' => 'https://www.greenland.co.jp/park/',
                ],
                [
                'name' => 'べっぷ地獄めぐり',
                'type_id' => '10',
                'prefecture_id' => '44',
                'city' => '別府市鉄輪559-1',
                'address' => '大分県別府市鉄輪559-1',
                'level_id' => '1',
                'url' => 'http://www.beppu-jigoku.com/',
                ],
                [
                'name' => 'ハーモニーランド',
                'type_id' => '11',
                'prefecture_id' => '45',
                'city' => '速見郡日出町藤原５９３３',
                'address' => '大分県速見郡日出町藤原５９３３',
                'level_id' => '1',
                'url' => 'https://www.harmonyland.jp/',
                ],
                [
                'name' => '桜島',
                'type_id' => '6',
                'prefecture_id' => '46',
                'city' => '鹿児島市桜島横山町1722-29',
                'address' => '鹿児島県鹿児島市桜島横山町1722-29',
                'level_id' => '1',
                'url' => 'https://www.kagoshima-yokanavi.jp/article/sakurajima',
                ],
                [
                'name' => '沖縄美ら海水族館',
                'type_id' => '12',
                'prefecture_id' => '47',
                'city' => '国頭郡本部町石川４２４',
                'address' => '沖縄県国頭郡本部町石川４２４',
                'level_id' => '1',
                'url' => 'https://churaumi.okinawa/',
                ],
        ]);
    }
}