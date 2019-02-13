<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::create(2019, 1, 1, 1, 1, 1);
        $vardai = ['Un Upshaw', 'Bailey Brownlee', 'Cristin Causby', 'Deneen Dildy', 'Alonzo Aguero', 'Hung Heinz', 'Jovan Jasinski', 'Francesca Fullerton', 'Taunya Truby', 'Luba Leicht', 'Vertie Viernes', 'Debra Dusenberry', 'Logan Lamberson', 'Hilda Hayton', 'Alyce Alamo', 'Fatimah Fitzgerald', 'Bethanie Benedetto', 'Kaitlyn Kimpel', 'Clement Chalker', 'Dan Darst', 'Alyson Alvidrez', 'Valery Vankirk', 'Precious Pinckney', 'Cami Cancel', 'Ashli Arreguin', 'Earlean Eccles', 'Inge Innes', 'Myles Mcswain', 'Darell Dirks', 'Florentino Follett', 'Shantell Sweeting', 'Lonny Lineman', 'Athena Aranda', 'Shaunta Swisher', 'Mahalia Manross', 'Gerardo Gander', 'Louvenia Lipford', 'Zulma Ziegler', 'Laine Lawhorn', 'Darron Dahlman', 'Thomasina Tuten', 'Hettie Hollowell', 'Nadine Newcombe', 'Eli Esquibel', 'Earleen Edmundson', 'Ronna Riedl', 'Andree Abasta', 'Kimbra Kayser', 'Laurena Lainez', 'Leilani Lampert','Zola Zinke', 'Erin Enyeart', 'Agripina Ashurst', 'Ezekiel Ewell', 'Jannet Jilek', 'Ty Tyra', 'Devora Dimauro', 'Larry Luechtefeld', 'Jenice Jepsen', 'Priscila Pfeffer', 'Shay Strauss', 'Arlette Aldrete', 'Erna Eichenlaub', 'Darrin Dorris', 'Ciara Coyer', 'Chieko Conde', 'Soo Scism', 'Clemencia Captain', 'Shonna Sumlin', 'Johanna Jeffords', 'Sherril Straughter', 'Wava Wayne', 'Emanuel Ehle', 'Jamar Janney', 'Debbie Delafuente', 'Cristine Congdon', 'Etha Edgerly', 'Roderick Riedel', 'Tawana Thornton', 'Troy Tufts', 'Mathilda Medlin', 'Benita Bevington', 'Arlie Ashline', 'Zachariah Zabriskie', 'Mariel Moor', 'Ines Ice', 'Earlean Evens', 'Tequila Tinkler', 'Tiffanie Tesch', 'Johanne Janke', 'Leo Latimore', 'Natacha Neese', 'Von Valdivia', 'Monte Mungo', 'Karren Kall', 'Adah Agular', 'Teresia Tessman', 'Cecily Carboni', 'Susannah Sanor', 'Mammie Mahmoud','Efrain Edlin', 'Lara Laber', 'Marlen Montz', 'Denisha Duron', 'Hollie Hypolite', 'Darin Daws', 'Edith Eppinger', 'Vicki Vancil', 'Clarissa Croteau', 'Deann Deloatch', 'Ulrike Upham', 'Marquita Mcclain', 'Tuan Trickey', 'Loma Lamanna', 'Krystle Kamp', 'Warren Wininger', 'Lieselotte Lablanc', 'Pandora Pappas', 'Eli Elks', 'Alyssa Afanador', 'Coralee Craner', 'Deb Dalrymple', 'Calandra Cudjoe', 'Shayla Sessions', 'Crysta Chaudhry', 'Olga Ormand', 'Irish Imperato', 'Rebecca Ritzman', 'Desiree Dahlke', 'Johana Juergens', 'Brittny Barrie', 'Elfrieda Eley', 'Roselle Rosengarten', 'Hettie Hillman', 'Ophelia Orner', 'Toi Thornell', 'Abram Angstadt', 'Arline Alfred', 'Scott Sheeran', 'Idell Ingalls', 'Olinda Ohair', 'Magda Morrone', 'Forest Fritsch', 'Julene Janzen', 'Malissa Maheu', 'Julissa Juan', 'Tatum Thiessen', 'Letitia Laflamme', 'Jalisa Joaquin', 'Lloyd Lundquist'];
        for ($i = 0; $i<100; $i++) {            
            $date = $date->addSecond(rand(1,3600));
            DB::table('students')->insert([       
                'name' => explode(" ",$vardai[$i])[0],  
                'surname' => explode(" ",$vardai[$i])[1],
                'email' => explode(" ",$vardai[$i])[0] . "@" . explode(" ",$vardai[$i])[1] . ".com",    
                'phone' => 8 . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9),
                'created_at' => $date,        
                'updated_at' => $date            
            ]); 
        }
    }
}
