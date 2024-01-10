<?php

namespace App\Console\Commands;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MediaFixedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:media-fixed-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->withProgressBar(DB::table('media')->get(), function ($row) {
            $date = CarbonImmutable::parse($row->created_at);
            $custom_properties = json_decode($row->custom_properties,true);
            $custom_properties['month'] = strtolower($date->getTranslatedMonthName());
            $custom_properties['year'] = $date->year;

            DB::table('media')->where('id', '=', $row->id)
                ->update(['custom_properties' => json_encode($custom_properties)]);
        });

        return self::SUCCESS;
    }
}
