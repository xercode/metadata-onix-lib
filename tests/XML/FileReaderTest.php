<?php
/*
 * This file is part of the xebook package.
 *
 *  (c) Xercode Media Software <info@xercode.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XML;

use PHPUnit\Framework\TestCase;
use xeBook\Metadata\Onix\XML\FileReader;
use xeBook\Metadata\Onix\XML\XmlValidator;

class FileReaderTest extends TestCase
{
    /**
     * @test
     */
    public function file_reader()
    {
        $validator = XmlValidator::create();
        $reader = new FileReader($validator);
        $xml = $reader->read(__DIR__.'/../resources/book.xml');
        $this->assertNotNull($xml);
    }
}
