<?php

use Illuminate\Database\Seeder;

class FilmListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movie_lists')->insert(array(
            array(
                'name' => 'Avengers: Endgame',
                'description' => 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). It was directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, and features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the damage caused by Thanos in Infinity War.',
                'user_id' => '1',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'USA',
                'photo' => 'images/movies/avnegers.jpg',

            ),
            array(
                'name' => '3 idiots',
                'description' => '3 Idiots is a 2009 Indian Hindi-language coming-of-age comedy-drama film co-written (with Abhijat Joshi) and directed by Rajkumar Hirani. Starring Aamir Khan, R. Madhavan, Sharman Joshi, Kareena Kapoor, Boman Irani and Omi Vaidya in the lead roles. The film follows the friendship of three students at an Indian engineering college and is a satire about the social pressures under an Indian education system.[6][7][8] The film is narrated through parallel dramas, one in the present and the other ten years in the past.',
                'user_id' => '1',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'India',
                'photo' => 'images/movies/3_Idiots.png',

            ),
            array(
                'name' => 'Forrest Gump',
                'description' => 'Forrest Gump is a 1994 American comedy-drama film directed by Robert Zemeckis and written by Eric Roth. It is based on the 1986 novel of the same name by Winston Groom and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses and unwittingly influences several defining historical events in the 20th century United States. The film differs substantially from the novel.',
                'user_id' => '1',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'USA',
                'photo' => 'images/movies/1592721613forest.jpeg',

            ),
            array(
                'name' => 'Mad Max: Fury Road',
                'description' => 'Mad Max: Fury Road is a 2015 Australian post-apocalyptic action film co-written, produced and directed by George Miller. Miller collaborated with Brendan McCarthy and Nico Lathouris on the screenplay. The fourth installment and a "revisiting"[6] of the Mad Max films, it was produced by Kennedy Miller Mitchell and distributed by Warner Bros. Pictures. The film is set in a post-apocalyptic desert wasteland where petrol and water are scarce commodities. It follows Max Rockatansky (Tom Hardy), who joins forces with Imperator Furiosa (Charlize Theron) to flee from cult leader Immortan Joe (Hugh Keays-Byrne) and his army in an armoured tanker truck, leading to a lengthy road battle. The film also features Nicholas Hoult, Rosie Huntington-Whiteley, Riley Keough, Zoë Kravitz, Abbey Lee and Courtney Eaton.',
                'user_id' => '1',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'USA',
                'photo' => 'images/movies/1592722054mad.jpg',

            ),
            array(
                'name' => 'Titanic',
                'description' => 'Titanic is a 1997 American epic romance and disaster film directed, written, co-produced, and co-edited by James Cameron. Incorporating both historical and fictionalized aspects, it is based on accounts of the sinking of the RMS Titanic, and stars Leonardo DiCaprio and Kate Winslet as members of different social classes who fall in love aboard the ship during its ill-fated maiden voyage.',
                'user_id' => '2',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'USA',
                'photo' => 'images/movies/1592722239titanic.jpeg',

            ),
            array(
                'name' => 'The Matrix',
                'description' => 'The Matrix is a 1999 science fiction action film[3][4] written and directed by the Wachowskis.[a] It stars Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano and is the first installment in the Matrix franchise. It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix, created by intelligent machines to distract humans while using their bodies as an energy source.[5] When computer programmer Thomas Anderson, under the hacker alias "Neo", uncovers the truth, he "is drawn into a rebellion against the machines"[5] along with other people who have been freed from the Matrix.',
                'user_id' => '2',
                'release' => '1',
                'date' => '2020-06-01',
                'rating' => '4.50',
                'ticket' => 'Available',
                'price' => '200.00',
                'country' => 'USA',
                'photo' => 'images/movies/1592725000mad.jpg',

            ),
        ));
    }
}
