<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Names thanks to: http://random-name-generator.info/
     * Email addresses: http://www.convertcsv.com/generate-test-data.htm
     * Birthdays      : https://www.random.org/calendar-dates/
     * Phone Numbers  : https://www.randomlists.com/phone-numbers
     * Surgeon associations were done with a list of random numbers from 1-10.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
	    [ 'name' => 'William Jackson', 'email' => 'vaz@nepevro.gov', 'phone' => '(614) 521-1277', 'gender' => 'male', 'birthdate' => '1936-09-19', 'surgeon_id' => 2 ],
	    [ 'name' => 'John Diaz', 'email' => 'va@iwugo.gov', 'phone' => '(923) 972-9381', 'gender' => 'male', 'birthdate' => '1936-09-22', 'surgeon_id' => 1 ],
	    [ 'name' => 'Lisa Hill', 'email' => 'nebuvlav@cungumi.net', 'phone' => '(254) 719-1359', 'gender' => 'female', 'birthdate' => '1938-01-06', 'surgeon_id' => 7 ],
	    [ 'name' => 'Jose Barnes', 'email' => 'borjoj@sujwos.net', 'phone' => '(210) 129-5889', 'gender' => 'male', 'birthdate' => '1944-08-14', 'surgeon_id' => 2 ],
	    [ 'name' => 'Lawrence Simmons', 'email' => 'kah@rophet.net', 'phone' => '(313) 476-9049', 'gender' => 'male', 'birthdate' => '1949-07-28', 'surgeon_id' => 7 ],
	    [ 'name' => 'Ruby Reed', 'email' => 'avipni@be.edu', 'phone' => '(715) 710-0793', 'gender' => 'other', 'birthdate' => '1951-10-02', 'surgeon_id' => 5 ],
	    [ 'name' => 'Carolyn James', 'email' => 'capevef@jezmelif.com', 'phone' => '(533) 697-4153', 'gender' => 'female', 'birthdate' => '1954-09-11', 'surgeon_id' => 2 ],
	    [ 'name' => 'Rose Stewart', 'email' => 'law@zo.org', 'phone' => '(691) 167-3079', 'gender' => 'female', 'birthdate' => '1956-05-22', 'surgeon_id' => 10 ],
	    [ 'name' => 'Victor Morris', 'email' => 'kub@nicgedco.co.uk', 'phone' => '(222) 535-9852', 'gender' => 'male', 'birthdate' => '1957-07-22', 'surgeon_id' => 2 ],
	    [ 'name' => 'Marie Henderson', 'email' => 'le@fih.gov', 'phone' => '(969) 247-5697', 'gender' => 'male', 'birthdate' => '1957-08-06', 'surgeon_id' => 5 ],
	    [ 'name' => 'Edward Brown', 'email' => 'sag@ajiwiwuno.io', 'phone' => '(207) 671-7425', 'gender' => 'male', 'birthdate' => '1960-03-22', 'surgeon_id' => 10 ],
	    [ 'name' => 'Kevin Wood', 'email' => 'merzahu@julbamhij.org', 'phone' => '(326) 345-6557', 'gender' => 'male', 'birthdate' => '1964-06-30', 'surgeon_id' => 1 ],
	    [ 'name' => 'Dennis Allen', 'email' => 'muzadik@upriw.com', 'phone' => '(463) 136-7371', 'gender' => 'male', 'birthdate' => '1965-10-01', 'surgeon_id' => 3 ],
	    [ 'name' => 'Timothy Ward', 'email' => 'lobij@hopted.gov', 'phone' => '(290) 449-3953', 'gender' => 'male', 'birthdate' => '1969-04-26', 'surgeon_id' => 4 ],
	    [ 'name' => 'Angela Rivera', 'email' => 'dazive@couv.edu', 'phone' => '(437) 872-7690', 'gender' => 'female', 'birthdate' => '1969-10-14', 'surgeon_id' => 7 ],
	    [ 'name' => 'Ralph Thomas', 'email' => 'dekitca@parfutpuf.com', 'phone' => '(277) 331-4909', 'gender' => 'male', 'birthdate' => '1972-05-13', 'surgeon_id' => 5 ],
	    [ 'name' => 'Peter Powell', 'email' => 'octedrab@jegpiwsed.edu', 'phone' => '(241) 798-6255', 'gender' => 'male', 'birthdate' => '1975-01-24', 'surgeon_id' => 10 ],
	    [ 'name' => 'Anthony Murphy', 'email' => 'zi@guvjiopa.net', 'phone' => '(413) 996-9103', 'gender' => 'male', 'birthdate' => '1975-09-09', 'surgeon_id' => 4 ],
	    [ 'name' => 'Joshua Hughes', 'email' => 'fibpofe@feiwadu.edu', 'phone' => '(487) 257-2050', 'gender' => 'male', 'birthdate' => '1976-11-09', 'surgeon_id' => 2 ],
	    [ 'name' => 'Alice Johnson', 'email' => 'viriji@eb.edu', 'phone' => '(180) 148-7806', 'gender' => 'female', 'birthdate' => '1979-10-12', 'surgeon_id' => 5 ],
	    [ 'name' => 'Randy Butler', 'email' => 'ukabescus@nug.edu', 'phone' => '(970) 147-8422', 'gender' => 'male', 'birthdate' => '1983-10-11', 'surgeon_id' => 10 ],
	    [ 'name' => 'Willie Jones', 'email' => 'lo@monu.gov', 'phone' => '(411) 626-0600', 'gender' => 'male', 'birthdate' => '1985-03-30', 'surgeon_id' => 6 ],
	    [ 'name' => 'Mary Evans', 'email' => 'we@zacpas.edu', 'phone' => '(263) 876-3397', 'gender' => 'female', 'birthdate' => '1994-03-04', 'surgeon_id' => 7 ],
	    [ 'name' => 'Shirley Baker', 'email' => 'ijsuwva@ot.com', 'phone' => '(520) 746-9536', 'gender' => 'female', 'birthdate' => '1999-11-01', 'surgeon_id' => 6 ],
	    [ 'name' => 'Ashley Anderson', 'email' => 'pevbeh@efjepeg.com', 'phone' => '(319) 523-4275', 'gender' => 'other', 'birthdate' => '2004-12-20', 'surgeon_id' => 7 ]
	]);
    }
}
