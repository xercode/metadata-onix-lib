<?php
/*
 * This file is part of the xeBook package.
 *
 * (c) Xercode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace xeBook\Metadata\Onix\XML;

use SimpleXMLElement;

final class XMLReader
{
    /**
     * Read ONIX metadata file
     *
     * @param SimpleXMLElement $xml
     *
     * @return XmIterator
     */
    public function read(SimpleXMLElement $xml):XmIterator
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }
}