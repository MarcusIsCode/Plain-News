<?php
    require __DIR__ ."/function.php";
$authors = [
        [
        'id'    =>  'Sience',
        'fname' =>  'Steven',
        'lname' =>  'Stevensson'
        ],
        [
        'id'    =>  'culturre',   
        'fname' =>  'Lars',
        'lname' =>  'Larsson'
        ],
        [
        'id'    =>  'Sport',   
        'fname' =>  'Jenna',
        'lname' =>  'Jensen'
        ],
        [
        'id'    =>  'Tech',   
        'fname' =>  'Ann',
        'lname' =>  'Anndersen'
        ],
        [
        'id'    =>  'Developers',   
        'fname' =>  'Ryan',
        'lname' =>  'Daws'
        ]
    ];
/*
all arrays, they pretty much built the same. 
the only diffrenfce is 'id' where it's named
diffrently depending on what array it is
example: articlSience have id = 'sience.

-$articleSience
-$articleCulture 
-$articleSport 
-$articleTech
-$articleDevelopers 
*/
 

// Here will there be arrays for diffrent id and content

$articleSience = [
                [
                    'id'=> 'Sience',
                   'title' => 'The subtle way mucus disarms microbes',
                    'date'=>  "2019-10-16",
                    'likes'=>  '4',
                    'content'=> '
                                Mucus, which lines 200 square meter of our bodies including lungs and digestive tract
                                is not just a physical barrier can also disarm microbes preventing them from causing infections.
                                Glycans, which are found in the mucus are mainly responsible for this property. Researchers studied
                                the effects of glycans on Pseudomonas aeruginosa and discovered that this microbe no longer produced 
                                toxins or expressed genes, which are necessary for bacterial communication.This newly discovered
                                property might be useful in finding new ways to treat antibiotic
                                resistance in addition to traditional antibiotics.
                                '
                ],
                [     'id' => 'Sience',
                    'title'=> 'Guess what… Even prehistoric humans stored food',
                    'date'=> "2019-08-15" ,
                    'likes'=>  '3',
                    'content'=> 'While they didn’t have refrigerators, prehistoric humans also went through the pains of storing
                                 food for later consumption. This can be understood from the evidence of storage and delayed consumption
                                 of animal bone marrow at the Qesem caves near Tel Aviv.
                                 Researchers found deer metapodials in caves covered in skin for better marrow preservation. This process 
                                 apparently facilitates low rate of marrow fat degradation.This major discovery dating back to about 
                                 400,000 years ago offers insight in the socioeconomic dynamics of humans around that time which could
                                  provide new modes of adaptations during the Paleolithic age.
                                '
                ],
                [     'id' => 'Sience',
                    'title'=> 'Even low doses of antibiotics affect the gut bacteria',
                    'date'=> "2019-10-11",
                    'likes'=>  '5',
                    'content'=> 'Gut microbes are known to be extremely sensitive to even low doses of antibiotics and such low
                                 doses are routinely found in the environment. Using three-dimensional microscopy in transparent 
                                 zebrafish, researchers found that exposure to ciprofloxacin dramatically affect the gut bacteria.
                                 Researchers found that in presence of the antibiotic, bacteria, which are usually fast swimming, 
                                 develop sluggish behaviour and form aggregates. Further, bacteria that normally, aggregate in dense 
                                 colonies, end up forming even larger colonies.This zebrafish model could help us provide a
                                 framework to understand the effects of antibiotics in both humans as well as animals.
                                '
                ],
                 [     'id' => 'Sience',
                    'title'=> 'Salamander-like powers in humans to regrow cartilage',
                    'date'=> "2019-09-10",
                    'likes'=>  '5',
                    'content'=> 'While it was always thought that humans cannot regrow tissue, researchers have recently discovered that
                                 human cartilage tissue has a repair mechanism similar to that seen in salamander.The cartilage tissue, 
                                 especially in the ankle joint uses molecules called microRNAs which are the same molecules used for 
                                 tissue regeneration in organisms like salamanders, lizards and zebrafish indicating that 
                                 it is evolutionarily conserved across several species. This could form the basis of developing
                                 novel therapies for osteoarthritis which is the most common joint disorder in the world.
                                '
                ],
                [
                'id' => 'Sience',
                'title' => 'Lithium-ion batteries power 2019 Nobel Prize in Chemistry',
                'date' => "2019-09-17",
                'likes' =>  '2',
                'content' =>    'The Lithium-ion battery, which is now a days used to power everything from cell phones
                                 to laptops as well as electric cars powered the Nobel Prize for Chemistry for this year.
                                 These batteries store sufficient energy from both solar and wind power making it possible
                                  to help our society to slowly move towards being fossil-fuel free.
                                  While Stanley Whittingham did the foundation work for these batteries in 1970, John Goodenough
                                   in 1980 increased its potential for changing the cathode used in the batteries. This spurred Akira 
                                   Yoshino to release the first commercially viable lithium-ion battery in 
                                   1985. The prize was shared by the three laureates.'
    ],
 ];



