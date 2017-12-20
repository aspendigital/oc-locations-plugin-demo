<?php namespace AspenDigital\LocationsDemo\Console;

use AspenDigital\Locations\Models\Place;
use AspenDigital\Locations\Models\Tag;
use DB;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class SeedCommand extends Command
{
     /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'locations:demo:seed {places}';

    /**
     * @var string The console command description.
     */
    protected $description = 'Seed locations demo';

    /**
     * @var Tag[]
     */
    protected $tags;


    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        $this->createTags();
        $this->createPlaces();

        $this->info('Finished');
    }

    protected function createTags()
    {
        $this->info('Creating tags');
        for ($i=1; $i<=10; $i++) {
            $this->tags[] = Tag::create(['name'=>"Tag $i"]);
        }
    }

    protected function createPlaces()
    {
        $total = $this->argument('places');
        $bar = $this->output->createProgressBar($total);

        $this->info('Creating places');

        DB::beginTransaction();
        for ($i=1; $i<= $total; $i++) {
            $place = new Place([
                'name' => "Location #$i",
                'address' => 'Address',
                'city' => 'City',
                'state' => 'State',
                'postal_code' => 'Postal Code',
                'country' => 'Country',
                'longitude' => mt_rand() / mt_getrandmax() * 360 - 180,
                'latitude' => mt_rand() / mt_getrandmax() * 170 - 85
            ]);
            $place->save();

            $tagIds = [];
            foreach ($this->tags as $tag) {
                if (mt_rand(0, 100) < 20) {
                    $tagIds[] = $tag->id;
                }
            }

            $place->tags()->sync($tagIds);

            if ($i % 100 === 0) {
                $bar->setProgress($i);
                DB::commit();
                DB::beginTransaction();
            }
        }
        DB::commit();

        $bar->finish();
        $this->output->writeln('');
    }
}