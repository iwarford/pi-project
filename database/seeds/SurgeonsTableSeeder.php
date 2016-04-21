<?php

use Illuminate\Database\Seeder;

class SurgeonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Names thanks to: http://random-name-generator.info/
     * 
     * @return void
     */
    public function run()
    {
        DB::table('surgeons')->insert([
	    [ 'name' => 'Fernande Mundy', 'email' => 'Fernande.Mundy@nameless-hospital.info'],
	    [ 'name' => 'Mai Brothers', 'email' => 'Mai.Brothers@nameless-hospital.info'],
	    [ 'name' => 'Danika Thibodeaux', 'email' => 'Danika.Thibodeaux@nameless-hospital.info'],
	    [ 'name' => 'Virgina Randle', 'email' => 'Virgina.Randle@nameless-hospital.info'],
	    [ 'name' => 'Benito Covert', 'email' => 'Benito.Covert@nameless-hospital.info'],
	    [ 'name' => 'Darell Linton', 'email' => 'Darell.Linton@nameless-hospital.info'],
	    [ 'name' => 'Antionette Martel', 'email' => 'Antionette.Martel@nameless-hospital.info'],
	    [ 'name' => 'Echo Kent', 'email' => 'Echo.Kent@nameless-hospital.info'],
	    [ 'name' => 'Latasha Ayres', 'email' => 'Latasha.Ayres@nameless-hospital.info'],
	    [ 'name' => 'Ronnie Lunsford', 'email' => 'Ronnie.Lunsford@nameless-hospital.info']
	]);
    }
}
