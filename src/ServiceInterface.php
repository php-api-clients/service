<?php declare(strict_types=1);

namespace ApiClients\Foundation\Service;

use React\Promise\CancellablePromiseInterface;

interface ServiceInterface
{
    public function handle($input): CancellablePromiseInterface;
}
