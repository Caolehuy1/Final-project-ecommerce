<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,

            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'C mon',
                'email' => 'tri@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'bac.jpg',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Sheepy',
                'email' => 'caolehuy1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'blue.jpg',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'N mon',
                'email' => 'Nguyen@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'red.jpg',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 2,
                'title' => 'About the new figures in this year, that is Zhang Fei - Three Kindoms',
                'image' => 'tb1.jpg',
                'category' => 'TRAVEL',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'tp1.png',
                'category' => 'CodeLeanON',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'god1.png',
                'category' => 'TRAVEL',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'lubo1.png',
                'category' => 'CodeLeanON',
                'subtitle' => 'new figure min 2022',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'image' => 'sb2.png',
                'category' => 'MODEL',
                'subtitle' => 'The best Figure of 2021',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'god3.png',
                'category' => 'CodeLeanON',
                'subtitle' => 'The best figure of 2022',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Bandai Namco',
            ],
            [
                'name' => 'MegaHouse',
            ],
            [
                'name' => 'The Good Smile Company',
            ],
            [
                'name' => 'Max Factory',
            ],
            [
                'name' => 'ArtSpirits',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Action Figures',
            ],
            [
                'name' => 'Non-action Figures',
            ],
            [
                'name' => 'Other',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'One Piece Shanks figure',
                'description' => 'From Shank Redhead is a character in One Piece. Shanks is the captain of the RedHead Pirates and one of the four emperors and former Roger Pirates. He is the pirate who inspired Luffy on his journey to become the pirate king and he is the one who found the Gomu Gomu no Mi fruit that Luffy accidentally ingested. Shanks had lost his left arm while protecting Luffy from neptune.',
                'content' => '',
                'price' => 36,
                'qty' => 20,
                'discount' => 35,
                'weight' => 4,
                'sku' => '00016',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure ,One Piece',
                'size' => '1/10',

            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'One Piece - Monkey D. Luffy Figure (WT100 Commemorative Eiichiro Oda Illustration)',
                'description' => 'Based on the dynamic WT100 Illustration by Eiichiro Oda commemorating Monkey D. Luffy. This landed the number-one spot in the first global One Piece Character World Popularity Vote "WORLD TOP 100". Monkey D. Luffy joins Figuarts ZERO in a special new size of approximately 7.5" tall, and includes a mini Chopper figure. [Set Contents] Main Body (with effects, stand and Chopper)..',
                'content' => null,
                'price' => 400,
                'qty' => 20,
                'discount' => 300,
                'weight' => '1',
                'sku' => '00016',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure ,One Piece',
                'size' => '1/5',

            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Banpresto One Piece 6.7 Corazon Figure',
                'description' =>'Donquixote Rosinante was formerly a World Noble of the Donquixote Family descent, as the second son of Donquixote Homing and the younger brother of Donquixote Doflamingo.After his family lost their status as Celestial Dragons and became pariahs, Rosinante became an Elite Officer of the Donquixote Pirates, serving Doflamingo under the codename Corazon.',
                'content' => null,
                'price' => 370,
                'qty' => 20,
                'discount' => 300,
                'weight' => '3',
                'sku' => '00017',
                'featured' => 'Rare figure of 2021',
                'tag' => 'Non-action figure ,One Piece',
                'size' => '1/6',

            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => '3cm GK anime shippuden Senju Tobirama Action Figure Second Hokage figma with light PVC model',
                'description' => 'Tobirama Senju (千手扉間, Senju Tobirama) was a member of the renowned Senju clan, who, together with his elder brother and the Uchiha clan, founded the first shinobi village: Konohagakure. Throughout his lifetime, Tobirama would work tirelessly to achieve political stability and implement the institutions that made the village system work, he would earn the title of Second Hokage (二代目火影, Nidaime Hokage, literally meaning: Second Fire Shadow)',
                'content' => null,
                'price' => 400,
                'qty' => 20,
                'discount' => 370,
                'weight' => '6',
                'sku' => '0019',
                'featured' => 'This figure can shine, we have some LED on the bottom of the product' ,
                'tag' => 'Non-action figure ,Naruto',
                'size' => '1/7',

            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Megumin figure",
                'description' => 'Megumin (めぐみん) is an Arch Wizard of the Crimson Magic Clan in the Fantasy World, and is the first person to join Kazuma party, She is one of the main characters of the KonoSuba series.',
                'content' => null,
                'price' => 650,
                'qty' => 20,
                'discount' => 570,
                'weight' => '1',
                'sku' => '00027',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure, Other',
                'size' => '1/2',

            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => ' Sanji One Piece: Stampede, Ichiban Figure',
                'description' => '"Black Leg" Sanji, born as Vinsmoke Sanji, is the cook of the Straw Hat Pirates and one of the Nine Senior Officers of the Straw Hat Grand Fleet. He is the fifth member of the crew and the fourth to join, doing so at the end of the Baratie Arc.',
                'content' => null,
                'price' => 500,
                'qty' => 20,
                'discount' => 450,
                'weight' => '1',
                'sku' => '00018',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure ,One Piece',
                'size' => '1/3',

            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Madara Uchiha figure',
                'description' => 'Madara Uchiha (うちはマダラ, Uchiha Madara) was the legendary leader of the Uchiha clan. He founded Konohagakure alongside his childhood friend and rival, Hashirama Senju, with the intention of beginning an era of peace. When the two could not agree on how to achieve that peace, they fought for control of the village, a conflict which ended in his death. Madara, however, rewrote his death and went into hiding to work on his own plans. Unable to complete it in his natural life, he entrusted his knowledge and plans to Obito shortly before his actual death. Years later, Madara would be revived, only to see his plans foiled and ultimately, and finally, realising the error of his ways and making amends with Hashirama before his final death.',
                'content' => null,
                'price' => 900,
                'qty' => 5,
                'discount' => 850,
                'weight' => '10',
                'sku' => '00021',
                'featured' => 'This figure is the special limited edition of Madara Uchiha (this product has been stopped released from 2021)',
                'tag' => 'Non-action figure ,Naruto',
                'size' => '1/8',

            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Uchiha Sasuke',
                'description' => 'Sasuke Uchiha (うちはサスケ, Uchiha Sasuke) is one of the last surviving members of Konohagakure Uchiha clan. After his older brother, Itachi, slaughtered their clan, Sasuke made it his mission in life to avenge them by killing Itachi. He is added to Team 7 upon becoming a ninja and, through competition with his rival and best friend, Naruto Uzumaki, Sasuke starts developing his skills. Dissatisfied with his progress, he defects from Konoha so that he can acquire the strength needed to exact his revenge. His years of seeking vengeance and his actions that followed become increasingly demanding, irrational and isolates him from others, leading him to be branded as an international criminal. After learning the truth of his brother sacrifice, later proving instrumental in ending the Fourth Shinobi World War, and being happily redeemed by Naruto, Sasuke decides to return to Konoha and dedicate his life to help protect the village and its inhabitants, becoming referred to as the "Supporting Kage" (支う影, Sasaukage, literally meaning: Supporting Shadow).',
                'content' => null,
                'price' => 55,
                'qty' => 20,
                'discount' => 50,
                'weight' => '1',
                'sku' => '00022',
                'featured' => 'The last Uchiha :> ',
                'tag' => 'Non-action figure ,Naruto',
                'size' => '1/10',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Shikamaru Nara figure',
                'description' => 'ly allows him to prevail in combat. The responsibilities that these successes leave him with cause him frequent annoyance, but he gladly accepts them so that he may be of service to his fellow members of Team Asuma, and to prove himself to generations of the past and future.',
                'content' => null,
                'price' => 100,
                'qty' => 20,
                'discount' => 60,
                'weight' => '1',
                'sku' => '00023',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure , Naruto',
                'size' => '1/8',

            ],
            [
                'id' => 10,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Laid-Back Camp △ Nadeshiko Kawamihara 1/7',
                'description' => 'Nadeshiko Kagamihara (各務原 なでしこ) is a young girl who appears in Yuru Camp△ as recent transfer to Motosu High School from Nanbu-chō (Nanbu town), the daughter of Shūichirō Kagamihara and Shizuka Kagamihara and the younger sister of Sakura Kagamihara. She previously lived in Hamamatsu city on the the southern coast of Shizuoka prefecture. From the anime series "Laid-Back Camp" comes a 1/7th scale figure of Nadeshiko Kagamihara! Her excited appearance from the 1st Blu-ray jacket illustration has been recreated in extraordinary detail. Her winter camping clothes have been carefully sculpted and faithfully painted on both on the outside and inside.',
                'content' => null,
                'price' => 100,
                'qty' => 20,
                'discount' => 80,
                'weight' => '1',
                'sku' => '00012',
                'featured' => 'The lantern in her hand can also be lit up. Not just great a great decoration for your room, but a great decoration for your campsite as well!',
                'tag' => 'Non-action figure ,Other',
                'size' => '1/7',
            ],                 [
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Mikasa Ackerman Figma Action Figure',
                'description' => 'Mikasa Ackerman (ミカサ・アッカーマン Mikasa Akkāman?) is one of the two deuteragonists of the series, along with Armin Arlert. After her parents were murdered by human traffickers, Mikasa was rescued by Eren Yeager and lived with him and his parents, Grisha and Carla, before the fall of Wall Maria. She is the last descendant of the Shogun clan that stayed on Paradis Island, thereby related to the Azumabito family, and holds significant political power in Hizuru.[12] Though she desires only to live a peaceful life, Mikasa entered into the military—where she is considered the best soldier among the 104th Training Corps. She later enlists in the Survey Corps to follow and protect Eren, becoming one of its greatest assets. She is currently serving as an officer (上官 Jōkan?) in the Corps',
                'content' => null,
                'price' => 140,
                'qty' => 20,
                'discount' => 130,
                'weight' => '1',
                'sku' => '00026',
                'featured' => 'This is one of the best action figure We have ♥',
                'tag' => 'Action figure ,ATTACK ON TITAN ',
                'size' => '1/6',

            ],
            [
                'id' => 12,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Miku figure',
                'description' => 'Miku cartoon character dolls are ideal gifts for Hatsune Miku fans. You can give it to children, adults or any man or woman who likes anime. This is an exquisite gift for birthdays, children day, Christmas, Halloween and other events. Very beautiful, 20cm high, is a very worthy model anime decoration collection. Exquisite workmanship and vivid characters. Can be used for personal favorite collections, gifts, beautiful desktop animation accessories. High quality materials and a perfect look make this toy model more realistic and impressive. This toy figurine has dynamic inspiration and stimulating imagination, and is a must-have for all anime character model lovers.',
                'content' => null,
                'price' => 140,
                'qty' => 20,
                'discount' => 135,
                'weight' => '1',
                'sku' => '00023',
                'featured' => 'This figure is the special limited edition',
                'tag' => 'Non-action figure , Other',
                'size' => '1/8',

            ],
            [
                'id' => 13,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Kirito',
                'description' => 'Kazuto Kirigaya (桐ヶ谷 和人, Kirigaya Kazuto), born as Kazuto Narusaka (鳴坂 和人, Narusaka Kazuto), is a fictional character and the protagonist of the Sword Art Online series of light novels written by Reki Kawahara. He is more commonly known by his portmanteau, Kirito (キリト, Kirito), his player name in the eponymous video game which the series are partially set in. In the series, Kirito is depicted as a teenager who was chosen as one of 1,000 beta testers for a new virtual reality video game: Sword Art Online. After the game is released to the general public, he and the rest of the 10,000 players soon discover that they are unable to log out and are trapped in the simulation unless they manage to beat the game. In the anime adaptation, Kirito is voiced in Japanese by Yoshitsugu Matsuoka and in English by Bryce Papenbrook.',
                'content' => null,
                'price' => 75,
                'qty' => 20,
                'discount' => 60,
                'weight' => '1',
                'sku' => '00029',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Non-action figure , Other',
                'size' => '1/9',

            ],
            [
                'id' => 14,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Tanya Degurechaff',
                'description' => ' Tanya von Degurechaff is the main protagonist of the light novel/anime Youjo Senki: Saga of Tanya the Evil. Originally a salaryman who was murdered in 2013, he was reborn as a girl living in an alternate version of Europe during the late Interwar period.
"Freedom without laws means anarchy; laws without freedom means tyranny"— Tanya',
                'content' => null,
                'price' => 70,
                'qty' => 20,
                'discount' => 67,
                'weight' => '0.5',
                'sku' => '00025',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Non-action figure , Other',
                'size' => '1/10',

            ],
            [
                'id' => 15,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Hatake Kakashi',
                'description' => 'Kakashi Hatake (Japanese: はたけ カカシ, Hepburn: Hatake Kakashi) is a fictional character in the Naruto manga and anime series created by Masashi Kishimoto. In the story, Kakashi is the teacher of Team 7, consisting of the series primary characters, Naruto Uzumaki, Sasuke Uchiha, and Sakura Haruno. He is initially portrayed as a detached and apathetic figure, but as the series progresses, his loyalty to his friends and students becomes increasingly apparent. Kakashi past has been extensively explored in the series, resulting in a gaiden being devoted to his past experiences. Kakashi has appeared in several pieces of Naruto media, the featured films in the series, the original video animations, and the video games.',
                'content' => null,
                'price' => 84,
                'qty' => 20,
                'discount' => 70,
                'weight' => '1',
                'sku' => '00028',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Non-action figure , Naruto',
                'size' => '1/8',

            ],
            [
                'id' => 16,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Anime Fullmetal Alchemist Edward Elric GK Plastic figure',
                'description' => 'From Fullmetal Alchemist: Brotherhood comes a large-size statue of Edward Elric and Alphonse Elric! The statue features a perfectly captured still of the Elric brothers in battle, with their surroundings also perfectly crafted and incorporated into a single statue. Various small details like the dust clouds, debris and alchemical energy discharge have all been created in incredible detail. Be sure to add this spectacular statue that encapsulates the unique charm of Fullmetal Alchemist to your collection.',
                'content' => null,
                'price' => 900,
                'qty' => 10,
                'discount' => 850,
                'weight' => '9',
                'sku' => '00015',
                'featured' => 'The 15th anniversary Figure of Full Metal Alchemist with LED',
                'tag' => 'Non-action figure , Naruto',
                'size' => '1/2',

            ],
            [
                'id' => 17,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'SON GOKU',
                'description' => 'From the hit anime series Dragon Ball Super, comes a special release DXF figure of the Super Warriors collection featuring the most amazing form of Goku the series has ever seen! In the last moment of a desperate heroic attempt to save his universe, when all seemed lost, the ultimate spirit of battle and survival awoken in our hero to reveal a power level that even the gods fear. Behold Ultra Instinct Goku! Set to his signature Kamehameha blast attack, this figure will definitely be the must have collectible for all Dragon Ball figure fans. This figure stands in scale with all other figures from the Super Warriors collection at seven inches tall. Minor assembly required. Figure base included.',
                'content' => null,
                'price' => 450,
                'qty' => 20,
                'discount' => 400,
                'weight' => '1',
                'sku' => '00018',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Action figure ,Dragonball',
                'size' => '1/5',
            ],
            [
                'id' => 18,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'METAL BUILD STRIKE GUNDAM',
                'description' => 'The Striker Pack System lineup is finally coming. This product contains only expand parts (The main body will be sold separately). Metail build Strike Gundam not included (sold separately). The much anticipated Aile Striker is released as its own product. With new gimmicks proposed by mechanical designer Kunio Okawara, such as wings able to become folded and the pack section able to move based on the unit’s angle, it is capable of many expressions that can transform any old images of Aile Striker. Can it be attached to the event commemorative product',
                'content' => null,
                'price' => 400,
                'qty' => 20,
                'discount' => 300,
                'weight' => '1',
                'sku' => '00031',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Action figure , Gundam',
                'size' => '1/6',

            ],
            [
                'id' => 19,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Metal Build Gundam Crossbones X-1',
                'description' => '"Crossbone · Gundam", which has character, participates in METAL BUILD by modifying its appearance and facial expression through various face, coat and armed openings. Market its distinctive silhouette with an arrangement unique to METAL BUILD! Original Cartoonist / Yuichi Hasegawa Mr. Teacher Takes a bird-shaped reconnaissance weapon and a new story begins. METAL BUILD It is an object with a high game value, which improves the character of the character, including flexible movement, including the new structure such as the gimmick separating core / fighter, and the engraving arranged in each part.',
                'content' => null,
                'price' => 600,
                'qty' => 20,
                'discount' => 500,
                'weight' => '2',
                'sku' => '00032',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Action figure , Gundam',
                'size' => '1/5',

            ],
            [
                'id' => 20,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Albedo - KD Colle - Wing Ver',
                'description' => 'Albedo (アルベド) is the Overseer of the Guardians of the Great Tomb of Nazarick. She is in charge of the general management and supervision of the activities done by the seven Floor Guardians, meaning that she ranks above the other NPCs in Nazarick. She is the middle sister of the older sister Nigredo and younger sister Rubedo. Along with her sisters, she was created by Tabula Smaragdina.',
                'content' => null,
                'price' => 400,
                'qty' => 20,
                'discount' => 325,
                'weight' => '2',
                'sku' => '00024',
                'featured' => 'Limited edition and not released again buy now!!!',
                'tag' => 'Non-action figure , Other',
                'size' => '1/6',

            ],
            ]);
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => '1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'o3.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'o4.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'na2.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'kuru.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'o9.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'm1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'na4.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'sh.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'camper.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'mika7.png',
            ],
            [
                'product_id' => 12,
                'path' => 'miku1.png',
            ],
            [
                'product_id' => 13,
                'path' => 'kiri1.png',
            ],
            [
                'product_id' => 14,
                'path' => 'loli1.png',
            ],
            [
                'product_id' => 15,
                'path' => 'kaka3.png',
            ],
            [
                'product_id' => 16,
                'path' => 'full.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'goku.png',
            ],
            [
                'product_id' => 18,
                'path' => 'g.png',
            ],
            [
                'product_id' => 19,
                'path' => 'gu.png',
            ],
            [
                'product_id' => 20,
                'path' => 'al1.png',
            ],
            [
                'product_id' => 1,
                'path' => 's2.png',
            ],
            [
                'product_id' => 1,
                'path' => 's3.png',
            ],

            [
                'product_id' => 2,
                'path' => 'l.png',
            ],

            [
                'product_id' => 3,
                'path' => 'c.png',
            ],
            [
                'product_id' => 3,
                'path' => 'c1.png',
            ],
            [
                'product_id' => 3,
                'path' => 'c2.png',
            ],

            [
                'product_id' => 4,
                'path' => 't2.png',
            ],
            [
                'product_id' => 4,
                'path' => 't3.png',
            ],

            [
                'product_id' => 5,
                'path' => 'kuru3.png',
            ],
            [
                'product_id' => 5,
                'path' => 'kuru4.png',
            ],
            [
                'product_id' => 6,
                'path' => 'o9.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'san3.png',
            ],
            [
                'product_id' => 6,
                'path' => 'san4.png',
            ],

            [
                'product_id' => 7,
                'path' => 'm2.png',
            ],
            [
                'product_id' => 7,
                'path' => 'm3.png',
            ],

            [
                'product_id' => 8,
                'path' => 'sa.png',
            ],
            [
                'product_id' => 8,
                'path' => 'sa2.png',
            ],

            [
                'product_id' => 9,
                'path' => 'sh1.png',
            ],
            [
                'product_id' => 9,
                'path' => 'sh2.png',
            ],

            [
                'product_id' => 10,
                'path' => 'camper1.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'camper2.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'camper3.jpg',
            ],

            [
                'product_id' => 11,
                'path' => 'mika3.png',
            ],

            [
                'product_id' => 11,
                'path' => 'mika6.png',
            ],
            [
                'product_id' => 11,
                'path' => 'mika2.png',
            ],

            [
                'product_id' => 12,
                'path' => 'miku2.png',
            ],
            [
                'product_id' => 12,
                'path' => 'miku3.png',
            ],
            [
                'product_id' => 12,
                'path' => 'miku4.png',
            ],

            [
                'product_id' => 13,
                'path' => 'kiri2.png',
            ],
            [
                'product_id' => 13,
                'path' => 'kiri3.png',
            ],
            [
                'product_id' => 13,
                'path' => 'kiri4.png',
            ],

            [
                'product_id' => 14,
                'path' => 'loli2.png',
            ],
            [
                'product_id' => 14,
                'path' => 'loli3.png',
            ],
            [
                'product_id' => 14,
                'path' => 'loli4.png',
            ],

            [
                'product_id' => 15,
                'path' => 'kaka4.png',
            ],
            [
                'product_id' => 15,
                'path' => 'kaka5.png',
            ],
            [
                'product_id' => 15,
                'path' => 'kaka6.png',
            ],


            [
                'product_id' => 16,
                'path' => 'full1.png',
            ],
            [
                'product_id' => 16,
                'path' => 'full2.png',
            ],
            [
                'product_id' => 16,
                'path' => 'full4.png',
            ],

            [
                'product_id' => 17,
                'path' => 'goku3.png',
            ],
            [
                'product_id' => 17,
                'path' => 'goku5.png',
            ],
            [
                'product_id' => 17,
                'path' => 'goku2.png',
            ],

            [
                'product_id' => 18,
                'path' => 'g2.png',
            ],
            [
                'product_id' => 18,
                'path' => 'g3.png',
            ],
            [
                'product_id' => 18,
                'path' => 'g4.png',
            ],

            [
                'product_id' => 19,
                'path' => 'gun.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'gun1.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'gun4.png',
            ],

            [
                'product_id' => 20,
                'path' => 'al2.png',
            ],
            [
                'product_id' => 20,
                'path' => 'al3.png',
            ],
            [
                'product_id' => 20,
                'path' => 'al4.png',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => '1/10',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => '1/5',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => '1/6',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'size' => '1/7',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'size' => '1/2',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'size' => '1/3',
                'qty' => 5,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'Sheepy@gmail.com',
                'name' => 'Sheepy',
                'messages' => 'Great figure',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'Nguyen@gmail.com',
                'name' => 'N mon',
                'messages' => 'Beautiful Figure',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 3,
                'email' => 'Tri@gmail.com',
                'name' => 'C mon',
                'messages' => 'Nice',
                'rating' => 4,
            ],
        ]);
    }
}
