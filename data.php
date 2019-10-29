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
        'fname' =>  'Unknown',
        'lname' =>  'Unknown'
        ]
    ];
/*
all news arrays
-$articleSience
-$articleCulture 
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
        'title' => 'The kind act that helped shape a life',
        'date' => "2019-10-29",
        'likes' =>  '3',
        'content' => '
                                ' // add some news
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
        'id' => 'Sport',
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