<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class GamesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'game_id' => 'MHDJA',
                'game_name' => 'Monster Hunter: World',
                'game_description' => 'Welcome to a new world! Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts!',
                'price' => '349000',
                'genre' => 'Action, Open World, RPG, Fantasy', 
                'rating' => '8.8', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/mhw.png')), 
                'release_date' => '9 August 2018', 
                'developer' => 'CAPCOM Co., Ltd.', 
                'publisher' => 'CAPCOM Co., Ltd.', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'FSBLH',
                'game_name' => 'NieR:Automata™',
                'game_description' => 'NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.

                Humanity has been driven from the Earth by mechanical beings from another world. In a final effort to take back the planet, the human resistance sends a force of android soldiers to destroy the invaders. Now, a war between machines and androids rages on... A war that could soon unveil a long-forgotten truth of the world.',
                'price' => '579000',
                'genre' => 'Story Rich, Female Protagonist, JRPG, Anime', 
                'rating' => '8.7', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/nier.png')), 
                'release_date' => '17 March 2017', 
                'developer' => 'Square Enix, PlatinumGames Inc.', 
                'publisher' => 'Square Enix', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'RDGLR',
                'game_name' => 'Red Dead Redemption 2',
                'game_description' => 'America, 1899.

                Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.',
                'price' => '649000',
                'genre' => 'Open World, Story Rich, Adventure, Western', 
                'rating' => '9.1', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/rdr2.jpg')), 
                'release_date' => '6 December 2019', 
                'developer' => 'Rockstar Games', 
                'publisher' => 'Rockstar Games', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'SGNLK',
                'game_name' => 'Marvel’s Spider-Man Remastered',
                'game_description' => 'In Marvel’s Spider-Man Remastered, the worlds of Peter Parker and Spider-Man collide in an original action-packed story. Play as an experienced Peter Parker, fighting big crime and iconic villains in Marvel’s New York. Web-swing through vibrant neighborhoods and defeat villains with epic takedowns.',
                'price' => '879000',
                'genre' => 'Superhero, Open World, Action, Adventure', 
                'rating' => '9.6', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/spiderman.webp')), 
                'release_date' => '12 August 2022', 
                'developer' => 'Insomniac Games, Nixxes Software', 
                'publisher' => 'PlayStation PC LLC', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'SFNJK',
                'game_name' => 'Marvel’s Spider-Man: Miles Morales',
                'game_description' => 'After the events of Marvel’s Spider-Man Remastered, teenage Miles Morales is adjusting to his new home while following in the footsteps of his mentor, Peter Parker, as a new Spider-Man. When a fierce power struggle threatens to destroy his home, Miles must take up the mantle of Spider-Man and own it',
                'price' => '729000',
                'genre' => 'Action, Superhero, Open World, Adventure', 
                'rating' => '9.3', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/miles.jpg')), 
                'release_date' => '18 November 2022', 
                'developer' => 'Insomniac Games, Nixxes Software', 
                'publisher' => 'PlayStation PC LLC', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'UIEFS',
                'game_name' => 'Resident Evil 4',
                'game_description' => 'Survival is just the beginning. Six years have passed since the biological disaster in Raccoon City. Leon S. Kennedy, one of the survivors, tracks the president`s kidnapped daughter to a secluded European village, where there is something terribly wrong with the locals.',
                'price' => '829000',
                'genre' => 'Action, Horror, Zombies, Dark', 
                'rating' => '9.7', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/re4.png')), 
                'release_date' => '24 March 2023', 
                'developer' => 'CAPCOM Co., Ltd.', 
                'publisher' => 'CAPCOM Co., Ltd.', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'BHUIS',
                'game_name' => 'God of War',
                'game_description' => 'His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same.',
                'price' => '729000',
                'genre' => 'Action, Story Rich, Adventure, RPG', 
                'rating' => '9.6', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/gow.jpg')), 
                'release_date' => '14 January 2022', 
                'developer' => 'Santa Monica Studio', 
                'publisher' => 'PlayStation PC LLC', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'ESFUI',
                'game_name' => 'Scarlet Nexus',
                'game_description' => 'Choose between Yuito and Kasane, elite psionics each armed with a talent in psychokinesis and their own reason to fight. Complete both of their stories to unlock all the mysteries of a Brain Punk future caught between technology and psychic abilities.',
                'price' => '549000',
                'genre' => 'Action, Anime, JRPG, Sci-fi', 
                'rating' => '8.3', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/scarlet.png')), 
                'release_date' => '25 June 2021', 
                'developer' => 'BANDAI NAMCO Studios Inc.', 
                'publisher' => 'BANDAI NAMCO Entertainment', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'GFERU',
                'game_name' => 'Horizon Zero Dawn™ Complete Edition',
                'game_description' => 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!',
                'price' => '729000',
                'genre' => 'Open World, Action, Adventure, Story Rich', 
                'rating' => '8.7', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/horizon.jpg')), 
                'release_date' => '7 August 2020', 
                'developer' => 'Guerrilla', 
                'publisher' => 'PlayStation PC LLC', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'JUOIG',
                'game_name' => 'Baldur`s Gate 3',
                'game_description' => 'Baldur’s Gate 3 is a story-rich, party-based RPG set in the universe of Dungeons & Dragons, where your choices shape a tale of fellowship and betrayal, survival and sacrifice, and the lure of absolute power.',
                'price' => '699000',
                'genre' => 'RPG, Choice Matter, Story Rich, Dungeons & Dragons', 
                'rating' => '9.6', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/baldursgate3.png')), 
                'release_date' => '3 August 2023', 
                'developer' => 'Larian Studios', 
                'publisher' => 'Larian Studios', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'ONJIF',
                'game_name' => 'Dragon`s Dogma: Dark Arisen',
                'game_description' => 'Set in a huge open world, Dragon’s Dogma: Dark Arisen presents a rewarding action combat experience. Players embark on an epic adventure in a rich, living world with three AI companions, known as Pawns. These partners fight independently, demonstrating prowess and ability that they have developed based on traits learned from each player. PC users can share these Pawns online and reap rewards of treasure, tips and strategy hints for taking down the terrifying enemies. Pawns can also be borrowed when specific skills are needed to complete various challenging quests.',
                'price' => '399000',
                'genre' => 'RPG, Open World, Fantasy, Action', 
                'rating' => '8.9', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/dragondogma.jpg')), 
                'release_date' => '15 January 2016', 
                'developer' => 'Capcom', 
                'publisher' => 'Capcom', 
                'created_at' => Time::now()
            ],
            [
                'game_id' => 'OIJGR',
                'game_name' => 'Hogwarts Legacy',
                'game_description' => 'Hogwarts Legacy is an open-world action RPG set in the world first introduced in the Harry Potter books. Embark on a journey through familiar and new locations as you explore and discover magical beasts, customize your character and craft potions, master spell casting, upgrade talents and become the wizard you want to be. Experience Hogwarts in the 1800s. Your character is a student who holds the key to an ancient secret that threatens to tear the wizarding world apart. Make allies, battle Dark wizards, and ultimately decide the fate of the wizarding world. Your legacy is what you make of it. Live the Unwritten.',
                'price' => '799000',
                'genre' => 'Magic, Fantasy, Open World, RPG', 
                'rating' => '9.2', 
                'game_pic' => base64_encode(file_get_contents('../public/img/game/hogwarts.jpg')), 
                'release_date' => '11 February 2023', 
                'developer' => 'Avalanche Software', 
                'publisher' => 'Warner Bros. Games', 
                'created_at' => Time::now()
            ],
        ];
        $this->db->table('games')->insertBatch($data);
    }
}