$articleCulture = [
    [
        'id' => 'Culture',
        'title' => 'The subtle way mucus disarms microbes',
        'date' =>  "2019-10-16",
        'likes' =>  '4',
        'content' => '
                                Mucus, which lines 200 square meter of our bodies including lungs and digestive tract
                                is not just a physical barrier can also disarm microbes preventing them from causing infections.
                                Glycans, which are found in the mucus are mainly responsible for this property. Researchers studied
                                the effects of glycans on Pseudomonas aeruginosa and discovered that this microbe no longer produced 
                                toxins or expressed genes, which are necessary for bacterial communication.This newly discovered
                                property might be useful in finding new ways to treat antibiotic
                                resistance in addition to traditional antibiotics.
                                '
    ],
    [
        'id' => 'Culture',
        'title' => 'The kind act that helped shape a life',
        'date' => "2019-06-17",
        'likes' =>  '3',
        'content' => 'Mevan Babakar had a difficult start in life. Her Kurdish parents fled Iraq
                      during the Gulf War in the 1990s, travelling through Turkey, Azerbaijan and 
                      Russia until the family reached the West and spent a year in a refugee camp
                      near Zwolle in the Netherlands.
                      Mevan now works for a fact-checking charity and
                      lives happily in London. But she never forgot the refugee
                      camp worker all those years ago who, out of the kindness of his 
                      own heart, bought her a red, shiny bike. “My five-year-old heart 
                      exploded with joy,” she remembers.
                      Mevan, today aged 29, decided to track down the man 
                      and posted an old photo of the two of them in the camp 
                      on Twitter. To her surprise, the tweet was shared more than 7,000 
                      times and within 36 hours the charity worker, Egbert, was located in Germany.
                      The pair were reunited and Mevan posted another photograph: “This is
                      Egbert. He’s been helping refugees since the 90s. He thought the bike was
                      too small a gesture to make such a big fuss about.”
                     For Mevan, the lesson is that small actions can have big consequences:
                      “The kindness Egbert showed me continues to shape me. That’s the magical
                       thing about kindness: it doesn’t cost anything and it changes the world
                        one person at a time.”
                                '
    ],
    [
        'id' => 'Culture',
        'title' => 'Bearded vultures make an Alpine comeback',
        'date' => "2019-08-06",
        'likes' =>  '5',
        'content' => 'The bearded vulture (pictured) was hunted to extinction in the Alps
                      in the early 20th century, but it is making a remarkable comeback. 
                      This year, a record 35 vulture chicks took to the skies, thanks to 
                      a 30-year reintroduction project. Fifty pairs of bearded vultures 
                      now breed in the French Alps. “People used to believe these vultures
                      would carry off small children and sheep,” explains Théo Mazet, a French
                      naturalist helping to re-establish the birds. In fact, the bearded vulture,
                      or lammergeier, is the only bird species to live on a scavenged diet of animal
                      bones—and that’s useful, says Mazet.Unlike wolves and bears, the vultures
                      don’t prey on cattle or game. “They act as rubbish collectors, which helps
                      keep the mountain environment healthy,” he says.'
    ],
    [
        'id' => 'Culture',
        'title' => 'Bystander effect debunked',
        'date' => "2019-09-28",
        'likes' =>  '5',
        'content' => 'The largest-ever study of violent incidents captured on CCTV suggests
                      that there are more Good Samaritans among us than we might suppose.
                      Researchers from universities in Denmark, Holland and the UK viewed
                      video footage of more than 200 arguments and assaults in the cities
                      of Amsterdam, Lancaster (UK) and Cape Town and found that in nine out
                      of 10 cases someone stepped in to help victims. The finding goes against
                      the “bystander effect”, a principle of social psychology which holds
                      that the larger the number of observers to an emergency, the less likely
                      it is that the victim will receive help.Lead author Dr Richard Philpot
                      of Lancaster University and University of Copenhagen, says: “The fact that
                      bystanders are much more active than we think is reassuring for the public.”
                                '
    ],
    [
        'id' => 'Culture',
        'title' => 'The secret donor who just keeps on giving',
        'date' => "2019-09-17",
        'likes' =>  '2',
        'content' =>    'A mystery benefactor has been handing out “surprise bags” 
                        (wundertüete) of money—more than €200,000—for local causes
                        in the German city of Brunswick. The bags have been
                        appearing at regional newspaper the Braunschweiger Zeitung
                        with instructions on which charity the money should go to.
                        A hospice, churches in need of repair and a bureau for crime
                        victims are among causes to have benefitted. The donor’s identity
                        is a mystery.“We simply don’t know, and we don’t want to endanger
                        these good deeds,” says journalist David Mache.'
    ],
];


