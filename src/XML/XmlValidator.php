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

use InvalidArgumentException;
use DOMDocument;

/**
 * The Class XmlValidator validate one ONIX file
 *
 * @package xeBook\Metadata\Onix\XML
 */
final class XmlValidator
{
    private const file_type = "text/xml";

    private string $xsdFile;

    /**
     * XmlValidator constructor.
     * @param string $xsdFile
     */
    public function __construct(string $xsdFile = __DIR__.'/resources/reference_default.xsd')
    {
        $this->xsdFile = $xsdFile;
    }

    /**
     *  XmlValidator constructor for reference default.
     *
     * @return XmlValidator
     */
    public static function create():XmlValidator
    {
        return new self(__DIR__.'/resources/reference_default.xsd');
    }

    /**
     *  XmlValidator constructor for reference short.
     *
     * @return XmlValidator
     */
    public static function short():XmlValidator
    {
        return new self(__DIR__.'/resources/reference_short.xsd');
    }

    /**
     * Split file into each of your products
     *
     * @param string $inputFile the $input File file
     * @return  bool true if file is valid onix file false other case
     */
    public function isValid(string $inputFile):bool
    {
        if (!file_exists($inputFile)) {
            return false;
        }

        if (self::file_type !== \mime_content_type($inputFile)) {
            return false;
        }

        $document = new DOMDocument();
        $document->load($inputFile);

        return $document->schemaValidate($this->xsdFile);
    }
}
