<?php
use Illuminate\Database\Seeder;
class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Prelude
        DB::table('musics')->insert([
            'songTitle' => 'Instrumental',
            'type' => 'Prelude',
        ]);
        //Bridesmaids Entrance
        DB::table('musics')->insert([
            'songTitle' => 'The Wedding Song(There is Love)',
            'type' => 'Bridesmaids Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Jesu, Joy of Man Desiring',
            'type' => 'Bridesmaids Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Canon in D',
            'type' => 'Bridesmaids Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => "Falling in Love (O'Niel)",
            'type' => 'Bridesmaids Entrance',
        ]);
        //Bridal Entrance
        DB::table('musics')->insert([
            'songTitle' => 'Canon in D',
            'type' => 'Bridal Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Trumpet Voluntary (Purcell)',
            'type' => 'Bridal Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => "Reminiscent Joy (O'Neil) (Ballad)",
            'type' => 'Bridal Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Bridal Chorus',
            'type' => 'Bridal Entrance',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'A Thousand Years (with violin or cello)',
            'type' => 'Bridal Entrance',
        ]);
        //Gloria
        DB::table('musics')->insert([
            'songTitle' => 'Recited',
            'type' => 'Gloria',
        ]);
        //Responsorial Psalm
        DB::table('musics')->insert([
            'songTitle' => '34-Taste and See #335',
            'type' => 'Responsorial Psalm',
        ]);
        DB::table('musics')->insert([
            'songTitle' => '24-I Have Loved You (Jer:31) #603',
            'type' => 'Responsorial Psalm',
        ]);
        DB::table('musics')->insert([
            'songTitle' => '118-This is the Day #805',
            'type' => 'Responsorial Psalm',
        ]);
        DB::table('musics')->insert([
            'songTitle' => '128 - May the Lord Bless Us',
            'type' => 'Responsorial Psalm',
        ]);
        //Gospel Acclamation
        DB::table('musics')->insert([
            'songTitle' => 'Celtic Alleluia (Archdiocesan Standard)',
            'type' => 'Gospel Acclamation',
        ]);
        //Lighting of Candle
        DB::table('musics')->insert([
            'songTitle' => 'Instrumental:  Arioso, Bach',
            'type' => 'Lighting of Candle',
        ]);
        //Preparation
        DB::table('musics')->insert([
            'songTitle' => 'Instrumental: The Sheep May Safely Graze, Bach',
            'type' => 'Preparation',
        ]);
        //Eucharistic Acclamations
        DB::table('musics')->insert([
            'songTitle' => 'Mass of Creation  (Archdiocesan Standard)',
            'type' => 'Eucharistic Acclamations',
        ]);
        //Communion
        DB::table('musics')->insert([
            'songTitle' => 'Center of My Life #490',
            'type' => 'Communion',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'One Bread, One Body #340',
            'type' => 'Communion',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Taste and See #335',
            'type' => 'Communion',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'We Have Been Told #498',
            'type' => 'Communion',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Panis Angelicus',
            'type' => 'Communion',
        ]);
        //Visitation to Mary
        DB::table('musics')->insert([
            'songTitle' => 'Hail Mary Gentle Woman (Landry)',
            'type' => 'Visitation to Mary',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Ave Maria (Schubert)',
            'type' => 'Visitation to Mary',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Lady of Knock - Irish',
            'type' => 'Visitation to Mary',
        ]);
        //Recessional
        DB::table('musics')->insert([
            'songTitle' => 'Traditional Wedding March',
            'type' => 'Recessional',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Rondeau',
            'type' => 'Recessional',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Trumpet Voluntary (Purcell)',
            'type' => 'Recessional',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Ode to Joy',
            'type' => 'Recessional',
        ]);
        DB::table('musics')->insert([
            'songTitle' => 'Hornpipe',
            'type' => 'Recessional',
        ]);
    }
}