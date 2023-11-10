<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Imagick;
use ImagickPixel;

class PngToSvgCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:png-to-svg-command';

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
        $src_dir = public_path('img/country_logo_png');
        $dest_dir = public_path('img/country_logo_svg');

        foreach (scandir($src_dir) as $file) {
            if (in_array($file, ['.','..','...','.gitignore']))
                continue;

            $this->line('File: ' . $src_dir . DIRECTORY_SEPARATOR . $file);

            $target_dir = $dest_dir . DIRECTORY_SEPARATOR . str_replace('.png', '.svg', $file);

            $this->convertImage($src_dir . DIRECTORY_SEPARATOR . $file, $target_dir);
        }


    }

    private function convertImage($file, $target_dir)
    {
        $file_info = getimagesize($file);
        $width = $file_info[0];
        $height = $file_info[1];

        $content = $this->imageToBase64($file, $file_info['mime']);

        $svg = <<<HTML
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg style="overflow: hidden; position: relative;"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="{$width}"
version="1.1"
height="{$height}">
    <image
    transform="matrix(1,0,0,1,0,0)"
    preserveAspectRatio="none"
     x="0"
     y="0"
     width="{$width}"
     height="{$height}"
     xlink:href="{$content}"/>
</svg>
HTML;

        file_put_contents($target_dir, $svg);
    }

    function imageToBase64($path, $mime)
    {
        return "data:{$mime};base64," . base64_encode(file_get_contents($path));
    }
}
