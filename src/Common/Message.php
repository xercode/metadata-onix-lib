<?php
/*
 * This file is part of the xebook package.
 *
 *  (c) Xercode Media Software <info@xercode.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace xeBook\Metadata\Onix\Common;


final class Message
{
    public Header $Header;
    public Product $Product;

    public function __construct(Header $Header, Product $Product)
    {
        $this->Header  = $Header;
        $this->Product = $Product;
    }


    public static function read(\SimpleXMLElement $xml):Message
    {
        $header  = Header::read($xml->{'Header'});
        $Product = Product::read($xml->{'Product'});
        return new Message($header, $Product);
    }
}
