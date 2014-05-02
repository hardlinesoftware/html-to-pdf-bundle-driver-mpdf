<?php

namespace EP\Bundle\HtmlToPdfBundleMPdfDriver;

use EP\Bundle\HtmlToPdfBundle\Drivers\Exceptions\GenerationException;
use EP\Bundle\HtmlToPdfBundle\Drivers\Features\SupportsPageMarginsInterface;
use EP\Bundle\HtmlToPdfBundle\Drivers\DriverInterface;

use Symfony\Component\Process\Process;
use TFox\MpdfPortBundle\Service\MpdfService;

class MPdfDriver implements DriverInterface
{
    /**
     * @var \TFox\MpdfPortBundle\Service\MpdfService
     */
    private $service;

    public function __construct()
    {
        $this->service = new MpdfService();
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
        $this->service->generatePdf($html, [

            'outputFilename'    => $outfile,
            'outputDest'        => 'F'
        ]);

        return true;
    }


}