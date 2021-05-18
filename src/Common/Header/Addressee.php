<?php
/*
 * This file is part of the xebook package.
 *
 *  (c) Xercode Media Software <info@xercode.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace xeBook\Metadata\Onix\Common\Header;


final class Addressee
{
    public string $AddresseeName;

    public function __construct(string $AddresseeName)
    {
        $this->AddresseeName = $AddresseeName;
    }

    public static function read(\SimpleXMLElement $xml):Addressee
    {
        $addresseeName   = (string)$xml->{'AddresseeName'};

        return new Addressee($addresseeName);
    }
}
