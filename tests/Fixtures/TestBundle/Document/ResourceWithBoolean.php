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

namespace ApiPlatform\Tests\Fixtures\TestBundle\Document;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

#[ApiResource]
#[ODM\Document]
class ResourceWithBoolean
{
    /**
     * @var int The id
     */
    #[ODM\Id(strategy: 'INCREMENT', type: 'int')]
    private ?int $id = null;
    #[ODM\Field(type: 'bool')]
    private bool $myBooleanField = false;

    public function getId()
    {
        return $this->id;
    }

    public function getMyBooleanField(): bool
    {
        return $this->myBooleanField;
    }

    public function setMyBooleanField(bool $myBooleanField): void
    {
        $this->myBooleanField = $myBooleanField;
    }
}
