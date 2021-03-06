<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\Event;

use Contao\CoreBundle\Event\PreviewUrlConvertEvent;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

class PreviewUrlConvertEventTest extends TestCase
{
    public function testSupportsReadingAndWritingTheUrl(): void
    {
        $event = new PreviewUrlConvertEvent(new Request());

        $this->assertNull($event->getUrl());

        $event->setUrl('http://localhost');

        $this->assertSame('http://localhost', $event->getUrl());
    }
}
