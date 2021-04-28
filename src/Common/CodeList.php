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

abstract class CodeList
{
    /**
     * Get Current Code
     * @return string the code
     */
    public abstract function getCode():string;

    /**
     * Get Current description
     * @return string the description
     */
    public abstract function getDescription():string;
}