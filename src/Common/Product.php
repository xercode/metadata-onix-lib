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

namespace xeBook\Metadata\Onix\Common;

final class Product
{
    public static function read(\SimpleXMLElement $xml):Product
    {
        // TODO complete
        return new self();
    }
}
