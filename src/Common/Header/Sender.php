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

final class Sender
{
    public string $SenderName;
    public string $ContactName;
    public string $EmailAddress;

    public function __construct(string $SenderName, string $ContactName, string $EmailAddress)
    {
        $this->SenderName   = $SenderName;
        $this->ContactName  = $ContactName;
        $this->EmailAddress = $EmailAddress;
    }


    public static function read(\SimpleXMLElement $xml):Sender
    {
        $senderName   = (string)$xml->{'SenderName'};
        $contactName  = (string)$xml->{'ContactName'};
        $emailAddress = (string)$xml->{'EmailAddress'};

        return new Sender($senderName, $contactName, $emailAddress);
    }
}
