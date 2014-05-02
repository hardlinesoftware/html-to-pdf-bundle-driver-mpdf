<?php

namespace EP\Bundle\HtmlToPdfBundleMPdfDriver\Drivers;

use EP\Bundle\HtmlToPdfBundleMPdfDriver\MPdfDriver;

use EP\Bundle\HtmlToPdfBundle\Drivers\Exceptions\GenerationException;
use EP\Bundle\HtmlToPdfBundle\Drivers\DriverTest;

class MPdfDriverTest extends DriverTest
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $converter;

    public function setUp()
    {
        parent::setUp();
    }


    /**
     * @return MPdfDriver
     */
    protected function getDriver()
    {
        return new MPdfDriver();
    }


}