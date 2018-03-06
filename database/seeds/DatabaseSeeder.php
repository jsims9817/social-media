<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Adding Users');
        factory(App\User::class, 0)->create();
        $this->command->info('Adding Posts');
        factory(App\Post::class, 9)->create();
    }
}
