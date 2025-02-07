<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Action;

final class Baz
{
    /**
     * @var Bar|null
     */
    private $bar;

    public function setBar(Bar $bar): void
    {
        $this->bar = $bar;
    }

    public function getBar(): ?Bar
    {
        return $this->bar;
    }
}