$articleSport = [
    [
        'id' => 'Sport',
        'title' => 'Naseem Shah, the 16-year-old who could make his Test debut for Pakistan Down Under',
        'date' =>  "2019-05-01",
        'likes' =>  '4',
        'content' => 'Naseem has been named in Pakistan\'s squad for Test series beginning
                      on November 21 at the Gabba. He\'s made just five first-class appearances
                      so far and is still to complete his schooling.
                                '
    ],
    [
        'id' => 'Sport',
        'title' => 'England v New Zealand: Tourists beaten by New Zealand XI in Twenty20 warm-up',
        'date' => "2019-01-17",
        'likes' =>  '3',
        'content' => 'England lost their second Twenty20 warm-up match against a New Zealand XI
                     by eight wickets as Kiwi opener Colin Munro smashed an unbeaten century.England
                     posted 188-5 from their 20 overs with James Vince making 46 and Joe Denly 39 not 
                     out.But Munro smashed 107 from 57 balls with nine fours and seven sixes to lead 
                     New Zealand to an eight-wicket victory with nine balls to spare. England\'s five-match
                     T20 series against New Zealand starts on Friday. Leg-spinner Matt Parkinson, who is yet
                     to make his full debut, dismissed Anton Devcich with his third ball in England colours
                     and had two catches dropped off his bowling. Uncapped Saqib Mahmood was the only
                     other member of England\'s inexperienced bowling attack to take a wicket but he
                     and fellow seamers Pat Brown and Lewis Gregory, who are also yet to play a full
                     international, went for more than 10 runs per over.Gregory earlier hit 29 from 11
                     balls while Sam Billings made a 23-ball 27. Opener Tom Banton made just six while
                     captain Eoin Morgan was out for 12.
                                '
    ],
    [
        'id' => 'Sport',
        'title' => 'Bearded vultures make an Alpine comeback',
        'date' => "2019-08-06",
        'likes' =>  '5',
        'content' => 'The bearded vulture (pictured) was hunted to extinction in the Alps
                      in the early 20th century, but it is making a remarkable comeback. 
                      This year, a record 35 vulture chicks took to the skies, thanks to 
                      a 30-year reintroduction project. Fifty pairs of bearded vultures 
                      now breed in the French Alps. “People used to believe these vultures
                      would carry off small children and sheep,” explains Théo Mazet, a French
                      naturalist helping to re-establish the birds. In fact, the bearded vulture,
                      or lammergeier, is the only bird species to live on a scavenged diet of animal
                      bones—and that’s useful, says Mazet.Unlike wolves and bears, the vultures
                      don’t prey on cattle or game. “They act as rubbish collectors, which helps
                      keep the mountain environment healthy,” he says.'
    ],
    [
        'id' => 'Sport',
        'title' => 'Bystander effect debunked',
        'date' => "2019-09-28",
        'likes' =>  '5',
        'content' => 'Rugby World Cup final: England v South Africa
                      Venue: Yokohama International Stadium Date: Saturday, 2 November Kick-off: 09:00 GMT
                      Coverage: Live radio commentary on BBC Radio 5 Live and live text commentary on the BBC Sport website and app.
                      South Africa head coach Ressie Erasmus expects winger Cheslin Kolbe to be available
                       for Saturday\'s World Cup final against England. Kolbe, who has been described as
                        an "X-factor player" by England full-back Elliot Daly, missed the semi-final win
                         over Wales with an ankle injury. But Erasmus said on Tuesday: "We are lucky enough
                          to have all 31 players available and ready to train."It will probably be exactly the
                           same 23, with Cheslin Kolbe coming back in."Two-time winners South Africa have faced
                        some criticism for their direct style of play and tactical kicking at the tournament in Japan,
                         and Erasmus has already said the Springboks will "grind it out" against England in Tokyo on Saturday (09:00 GMT kick-off).
                        "You have to have some building blocks in place," he added on Tuesday.
                        "We have followed a certain route - according to the stats and the way the game is being refereed
                         currently - and what it gives you is short-term results on the scoreboard."We certainly accept that 
                         there are some things in our game that we need to improve, and we take that on the chin.
                        "But we have put ourselves in a position to win the World Cup, which is where we want to be."
                        \'Bring it on\' - Vunipola welcomes Springbok challenge The \'mini Hercules\' in England\'s
                         path - how can De Klerk be stopped? Sale send Tom Curry\'s twin Ben to Japan England wary of \'X-factor\'
                         If he does return to their side, England full-back Daly expects South Africa to give Kolbe - who has scored seven tries in 13 Tests,
                         including two at this World Cup, "as much of the ball as possible".
                        "He is one of their X-factor players," said Daly, who has faced the 26-year-old Toulouse winger at club level with former side Wasps.
                        "I have played against him a couple of times in Europe. He is a good player with very good feet.
                        "I don\'t think it will change their structure too much, but they will probably just try to give him the ball in space a bit more."
                        England defence coach John Mitchell became aware of the "fabulous" Kolbe while working in South Africa.
                        "He is well watched by a lot of fans because every time he touches the ball, he\'s exciting," said Mitchell.
                                '
    ],
    [
        'id' => 'Sport',
        'title' => 'Roma turn down chance to sign Jack Rodwell',
        'date' => "2019-10-29",
        'likes' =>  '2',
        'content' =>  'Roma have decided against signing former England midfielder Jack Rodwell following
                       his trial with the club, according to Sky in Italy.
                       The 28-year-old passed a medical and underwent physical tests
                        with the Serie A side last weekend. Roma were keen to bolster
                        their midfield options after losing Henrikh Mkhitaryan, Bryan Cristante,
                        Lorenzo Pellegrini and Amadou Diawara inside the first two months of the season.
                        Jordan Veretout was the only fit midfielder in the squad for their
                        Europa League clash with Borussia Monchengladbach, with boss Paulo Fonseca forced
                        to play centre-back Gianluca Mancini in a central midfield role.'
    ],
];

