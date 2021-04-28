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

/**
 * The Class XmlValidator validate one ONIX file
 *
 * @package xeBook\Metadata\Onix\XML
 */
final class XmlValidator
{
    private string $xsdFile;

    /**
     * XmlValidator constructor.
     * @param string $xsdFile
     */
    public function __construct(string $xsdFile)
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
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     *  XmlValidator constructor for reference short.
     *
     * @return XmlValidator
     */
    public static function short():XmlValidator
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * Split file into each of your products
     *
     * @param string $inputFile the $input File file
     * @return  bool true if file is valid onix file false other case
     */
    public function isValid(string $inputFile):bool
    {
        return false;
    }
}