<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'The Huffington Post',
                'description' => 'The history of political blogging might usefully be divided 
                into the periods pre- and post-Huffington. Before the millionaire socialite 
                Arianna Huffington decided to get in on the act, bloggers operated in a spirit
                 of underdog solidarity. They hated the mainstream media - and the feeling was 
                 mutual.',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Boing Boing',
                'description' => 'Lego reconstructions of pop videos and cakes baked in the 
                shape of iPods are not generally considered relevant to serious political 
                debate. But even the most earnest bloggers will often take time out of their
                 busy schedule to pass on some titbit of mildly entertaining geek ephemera.',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
