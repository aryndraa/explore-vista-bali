<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Package;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        /* =====================
         * Static Pages
         * ===================== */
        $sitemap->add(Url::create('/')->setPriority(1.0));
        $sitemap->add(Url::create('/about')->setPriority(0.8));
        $sitemap->add(Url::create('/available-packages')->setPriority(0.9));
        $sitemap->add(Url::create('/shuttle')->setPriority(0.8));
        $sitemap->add(Url::create('/shuttle-form')->setPriority(0.7));
        $sitemap->add(Url::create('/vehicle-rent')->setPriority(0.8));
        $sitemap->add(Url::create('/gallery')->setPriority(0.7));
        $sitemap->add(Url::create('/contact')->setPriority(0.7));
        $sitemap->add(Url::create('/comments')->setPriority(0.6));
        $sitemap->add(Url::create('/blogs')->setPriority(0.9));

        /* =====================
         * Blog Detail (ID-based)
         * ===================== */
        Blog::all()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create("/blogs/{$blog->id}")
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.8)
            );
        });

        /* =====================
         * Package Detail
         * ===================== */
        Package::where('is_active', 1)->each(function ($package) use ($sitemap) {
            $sitemap->add(
                Url::create("/package-detail/{$package->id}")
                    ->setLastModificationDate($package->updated_at)
                    ->setPriority(0.9)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully!');
    }
}
