<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Spatie\Sitemap\SitemapGenerator;

class MakeSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filename = dirname(public_path()) . "/public_html/sitemap.xml";
        SitemapGenerator::create(env('APP_URL', false))->writeToFile($filename);
    }
}
