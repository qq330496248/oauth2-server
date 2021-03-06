<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\OAuth2\Server;

use Eelly\OAuth2\Server\Repositories\AccessTokenRepository;
use League\OAuth2\Server\ResourceServer as LeagueResourceServer;

class ResourceServer extends LeagueResourceServer
{
    /**
     * ResourceServer constructor.
     *
     * @param \League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface $cryptKey
     */
    public function __construct($cryptKey)
    {
        parent::__construct(new AccessTokenRepository(), $cryptKey);
    }
}
