<?php
add_filter('woocommerce_states', function ($states) {
    $states['AF'] = [
        'KAB' => 'Kabul',
        'HER' => 'Herat',
        'BAL' => 'Balkh',
        'KAN' => 'Kandahar',
        'NAN' => 'Nangarhar',
    ];
    $states['AX'] = [
        'MH' => 'Mariehamn',
        'JM' => 'Jomala',
        'FN' => 'Finström',
        'LE' => 'Lemland',
        'SV' => 'Saltvik',
        'HM' => 'Hammarland',
        'SD' => 'Sund',
        'EC' => 'Eckerö',
        'FG' => 'Föglö',
        'GT' => 'Geta',
        'VR' => 'Vårdö',
        'BR' => 'Brändö',
        'LU' => 'Lumparland',
        'KM' => 'Kumlinge',
        'KK' => 'Kökar',
        'ST' => 'Sottunga',
    ];
    $states['AS'] = [
        'EAS' => 'Eastern District',
        'WES' => 'Western District',
        'MAN' => 'Manuʻa District',
        'SWI' => 'Swains Island',
        'ROS' => 'Rose Atoll',
        'UNA' => 'Unorganized Atolls',
    ];
    $states['AD'] = [
        'CAN' => 'Canillo',
        'ENC' => 'Encamp',
        'ORD' => 'Ordino',
        'MAS' => 'La Massana',
        'AVL' => 'Andorra la Vella',
        'SJL' => 'Sant Julià de Lòria',
        'ESC' => 'Escaldes-Engordany',
    ];
    $states['AI'] = [
        'BLO' => 'Blowing Point',
        'EAE' => 'East End',
        'GEH' => 'George Hill',
        'ISH' => 'Island Harbour',
        'NOH' => 'North Hill',
        'NOS' => 'North Side',
        'SAG' => 'Sandy Ground',
        'SAH' => 'Sandy Hill',
        'SOH' => 'South Hill',
        'STG' => 'Stoney Ground',
        'FAR' => 'The Farrington',
        'QUA' => 'The Quarter',
        'VAL' => 'The Valley',
        'WES' => 'West End',
    ];
    $states['AQ'] = [
        'RS' => 'Ross Dependency (New Zealand)',
        'AQB' => 'British Antarctic Territory',
        'AQA' => 'Argentine Antarctica',
        'AQF' => 'French Adélie Land',
        'AQC' => 'Australian Antarctic Territory',
        'AQC' => 'Chilean Antarctic Territory',
        'NOR' => 'Queen Maud Land (Norway)',
    ];
    $states['AG'] = [
        'SJO' => 'Saint John',
        'SMA' => 'Saint Mary',
        'SPA' => 'Saint Paul',
        'SPH' => 'Saint Peter',
        'SGE' => 'Saint George',
        'SPE' => 'Saint Philip',
        'BAR' => 'Barbuda',
        'RED' => 'Redonda',
    ];
    $states['AM'] = [
        'AG' => 'Aragatsotn',
        'AR' => 'Ararat',
        'AV' => 'Armavir',
        'ER' => 'Yerevan (Capital)',
        'GE' => 'Gegharkunik',
        'KT' => 'Kotayk',
        'LO' => 'Lori',
        'SH' => 'Shirak',
        'SY' => 'Syunik',
        'TV' => 'Tavush',
        'VA' => 'Vayots Dzor',
    ];
    $states['AW'] = [
        'OR' => 'Oranjestad',
        'PA' => 'Paradera',
        'NO' => 'Noord',
        'SA' => 'Santa Cruz',
        'SI' => 'Savaneta',
        'SAO' => 'San Nicolas (Oost)',
        'SAW' => 'San Nicolas (West)',
        'BA' => 'Balashi',
    ];
    $states['AT'] = [
        'WI' => 'Wien',
        'NO' => 'Niederösterreich',
        'OO' => 'Oberösterreich',
        'SB' => 'Salzburg',
        'ST' => 'Steiermark',
        'KR' => 'Kärnten',
        'TI' => 'Tirol',
        'VU' => 'Vorarlberg',
        'BL' => 'Burgenland',
    ];

    $states['AZ'] = [
        'ABS' => 'Abşeron',
        'AGC' => 'Ağcabədi',
        'AGA' => 'Ağdam',
        'AGH' => 'Ağdaş',
        'AGT' => 'Ağstafa',
        'AGU' => 'Ağsu',
        'AST' => 'Astara',
        'BAB' => 'Babək',
        'BAL' => 'Balakən',
        'BAR' => 'Bərdə',
        'BEY' => 'Beyləqan',
        'BIK' => 'Biləsuvar',
        'CAB' => 'Cəbrayıl',
        'CUL' => 'Culfa',
        'DAS' => 'Daşkəsən',
        'FUZ' => 'Füzuli',
        'GAJ' => 'Gədəbəy',
        'GAD' => 'Goranboy',
        'GOY' => 'Göyçay',
        'HAC' => 'Hacıqabul',
        'IMI' => 'İmişli',
        'ISM' => 'İsmayıllı',
        'KAL' => 'Kəlbəcər',
        'KUR' => 'Kürdəmir',
        'LAC' => 'Lənkəran',
        'LAK' => 'Laçın',
        'LAA' => 'Lerik',
        'MAS' => 'Masallı',
        'NEF' => 'Neftçala',
        'OGU' => 'Oğuz',
        'ORD' => 'Ordubad',
        'QAB' => 'Qəbələ',
        'QAX' => 'Qax',
        'QBA' => 'Quba',
        'QBI' => 'Qubadlı',
        'QOB' => 'Qobustan',
        'QBA' => 'Qusar',
        'SAH' => 'Sahil',
        'SAK' => 'Salyan',
        'SMI' => 'Şamaxı',
        'SBA' => 'Şabran',
        'SAR' => 'Şərur',
        'SIA' => 'Siyəzən',
        'SUS' => 'Şuşa',
        'TAR' => 'Tərtər',
        'TOV' => 'Tovuz',
        'UCA' => 'Ucar',
        'XAÇ' => 'Xacıqabul',
        'XAN' => 'Xanlar',
        'XCI' => 'Xızı',
        'XIZ' => 'Xızı',
        'YAR' => 'Yardımlı',
        'YEV' => 'Yevlax',
        'ZAN' => 'Zəngilan',
        'ZAQ' => 'Zaqatala',
        'ZAR' => 'Zərdab',
        'BAK' => 'Baku (Capital)',
    ];


    $states['BS'] = [
        'ACK' => 'Acklins',
        'BIM' => 'Bimini',
        'BIS' => 'Cat Island',
        'CNN' => 'Central Andros',
        'CAY' => 'Caymanas',
        'EXU' => 'Exuma',
        'GRA' => 'Grand Bahama',
        'HAR' => 'Harbour Island',
        'HUN' => 'Hunters',
        'ELE' => 'Eleuthera',
        'INA' => 'Inagua',
        'LEE' => 'Long Island',
        'MAY' => 'Mayaguana',
        'RUM' => 'Rum Cay',
        'SAN' => 'San Salvador',
    ];

    $states['BH'] = [
        'BA' => 'Al Manama',
        'JA' => 'Al Janūbīyah',
        'MU' => 'Al Muḥarraq',
        'MS' => 'Al Wusṭá',
        'SH' => 'Ash Shamālīyah',
    ];
    $states['BB'] = [
        'CH' => 'Christ Church',
        'ST' => 'Saint Andrew',
        'STF' => 'Saint George',
        'STJ' => 'Saint James',
        'STL' => 'Saint John',
        'STM' => 'Saint Joseph',
        'STP' => 'Saint Lucy',
        'STS' => 'Saint Michael',
        'STX' => 'Saint Philip',
        'STW' => 'Saint Peter',
        'STZ' => 'Saint Thomas',
    ];

    $states['BY'] = [
        'BR' => 'Brest Region',
        'HO' => 'Gomel Region',
        'HM' => 'Grodno Region',
        'MI' => 'Minsk Region',
        'MR' => 'Mogilev Region',
        'VI' => 'Vitebsk Region',
        'MH' => 'Minsk City',
    ];

    $states['PW'] = [
        'AA' => 'Aimeliik',
        'AR' => 'Airai',
        'AN' => 'Angaur',
        'HA' => 'Hatohobei',
        'KA' => 'Kayangel',
        'KO' => 'Koror',
        'ME' => 'Melekeok',
        'NG' => 'Ngaraard',
        'NK' => 'Ngarchelong',
        'ML' => 'Ngardmau',
        'NR' => 'Ngatpang',
        'ND' => 'Ngchesar',
        'NT' => 'Ngiwal',
        'PE' => 'Peleliu',
        'SO' => 'Sonsorol',
        'TA' => 'Taiwan',
    ];
    $states['BE'] = [
        'VAN' => 'Antwerp',
        'VBR' => 'Brabant Flamand',
        'VLG' => 'Flemish Brabant',
        'VOV' => 'East Flanders',
        'VLI' => 'Limburg',
        'VWN' => 'West Flanders',
        'WBR' => 'Brabant Wallon',
        'WHT' => 'Hainaut',
        'WLG' => 'Liège',
        'WLX' => 'Luxembourg',
        'WNA' => 'Namur',
        'BRU' => 'Brussels-Capital Region',
    ];

    $states['BZ'] = [
        'BZ' => 'Belize',
        'CY' => 'Cayo',
        'CZL' => 'Corozal',
        'OW' => 'Orange Walk',
        'SC' => 'Stann Creek',
        'TOL' => 'Toledo',
    ];

    $states['BM'] = [
        'DEV' => 'Devonshire',
        'HAM' => 'Hamilton Parish',
        'HAN' => 'Hamilton City',
        'PAR' => 'Paget',
        'PEM' => 'Pembroke',
        'SAI' => 'Saint George\'s',
        'SAN' => 'Sandys',
        'SMI' => 'Smith\'s',
        'WAR' => 'Warwick',
    ];
    $states['BT'] = [
        '33' => 'Bumthang',
        '12' => 'Chhukha',
        '22' => 'Dagana',
        '13' => 'Gasa',
        '44' => 'Haa',
        '45' => 'Lhuntse',
        '11' => 'Mongar',
        '43' => 'Paro',
        '23' => 'Pemagatshel',
        '14' => 'Punakha',
        '15' => 'Samdrup Jongkhar',
        '42' => 'Samtse',
        '24' => 'Sarpang',
        '16' => 'Thimphu',
        '17' => 'Trashigang',
        '18' => 'Trashiyangtse',
        '25' => 'Trongsa',
        '26' => 'Tsirang',
        '41' => 'Wangdue Phodrang',
        '19' => 'Zhemgang',
    ];

    $states['BQ'] = [
        'BO' => 'Bonaire',
        'SA' => 'Saba',
        'SE' => 'Saint Eustatius',
    ];

    $states['BA'] = [
        'BIH' => 'Una-Sana Canton',
        'BIJ' => 'Posavina Canton',
        'BHE' => 'Tuzla Canton',
        'BHZ' => 'Zenica-Doboj Canton',
        'HNK' => 'Herzegovina-Neretva Canton',
        'SBK' => 'Central Bosnia Canton',
        'USK' => 'West Herzegovina Canton',
        'ZHK' => 'Sarajevo Canton',
        'LBP' => 'Bosnian Podrinje Canton',
        'RS' => 'Republika Srpska',
        'BD' => 'Brčko District',
    ];

    $states['BW'] = [
        'CE' => 'Central',
        'GH' => 'Ghanzi',
        'KE' => 'Kgalagadi',
        'KL' => 'Kgatleng',
        'KW' => 'Kweneng',
        'NE' => 'North East',
        'NW' => 'North West',
        'SE' => 'South East',
        'SO' => 'Southern',
        'SP' => 'Central',
    ];
    $states['GM'] = [
        'B' => 'Banjul',
        'L' => 'Lower River',
        'M' => 'MacCarthy Island',
        'N' => 'North Bank',
        'U' => 'Upper River',
        'W' => 'Western',
    ];

    $states['GE'] = [
        'AB' => 'Abkhazia',
        'AJ' => 'Ajaria',
        'GU' => 'Guria',
        'IM' => 'Imereti',
        'KA' => 'Kakheti',
        'KK' => 'Kvemo Kartli',
        'MM' => 'Mtskheta-Mtianeti',
        'RL' => 'Racha-Lechkhumi and Kvemo Svaneti',
        'SJ' => 'Samtskhe-Javakheti',
        'SK' => 'Shida Kartli',
        'SZ' => 'Samegrelo-Zemo Svaneti',
    ];

    $states['GI'] = []; // Gibraltar no subdivisions

    $states['GL'] = [
        'AV' => 'Avannaata',
        'KU' => 'Kujalleq',
        'QE' => 'Qeqqata',
        'SM' => 'Sermersooq',
        'QA' => 'Qaasuitsup',
    ];

    $states['GD'] = [
        'CA' => 'Saint Andrew',
        'DE' => 'Saint David',
        'GE' => 'Saint George',
        'JO' => 'Saint John',
        'MA' => 'Saint Mark',
        'PA' => 'Saint Patrick',
    ];
    $states['GP'] = []; // Guadeloupe no subdivisions
    $states['GU'] = []; // Guam no subdivisions

    $states['GG'] = [
        'SA' => 'Saint Anne',
        'SB' => 'Saint Saviour',
        'SS' => 'Saint Sampson',
        'SJ' => 'Saint Peter Port',
        'ST' => 'Saint Pierre du Bois',
        'SS' => 'Saint Stephen',
        'SJ' => 'Saint John',
        'SL' => 'Saint Louis',
    ];

    $states['GN'] = [
        'BN' => 'Boké',
        'CZ' => 'Conakry',
        'FA' => 'Faranah',
        'KB' => 'Kankan',
        'KN' => 'Kindia',
        'LE' => 'Labé',
        'ML' => 'Mamou',
        'NZ' => 'Nzérékoré',
    ];

    $states['GW'] = [
        'BA' => 'Bafatá',
        'BL' => 'Bolama',
        'BM' => 'Bissau',
        'BS' => 'Biombo',
        'GU' => 'Gabú',
        'OL' => 'Oio',
        'QU' => 'Quinara',
        'TO' => 'Tombali',
    ];

    $states['GY'] = [
        'BA' => 'Barima-Waini',
        'CU' => 'Cuyuni-Mazaruni',
        'DE' => 'Demerara-Mahaica',
        'EB' => 'East Berbice-Corentyne',
        'ES' => 'Essequibo Islands-West Demerara',
        'MA' => 'Mahaica-Berbice',
        'PM' => 'Pomeroon-Supenaam',
        'PT' => 'Potaro-Siparuni',
        'UD' => 'Upper Demerara-Berbice',
        'UT' => 'Upper Takutu-Upper Essequibo',
    ];
    $states['HT'] = [
        'AR' => 'Artibonite',
        'CE' => 'Centre',
        'GA' => 'Grand\'Anse',
        'ND' => 'Nippes',
        'NE' => 'Nord',
        'NO' => 'Nord-Ouest',
        'NEC' => 'Nord-Est',
        'OU' => 'Ouest',
        'SD' => 'Sud',
        'SE' => 'Sud-Est',
    ];

    $states['HM'] = []; // Heard Island and McDonald Islands no subdivisions

    $states['IS'] = [
        '1' => 'Höfuðborgarsvæðið',
        '2' => 'Suðurnes',
        '3' => 'Vesturland',
        '4' => 'Vestfirðir',
        '5' => 'Norðurland vestra',
        '6' => 'Norðurland eystra',
        '7' => 'Austurland',
        '8' => 'Suðurland',
    ];

    $states['IQ'] = [
        'AN' => 'Al Anbar',
        'BG' => 'Baghdad',
        'BB' => 'Babil',
        'BS' => 'Basra',
        'DA' => 'Dhi Qar',
        'DQ' => 'Diyala',
        'KA' => 'Karbala',
        'KB' => 'Kirkuk',
        'MA' => 'Maysan',
        'MD' => 'Muthanna',
        'NA' => 'Najaf',
        'NI' => 'Nineveh',
        'QS' => 'Qadisiyyah',
        'SD' => 'Salah ad Din',
        'SL' => 'Sulaymaniyah',
        'TM' => 'Tamim',
        'WA' => 'Wasit',
        'DA' => 'Dohuk',
    ];

    $states['IM'] = [
        'AY' => 'Ayre',
        'GL' => 'Garff',
        'LU' => 'Laxey',
        'MI' => 'Michael',
        'RA' => 'Rushen',
        'SN' => 'Santon',
    ];
    $states['IL'] = [
        'D' => 'Northern District',
        'HA' => 'Haifa District',
        'JM' => 'Central District',
        'TA' => 'Tel Aviv District',
        'JM' => 'Jerusalem District',
        'SH' => 'Southern District',
    ];

    $states['CI'] = [
        'AB' => 'Abidjan',
        'BM' => 'Bas-Sassandra',
        'CM' => 'Comoe',
        'DG' => 'Denguélé',
        'GB' => 'Gôh-Djiboua',
        'LA' => 'Lacs',
        'LG' => 'Lagunes',
        'MG' => 'Montagnes',
        'MO' => 'Moyen-Cavally',
        'SB' => 'Savanes',
        'SM' => 'Sassandra-Marahoué',
        'SV' => 'Savanes',
        'VB' => 'Vallée du Bandama',
        'WG' => 'Worodougou',
    ];

    $states['JE'] = [
        'STB' => 'Saint Brélade',
        'STC' => 'Saint Clément',
        'STD' => 'Saint Helier',
        'STE' => 'Saint Saviour',
        'STG' => 'Saint George',
        'STJ' => 'Saint John',
        'STm' => 'Saint Martin',
        'STO' => 'Trinity',
        'STP' => 'Saint Peter',
        'STQ' => 'Saint Ouen',
        'STR' => 'Saint Lawrence',
        'STS' => 'Sainte Marie',
    ];

    $states['JO'] = [
        'AJ' => 'Ajloun',
        'AM' => 'Amman',
        'AQ' => 'Aqaba',
        'BA' => 'Balqa',
        'IR' => 'Irbid',
        'JA' => 'Jarash',
        'KA' => 'Karak',
        'MA' => 'Mafraq',
        'MD' => 'Madaba',
        'MJ' => 'Maan',
        'AT' => 'Tafilah',
        'AZ' => 'Zarqa',
    ];

    $states['KZ'] = [
        'AL' => 'Almaty',
        'AK' => 'Akmola',
        'AT' => 'Aktobe',
        'AS' => 'East Kazakhstan',
        'ZG' => 'Zhambyl',
        'ZK' => 'West Kazakhstan',
        'KB' => 'Karaganda',
        'KD' => 'Kostanay',
        'KY' => 'Kyzylorda',
        'MG' => 'Mangystau',
        'PA' => 'Pavlodar',
        'SE' => 'North Kazakhstan',
        'SK' => 'South Kazakhstan',
        'SH' => 'Shymkent',
        'TM' => 'Turkistan',
        'UR' => 'Ulytau',
        'YX' => 'Jetisu',
    ];
    $states['KI'] = []; // Kiribati no subdivisions

    $states['KW'] = [
        'AH' => 'Al Ahmadi',
        'FA' => 'Al Farwaniyah',
        'HA' => 'Al Asimah',
        'JA' => 'Jahra',
        'MU' => 'Mubarak Al-Kabeer',
        'HAW' => 'Hawalli',
    ];

    $states['KG'] = [
        'B' => 'Bishkek',
        'C' => 'Chuy',
        'J' => 'Jalal-Abad',
        'N' => 'Naryn',
        'O' => 'Osh',
        'T' => 'Talas',
        'Y' => 'Ysyk-Kol',
    ];

    $states['LV'] = []; // Latvia no subdivisions for WooCommerce

    $states['LB'] = [
        'BA' => 'Beqaa',
        'BH' => 'Baalbek-Hermel',
        'BI' => 'Beirut',
        'JL' => 'Jabal Lubnan',
        'NA' => 'Nabatieh',
        'AK' => 'Akkar',
        'AS' => 'Al Janub',
    ];
    $states['LS'] = [
        'BE' => 'Berea',
        'BO' => 'Butha-Buthe',
        'LE' => 'Leribe',
        'MA' => 'Mafeteng',
        'MF' => 'Maseru',
        'MO' => 'Mohale\'s Hoek',
        'NE' => 'Mokhotlong',
        'NJ' => 'Qacha\'s Nek',
        'QN' => 'Quthing',
        'TE' => 'Thaba-Tseka',
    ];

    $states['LY'] = [
        'BA' => 'Al Bayda',
        'BU' => 'Al Butnan',
        'DR' => 'Darnah',
        'DJ' => 'Djihbali',
        'GB' => 'Gharyan',
        'JF' => 'Jafara',
        'JG' => 'Jabal al Gharbi',
        'MJ' => 'Misrata',
        'MU' => 'Murzuq',
        'NB' => 'Nabatiyah',
        'QN' => 'Qanawan',
        'RN' => 'Riyadh',
        'SB' => 'Sabratha',
        'SR' => 'Surt',
        'TB' => 'Tarabulus',
        'TM' => 'Timimi',
        'WB' => 'Wadi al Hayaa',
        'WN' => 'Wadi al Shatii',
        'ZA' => 'Zawiya',
        'ZG' => 'Zlitan',
        'ZY' => 'Zuwara',
    ];

    $states['LI'] = [
        'BA' => 'Balzers',
        'ES' => 'Eschen',
        'FA' => 'Feldkirch',
        'GA' => 'Gamprin',
        'MA' => 'Mauren',
        'PL' => 'Planken',
        'RI' => 'Ruggell',
        'SC' => 'Schaan',
        'SE' => 'Schellenberg',
        'TR' => 'Triesen',
        'VU' => 'Vaduz',
    ];

    $states['LT'] = [
        'AL' => 'Alytaus apskritis',
        'KA' => 'Kauno apskritis',
        'KL' => 'Klaipėdos apskritis',
        'MR' => 'Marijampolės apskritis',
        'PN' => 'Panevėžio apskritis',
        'SA' => 'Šiaulių apskritis',
        'TA' => 'Tauragės apskritis',
        'TE' => 'Telšių apskritis',
        'UT' => 'Utenos apskritis',
        'VL' => 'Vilniaus apskritis',
    ];

    $states['LU'] = [
        'CL' => 'Clervaux',
        'DI' => 'Diekirch',
        'DL' => 'Dudelange',
        'DR' => 'Redange',
        'DV' => 'Vianden',
        'EC' => 'Echternach',
        'ES' => 'Esch-sur-Alzette',
        'LL' => 'Luxembourg',
        'RD' => 'Remich',
        'RM' => 'Rumelange',
        'VD' => 'Vdange',
        'WI' => 'Wiltz',
    ];
    $states['MO'] = []; // Macao no subdivisions

    $states['MG'] = [
        'ALA' => 'Analamanga',
        'ATS' => 'Atsimo-Andrefana',
        'ATS' => 'Atsimo-Atsinanana',
        'AM' => 'Alaotra-Mangoro',
        'AN' => 'Analanjirofo',
        'AN' => 'Androy',
        'AN' => 'Anosy',
        'DI' => 'Diana',
        'IH' => 'Ihorombe',
        'IT' => 'Itasy',
        'MA' => 'Melaky',
        'MV' => 'Vakinankaratra',
        'MH' => 'Betsiboka',
        'MJ' => 'Bongolava',
        'ME' => 'Sava',
        'MI' => 'Sofia',
        'TS' => 'Analamanga',
        'VA' => 'Vatovavy',
        'VI' => 'Vakinankaratra',
    ];

    $states['MW'] = []; // Malawi no subdivisions

    $states['MV'] = [
        'AA' => 'Alif Alif Atoll',
        'AD' => 'Addu City',
        'BA' => 'Baa Atoll',
        'DH' => 'Dhaalu Atoll',
        'FA' => 'Faafu Atoll',
        'GA' => 'Gaafu Alif Atoll',
        'GD' => 'Gaafu Dhaalu Atoll',
        'HD' => 'Haa Dhaalu Atoll',
        'HA' => 'Haa Alif Atoll',
        'KL' => 'Kaafu Atoll',
        'LD' => 'Laamu Atoll',
        'LS' => 'Lhaviyani Atoll',
        'MA' => 'Malé',
        'ML' => 'Meemu Atoll',
        'ND' => 'Noonu Atoll',
        'RA' => 'Raa Atoll',
        'SH' => 'Shaviyani Atoll',
        'TH' => 'Thaa Atoll',
        'VD' => 'Vaavu Atoll',
    ];

    $states['ML'] = [
        'BKO' => 'Bamako',
        'GAA' => 'Gao',
        'KAY' => 'Kayes',
        'KID' => 'Kidal',
        'KOU' => 'Koulikoro',
        'MOP' => 'Mopti',
        'SEG' => 'Ségou',
        'SIK' => 'Sikasso',
        'TOM' => 'Tombouctou',
        'TON' => 'Taoudénit',
    ];

    $states['MT'] = [
        'MTM' => 'Malta Majjistral',
        'MTQ' => 'Malta Qawra',
        'MTV' => 'Malta Vittoriosa',
        'MTG' => 'Gozo',
        'MTS' => 'South Malta',
    ];
    $states['MH'] = []; // Marshall Islands no subdivisions
    $states['MQ'] = []; // Martinique no subdivisions

    $states['MR'] = [
        'AL' => 'Adrar',
        'AS' => 'Assaba',
        'BR' => 'Brakna',
        'DB' => 'Dakhlet Nouadhibou',
        'GD' => 'Gorgol',
        'HR' => 'Hodh Ech Chargui',
        'HO' => 'Hodh El Gharbi',
        'IN' => 'Inchiri',
        'TA' => 'Tiris Zemmour',
        'TZ' => 'Trarza',
        'NU' => 'Nouakchott Nord',
        'NS' => 'Nouakchott Sud',
        'NK' => 'Nouakchott Ouest',
    ];

    $states['MU'] = [
        'BL' => 'Black River',
        'FL' => 'Flacq',
        'GR' => 'Grand Port',
        'MO' => 'Moka',
        'PA' => 'Pamplemousses',
        'PL' => 'Port Louis',
        'PU' => 'Plaines Wilhems',
        'RO' => 'Rivière du Rempart',
        'SA' => 'Savanne',
    ];

    $states['YT'] = []; // Mayotte no subdivisions
    $states['FM'] = [
        'PN' => 'Pohnpei',
        'CH' => 'Chuuk',
        'KO' => 'Kosrae',
        'YE' => 'Yap',
    ];

    $states['MC'] = []; // Monaco no subdivisions

    $states['MN'] = [
        '1' => 'Arkhangai',
        '2' => 'Bayankhongor',
        '3' => 'Bayan-Ölgii',
        '4' => 'Bulgan',
        '5' => 'Govi-Altai',
        '6' => 'Dornod',
        '7' => 'Dornogovi',
        '8' => 'Dundgovi',
        '9' => 'Dzavhan',
        '10' => 'Govisümber',
        '11' => 'Khentii',
        '12' => 'Khovd',
        '13' => 'Khövsgöl',
        '14' => 'Ömnögovi',
        '15' => 'Orkhon',
        '16' => 'Övörkhangai',
        '17' => 'Selenge',
        '18' => 'Sühbaatar',
        '19' => 'Töv',
        '20' => 'Ulaanbaatar',
        '21' => 'Uvs',
    ];

    $states['ME'] = [
        '01' => 'Andrijevica',
        '02' => 'Bar',
        '03' => 'Berane',
        '04' => 'Bijelo Polje',
        '05' => 'Budva',
        '06' => 'Cetinje',
        '07' => 'Danilovgrad',
        '08' => 'Herceg Novi',
        '09' => 'Kolašin',
        '10' => 'Kotor',
        '11' => 'Mojkovac',
        '12' => 'Nikšić',
        '13' => 'Plav',
        '14' => 'Plužine',
        '15' => 'Podgorica',
        '16' => 'Rožaje',
        '17' => 'Šavnik',
        '18' => 'Tivat',
        '19' => 'Tuzi',
        '20' => 'Ulcinj',
        '21' => 'Žabljak',
        '22' => 'Gusinje',
        '23' => 'Petnjica',
        '24' => 'Pljevlja',
    ];

    $states['MS'] = [
        'CP' => 'Saint Anthony',
        'SM' => 'Saint Peter',
        'SJ' => 'Saint John',
    ];
    $states['MM'] = [
        'KACH' => 'Kachin',
        'KAY' => 'Kayah',
        'KAYIN' => 'Kayin',
        'CHIN' => 'Chin',
        'MON' => 'Mon',
        'RAKH' => 'Rakhine',
        'SHAN' => 'Shan',
        'AY' => 'Ayeyarwady',
        'BA' => 'Bago',
        'MAG' => 'Magway',
        'MDY' => 'Mandalay',
        'SA' => 'Sagaing',
        'TA' => 'Tanintharyi',
        'YGN' => 'Yangon',
    ];

    $states['NR'] = []; // Nauru no subdivisions

    $states['NL'] = [
        'DR' => 'Drenthe',
        'FL' => 'Flevoland',
        'FR' => 'Friesland',
        'GD' => 'Gelderland',
        'GR' => 'Groningen',
        'LB' => 'Limburg',
        'NB' => 'North Brabant',
        'NH' => 'North Holland',
        'OV' => 'Overijssel',
        'UT' => 'Utrecht',
        'ZE' => 'Zeeland',
        'ZH' => 'South Holland',
    ];

    $states['NC'] = []; // New Caledonia no subdivisions
    $states['NE'] = [
        'AG' => 'Agadez',
        'DI' => 'Diffa',
        'DS' => 'Dosso',
        'MA' => 'Maradi',
        'TA' => 'Tahoua',
        'TT' => 'Tillabéri',
        'ZI' => 'Zinder',
    ];

    $states['NU'] = []; // Niue no subdivisions
    $states['NF'] = []; // Norfolk Island no subdivisions

    $states['KP'] = [
        'CHA' => 'Chagang',
        'HAM' => 'Hamgyong',
        'HWB' => 'Hwanghae',
        'KAN' => 'Kangwon',
        'NAN' => 'Nampo',
        'PYG' => 'Pyongyang',
        'RAK' => 'Ryanggang',
        'NAJ' => 'Najin',
        'PYB' => 'P’yongan',
    ];

    $states['MK'] = [
        '001' => 'Eastern',
        '002' => 'Northeastern',
        '003' => 'Pelagonia',
        '004' => 'Polog',
        '005' => 'Skopje',
        '006' => 'Southeastern',
        '007' => 'Southwestern',
        '008' => 'Vardar',
    ];
    $states['MP'] = [
        'RC' => 'Rota',
        'SA' => 'Saipan',
        'TA' => 'Tinian',
        'AN' => 'Northern Islands',
    ];

    $states['NO'] = [
        '01' => 'Viken',
        '02' => 'Oslo',
        '03' => 'Innlandet',
        '04' => 'Vestfold og Telemark',
        '05' => 'Agder',
        '06' => 'Rogaland',
        '07' => 'Vestland',
        '08' => 'Møre og Romsdal',
        '09' => 'Trøndelag',
        '10' => 'Nordland',
        '11' => 'Troms og Finnmark',
    ];

    $states['OM'] = [
        'DA' => 'Ad Dakhiliyah',
        'BA' => 'Al Batinah North',
        'BS' => 'Al Batinah South',
        'WU' => 'Al Wusta',
        'SH' => 'Ash Sharqiyah North',
        'SHS' => 'Ash Sharqiyah South',
        'JA' => 'Dhofar',
        'MU' => 'Muscat',
        'JA' => 'Al Dhahirah',
        'MA' => 'Musandam',
        'ZU' => 'Al Buraimi',
    ];

    $states['PS'] = []; // Palestinian Territory no subdivisions

    $states['PG'] = [
        'CPK' => 'Chimbu',
        'CPM' => 'Central',
        'EBR' => 'East New Britain',
        'EBU' => 'Eastern Highlands',
        'ENG' => 'Enga',
        'GPK' => 'Gulf',
        'HLA' => 'Hela',
        'JWK' => 'Jiwaka',
        'MAD' => 'Madang',
        'MBU' => 'Milne Bay',
        'MRL' => 'Morobe',
        'NCD' => 'National Capital District',
        'NPP' => 'Northern',
        'SAN' => 'Sandaun',
        'SHM' => 'Southern Highlands',
        'WNB' => 'Western',
        'WHM' => 'Western Highlands',
        'WPD' => 'Western Province',
        'MPM' => 'Milne Bay',
        'NCD' => 'National Capital District',
    ];

    $states['PN'] = []; // Pitcairn no subdivisions
    $states['PL'] = [
        'DS' => 'Dolnośląskie',
        'KP' => 'Kujawsko-Pomorskie',
        'LU' => 'Lubelskie',
        'LB' => 'Lubuskie',
        'LD' => 'Łódzkie',
        'MA' => 'Małopolskie',
        'MZ' => 'Mazowieckie',
        'OP' => 'Opolskie',
        'PK' => 'Podkarpackie',
        'PD' => 'Podlaskie',
        'PM' => 'Pomorskie',
        'SL' => 'Śląskie',
        'SK' => 'Świętokrzyskie',
        'WN' => 'Warmińsko-Mazurskie',
        'WP' => 'Wielkopolskie',
        'ZP' => 'Zachodniopomorskie',
    ];

    $states['PT'] = [
        '01' => 'Aveiro',
        '02' => 'Beja',
        '03' => 'Braga',
        '04' => 'Bragança',
        '05' => 'Castelo Branco',
        '06' => 'Coimbra',
        '07' => 'Évora',
        '08' => 'Faro',
        '09' => 'Guarda',
        '10' => 'Leiria',
        '11' => 'Lisboa',
        '12' => 'Portalegre',
        '13' => 'Porto',
        '14' => 'Santarém',
        '15' => 'Setúbal',
        '16' => 'Viana do Castelo',
        '17' => 'Vila Real',
        '18' => 'Viseu',
        '20' => 'Azores',
        '30' => 'Madeira',
    ];

    $states['PR'] = [
        '001' => 'Adjuntas',
        '002' => 'Aguada',
        '003' => 'Aguadilla',
        // ...
        '078' => 'Yauco',
    ];

    $states['QA'] = [
        'DA' => 'Ad Dawhah',
        'KH' => 'Al Khawr',
        'RA' => 'Ar Rayyan',
        'JU' => 'Al Jumaliyah',
        'MS' => 'Madinat ash Shamal',
        'WA' => 'Al Wakrah',
        'ZA' => 'Az Za‘ayin',
        'US' => 'Umm Salal',
    ];

    $states['RE'] = []; // Reunion no subdivisions
    $states['RU'] = [
        'AD' => 'Adygea',
        'AL' => 'Altai Republic',
        'BA' => 'Bashkortostan',
        'BU' => 'Buryatia',
        'CE' => 'Chechnya',
        'CU' => 'Chuvashia',
        'IN' => 'Ingushetia',
        'KB' => 'Kabardino-Balkaria',
        'KL' => 'Karachay-Cherkessia',
        'KR' => 'Karelia',
        'KK' => 'Khakassia',
        'KC' => 'Kalmykia',
        'KL' => 'Komi',
        'MS' => 'Mari El',
        'MO' => 'Mordovia',
        'SA' => 'Sakha (Yakutia)',
        'SE' => 'North Ossetia–Alania',
        'TA' => 'Tatarstan',
        'TY' => 'Tyva',
        'UD' => 'Udmurtia',
        'ALT' => 'Altai Krai',
        'KAM' => 'Kamchatka Krai',
        'KDA' => 'Krasnodar Krai',
        'KYA' => 'Krasnoyarsk Krai',
        'PRI' => 'Primorsky Krai',
        'STA' => 'Stavropol Krai',
        'ZAB' => 'Zabaykalsky Krai',
        'AMU' => 'Amur Oblast',
        'ARK' => 'Arkhangelsk Oblast',
        'AST' => 'Astrakhan Oblast',
        'BEL' => 'Belgorod Oblast',
        'BRY' => 'Bryansk Oblast',
        'CHE' => 'Chelyabinsk Oblast',
        'IRK' => 'Irkutsk Oblast',
        'IVA' => 'Ivanovo Oblast',
        'KGB' => 'Kaliningrad Oblast',
        'KLU' => 'Kaluga Oblast',
        'KEM' => 'Kemerovo Oblast',
        'KIR' => 'Kirov Oblast',
        'KOS' => 'Kostroma Oblast',
        'KGD' => 'Kurgan Oblast',
        'KRS' => 'Kursk Oblast',
        'LEN' => 'Leningrad Oblast',
        'LIP' => 'Lipetsk Oblast',
        'MAG' => 'Magadan Oblast',
        'MUR' => 'Murmansk Oblast',
        'NIZ' => 'Nizhny Novgorod Oblast',
        'NGR' => 'Novgorod Oblast',
        'NVS' => 'Novosibirsk Oblast',
        'OMS' => 'Omsk Oblast',
        'ORE' => 'Orenburg Oblast',
        'ORL' => 'Oryol Oblast',
        'PNZ' => 'Penza Oblast',
        'PSK' => 'Pskov Oblast',
        'ROS' => 'Rostov Oblast',
        'RYA' => 'Ryazan Oblast',
        'SAK' => 'Sakhalin Oblast',
        'SAM' => 'Samara Oblast',
        'SAR' => 'Saratov Oblast',
        'SMO' => 'Smolensk Oblast',
        'SVE' => 'Sverdlovsk Oblast',
        'TAM' => 'Tambov Oblast',
        'TOM' => 'Tomsk Oblast',
        'TUL' => 'Tula Oblast',
        'TVE' => 'Tver Oblast',
        'TYU' => 'Tyumen Oblast',
        'ULY' => 'Ulyanovsk Oblast',
        'VLA' => 'Vladimir Oblast',
        'VGG' => 'Volgograd Oblast',
        'VLG' => 'Vologda Oblast',
        'VOR' => 'Voronezh Oblast',
        'YAR' => 'Yaroslavl Oblast',
        'YAN' => 'Yamalo-Nenets Autonomous Okrug',
        'CHU' => 'Chukotka Autonomous Okrug',
    ];

    $states['RW'] = [
        'EK' => 'Eastern',
        'KN' => 'Kigali City',
        'NW' => 'Northern',
        'OU' => 'Western',
        'SU' => 'Southern',
    ];

    $states['ST'] = []; // São Tomé and Príncipe no subdivisions

    $states['BL'] = []; // Saint Barthélemy no subdivisions
    $states['SH'] = [];

    $states['LC'] = [
        'AN' => 'Anse la Raye',
        'CA' => 'Castries',
        'DE' => 'Dennery',
        'DI' => 'Dauphin',
        'GE' => 'Gros Islet',
        'LA' => 'Laborie',
        'MI' => 'Micoud',
        'PR' => 'Praslin',
        'SO' => 'Soufrière',
        'VI' => 'Vieux Fort',
        'WA' => 'Canaries',
    ];

    $states['SX'] = [];
    $states['MF'] = [];
    $states['PM'] = [];
    $states['VC'] = [];

    $states['WS'] = [
        'AA' => 'A\'ana',
        'AL' => 'Aiga-i-le-Tai',
        'AT' => 'Atua',
        'FA' => 'Fa\'asaleleaga',
        'GE' => 'Gaga\'emauga',
        'GI' => 'Gagaifomauga',
        'PA' => 'Palauli',
        'SA' => 'Satupa\'itea',
        'TU' => 'Tuamasaga',
        'VF' => 'Va\'a-o-Fonoti',
        'VS' => 'Vaisigano',
    ];

    $states['SM'] = [
        'AC' => 'Acquaviva',
        'BO' => 'Borgo Maggiore',
        'CH' => 'Chiesanuova',
        'DO' => 'Domagnano',
        'FA' => 'Faetano',
        'FI' => 'Fiorentino',
        'MO' => 'Montegiardino',
        'SE' => 'Serravalle',
        'SM' => 'San Marino',
    ];

    $states['SA'] = [
        'AH' => 'Al Bahah',
        'BJ' => 'Al Jawf',
        'DU' => 'Al Madinah',
        'HQ' => 'Al Qassim',
        'HL' => 'Asir',
        'BA' => 'Eastern Province',
        'MD' => 'Ha\'il',
        'JS' => 'Jizan',
        'RI' => 'Makkah',
        'MT' => 'Najran',
        'NR' => 'Northern Borders',
        'RB' => 'Riyadh',
        'SH' => 'Sharqia',
    ];

    $states['SC'] = [];
    $states['SL'] = [
        'E' => 'Eastern',
        'N' => 'Northern',
        'NW' => 'North Western',
        'S' => 'Southern',
        'W' => 'Western Area',
    ];

    $states['SG'] = [];

    $states['SK'] = [
        'BR' => 'Bratislava',
        'TA' => 'Trnava',
        'TC' => 'Trenčín',
        'NR' => 'Nitra',
        'ZI' => 'Žilina',
        'BC' => 'Banská Bystrica',
        'PV' => 'Prešov',
        'KI' => 'Košice',
    ];

    $states['SI'] = [
        'AJ' => 'Ajdovščina',
        'BE' => 'Benedikt',
        'CM' => 'Celje',
        'KR' => 'Kranj',
        'LN' => 'Lenart',
        'MB' => 'Maribor',
        'MS' => 'Murska Sobota',
        'NM' => 'Novo Mesto',
        'PO' => 'Postojna',
        'SG' => 'Slovenska Bistrica',
        'TP' => 'Trbovlje',
        'ZA' => 'Zagorje ob Savi',
    ];

    $states['SB'] = [
        'CE' => 'Central',
        'CH' => 'Choiseul',
        'GU' => 'Guadalcanal',
        'IS' => 'Isabel',
        'MK' => 'Makira-Ulawa',
        'ML' => 'Malaita',
        'RB' => 'Rennell and Bellona',
        'TE' => 'Temotu',
        'WE' => 'Western',
    ];
    $states['SO'] = [
        'AW' => 'Awdal',
        'BK' => 'Bakool',
        'BN' => 'Banaadir',
        'BR' => 'Bari',
        'BY' => 'Bay',
        'GA' => 'Galguduud',
        'GE' => 'Gedo',
        'HI' => 'Hiiraan',
        'JD' => 'Jubbada Dhexe',
        'JH' => 'Jubbada Hoose',
        'MU' => 'Mudug',
        'NU' => 'Nugaal',
        'SA' => 'Sanaag',
        'SD' => 'Shabeellaha Dhexe',
        'SH' => 'Shabeellaha Hoose',
        'SO' => 'Sool',
        'TO' => 'Togdheer',
        'WO' => 'Woqooyi Galbeed',
    ];

    $states['GS'] = [];

    $states['KR'] = [
        '11' => 'Seoul Special City',
        '26' => 'Busan Metropolitan City',
        '27' => 'Daegu Metropolitan City',
        '28' => 'Incheon Metropolitan City',
        '29' => 'Gwangju Metropolitan City',
        '30' => 'Daejeon Metropolitan City',
        '31' => 'Ulsan Metropolitan City',
        '41' => 'Gyeonggi-do',
        '42' => 'Gangwon-do',
        '43' => 'Chungcheongbuk-do',
        '44' => 'Chungcheongnam-do',
        '45' => 'Jeollabuk-do',
        '46' => 'Jeollanam-do',
        '47' => 'Gyeongsangbuk-do',
        '48' => 'Gyeongsangnam-do',
        '49' => 'Jeju Special Self-Governing Province',
    ];

    $states['SS'] = [
        'EC' => 'Central Equatoria',
        'EE' => 'Eastern Equatoria',
        'EW' => 'Western Equatoria',
        'JH' => 'Jonglei',
        'LK' => 'Lakes',
        'NB' => 'Northern Bahr el Ghazal',
        'UY' => 'Unity',
        'UP' => 'Upper Nile',
        'WR' => 'Warrap',
        'BW' => 'Western Bahr el Ghazal',
    ];

    $states['LK'] = [
        'CE' => 'Central',
        'EA' => 'Eastern',
        'NC' => 'North Central',
        'NO' => 'Northern',
        'NW' => 'North Western',
        'SA' => 'Sabaragamuwa',
        'ST' => 'Southern',
        'UV' => 'Uva',
        'WE' => 'Western',
    ];
    $states['SD'] = [
        'KS' => 'Kassala',
        'KH' => 'Khartoum',
        'BN' => 'Northern',
        'BD' => 'Blue Nile',
        'DJ' => 'Al Jazirah',
        'DC' => 'Central Darfur',
        'DS' => 'South Darfur',
        'DN' => 'North Darfur',
        'GB' => 'Gedaref',
        'KA' => 'Kassala',
        'NB' => 'Northern',
        'NR' => 'Nile',
        'RS' => 'River Nile',
        'SH' => 'Shamal Darfur',
        'SI' => 'Sennar',
        'WR' => 'West Kordofan',
        'WD' => 'White Nile',
        'ZD' => 'South Kordofan',
    ];

    $states['SR'] = [
        'BR' => 'Brokopondo',
        'CM' => 'Commewijne',
        'CR' => 'Coronie',
        'MA' => 'Marowijne',
        'NI' => 'Nickerie',
        'PR' => 'Para',
        'PM' => 'Paramaribo',
        'SA' => 'Saramacca',
        'SI' => 'Sipaliwini',
        'WA' => 'Wanica',
    ];

    $states['SJ'] = [];

    $states['SE'] = [
        'AB' => 'Stockholm',
        'AC' => 'Västerbotten',
        'BD' => 'Norrbotten',
        'C' => 'Uppsala',
        'D' => 'Södermanland',
        'E' => 'Östergötland',
        'F' => 'Jönköping',
        'G' => 'Kronoberg',
        'H' => 'Kalmar',
        'I' => 'Gotland',
        'K' => 'Blekinge',
        'M' => 'Skåne',
        'N' => 'Halland',
        'O' => 'Västra Götaland',
        'S' => 'Värmland',
        'T' => 'Örebro',
        'U' => 'Västmanland',
        'W' => 'Dalarna',
        'X' => 'Gävleborg',
        'Y' => 'Västernorrland',
        'Z' => 'Jämtland',
    ];

    $states['SY'] = [
        'HA' => 'Al-Hasakah',
        'HL' => 'Aleppo',
        'DI' => 'Damascus',
        'DR' => 'Dar\'a',
        'DY' => 'Deir ez-Zor',
        'DI' => 'Dimashq',
        'HI' => 'Hama',
        'HM' => 'Homs',
        'ID' => 'Idlib',
        'LA' => 'Lattakia',
        'QU' => 'Quneitra',
        'RA' => 'Raqqa',
        'SU' => 'As-Suwayda',
        'TA' => 'Tartus',
    ];
    $states['TW'] = [
        'CHA' => 'Changhua',
        'CYI' => 'Chiayi',
        'CYQ' => 'Chiayi City',
        'HSQ' => 'Hsinchu County',
        'HSZ' => 'Hsinchu City',
        'HUA' => 'Hualien',
        'ILA' => 'Ilan',
        'KEE' => 'Keelung City',
        'KHH' => 'Kaohsiung City',
        'MIA' => 'Miaoli',
        'NAN' => 'Nantou',
        'NWT' => 'New Taipei City',
        'PEN' => 'Penghu',
        'PIF' => 'Pingtung',
        'TAO' => 'Taoyuan',
        'TNN' => 'Tainan City',
        'TPE' => 'Taipei City',
        'TXG' => 'Taichung City',
        'TYN' => 'Taitung',
        'YUN' => 'Yunlin',
    ];

    $states['TJ'] = [
        'GB' => 'Gorno-Badakhshan',
        'KT' => 'Khatlon',
        'SU' => 'Sughd',
        'RA' => 'Districts of Republican Subordination',
        'DU' => 'Dushanbe',
    ];

    $states['TL'] = [
        'AL' => 'Aileu',
        'AN' => 'Ainaro',
        'BA' => 'Baucau',
        'BO' => 'Bobonaro',
        'CO' => 'Cova Lima',
        'DI' => 'Dili',
        'ER' => 'Ermera',
        'LA' => 'Lautém',
        'LI' => 'Liquiçá',
        'MF' => 'Manufahi',
        'MT' => 'Atsabe',
        'OE' => 'Oecusse',
        'VI' => 'Viqueque',
    ];

    $states['TG'] = [
        'C' => 'Centrale',
        'K' => 'Kara',
        'M' => 'Maritime',
        'P' => 'Plateaux',
        'S' => 'Savanes',
    ];

    $states['TK'] = [];
    $states['TO'] = [
        'HA' => 'Ha\'apai',
        'NI' => 'Niuas',
        'TO' => 'Tongatapu',
        'VA' => 'Vava\'u',
    ];

    $states['TT'] = [
        'ARI' => 'Arima',
        'CHA' => 'Chaguanas',
        'CTT' => 'Couva–Tabaquite–Talparo',
        'DMN' => 'Diego Martin',
        'PED' => 'Penal–Debe',
        'PTF' => 'Point Fortin',
        'PRT' => 'Port of Spain',
        'SFO' => 'San Fernando',
        'SJM' => 'San Juan–Laventille',
        'SIP' => 'Siparia',
        'TUP' => 'Tunapuna–Piarco',
    ];

    $states['TN'] = [
        'ARI' => 'Ariana',
        'BEN' => 'Béja',
        'BENI' => 'Bizerte',
        'BJA' => 'Ben Arous',
        'GBL' => 'Gabès',
        'GAF' => 'Gafsa',
        'JED' => 'Jendouba',
        'KAI' => 'Kairouan',
        'KAS' => 'Kasserine',
        'KFB' => 'Kebili',
        'KEB' => 'Kef',
        'MED' => 'Medenine',
        'MAN' => 'Manouba',
        'MNA' => 'Monastir',
        'NAB' => 'Nabeul',
        'SFAX' => 'Sfax',
        'SBL' => 'Sidi Bouzid',
        'SUS' => 'Sousse',
        'TAH' => 'Tataouine',
        'TOZ' => 'Tozeur',
        'TUN' => 'Tunis',
        'ZAG' => 'Zaghouan',
    ];

    $states['TM'] = [
        'A' => 'Ahal',
        'B' => 'Balkan',
        'L' => 'Lebap',
        'M' => 'Mary',
        'DA' => 'Dashoguz',
        'AS' => 'Ashgabat (Capital city)',
    ];

    $states['TC'] = [];

    $states['TV'] = [];
    $states['AE'] = [
        'AZ' => 'Abu Dhabi',
        'AJ' => 'Ajman',
        'DU' => 'Dubai',
        'FU' => 'Fujairah',
        'RK' => 'Ras Al Khaimah',
        'SH' => 'Sharjah',
        'UQ' => 'Umm Al Quwain',
    ];

    $states['GB'] = [
        'ENG' => 'England',
        'SCT' => 'Scotland',
        'WLS' => 'Wales',
        'NIR' => 'Northern Ireland',
    ];

    $states['UZ'] = [
        'AN' => 'Andijan',
        'BU' => 'Bukhara',
        'FA' => 'Fergana',
        'JI' => 'Jizzakh',
        'NG' => 'Navoiy',
        'NW' => 'Namangan',
        'QA' => 'Qashqadaryo',
        'SA' => 'Samarqand',
        'SI' => 'Sirdaryo',
        'SU' => 'Surxondaryo',
        'TO' => 'Tashkent Region',
        'TK' => 'Tashkent City',
        'XO' => 'Xorazm',
    ];

    $states['VU'] = [
        'MAP' => 'Malampa',
        'PAM' => 'Penama',
        'SAM' => 'Sanma',
        'SEE' => 'Shefa',
        'TAE' => 'Tafea',
        'TOR' => 'Torba',
    ];
    $states['VA'] = [];

    $states['VN'] = [
        'AG' => 'An Giang',
        'BG' => 'Bac Giang',
        'BK' => 'Bac Kan',
        'BL' => 'Ben Tre',
        'BN' => 'Bac Ninh',
        'BT' => 'Binh Thuan',
        'BR' => 'Ba Ria-Vung Tau',
        'CB' => 'Ca Ban',
        'CM' => 'Can Tho',
        'CT' => 'Ca Mau',
        'DN' => 'Da Nang',
        'DB' => 'Dien Bien',
        'DL' => 'Dak Lak',
        'DG' => 'Dong Gnag',
        'DT' => 'Dac To',
        'GL' => 'Gia Lai',
        'HG' => 'Ha Giang',
        'HP' => 'Hai Phong',
        'HD' => 'Hai Duong',
        'HM' => 'Ho Chi Minh City',
        'HN' => 'Hanoi',
        'HT' => 'Ha Tinh',
        'HY' => 'Hau Giang',
        'KD' => 'Kien Giang',
        'KL' => 'Kon Tum',
        'LA' => 'Lai Chau',
        'LB' => 'Lam Dong',
        'LC' => 'Lang Son',
        'LD' => 'Lao Cai',
        'LG' => 'Long An',
        'LS' => 'Lao Son',
        'NT' => 'Ninh Thuan',
        'NA' => 'Nam Dinh',
        'ND' => 'Nghe An',
        'PH' => 'Phu Tho',
        'PY' => 'Phu Yen',
        'QB' => 'Quang Binh',
        'QG' => 'Quang Ngai',
        'QN' => 'Quang Ninh',
        'QT' => 'Quang Tri',
        'ST' => 'Soc Trang',
        'SL' => 'Son La',
        'TB' => 'Thai Binh',
        'TG' => 'Tay Ninh',
        'TN' => 'Thanh Hoa',
        'TH' => 'Thai Nguyen',
        'TT' => 'Thua Thien Hue',
        'TV' => 'Tra Vinh',
        'TN' => 'Tuyen Quang',
        'VL' => 'Vinh Long',
        'VT' => 'Vung Tau',
        'YB' => 'Yen Bai',
    ];

    $states['VG'] = [];

    $states['VI'] = [
        'STT' => 'Saint Thomas',
        'STJ' => 'Saint John',
        'STX' => 'Saint Croix',
    ];

    $states['WF'] = [];

    $states['EH'] = [];
    $states['YE'] = [
        'AB' => 'Abyan',
        'AD' => 'Ad Dali',
        'AM' => 'Amran',
        'BA' => 'Al Bayda',
        'DA' => 'Dhamar',
        'DH' => 'Dhale',
        'HD' => 'Hadhramaut',
        'HJ' => 'Hajjah',
        'HU' => 'Al Hudaydah',
        'JA' => 'Al Jawf',
        'LA' => 'Lahij',
        'MA' => 'Ma\'rib',
        'MR' => 'Marib',
        'RA' => 'Raymah',
        'SA' => 'Sa\'dah',
        'SD' => 'Sa\'ada',
        'SH' => 'Shabwah',
        'SN' => 'Sana\'a',
        'TA' => 'Ta\'izz',
        'TH' => 'Al Mahrah',
        'WD' => 'Al Mahwit',
        'SD' => 'Sadah',
    ];

    $states['ZW'] = [
        'BU' => 'Bulawayo',
        'HA' => 'Harare',
        'MA' => 'Manicaland',
        'MC' => 'Mashonaland Central',
        'ME' => 'Mashonaland East',
        'MW' => 'Mashonaland West',
        'MV' => 'Masvingo',
        'MN' => 'Matabeleland North',
        'MS' => 'Matabeleland South',
        'MI' => 'Midlands',
    ];
    return $states;
});
