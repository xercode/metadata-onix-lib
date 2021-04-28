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

namespace xeBook\Metadata\Onix\XML\Test;

use PHPUnit\Framework\TestCase;
use xeBook\Metadata\Onix\XML\XmlValidator;

final class XmlValidatorTest extends TestCase
{
    /**
     * @test
     */
    public function input_file_does_not_exist()
    {
        $validator = XmlValidator::create();
        try {

            $validator->isValid('file_not_found');

        } catch (\Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @test
     */
    public function input_file_is_not_an_XML()
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }

    /**
     * @test
     */
    public function input_file_is_not_a_valid_onix()
    {
        throw new \RuntimeException('This method is not implemented yet.');
    }
}
