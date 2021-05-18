<?php
/*
 * This file is part of the xebook package.
 *
 *  (c) Xercode Media Software <info@xercode.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace xeBook\Metadata\Onix\XML;


use SimpleXMLElement;

final class FileReader
{
    private XmlValidator $validator;

    public function __construct(XmlValidator $validator)
    {
        $this->validator = $validator;
    }


    public function read(string $filename):SimpleXMLElement
    {
        if (!$this->validator->isValid($filename)) {
            throw new InvalidArgumentException(sprintf('The file %s not found or It is not valid.', $filename));
        }

        return \simplexml_load_file($filename);
    }
}
