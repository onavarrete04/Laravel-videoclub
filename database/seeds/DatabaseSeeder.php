<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\Movie;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    private $arrayPeliculas = array (
        array(
        'title' => 'El padrino',
        'year' => '1972', 
        'director' => 'Francis Ford Coppola', 
        'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg', 
        'rented' => false, 
        'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
    ));
   
    public function run()
    {
        
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    private function seedCatalog(){
        DB::table('movies')->delete();
        foreach( $this->arrayPeliculas as $pelicula ) {
            $p = new Movie;
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
    private function seedUsers(){
        //$user = new User;
        //$user->truncate();
        //$user->name =('name');
        //$user->email =('email');
        //$user->password = bcrypt('password');
        //$user->save();
        
        //truncate sirve para borrar la table de la base de datos.
        $user= new User;
        $user->truncate();
        $user->name=('camila peña');
        $user->email=('camilosa@camila');
        $user->password=bcrypt('123456');
        $user->save();

    }
        
}