$articleTech = [
    [
        'id' => 'Tech',
        'title' => 'Samsung\'s \'space selfie\' satellite crashed on a Michigan couple\'s property',
        'date' =>  "2019-07-01",
        'likes' =>  '4',
        'content' => 'A Samsung satellite crash-landed on a Michigan couple\'s
                      property. Just before 9 am in the morning they saw the 
                      broken satellite in the property. Nancy Welke of Merrill 
                      took to Facebook to share the incident and called the incident 
                      \'unbelievable\'. She added that 911 is baffled to hear the 
                      incident. She posted a video along with it to show how she 
                      went to investigate the object that got stuck in the tree in 
                      her property.
                                '
    ],
    [
        'id' => 'Tech',
        'title' => 'Google \'Genuinely Struggling\' with employee trust: CEO Sundar Pichai
',
        'date' => "2019-04-13",
        'likes' =>  '3',
        'content' => 'Google CEO Sundar Pichai, in a leaked video, said that the
         company was struggling with how to deal with internal debate over controversial
         topics while the firm is seeking to tamp down freewheeling discussions.. 
         According to the video, Pichai said, "We are genuinely struggling with some 
         issues - transparency at scale." Pichai said it during a closed door meeting 
         called TGIF, that was attended by few top executives on Thursday.


                                '
    ],
    [
        'id' => 'Tech',
        'title' => 'Pentagon ignores Amazon, to handover a $10 billion cloud computing contract to Microsoft', //add tech news
        'date' => "2019-08-11",
        'likes' =>  '5',
        'content' => 'The Pentagon has awarded IT-giant Microsoft a $10 billion cloud 
                      computing contract, ignoring the front runner Amazon due to its 
                      competitive bid. Pentagon said that the process was fair and 
                      followed procurement guidelines. Several IT-giants like Microsoft,
                       Amazon, IBM and Oracle had placed bid for the project called 
                       Joint Enterprise Defense Infrastructure, or JEDI. The AI based
                        project will be used by the US military for war planning.
                        '
    ],
    [
        'id' => 'Tech',
        'title' => '130,000 iPhone 11 sold in South Korea on launch day',
        'date' => "2019-07-18",
        'likes' =>  '5',
        'content' => '130,000 units of iPhone 11 were sold in
                      South Korea on October 26, which was the launch day of Apple\'s 
                      latest in the country. However, the figure is an estimation, as 
                      per the number of new iPhone activations recorded. It\'s an 
                      interesting 30% increase compared to last year\'s sales records.
                       In 2018, it was estimated 100,000 units of iPhone XS, XS Max, 
                       and XR were sold on day one. It’s surely a decent business by 
                       Apple..
                                '
    ],
    [
        'id' => 'Tech',
        'title' => 'NASA & alien hunters to search for life beyond our solar system',
        'date' => "2019-10-29",
        'likes' =>  '2',
        'content' =>  'RNASA will soon start scanning a number of
                        nearest exoplanets searching for alien life in partnership with
                        SETI scientists that will lead the $100 million Breakthrough
                        Listen project. With the help of NASA\'s Transiting Exoplanet
                        Survey Satellites, the team will look for anomalies among the
                        stellar \'light curves\' and listen for \'technosignatures\',
                        which are believed to be indicators of advanced alien
                        civilizations.
                        '
    ],
];
$articleDevelopers = [
    [
        'id' => 'Developers',
        'title' => 'Project Treble is making a big difference to the speed of Android updates',
        'date' =>  "2019-07-01",
        'likes' =>  '4',
        'content' => 'Google’s Project Treble initiative to speed up Android updates and reduce
                      fragmentation appears to be working. Manufacturers of Android devices have
                       a tendency to heavily modify the OS in an understandable bid to differentiate
                        their offerings. The downside is that it takes such manufacturers a long time
                        to deliver OS updates. Aside from not providing access to all the latest and
                         greatest features to users, Android fragmentation means developers have less
                          certainty their apps will work as intended across the whole breadth of available devices.
                         Project Treble aims to make it easier for manufacturers to customise Android more quickly
                          by taking a more modular approach. In a blog post, Google wrote:
                        “One of the earliest indications that Project Treble was having a positive
                         effect was our ability to run the Beta program for Android 9 Pie on many more
                          devices from more manufacturers. In addition to Google Pixels, we had 7 device
                           models from 7 OEMs supporting Android 9 Pie Beta. With Android 10, this year,
                            we increased the number of devices to 18 (again, in addition to Pixels),
                             representing 12 OEMs. This represents a significant increase over the previous
                              year and shows that Project Treble is having an impact.”
                            Google says that deeper collaboration with chipmakers has reduced 
                            the average update time by three months. Starting with Android 10, 
                            Google believes that will be further reduced. Android Pie (9.0) reached
                            22.6 percent of active devices around 400 days after launch. While that pales 
                            in comparison to iOS 13, which is running on 50 percent of compatible iPhones
                             just a month after release, it’s a marked improvement over Android Oreo which
                              only reached 8.9 percent of devices over the same timeframe.
                                '
    ],
    [
        'id' => 'Developers',
        'title' => 'Microsoft’s free new font Cascadia is designed for developers',
        'date' => "2019-06-17",
        'likes' =>  '3',
        'content' => 'Microsoft has released a free new font called Cascadia which
                     has been designed to be aesthetically-pleasing for coders. 
                     With Microsoft debuting its new Windows Terminal command-line
                     experience during the company’s Build conference this year,
                     Redmond decided that developers should also be treated to a 
                     new font.
                           '
    ],
    [
        'id' => 'Developers',
        'title' => 'Pentagon ignores Amazon, to handover a $10 billion cloud computing contract to Microsoft', //add Developers news
        'date' => "2019-08-11",
        'likes' =>  '5', //----
        'content' => 'While the debate over whether loot boxes constitute 
                        gambling or not rages on, the largest console makers are 
                        taking matters into their own hands.
                        Microsoft, Sony, and Nintendo have all decided to force
                        game developers which use loot boxes to disclose the odds 
                        of winning items. The announcement was made following an
                        FTC workshop on loot boxes. During the workshop,
                        the Entertainment Software Association (ESA) – which
                        represents all three console makers – announced their plans.
                        A follow-up blog post on the ESA site notes that many of the
                        world’s largest third-party publishers, which the ESA also
                        represents, have pledged to disclose the odds of winning items
                        from loot boxes and their rarity by 2020. The publishers noted by 
                        the ESA include: Electronic Arts, Take-Two Interactive, Ubisoft,
                        Warner Bros Interactive Entertainment, Bandai Namco, Bethesda, Wizards
                        of the Coast, and Activision Blizzard. In the blog post, the ESA wrote:
                        “We plan to underscore to the FTC our industry’s deep connection 
                        to our community and shared desire to work with policymakers, parents, and players to provide the information they need for a positive game experience.
                        This includes the important work the industry has done to create robust parental controls.”
                        While legislation is expected to force game developers to adopt such measures, it seems many
                        are deciding to start improving their practices now. Part of the decision could be morals, 
                        but a large part is likely based on the backlash games receive for implementing loot boxes (see: Star Wars Battlefront 2).
                        Several games have begun switching to a so-called ‘battle pass’ system which charges gamers an upfront fee but a clear
                        progression towards unlocking specific items based on how much time they spend on the game and how they perform. Such a 
                        system helps to take the question of gambling out of the equation by removing the slot machine-like random mechanics.
                        '
    ],
    [
        'id' => 'Developers',
        'title' => 'International Game Developers
                    Association teams up with Skillz to monetise eSports',
        'date' => "2019-07-15",
        'likes' =>  '5',
        'content' => 'California-based mobile eSports platform Skillz is working 
                      with the International Game Developers Association (IGDA)
                      to enable game developers with new tools to build sustainable
                      businesses by retaining, engaging, and monetising their content.
                      This partnership will connect 30 million registered players and
                      more than 20,000 new game developers from Skillz to the IGDA\'s 
                      existing network of 10,000 developer chapters and special interest 
                      groups.Andrew Paradise, CEO and founder of Skillz, said: “Game 
                      makers are the unsung heroes of esports, designing the engaging 
                     content that drives a growing multi-billion dollar industry forward.
                    Skillz is the platform that empowers anyone to embrace their inner
                     champion. By giving some of the most talented creators in the world
                    access to the Skillz community and technology platform, the industry\'s
                    brightest rising stars can showcase their passions to the world\'s 
                    2.6 billion mobile gamers.” In January, British games trade association
                     TIGA released its Business Opinion Survey of 60 companies that were asked
                      about their plans for the year – with positive results. Of these, more 
                      than three quarters (77%) of businesses plan to expand their workforce
                       in 2019, which is an increase of 9% over 2018. 2% expect a diminishment 
                       in staff – while the remaining 11% foresee neither. With figures unlikely
                        to be a coincidence, 77% of businesses responded ‘very well’, or ‘well’ 
                        when asked how they’re performing, an increase of 15% over the previous year.
                                '
    ],
    [
        'id' => 'Developers',
        'title' => 'The Linux Foundation forms Project Alvarium',
        'date' => "2019-03-15",
        'likes' =>  '2',
        'content' =>  'The Linux Foundation has announced its intent to form a new project
                       called Alvarium. Project Alvarium will be focused on building a Data
                       Confidence Fabric (DCF). This will help facilitate trust and confidence
                       in data across heterogeneous systems. According to the Linux Foundation,
                       a DCF is a framework that inserts trust into a data’s path, thus facilitating
                       orchestration of trusted AI models and delivery of data from devices to 
                       applications with confidence. Project Alvarium will help foster a community
                        around the framework and related APIs. It will also seek collaboration with 
                        other industry efforts to unify trust insertion capabilities. Dell Technologies 
                        will provide much of the code for the project in the upcoming quarter.
                         Dell Technologies also seeded code for the EdgeX Foundry project in 2017, 
                         which is part of the Linux Foundation Edge group. According to the Linux Foundation,
                          the EdgeX framework is a default component within the DCF seed for open data ingestion.
                           It can also be replaced with an alternative, if preferred. Industry leaders
                            such as Arm, IBM, IOTA Foundation, MobiledgeX, OSIsoft, and Unisys will 
                            also contribute code to Project Alvarium. “Trust fabrics will be a key enabler for scaling digital transformation across inherently heterogeneous systems,” said Jason Shepherd, Global CTO, Edge and IoT, Dell Technologies. “There is not an industry on the planet that this effort won’t impact in terms of delivering data with measurable confidence, facilitating trusted workload consolidation and also helping organizations scale meeting compliance requirements such as GDPR. We look forward to collaborating with the community on this important topic.”
                        '
    ],
];
