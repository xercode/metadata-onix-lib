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


use xeBook\Metadata\Onix\Common\Header\Addressee;
use xeBook\Metadata\Onix\Common\Header\Sender;

final class Header
{
    public Sender $Sender;
    public Addressee $Addressee;
    public string $MessageNumber;
    public string $SentDateTime;
    public string $MessageNote;

    public function __construct(
        Sender $Sender,
        Addressee $Addressee,
        string $MessageNumber,
        string $SentDateTime,
        string $MessageNote
    ) {
        $this->Sender        = $Sender;
        $this->Addressee     = $Addressee;
        $this->MessageNumber = $MessageNumber;
        $this->SentDateTime  = $SentDateTime;
        $this->MessageNote   = $MessageNote;
    }


    public static function read(\SimpleXMLElement $xml)
    {
        $senderNode          = $xml->{'Sender'};
        $senderValue         = Sender::read($senderNode);
        $addresseeNode       = $xml->{'Addressee'};
        $addresseeValue      = Addressee::read($addresseeNode);
        $messageNumberValue  = (string)$xml->{'MessageNumber'};
        $sentDateTimeValue   = (string)$xml->{'SentDateTime'};
        $messageNoteValue    = (string)$xml->{'MessageNote'};

        return new Header($senderValue, $addresseeValue, $messageNumberValue, $sentDateTimeValue, $messageNoteValue);

    }
}
