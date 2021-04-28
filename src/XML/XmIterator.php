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

use xeBook\Metadata\Onix\Common\Product;
use SimpleXMLElement;

/**
 * The Class XmIterator for ONIX metadata files
 * @package xeBook\Metadata\Onix\XML
 *
 */
final class XmIterator implements \Iterator
{
    private SimpleXMLElement $xml;

    private function __construct(SimpleXMLElement $xml)
    {
        $this->xml = $xml;
    }

    /**
     * XmIterator Constructor
     * @param SimpleXMLElement $xml the onix document
     * @return XmIterator the iterator
     */
    public static function create(SimpleXMLElement $xml):XmIterator
    {
        return new self($xml);
    }

    /**
     * Rewind the iterator
     */
    public function rewind():void
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * This method return the current product.
     *
     * @return Product
     */
    public function current():Product
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * Get Index for current position
     *
     * @return int the current position
     */
    public function key():int
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * Advance one position the iterator
     */
    public function next():void
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * Check if has product in current position
     *
     * @return bool
     */
    public function valid():bool
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

}