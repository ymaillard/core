<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Fixtures\TestBundle\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
final class DummyForAdditionalFieldsInput
{
    #[ApiProperty(identifier: true)]
    public $id;

    public function __construct(private readonly string $dummyName)
    {
    }

    public function getDummyName(): string
    {
        return $this->dummyName;
    }
}
