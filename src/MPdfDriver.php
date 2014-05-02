<?php

namespace EP\Bundle\HtmlToPdfBundleMPdfDriver;

use EP\Bundle\HtmlToPdfBundle\Drivers\Exceptions\GenerationException;
use EP\Bundle\HtmlToPdfBundle\Drivers\Features\SupportsPageMarginsInterface;
use EP\Bundle\HtmlToPdfBundle\Drivers\DriverInterface;

use Symfony\Component\Process\Process;

class MPdfDriver implements DriverInterface
{

    public function __construct()
    {
    }

    /**
     * Generate a PDF from HTML, and place the resultant file
     * in specified outfile.
     *
     * @param $html     string
     * @param $outfile
     * @return bool
     */
    public function generate($html, $outfile)
    {
        return true;
    }


}