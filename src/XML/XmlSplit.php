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
 * The Class XmlSplit split huge onix files
 *
 * @package xeBook\Metadata\Onix\XML
 */
final class XmlSplit
{
    /**
     * Split file into each of your products
     *
     * @param string $inputFile the $input File file
     * @param string $outputPath the output path
     */
    public function split(string $inputFile, string $outputPath):void
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }
}