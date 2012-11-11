<?php

namespace Faker\Provider\nl_NL;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('%', '%#', '%##', '%###', '%-?', '%#-?', '%?', '%#?', '%-#', '%#-##');

    protected static $postcode = array('%### ??');

    protected static $streetNameFormats = array('{{lastName}}{{streetSuffix}}');

    protected static $streetAddressFormats = array('{{streetName}} {{buildingNumber}}');

    protected static $cityFormats = array('{{cityName}}');

    protected static $addressFormats = array(
      	  '{{streetAddress}}\n {{postcode}} {{city}}',
  	);

    protected static $streetSuffix = array(
        'baan', 'boulevard', 'dreef', 'hof', 'laan', 'pad', 'ring', 'singel', 'steeg', 'straat', 'weg'
    );

    /**
     * Export of BAG (http://bag.vrom.nl/)
     * last updated 2012/11/09
     *
     * @var array
     */
    protected static $cityNames = array(
        "'s Gravenmoer", "'s-Graveland", "'s-Gravendeel", "'s-Gravenhage", "'s-Gravenpolder", "'s-Gravenzande",
        "'s-Heer Abtskerke", "'s-Heer Arendskerke", "'s-Heer Hendrikskinderen", "'s-Heerenberg", "'s-Heerenbroek",
        "'s-Heerenhoek", "'s-Hertogenbosch", "'t Goy", "'t Haantje", "'t Harde", "'t Loo Oldebroek", "'t Veld", "'t Waar",
        "'t Zand", "'t Zandt", '1e Exloërmond', '2e Exloërmond', '2e Valthermond', 'Aadorp', 'Aagtekerke', 'Aalden',
        'Aalsmeer', 'Aalsmeerderbrug', 'Aalst', 'Aalsum', 'Aalten', 'Aardenburg', 'Aarlanderveen', 'Aarle-Rixtel',
        'Aartswoud', 'Abbega', 'Abbekerk', 'Abbenbroek', 'Abbenes', 'Abcoude', 'Achlum', 'Achterveld', 'Achterveld',
        'Achthuizen', 'Achtmaal', 'Acquoy', 'Adorp', 'Aduard', 'Aerdenhout', 'Aerdt', 'Afferden L', 'Afferden', 'Agelo',
        'Akersloot', 'Akkrum', 'Akmarijp', 'Albergen', 'Alblasserdam', 'Alde Leie', 'Aldeboarn', 'Aldtsjerk', 'Alem',
        'Alkmaar', 'Allingawier', 'Almelo', 'Almen', 'Almere', 'Almkerk', 'Alphen aan den Rijn', 'Alphen', 'Alphen',
        'Alteveer gem Hoogeveen', 'Alteveer', 'Alteveer', 'Alteveer', 'Altforst', 'Ambt Delden', 'Ameide', 'Amen',
        'America', 'Amerongen', 'Amersfoort', 'Ammerstol', 'Ammerzoden', 'Amstelhoek', 'Amstelveen', 'Amstenrade',
        'Amsterdam Zuidoost', 'Amsterdam', 'Andel', 'Andelst', 'Anderen', 'Andijk', 'Ane', 'Anerveen', 'Anevelde',
        'Angeren', 'Angerlo', 'Anjum', 'Ankeveen', 'Anloo', 'Anna Paulowna', 'Annen', 'Annerveenschekanaal', 'Ansen',
        'Ansen', 'Apeldoorn', 'Apeldoorn', 'Appelscha', 'Appeltern', 'Appingedam', 'Arcen', 'Arkel', 'Arnemuiden',
        'Arnhem', 'Arriën', 'Arum', 'Asch', 'Asperen', 'Assen', 'Assendelft', 'Asten', 'Augsbuurt', 'Augustinusga',
        'Austerlitz', 'Avenhorn', 'Axel', 'Azewijn', 'Baaiduinen', 'Baaium', 'Baak', 'Baambrugge', 'Baard', 'Baarland',
        'Baarle-Nassau', 'Baarlo', 'Baarlo', 'Baarn', 'Baars', 'Babberich', 'Babyloniënbroek', 'Bad Nieuweschans',
        'Badhoevedorp', 'Baexem', 'Baflo', 'Bakel', 'Bakhuizen', 'Bakkeveen', 'Balgoij', 'Balinge', 'Balk', 'Balkbrug',
        'Balloo', 'Balloërveld', 'Ballum', 'Baneheide', 'Banholt', 'Bant', 'Bantega', 'Barchem', 'Barendrecht',
        'Barger-Compascuum', 'Barneveld', 'Barsingerhorn', 'Basse', 'Batenburg', 'Bathmen', 'Bavel AC', 'Bavel', 'Bears',
        'Bedum', 'Beegden', 'Beek en Donk', 'Beek', 'Beek', 'Beek', 'Beekbergen', 'Beemte Broekland', 'Beers NB',
        'Beerta', 'Beerze', 'Beerzerveld', 'Beesd', 'Beesel', 'Beets', 'Beetsterzwaag', 'Beilen', 'Beinsdorp', 'Belfeld',
        'Bellingwolde', 'Belt-Schutsloot', 'Beltrum', 'Bemelen', 'Bemmel', 'Beneden-Leeuwen', 'Bennebroek', 'Bennekom',
        'Benneveld', 'Benningbroek', 'Benschop', 'Bentelo', 'Benthuizen', 'Bentveld', 'Berg en Dal', 'Berg en Dal',
        'Berg en Terblijt', 'Bergambacht', 'Bergeijk', 'Bergen (NH)', 'Bergen L', 'Bergen aan Zee', 'Bergen op Zoom',
        'Bergentheim', 'Bergharen', 'Berghem', 'Bergschenhoek', 'Beringe', 'Berkel en Rodenrijs', 'Berkel-Enschot',
        'Berkenwoude', 'Berkhout', 'Berlicum', 'Berltsum', 'Bern', 'Best', 'Beugen', 'Beuningen Gld', 'Beuningen',
        'Beusichem', 'Beutenaken', 'Beverwijk', 'Biddinghuizen', 'Bierum', 'Biervliet', 'Biervliet', 'Biest-Houtakker',
        'Biezenmortel', 'Biggekerke', 'Bilthoven', 'Bingelrade', 'Bitgum', 'Bitgummole', 'Bladel', 'Blankenham',
        'Blaricum', 'Blauwestad', 'Blauwhuis', 'Bleiswijk', 'Blesdijke', 'Bleskensgraaf ca', 'Blessum', 'Blije',
        'Blijham', 'Blitterswijck', 'Bloemendaal', 'Blokker', 'Blokzijl', 'Boazum', 'Bocholtz', 'Bodegraven', 'Boekel',
        'Boelenslaan', 'Boer', 'Boerakker', 'Boerakker', 'Boesingheliede', 'Boijl', 'Boksum', 'Bolsward', 'Bontebok',
        'Boornbergum', 'Boornzwaag', 'Borculo', 'Borger', 'Borgercompagnie', 'Borgercompagnie', 'Borgsweer', 'Born',
        'Borne', 'Bornerbroek', 'Bornwird', 'Borssele', 'Bosch en Duin', 'Boschoord', 'Boskoop', 'Bosschenhoofd',
        'Botlek Rotterdam', 'Bourtange', 'Boven-Leeuwen', 'Bovenkarspel', 'Bovensmilde', 'Boxmeer', 'Boxtel', 'Braamt',
        'Brakel', 'Brandwijk', 'Brantgum', 'Breda', 'Bredevoort', 'Breedenbroek', 'Breezand', 'Breezanddijk', 'Breskens',
        'Breukelen', 'Breukeleveen', 'Brielle', 'Briltil', 'Britsum', 'Britswert', 'Broek in Waterland',
        'Broek op Langedijk', 'Broek', 'Broekhuizen', 'Broekhuizen', 'Broekhuizenvorst', 'Broekland', 'Broeksterwâld',
        'Bronkhorst', 'Bronneger', 'Bronnegerveen', 'Brouwershaven', 'Bruchem', 'Brucht', 'Bruchterveld', 'Bruinehaar',
        'Bruinisse', 'Brummen', 'Brunssum', 'Bruntinge', 'Buchten', 'Budel', 'Budel-Dorplein', 'Budel-Schoot', 'Buggenum',
        'Buinen', 'Buinerveen', 'Buitenkaag', 'Buitenpost', 'Bunde', 'Bunne', 'Bunnik', 'Bunschoten-Spakenburg',
        'Burdaard', 'Buren', 'Buren', 'Burgerbrug', 'Burgerveen', 'Burgh-Haamstede', 'Burgum', 'Burgwerd', 'Burum',
        'Bussum', 'Buurmalsen', 'Buurmalsen', 'Cadier en Keer', 'Cadzand', 'Callantsoog', 'Capelle aan den IJssel',
        'Castelre', 'Castenray', 'Casteren', 'Castricum', 'Chaam', 'Clinge', 'Coevorden', 'Colijnsplaat', 'Collendoorn',
        'Colmschate', 'Cornwerd', 'Cothen', 'Creil', 'Cromvoirt', 'Cruquius', 'Cuijk', 'Culemborg', 'Daarle',
        'Daarlerveen', 'Dalem', 'Dalen', 'Dalerpeel', 'Dalerveen', 'Dalfsen', 'Dalmsholte', 'Damwâld', 'Darp', 'De Bilt',
        'De Blesse', 'De Bult', 'De Cocksdorp', 'De Falom', 'De Glind', 'De Goorn', 'De Groeve', 'De Heen', 'De Heurne',
        'De Hoeve', 'De Kiel', 'De Klomp', 'De Knipe', 'De Koog', 'De Krim', 'De Kwakel', 'De Lier', 'De Meern', 'De Moer',
        'De Mortel', 'De Pol', 'De Punt', 'De Rijp', 'De Rips', 'De Schiphorst', 'De Steeg', 'De Tike', 'De Veenhoop',
        'De Waal', 'De Weere', 'De Westereen', 'De Wilgen', 'De Wilp', 'De Zilk', 'Dearsum', 'Dedemsvaart', 'Dedgum',
        'Deelen', 'Deest', 'Deil', 'Deinum', 'Delden', 'Delfgauw', 'Delfstrahuizen', 'Delft', 'Delfzijl', 'Delwijnen',
        'Demen', 'Den Andel', 'Den Bommel', 'Den Burg', 'Den Dolder', 'Den Dungen', 'Den Ham', 'Den Ham', 'Den Helder',
        'Den Hoorn', 'Den Hoorn', 'Den Horn', 'Den Hout', 'Den Ilp', 'Den Oever', 'Den Velde', 'Denekamp', 'Deurne',
        'Deurningen', 'Deurningen', 'Deursen-Dennenburg', 'Deurze', 'Deventer', 'Didam', 'Dieden', 'Diemen', 'Diepenheim',
        'Diepenveen', 'Dieren', 'Diessen', 'Diever', 'Dieverbrug', 'Diffelen', 'Dijken', 'Dinteloord', 'Dinxperlo',
        'Diphoorn', 'Dirkshorn', 'Dirksland', 'Dodewaard', 'Doenrade', 'Doesburg', 'Doetinchem', 'Doeveren', 'Doezum',
        'Dokkum', 'Doldersum', 'Domburg', 'Donderen', 'Dongen', 'Dongjum', 'Doniaga', 'Donkerbroek', 'Doorn',
        'Doornenburg', 'Doornspijk', 'Doorwerth', 'Dordrecht', 'Dorst', 'Drachten', 'Drachten-Azeven',
        'Drachtstercompagnie', 'Dreischor', 'Drempt', 'Dreumel', 'Driebergen-Rijsenburg', 'Drieborg', 'Driebruggen',
        'Driehuis NH', 'Driehuizen', 'Driel', 'Driewegen', 'Driezum', 'Drijber', 'Drimmelen', 'Drogeham',
        'Drogteropslagen', 'Drongelen', 'Dronryp', 'Dronten', 'Drouwen', 'Drouwenermond', 'Drouwenerveen', 'Drunen',
        'Druten', 'Duiven', 'Duivendrecht', 'Duizel', 'Dussen', 'Dwingeloo', 'Eagum', 'Earnewâld', 'Easterein',
        'Easterlittens', 'Eastermar', 'Easterwierrum', 'Echt', 'Echteld', 'Echten', 'Echten', 'Echtenerbrug',
        'Eck en Wiel', 'Eckelrade', 'Edam', 'Ede', 'Ederveen', 'Ee', 'Eede', 'Eefde', 'Eelde', 'Eelderwolde', 'Eemdijk',
        'Eemnes', 'Eemshaven', 'Een', 'Een-West', 'Eenrum', 'Eenum', 'Eerbeek', 'Eersel', 'Ees', 'Eesergroen',
        'Eeserveen', 'Eesterga', 'Eesveen', 'Eethen', 'Eext', 'Eexterveen', 'Eexterveenschekanaal', 'Eexterzandvoort',
        'Egchel', 'Egmond aan Zee', 'Egmond aan den Hoef', 'Egmond-Binnen', 'Eibergen', 'Eijsden', 'Eindhoven',
        'Einighausen', 'Ekehaar', 'Elahuizen', 'Elburg', 'Eldersloo', 'Eleveld', 'Elim', 'Elkenrade', 'Ell', 'Ellecom',
        'Ellemeet', 'Ellertshaar', 'Ellewoutsdijk', 'Elp', 'Elsendorp', 'Elshout', 'Elsloo', 'Elsloo', 'Elspeet',
        'Elst Ut', 'Elst', 'Emmeloord', 'Emmen', 'Emmer-Compascuum', 'Empe', 'Emst', 'Engwierum', 'Enkhuizen', 'Ens',
        'Enschede', 'Enspijk', 'Enter', 'Enumatil', 'Epe', 'Epen', 'Eppenhuizen', 'Epse', 'Erica', 'Erichem', 'Erlecom',
        'Erm', 'Ermelo', 'Erp', 'Esbeek', 'Esch', 'Escharen', 'Espel', 'Est', 'Etten', 'Etten-Leur', 'Europoort Rotterdam',
        'Eursinge', 'Eursinge', 'Everdingen', 'Evertsoord', 'Ewijk', 'Exloo', 'Exloërveen', 'Exmorra', 'Eygelshoven',
        'Eys', 'Ezinge', 'Farmsum', 'Feanwâlden', 'Feerwerd', 'Feinsum', 'Ferwert', 'Ferwoude', 'Fijnaart', 'Finsterwolde',
        'Firdgum', 'Fleringen', 'Fluitenberg', 'Fochteloo', 'Follega', 'Folsgare', 'Formerum', 'Foudgum', 'Foxhol',
        'Foxwolde', 'Franeker', 'Frederiksoord', 'Friens', 'Frieschepalen', 'Froombosch', 'Gaanderen', 'Gaast', 'Gaastmeer',
        'Galder', 'Gameren', 'Gapinge', 'Garderen', 'Garmerwolde', 'Garminge', 'Garnwerd', 'Garrelsweer', 'Garsthuizen',
        'Garyp', 'Gassel', 'Gasselte', 'Gasselternijveen', 'Gasselternijveenschemond', 'Gastel', 'Gasteren', 'Gauw',
        'Geelbroek', 'Geerdijk', 'Geersdijk', 'Geertruidenberg', 'Geervliet', 'Gees', 'Geesbrug', 'Geesteren', 'Geesteren',
        'Geeuwenbrug', 'Geffen', 'Geijsteren', 'Geldermalsen', 'Gelderswoude', 'Geldrop', 'Geleen', 'Gellicum', 'Gelselaar',
        'Gemert', 'Gemonde', 'Genderen', 'Gendringen', 'Gendt', 'Genemuiden', 'Gennep', 'Gerkesklooster', 'Gersloot',
        'Geulle', 'Giesbeek', 'Giessen', 'Giessenburg', 'Gieten', 'Gieterveen', 'Giethmen', 'Giethoorn', 'Gilze', 'Ginnum',
        'Glane', 'Glimmen', 'Godlinze', 'Goedereede', 'Goes', 'Goingarijp', 'Goirle', 'Goor', 'Gorinchem', 'Gorredijk',
        'Gorssel', 'Gouda', 'Gouderak', 'Goudriaan', 'Goudswaard', 'Goutum', 'Goënga', 'Goëngahuizen', 'Graauw', 'Grafhorst',
        'Graft', 'Gramsbergen', 'Grashoek', 'Grathem', 'Grave', 'Greonterp', 'Grevenbicht', 'Griendtsveen', 'Grijpskerk',
        'Grijpskerke', 'Groede', 'Groenekan', 'Groeningen', 'Groenlo', 'Groesbeek', 'Groessen', 'Groet', 'Grolloo',
        'Groningen', 'Gronsveld', 'Groot-Ammers', 'Grootebroek', 'Grootegast', 'Grootschermer', 'Grou', 'Grubbenvorst',
        'Gulpen', 'Guttecoven', 'Gytsjerk', 'Haaften', 'Haaksbergen', 'Haalderen', 'Haaren', 'Haarle', 'Haarle', 'Haarlem',
        'Haarlemmerliede', 'Haarlo', 'Haarsteeg', 'Haarzuilens', 'Haastrecht', 'Haelen', 'Hagestein', 'Haghorst', 'Haler',
        'Halfweg', 'Hall', 'Halle', 'Hallum', 'Halsteren', 'Handel', 'Hank', 'Hansweert', 'Hantum', 'Hantumeruitburen',
        'Hantumhuizen', 'Hapert', 'Haps', 'Harbrinkhoek', 'Hardenberg', 'Harderwijk', 'Hardinxveld-Giessendam', 'Haren Gn',
        'Haren', 'Harfsen', 'Harich', 'Haringhuizen', 'Harkema', 'Harkstede', 'Harlingen', 'Harmelen', 'Harreveld',
        'Harskamp', 'Hartwerd', 'Haskerdijken', 'Haskerhorne', 'Hasselt', 'Hattem', 'Hattemerbroek', 'Haule', 'Haulerwijk',
        'Hauwert', 'Havelte', 'Havelterberg', 'Hazerswoude-Dorp', 'Hazerswoude-Rijndijk', 'Hedel', 'Hedikhuizen', 'Hee',
        'Heeg', 'Heel', 'Heelsum', 'Heelweg', 'Heemserveen', 'Heemskerk', 'Heemstede', 'Heenvliet', 'Heerde', 'Heerenveen',
        'Heerewaarden', 'Heerhugowaard', 'Heerjansdam', 'Heerle', 'Heerlen', 'Heesbeen', 'Heesch', 'Heesselt',
        'Heeswijk-Dinther', 'Heeten', 'Heeze', 'Hegebeintum', 'Hegelsom', 'Hei- en Boeicop', 'Heibloem', 'Heide', 'Heijen',
        'Heijenrath', 'Heijningen', 'Heikant', 'Heilig Landstichting', 'Heiligerlee', 'Heiloo', 'Heinenoord', 'Heinkenszand',
        'Heino', 'Hekelingen', 'Hekendorp', 'Helden', 'Helenaveen', 'Hellendoorn', 'Hellevoetsluis', 'Hellouw', 'Hellum',
        'Helmond', 'Helvoirt', 'Hem', 'Hemelum', 'Hemmen', 'Hempens', 'Hemrik', 'Hendrik-Ido-Ambacht', 'Hengelo (Gld)',
        'Hengelo', 'Hengevelde', 'Hengstdijk', 'Hensbroek', 'Herbaijum', 'Herkenbosch', 'Herkingen', 'Hernen', 'Herpen',
        'Herpt', 'Herten', 'Hertme', 'Herveld', 'Herwen', 'Herwijnen', 'Heteren', 'Heukelom', 'Heukelum', 'Heumen',
        'Heusden', 'Heusden', 'Heveadorp', 'Heythuysen', 'Hezingen', 'Hiaure', 'Hichtum', 'Hidaard', 'Hierden', 'Hieslum',
        'Hijken', 'Hijum', 'Hilaard', 'Hillegom', 'Hilvarenbeek', 'Hilversum', 'Hindeloopen', 'Hinnaard', 'Hippolytushoef',
        'Hitzum', 'Hobrede', 'Hoedekenskerke', 'Hoek van Holland', 'Hoek', 'Hoenderloo', 'Hoenderloo', 'Hoensbroek',
        'Hoenzadriel', 'Hoevelaken', 'Hoeven', 'Hoge Hexel', 'Hollandsche Rading', 'Hollandscheveld', 'Hollum', 'Holsloot',
        'Holten', 'Holthees', 'Holtheme', 'Holthone', 'Holtum', 'Holwerd', 'Holwierde', 'Hommerts', 'Homoet', 'Honselersdijk',
        'Hoofddorp', 'Hoofdplaat', 'Hoog Soeren', 'Hoog-Keppel', 'Hoogblokland', 'Hooge Mierde', 'Hooge Zwaluwe', 'Hoogeloon',
        'Hoogenweg', 'Hoogerheide', 'Hoogersmilde', 'Hoogersmilde', 'Hoogeveen', 'Hoogezand', 'Hooghalen', 'Hoogkarspel',
        'Hoogland', 'Hooglanderveen', 'Hoogmade', 'Hoogvliet Rotterdam', 'Hoogwoud', 'Hoorn', 'Hoorn', 'Hoornaar',
        'Hoornsterzwaag', 'Horn', 'Hornhuizen', 'Horssen', 'Horst', 'Houten', 'Houtigehage', 'Houwerzijl', 'Huijbergen',
        'Huis ter Heide', 'Huis ter Heide', 'Huisduinen', 'Huisseling', 'Huissen', 'Huizen', 'Huizinge', 'Hulsberg', 'Hulsel',
        'Hulshorst', 'Hulst', 'Hulten', 'Hummelo', 'Hunsel', 'Hurdegaryp', 'Hurwenen', 'Húns', 'IJhorst', 'IJlst', 'IJmuiden',
        'IJsselham', 'IJsselmuiden', 'IJsselstein', 'IJzendijke', 'IJzendoorn', 'Idaerd', 'Idsegahuizum', 'Idskenhuizen',
        'Idzega', 'Iens', 'Ilpendam', 'Indijk', 'Ingber', 'Ingelum', 'Ingen', 'It Heidenskip', 'Itens', 'Ittervoort',
        'Jaarsveld', 'Jabeek', 'Jannum', 'Jellum', 'Jelsum', 'Jirnsum', 'Jislum', 'Jisp', 'Jistrum', 'Jonkerslân',
        'Jonkersvaart', 'Joppe', 'Jorwert', 'Joure', 'Jouswier', 'Jubbega', 'Julianadorp', 'Jutrijp', 'Kaag', 'Kaard',
        'Kaatsheuvel', 'Kalenberg', 'Kallenkote', 'Kamerik', 'Kampen', 'Kamperland', 'Kamperveen', 'Kantens',
        'Kapel Avezaath', 'Kapel-Avezaath', 'Kapelle', 'Kapellebrug', 'Katlijk', 'Kats', 'Kattendijke', 'Katwijk NB',
        'Katwijk', 'Katwoude', 'Kedichem', 'Keent', 'Keijenborg', 'Kekerdom', 'Kelpen-Oler', 'Kerk Avezaath',
        'Kerk-Avezaath', 'Kerkdriel', 'Kerkenveld', 'Kerkrade', 'Kerkwerve', 'Kerkwijk', 'Kessel', 'Kesteren',
        'Kiel-Windeweer', 'Kilder', 'Kimswerd', 'Kinderdijk', 'Kinnum', 'Klaaswaal', 'Klarenbeek', 'Klarenbeek',
        'Klazienaveen', 'Klazienaveen-Noord', 'Klein Zundert', 'Klijndijk', 'Klimmen', 'Kloetinge', 'Kloetinge',
        'Klooster Lidlum', 'Kloosterburen', 'Kloosterhaar', 'Kloosterhaar', 'Kloosterzande', 'Klundert', 'Knegsel',
        'Koarnjum', 'Kockengen', 'Koedijk', 'Koedijk', 'Koekange', 'Koewacht', 'Kolderwolde', 'Kolham', 'Kolhorn',
        'Kollum', 'Kollumerpomp', 'Kollumerzwaag', 'Kommerzijl', 'Koningsbosch', 'Koningslust', 'Koog aan de Zaan',
        'Koolwijk', 'Kootstertille', 'Kootwijk', 'Kootwijkerbroek', 'Kornhorn', 'Kornwerderzand', 'Kortehemmen',
        'Kortenhoef', 'Kortgene', 'Koudekerk aan den Rijn', 'Koudekerke', 'Koudum', 'Koufurderrige', 'Krabbendijke',
        'Kraggenburg', 'Kreileroord', 'Krewerd', 'Krimpen aan de Lek', 'Krimpen aan den IJssel', 'Kring van Dorth',
        'Krommenie', 'Kronenberg', 'Kropswolde', 'Kruiningen', 'Kruisland', 'Kudelstaart', 'Kuinre', 'Kuitaart',
        'Kwadendamme', 'Kwadijk', 'Kwintsheul', 'Kûbaard', 'Laag Zuthem', 'Laag-Keppel', 'Laag-Soeren', 'Lage Mierde',
        'Lage Vuursche', 'Lage Zwaluwe', 'Lageland', 'Lambertschaag', 'Lamswaarde', 'Landerum', 'Landgraaf', 'Landhorst',
        'Landsmeer', 'Langbroek', 'Langedijke', 'Langelille', 'Langelo', 'Langenboom', 'Langerak', 'Langeveen', 'Langeweg',
        'Langezwaag', 'Langweer', 'Laren', 'Laren', 'Lathum', 'Lattrop-Breklenkamp', 'Lauwersoog', 'Lauwerzijl', 'Ledeacker',
        'Leek', 'Leende', 'Leens', 'Leerbroek', 'Leerdam', 'Leermens', 'Leersum', 'Leeuwarden', 'Leeuwarden', 'Legemeer',
        'Leiden', 'Leiderdorp', 'Leidschendam', 'Leimuiden', 'Leimuiden', 'Leimuiderbrug', 'Lekkerkerk', 'Lekkum', 'Lellens',
        'Lelystad', 'Lemele', 'Lemelerveld', 'Lemiers', 'Lemmer', 'Lengel', 'Lent', 'Leons', 'Lepelstraat', 'Lettelbert',
        'Lettele', 'Leunen', 'Leur', 'Leusden', 'Leuth', 'Leutingewolde', 'Leuvenheim', 'Leveroy', 'Lewedorp', 'Lexmond',
        'Lichtaard', 'Lichtenvoorde', 'Liempde', 'Lienden', 'Lierderholthuis', 'Lieren', 'Lierop', 'Lies', 'Lieshout',
        'Liessel', 'Lievelde', 'Lieveren', 'Lijnden', 'Limbricht', 'Limmen', 'Linde', 'Linden', 'Linne', 'Linschoten',
        'Lioessens', 'Lippenhuizen', 'Lisse', 'Lisserbroek', 'Lith', 'Lithoijen', 'Lobith', 'Lochem', 'Loenen aan de Vecht',
        'Loenen', 'Loenersloot', 'Loerbeek', 'Lollum', 'Lomm', 'Longerhouw', 'Loo Gld', 'Loo Gld', 'Loon op Zand', 'Loon',
        'Loosbroek', 'Loosdrecht', 'Loozen', 'Lopik', 'Lopikerkapel', 'Loppersum', 'Losdorp', 'Losser', 'Lottum', 'Loënga',
        'Lucaswolde', 'Luddeweer', 'Luinjeberd', 'Lunteren', 'Lutjebroek', 'Lutjegast', 'Lutjewinkel', 'Luttelgeest',
        'Lutten', 'Luttenberg', 'Luxwoude', 'Luyksgestel', 'Lytsewierrum', 'Maarheeze', 'Maarn', 'Maarsbergen', 'Maarssen',
        'Maartensdijk', 'Maasbommel', 'Maasbracht', 'Maasbree', 'Maasdam', 'Maasdijk', 'Maashees', 'Maasland', 'Maassluis',
        'Maastricht', 'Maastricht-Airport', 'Maasvlakte Rotterdam', 'Macharen', 'Made', 'Makkinga', 'Makkum', 'Malden',
        'Mander', 'Manderveen', 'Mantgum', 'Mantinge', 'Maren-Kessel', 'Margraten', 'Maria Hoop', 'Mariahout',
        'Mariaparochie', 'Marijenkampen', 'Mariënberg', 'Mariënheem', 'Mariënvelde', 'Markelo', 'Marken', 'Markenbinnen',
        'Marknesse', 'Marle', 'Marrum', 'Marsum', 'Marum', 'Marwijksoord', 'Mastenbroek', 'Mastenbroek', 'Matsloot',
        'Maurik', 'Mechelen', 'Medemblik', 'Meeden', 'Meedhuizen', 'Meerkerk', 'Meerlo', 'Meerssen', 'Meerstad', 'Meeuwen',
        'Megchelen', 'Megen', 'Meijel', 'Melderslo', 'Melick', 'Meliskerke', 'Melissant', 'Menaam', 'Mensingeweer', 'Meppel',
        'Meppen', 'Merkelbeek', 'Merselo', 'Meteren', 'Meterik', 'Metslawier', 'Mheer', 'Middelaar', 'Middelburg',
        'Middelharnis', 'Middelie', 'Middelstum', 'Middenbeemster', 'Middenmeer', 'Midlaren', 'Midlum', 'Midsland',
        'Midwolda', 'Midwolde', 'Midwoud', 'Miedum', 'Mierlo', 'Mijdrecht', 'Mijnsheerenland', 'Mildam', 'Milheeze',
        'Mill', 'Millingen aan de Rijn', 'Milsbeek', 'Minnertsga', 'Mirns', 'Moddergat', 'Moerdijk', 'Moergestel',
        'Moerkapelle', 'Moerstraten', 'Molenaarsgraaf', 'Molenhoek', 'Molenschot', 'Molkwerum', 'Monnickendam', 'Monster',
        'Montfoort', 'Montfort', 'Mook', 'Mookhoek', 'Moordrecht', 'Moorveld', 'Morra', 'Muiden', 'Muiderberg',
        'Munnekeburen', 'Munnekezijl', 'Munstergeleen', 'Muntendam', 'Mussel', 'Musselkanaal', 'Mûnein', 'Naaldwijk',
        'Naarden', 'Nagele', 'Nederasselt', 'Nederhemert', 'Nederhorst den Berg', 'Nederland', 'Nederweert',
        'Nederweert-Eind', 'Neede', 'Neer', 'Neerijnen', 'Neeritter', 'Neerkant', 'Neerlangel', 'Neerloon', 'Nes (Ameland)',
        'Nes (Boornsterhem)', 'Nes (Dongeradeel)', 'Netersel', 'Netterden', 'Niawier', 'Nibbixwoud', 'Niebert', 'Niehove',
        'Niekerk', 'Niekerk', 'Nietap', 'Nieuw Annerveen', 'Nieuw Beerta', 'Nieuw Heeten', 'Nieuw Namen', 'Nieuw Scheemda',
        'Nieuw- en Sint Joosland', 'Nieuw-Amsterdam', 'Nieuw-Balinge', 'Nieuw-Beijerland', 'Nieuw-Buinen', 'Nieuw-Dordrecht',
        'Nieuw-Lekkerland', 'Nieuw-Roden', 'Nieuw-Schoonebeek', 'Nieuw-Vennep', 'Nieuw-Vossemeer', 'Nieuw-Weerdinge',
        'Nieuwaal', 'Nieuwdorp', 'Nieuwe Niedorp', 'Nieuwe Pekela', 'Nieuwe Wetering', 'Nieuwe-Tonge', 'Nieuwebrug',
        'Nieuwediep', 'Nieuwegein', 'Nieuwehorne', 'Nieuwendijk', 'Nieuwer Ter Aa', 'Nieuwerbrug aan den Rijn',
        'Nieuwerkerk aan den IJssel', 'Nieuwerkerk', 'Nieuweroord', 'Nieuweroord', 'Nieuwersluis', 'Nieuweschoot',
        'Nieuwkoop', 'Nieuwkuijk', 'Nieuwland', 'Nieuwlande Coevorden', 'Nieuwlande', 'Nieuwleusen', 'Nieuwolda',
        'Nieuwpoort', 'Nieuwstadt', 'Nieuwveen', 'Nieuwvliet', 'Niezijl', 'Niftrik', 'Nigtevecht', 'Nij Altoenae',
        'Nij Beets', 'Nijbroek', 'Nijeberkoop', 'Nijega', 'Nijehaske', 'Nijeholtpade', 'Nijeholtwolde', 'Nijelamer',
        'Nijemirdum', 'Nijensleek', 'Nijetrijne', 'Nijeveen', 'Nijhuizum', 'Nijkerk', 'Nijkerkerveen', 'Nijland',
        'Nijlande', 'Nijmegen', 'Nijverdal', 'Nispen', 'Nisse', 'Nistelrode', 'Noardburgum', 'Nooitgedacht', 'Noorbeek',
        'Noord-Scharwoude', 'Noord-Sleen', 'Noordbeemster', 'Noordbroek', 'Noordeinde Gld', 'Noordeinde', 'Noordeloos',
        'Noorden', 'Noordgouwe', 'Noordhoek', 'Noordhorn', 'Noordlaren', 'Noordscheschut', 'Noordwelle', 'Noordwijk',
        'Noordwijk', 'Noordwijkerhout', 'Noordwolde', 'Noordwolde', 'Nootdorp', 'Norg', 'Notter', 'Nuenen', 'Nuis',
        'Nuland', 'Numansdorp', 'Nunhem', 'Nunspeet', 'Nuth', 'Nutter', 'Obbicht', 'Obdam', 'Ochten', 'Odijk', 'Odiliapeel',
        'Odoorn', 'Odoornerveen', 'Oeffelt', 'Oegstgeest', 'Oene', 'Oentsjerk', 'Offingawier', 'Ohé en Laak', 'Oijen',
        'Oirlo', 'Oirsbeek', 'Oirschot', 'Oisterwijk', 'Okkenbroek', 'Olburgen', 'Oldeberkoop', 'Oldebroek', 'Oldeholtpade',
        'Oldeholtwolde', 'Oldehove', 'Oldekerk', 'Oldelamer', 'Oldemarkt', 'Oldenzaal', 'Oldenzijl', 'Oldeouwer',
        'Oldetrijne', 'Olst', 'Olterterp', 'Ommel', 'Ommen', 'Ommeren', 'Onderdendam', 'Onna', 'Onnen', 'Onstwedde',
        'Ooij', 'Ooltgensplaat', 'Oost West en Middelbeers', 'Oost-Graftdijk', 'Oost-Souburg', 'Oostburg', 'Oostdijk',
        'Oosteind', 'Oosterbeek', 'Oosterbierum', 'Oosterblokker', 'Oosterend', 'Oosterend', 'Oosterhesselen',
        'Oosterhout', 'Oosterhout', 'Oosterland', 'Oosterleek', 'Oosternieland', 'Oosternijkerk', 'Oosterstreek',
        'Oosterwijk', 'Oosterwijtwerd', 'Oosterwolde Gld', 'Oosterwolde', 'Oosterzee', 'Oosthem', 'Oosthuizen', 'Oostkapelle',
        'Oostknollendam', 'Oostrum', 'Oostrum', 'Oostvoorne', 'Oostwold', 'Oostwold', 'Oostwoud', 'Oostzaan', 'Ootmarsum',
        'Opeinde', 'Opende', 'Ophemert', 'Opheusden', 'Opijnen', 'Oploo', 'Opmeer', 'Oppenhuizen', 'Opperdoes', 'Oranje',
        'Oranjewoud', 'Orvelte', 'Ospel', 'Oss', 'Ossendrecht', 'Ossenisse', 'Ossenwaard', 'Ossenzijl', 'Oterleek', 'Otterlo',
        'Ottersum', 'Ottoland', 'Oud Ade', 'Oud Annerveen', 'Oud Gastel', 'Oud Ootmarsum', 'Oud Zuilen', 'Oud-Alblas',
        'Oud-Beijerland', 'Oud-Vossemeer', 'Ouddorp', 'Oude Meer', 'Oude Niedorp', 'Oude Pekela', 'Oude Wetering',
        'Oude Willem', 'Oude-Tonge', 'Oudebildtzijl', 'Oudega', 'Oudega', 'Oudega', 'Oudehaske', 'Oudehorne', 'Oudelande',
        'Oudemirdum', 'Oudemolen', 'Oudemolen', 'Oudenbosch', 'Oudendijk', 'Oudenhoorn', 'Ouderkerk aan de Amstel',
        'Ouderkerk aan den IJssel', 'Oudeschans', 'Oudeschild', 'Oudeschip', 'Oudeschoot', 'Oudesluis', 'Oudewater',
        'Oudezijl', 'Oudheusden', 'Oudkarspel', 'Oudkarspel', 'Oudorp', 'Oudwoude', 'Ouwerkerk', 'Ouwster-Nijega',
        'Ouwsterhaule', 'Overasselt', 'Overberg', 'Overdinkel', 'Overlangel', 'Overloon', 'Overschild', 'Overslag',
        'Overveen', 'Ovezande', 'Paasloo', 'Paesens', 'Pannerden', 'Panningen', 'Papekop', 'Papendrecht', 'Papenhoven',
        'Papenvoort', 'Parrega', 'Paterswolde', 'Peest', 'Peins', 'Peize', 'Peperga', 'Pernis Rotterdam', 'Persingen',
        'Pesse', 'Pesse', 'Petten', 'Philippine', 'Piaam', 'Piershil', 'Pieterburen', 'Pietersbierum', 'Pieterzijl',
        'Pijnacker', 'Pingjum', 'Plasmolen', 'Poederoijen', 'Poeldijk', 'Polsbroek', 'Poortugaal', 'Poortvliet',
        'Poppenwier', 'Posterholt', 'Prinsenbeek', 'Puiflijk', 'Punthorst', 'Purmer', 'Purmer', 'Purmerend', 'Purmerland',
        'Puth', 'Putte', 'Putten', 'Puttershoek', 'Raalte', 'Raamsdonk', 'Raamsdonksveer', 'Raard', 'Radewijk',
        'Radio Kootwijk', 'Raerd', 'Randwijk', 'Ransdaal', 'Rasquert', 'Ravenstein', 'Ravenswaaij', 'Ravenswoud',
        'Readtsjerk', 'Reahûs', 'Reduzum', 'Reek', 'Reeuwijk', 'Reijmerstok', 'Reitsum', 'Rekken', 'Renesse', 'Renkum',
        'Renswoude', 'Ressen', 'Retranchement', 'Reusel', 'Reutum', 'Reuver', 'Rha', 'Rheden', 'Rhee', 'Rheeze',
        'Rheezerveen', 'Rhenen', 'Rhenoy', 'Rhoon', 'Ridderkerk', 'Ried', 'Riel', 'Rien', 'Riethoven', 'Rietmolen',
        'Rijen', 'Rijkevoort', 'Rijkevoort-De Walsert', 'Rijnsaterwoude', 'Rijnsburg', 'Rijpwetering', 'Rijpwetering',
        'Rijs', 'Rijsbergen', 'Rijsenhout', 'Rijssen', 'Rijswijk (GLD)', 'Rijswijk (NB)', 'Rijswijk', 'Rilland',
        'Rinsumageast', 'Ritthem', 'Rockanje', 'Roden', 'Roderesch', 'Roderwolde', 'Roelofarendsveen', 'Roermond', 'Rogat',
        'Roggel', 'Rohel', 'Rolde', 'Roodeschool', 'Roosendaal', 'Roosteren', 'Rosmalen', 'Rossum', 'Rossum', 'Roswinkel',
        'Rotstergaast', 'Rotsterhaule', 'Rotterdam', 'Rotterdam-Albrandswaard', 'Rottevalle', 'Rottum', 'Rottum', 'Rouveen',
        'Rozenburg', 'Rozenburg', 'Rozendaal', 'Rucphen', 'Ruigahuizen', 'Ruinen', 'Ruinen', 'Ruinerwold', 'Rumpt', 'Rutten',
        'Ruurlo', 'Ryptsjerk', 'Saaksum', 'Saasveld', 'Saaxumhuizen', 'Sambeek', 'Sandfirden', 'Santpoort-Noord',
        'Santpoort-Zuid', 'Sappemeer', 'Sas van Gent', 'Sassenheim', 'Sauwerd', 'Schagen', 'Schagerbrug', 'Schaijk',
        'Schalkhaar', 'Schalkwijk', 'Schalsum', 'Schardam', 'Scharendijke', 'Scharmer', 'Scharnegoutum', 'Scharsterbrug',
        'Scharwoude', 'Scheemda', 'Scheerwolde', 'Schellinkhout', 'Schelluinen', 'Schermerhorn', 'Scherpenisse',
        'Scherpenzeel', 'Scherpenzeel', 'Schettens', 'Scheulder', 'Schiedam', 'Schiermonnikoog', 'Schijf', 'Schijndel',
        'Schildwolde', 'Schimmert', 'Schin op Geul', 'Schinnen', 'Schinveld', 'Schipborg', 'Schiphol', 'Schiphol-Rijk',
        'Schipluiden', 'Schokland', 'Schoondijke', 'Schoonebeek', 'Schoonhoven', 'Schoonloo', 'Schoonoord', 'Schoonrewoerd',
        'Schoorl', 'Schore', 'Schouwerzijl', 'Schraard', 'Schuinesloot', 'Sebaldeburen', 'Sellingen', 'Serooskerke',
        'Serooskerke', 'Sevenum', 'Sexbierum', 'Sibculo', 'Sibculo', 'Sibrandabuorren', 'Sibrandahûs', 'Siddeburen',
        'Siebengewald', 'Siegerswoude', 'Sijbekarspel', 'Silvolde', 'Simonshaven', 'Simpelveld', 'Sinderen', 'Sint Agatha',
        'Sint Annen', 'Sint Anthonis', 'Sint Geertruid', 'Sint Hubert', 'Sint Jansklooster', 'Sint Jansteen', 'Sint Joost',
        'Sint Kruis', 'Sint Maarten', 'Sint Maartensbrug', 'Sint Maartensvlotbrug', 'Sint Nicolaasga', 'Sint Odiliënberg',
        'Sint Pancras', 'Sint Philipsland', 'Sint-Annaland', 'Sint-Maartensdijk', 'Sint-Michielsgestel', 'Sint-Oedenrode',
        'Sintjohannesga', 'Sirjansland', 'Sittard', 'Skingen', 'Slagharen', 'Slappeterp', 'Sleen', 'Sleeuwijk', 'Slenaken',
        'Sliedrecht', 'Slijk-Ewijk', 'Slijkenburg', 'Slochteren', 'Slootdorp', 'Sloten', 'Sluis', 'Sluiskil', 'Smakt',
        'Smalle Ee', 'Smallebrugge', 'Smilde', 'Smilde', 'Snakkerburen', 'Sneek', 'Snelrewaard', 'Snikzwaag', 'Soerendonk',
        'Soest', 'Soesterberg', 'Someren', 'Sommelsdijk', 'Son en Breugel', 'Son', 'Sondel', 'Sonnega',
        'Spaarndam gem. Haarlem', 'Spaarndam', 'Spanbroek', 'Spanga', 'Spankeren', 'Spannum', 'Spaubeek', 'Spier', 'Spier',
        'Spierdijk', 'Spijk Gn', 'Spijk', 'Spijk', 'Spijkenisse', 'Spijkerboor', 'Spijkerboor', 'Sprang-Capelle', 'Sprundel',
        'Spui', 'St. Willebrord', 'St.-Annaparochie', 'St.-Jacobiparochie', "Stad aan 't Haringvliet", 'Stadskanaal',
        'Stampersgat', 'Standdaarbuiten', 'Staphorst', 'Starnmeer', 'Startenhuizen', 'Startenhuizen', 'Stavenisse',
        'Stavoren', 'Stedum', 'Steenbergen', 'Steenbergen', 'Steendam', 'Steenderen', 'Steenenkamer', 'Steensel',
        'Steenwijk', 'Steenwijkerwold', 'Stegeren', 'Steggerda', 'Stein', 'Stellendam', 'Sterksel', 'Stevensbeek',
        'Stevensweert', 'Steyl', 'Stieltjeskanaal', 'Stiens', 'Stitswerd', 'Stokkum', 'Stolwijk', 'Stompetoren',
        'Stoutenburg Noord', 'Stoutenburg', 'Stramproy', 'Streefkerk', 'Striep', 'Strijbeek', 'Strijen', 'Strijensas',
        'Stroe', 'Stroobos', 'Stuifzand', 'Stuifzand', 'Sumar', 'Surhuisterveen', 'Surhuizum', 'Susteren', 'Suwâld',
        'Swalmen', 'Sweikhuizen', 'Swichum', 'Swifterbant', 'Swolgen', 'Taarlo', 'Teeffelen', 'Teerns', 'Tegelen',
        'Ten Boer', 'Ten Post', 'Ter Aar', 'Ter Aard', 'Ter Apel', 'Ter Apelkanaal', 'Ter Heijde', 'Ter Idzard',
        'Terband', 'Terborg', 'Terheijden', 'Terherne', 'Terhole', 'Terkaple', 'Termunten', 'Termunterzijl', 'Ternaard',
        'Terneuzen', 'Teroele', 'Terschuur', 'Tersoal', 'Terwispel', 'Terwolde', 'Teteringen', 'Teuge', 'Thesinge',
        'Tholen', 'Thorn', 'Tiel', 'Tiendeveen', 'Tiendeveen', 'Tienhoven', 'Tienhoven', 'Tienray', 'Tijnje', 'Tilburg',
        'Tilligte', 'Tinallinge', 'Tinte', 'Tirns', 'Tjalhuizum', 'Tjalleberd', 'Tjerkgaast', 'Tjerkwerd', 'Tjuchem',
        'Tolbert', 'Toldijk', 'Tolkamer', 'Tollebeek', 'Tonden', 'Toornwerd', 'Tricht', 'Triemen', 'Tripscompagnie',
        'Tubbergen', 'Tuil', 'Tuitjenhorn', 'Tuk', "Tull en 't Waal", 'Twello', 'Twijzel', 'Twijzelerheide', 'Twisk',
        'Tynaarlo', 'Tytsjerk', 'Tzum', 'Tzummarum', 'Ubbena', 'Ubbergen', 'Uddel', 'Uden', 'Udenhout', 'Uffelte',
        'Ugchelen', 'Uitdam', 'Uitgeest', 'Uithoorn', 'Uithuizen', 'Uithuizermeeden', 'Uitwellingerga', 'Uitwijk',
        'Ulestraten', 'Ulft', 'Ulicoten', 'Ulrum', 'Ulvenhout AC', 'Ulvenhout', 'Ureterp', 'Urk', 'Urmond', 'Ursem gem. S',
        'Ursem', 'Usquert', 'Utrecht', 'Vaals', 'Vaassen', 'Valburg', 'Valkenburg', 'Valkenburg', 'Valkenswaard', 'Valthe',
        'Valthermond', 'Varik', 'Varsselder', 'Varsseveld', 'Vasse', 'Veelerveen', 'Veen', 'Veendam', 'Veenendaal',
        'Veenhuizen', 'Veeningen', 'Veenklooster', 'Veenoord', 'Veere', 'Veessen', 'Vegelinsoord', 'Veghel', 'Velddriel',
        'Velden', 'Veldhoven', 'Velp', 'Velp', 'Velsen-Noord', 'Velsen-Zuid', 'Velserbroek', 'Ven-Zelderheide', 'Venebrugge',
        'Venhorst', 'Venhuizen', 'Venlo', 'Venray', 'Vessem', 'Vethuizen', 'Veulen', 'Vianen NB', 'Vianen', 'Vierakker',
        'Vierhouten', 'Vierhuizen', 'Vierlingsbeek', 'Vierpolders', 'Vijfhuizen', 'Vijlen', 'Vilsteren', 'Vinkega',
        'Vinkel', 'Vinkel', 'Vinkenbuurt', 'Vinkeveen', 'Visvliet', 'Vlaardingen', 'Vlagtwedde', 'Vledder', 'Vledderveen',
        'Vledderveen', 'Vleuten', 'Vlieland', 'Vlierden', 'Vlijmen', 'Vlissingen', 'Vlist', 'Vlodrop', 'Voerendaal',
        'Vogelenzang', 'Vogelwaarde', 'Volendam', 'Volkel', 'Vollenhove', 'Vondelingenplaat Rotterdam', 'Voorburg',
        'Voorhout', 'Voorschoten', 'Voorst', 'Voorst', 'Voorthuizen', 'Vorchten', 'Vorden', 'Vorstenbosch', 'Vortum-Mullem',
        'Vragender', 'Vredenheim', 'Vredepeel', 'Vreeland', 'Vries', 'Vriescheloo', 'Vriezenveen', 'Vroomshoop',
        'Vrouwenakker', 'Vrouwenparochie', 'Vrouwenpolder', 'Vught', 'Vuren', 'Waaksens', 'Waal', 'Waalre', 'Waalwijk',
        'Waarde', 'Waardenburg', 'Waarder', 'Waardhuizen', 'Waarland', 'Waaxens', 'Wachtum', 'Waddinxveen', 'Wadenoijen',
        'Wagenberg', 'Wagenborgen', 'Wageningen', 'Walem', 'Walsoorden', 'Wamel', 'Wanneperveen', 'Wanroij', 'Wanssum',
        'Wapenveld', 'Wapse', 'Wapserveen', 'Warder', 'Warffum', 'Warfhuizen', 'Warfstermolen', 'Warmenhuizen', 'Warmond',
        'Warns', 'Warnsveld', 'Warstiens', 'Warten', 'Waskemeer', 'Waspik', 'Wassenaar', 'Wateren', 'Watergang', 'Waterhuizen',
        'Wateringen', 'Waterlandkerkje', 'Waverveen', 'Wedde', 'Weerselo', 'Weert', 'Weesp', 'Wehe-den Hoorn', 'Wehl',
        'Weidum', 'Weiteveen', 'Wekerom', 'Well L', 'Well', 'Wellerlooi', 'Welsum', 'Wemeldinge', 'Wenum Wiesel',
        'Wenum Wiesel', 'Wergea', 'Werkendam', 'Werkhoven', 'Wernhout', 'Wervershoof', 'Wesepe', 'Wessem', 'West-Graftdijk',
        'West-Terschelling', 'Westbeemster', 'Westbroek', 'Westdorp', 'Westdorpe', 'Westendorp', 'Westerbeek', 'Westerbork',
        'Westerbroek', 'Westeremden', 'Westergeest', 'Westerhaar-Vriezenveensewijk', 'Westerhoven', 'Westerland', 'Westerlee',
        'Westernieland', 'Westervelde', 'Westervoort', 'Westerwijtwerd', 'Westhem', 'Westhoek', 'Westkapelle',
        'Westknollendam', 'Westmaas', 'Westwoud', 'Westzaan', 'Wetering', 'Weteringbrug', 'Wetsens', 'Wetsinge', 'Weurt',
        'Wezep', 'Wezup', 'Wezuperbrug', 'Wichmond', 'Wier', 'Wierden', 'Wieringerwaard', 'Wieringerwerf', 'Wierum',
        'Wijchen', 'Wijckel', 'Wijdenes', 'Wijdewormer', 'Wijhe', 'Wijk aan Zee', 'Wijk bij Duurstede', 'Wijk en Aalburg',
        'Wijlre', 'Wijnaldum', 'Wijnandsrade', 'Wijnbergen', 'Wijngaarden', 'Wijnjewoude', 'Wijster', 'Wilbertoord',
        'Wildervank', 'Wilhelminadorp', 'Wilhelminaoord', 'Willemsoord', 'Willemstad', 'Wilnis', 'Wilp', 'Wilsum', 'Winde',
        'Windraak', 'Winkel', 'Winneweer', 'Winschoten', 'Winssen', 'Winsum', 'Winsum', 'Wintelre', 'Winterswijk Brinkheurne',
        'Winterswijk Corle', 'Winterswijk Henxel', 'Winterswijk Huppel', 'Winterswijk Kotten', 'Winterswijk Meddo',
        'Winterswijk Miste', 'Winterswijk Ratum', 'Winterswijk Woold', 'Winterswijk', 'Wirdum Gn', 'Wirdum', 'Wissenkerke',
        'Witharen', 'Witmarsum', 'Witte Paarden', 'Wittelte', 'Wittem', 'Witteveen', 'Wiuwert', 'Wjelsryp', 'Woensdrecht',
        'Woerden', 'Woerdense Verlaat', 'Wognum', 'Woldendorp', 'Wolfheze', 'Wolphaartsdijk', 'Wolsum', 'Woltersum',
        'Wolvega', 'Wommels', 'Wons', 'Workum', 'Wormer', 'Wormerveer', 'Woubrugge', 'Woudbloem', 'Woudenberg', 'Woudrichem',
        'Woudsend', 'Wouw', 'Wouwse Plantage', 'Wyns', 'Wytgaard', 'Wâlterswâld', 'Wânswert', 'Yde', 'Yerseke', 'Ypecolsga',
        'Ysbrechtum', 'Ysselsteyn', 'Zaamslag', 'Zaandam', 'Zaandijk', 'Zalk', 'Zaltbommel', 'Zandberg', 'Zandeweer',
        'Zandhuizen', 'Zandpol', 'Zandvoort', 'Zeddam', 'Zeegse', 'Zeeland', 'Zeerijp', 'Zeewolde', 'Zegge', 'Zegveld',
        'Zeijen', 'Zeijerveen', 'Zeijerveld', 'Zeist', 'Zelhem', 'Zenderen', 'Zennewijnen', 'Zennewijnen', 'Zetten',
        'Zevenaar', 'Zevenbergen', 'Zevenbergschen Hoek', 'Zevenbergschen Hoek', 'Zevenhoven', 'Zevenhuizen', 'Zevenhuizen',
        'Zierikzee', 'Zieuwent', 'Zijderveld', 'Zijdewind', 'Zijldijk', 'Zoelen', 'Zoelmond', 'Zoetermeer', 'Zoeterwoude',
        'Zonnemaire', 'Zorgvlied', 'Zoutelande', 'Zoutkamp', 'Zuid-Beijerland', 'Zuid-Scharwoude', 'Zuidbroek', 'Zuiddorpe',
        'Zuidermeer', 'Zuiderwoude', 'Zuidhorn', 'Zuidlaarderveen', 'Zuidland', 'Zuidlaren', 'Zuidoostbeemster',
        'Zuidschermer', 'Zuidveen', 'Zuidveld', 'Zuidvelde', 'Zuidwolde', 'Zuidwolde', 'Zuidzande', 'Zuilichem', 'Zuna',
        'Zundert', 'Zurich', 'Zutphen', 'Zuurdijk', 'Zwaag', 'Zwaagdijk-Oost', 'Zwaagdijk-West', 'Zwaanshoek', 'Zwagerbosch',
        'Zwammerdam', 'Zwanenburg', 'Zwartebroek', 'Zwartemeer', 'Zwartewaal', 'Zwartsluis', 'Zweeloo', 'Zweins', 'Zwiggelte',
        'Zwijndrecht', 'Zwinderen', 'Zwolle', 'de Hoef', 'de Lutte', 'de Wijk', 'de Woude'
  	);

    protected static $state = array(
        'Drenthe', 'Gelderland', 'Groningen', 'Flevoland', 'Friesland', 'Noord-Brabant', 'Noord-Holland', 'Overijssel',
        'Limburg', 'Utrecht', 'Zeeland', 'Zuid-Holland'
    );

    protected static $country = array(
        'Afghanistan', 'Albanië', 'Algerije', 'Amerikaans-Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antartica',
        'Antigua en Barbuda', 'Argentinië', 'Armenië', 'Aruba', 'Australië', 'Oostenrijk', 'Azerbeidzjan',
        'Bahamas', 'Bahrein', 'Bangladesh', 'Barbados', 'Wit-Rusland', 'België', 'Belize', 'Benin', 'Bermuda', 'Bhutan',
        'Bolivia', 'Bosnië-Herzegovina', 'Botswana', 'Bouvet Eiland (Bouvetøya)', 'Brazilië', 'Britse Maagdeneilanden',
        'Brunei Darussalam', 'Bulgarije', 'Burkina Faso', 'Burundi', 'Cambodja', 'Kameroen', 'Canada', 'Kaapverdië',
        'Kaaimaneilanden', 'Centraal-Afrikaanse Republiek', 'Tsjaad', 'Chili', 'China', 'Christmaseiland',
        'Cocoseilanden', 'Colombia', 'Comoren', 'Congo', 'Cookeilanden', 'Costa Rica', 'Ivoorkust', 'Kroatië', 'Cuba',
        'Cyprus', 'Tsjechische Republiek', 'Denemarken', 'Djibouti', 'Dominica', 'Dominicaanse Republiek', 'Duitsland',
        'Ecuador', 'Egypte', 'El salvador', 'Equatoriaal-Guinea', 'Eritrea', 'Estland', 'Ethiopië', 'Faeröer Eilanden',
        'Falklandeilanden', 'Fiji', 'Finland', 'Frankrijk', 'Frans-Guyana', 'Frans-Polynesië',
        'Franse Zuidelijke en Antarctische Gebieden', 'Gabon', 'Gambia', 'Georgië', 'Ghana', 'Gibraltar', 'Griekenland',
        'Groenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinee', 'Guinee-Bissau', 'Guyana',
        'Haïti', 'Heard en McDonaldeilanden', 'Vaticaanstad', 'Honduras', 'Hong Kong', 'Hongarije', 'IJsland', 'India',
        'Indonesië', 'Iran', 'Irak', 'Ierland', 'Man', 'Israel', 'Italië', 'Jamaica', 'Japan', 'Jersey', 'Jordanië',
        'Kazachstan', 'Kenia', 'Kiribati', 'Korea', 'Koeweit', 'Kirgizië', 'Laos', 'Letland', 'Libanon', 'Lesotho',
        'Liberia', 'Libië', 'Liechtenstein', 'Litouwen', 'Luxemburg', 'Macau', 'Macedonië', 'Madagascar', 'Malawi',
        'Maleisië', 'Maldiven', 'Mali', 'Malta', 'Marshalleilanden', 'Martinique', 'Mauritus', 'Mauritania', 'Mayotte',
        'Mexico', 'Micronesië', 'Moldavië', 'Monaco', 'Mongolië', 'Montenegro', 'Monsterrat', 'Marokko', 'Mozambique',
        'Myanmar', 'Namibië', 'Nauru', 'Nepal', 'Nederlandse Antillen', 'Nederland', 'Nieuw-Caledonië', 'Nieuw-Zeeland',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk', 'Noordelijke Marianen', 'Noorwegen', 'Oman', 'Pakistan',
        'Palau', 'Palestina', 'Panama', 'Papoea-Nieuw-Guinea', 'Paraguay', 'Peru', 'Filipijnen', 'Pitcairneilanden',
        'Polen', 'Portugal', 'Puerto Rico', 'Qatar', 'Réunion', 'Romania', 'Rusland', 'Rwanda', 'Rwanda',
        'Sint-Bartholomeus', 'Sint-Helena', 'Saint Kitts en Nevis', 'Saint Lucia', 'Sint Maarten',
        'Saint-Pierre en Miquelon', 'Saint Vincent en de Grenadines', 'Samoa', 'San Marino', 'Sao Tomé en Principe',
        'Saoedi-Arabië', 'Senegal', 'Servië', 'Seychellen', 'Sierra Leone', 'Singapore', 'Slovenië', 'Salomonseilanden',
        'Somalië', 'Zuid-Afrika', 'Zuid-Georgia en de Zuidelijke Sandwicheilanden', 'Spanje', 'Sri Lanka', 'Soedan',
        'Suriname', 'Spitsbergen en Jan Mayen', 'Swaziland', 'Zweden', 'Zwitserland', 'Syrië', 'Taiwan', 'Tadzjikistan',
        'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau-eilanden', 'Tonga', 'Trinidad en Trobago', 'Tunesië',
        'Turkije', 'Turkmenistan', 'Turks- en Caicoseilanden', 'Tuvalu', 'Oeganda', 'Oekraïne',
        'Verenigde Arabische Emiraten', 'Verenigd Koninkrijk', 'Verenigde Staten van Amerika',
        'Kleinere afgelegen eilanden van de Verenigde statent', 'Amerikaanse Virgineilanden', 'Uruguay', 'Oezbakistan',
        'Vanuatu', 'Venezuela', 'Vietnam', 'Wallis en Futuna', 'Westerlijke Shara', 'Jemen', 'Zambia', 'Zimbabwe'
    );

    /**
     * @see parent
     */
  	public static function buildingNumber()
  	{
  		  return static::bothify(static::randomElement(static::$buildingNumber));
  	}

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * @see parent
     */
    public function address()
  	{
  		  $address = parent::address();
        return preg_replace('/\\\n/', PHP_EOL, $address);
  	}

    /**
     * Returns a NL latitude, roughly between 50.75 and 53.55
     *
     * @return float
     */
    public static function latitude()
  	{
  		  return number_format(mt_rand(50750000, 53550000)/1000000, 6);
  	}

    /**
     * Returns a NL longitude, roughly between 3.38 and 7.22
     *
     * @return float
     */
    public static function longitude()
  	{
  		  return number_format(mt_rand(3380000, 7220000)/1000000, 6);
  	}
}
