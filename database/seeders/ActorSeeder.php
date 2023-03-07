<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = config('actors');

        foreach($actors as $actor){
            $newActor = new Actor();

            $newActor->name = $actor;
            $newActor->slug = Actor::generateSlug($actor);

            $newActor->save();
        }
    }
}
