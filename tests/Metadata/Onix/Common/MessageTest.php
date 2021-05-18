<?php
/*
 * This file is part of the xebook package.
 *
 *  (c) Xercode Media Software <info@xercode.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Metadata\Onix\Common;

use PHPUnit\Framework\TestCase;
use xeBook\Metadata\Onix\Common\Message;
use xeBook\Metadata\Onix\XML\FileReader;
use xeBook\Metadata\Onix\XML\XmlValidator;

class MessageTest extends TestCase
{

    public function read_from_file():void
    {
        $validator = XmlValidator::create();
        $reader = new FileReader($validator);
        $xml = $reader->read(__DIR__.'/../../../resources/book.xml');
        $message = Message::read($xml);
        $this->assertNotNull($message);
        $this->assertNotNull($message->Header);
        $this->assertNotNull($message->Product);

    }
}
