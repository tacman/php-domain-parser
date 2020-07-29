<?php

/**
 * PHP Domain Parser: Public Suffix List based URL parsing.
 *
 * @see http://github.com/jeremykendall/php-domain-parser for the canonical source repository
 *
 * @copyright Copyright (c) 2017 Jeremy Kendall (http://jeremykendall.net)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pdp;

interface PublicSuffixInterface extends HostInterface
{
    public const ICANN_DOMAINS = 'ICANN_DOMAINS';

    public const PRIVATE_DOMAINS = 'PRIVATE_DOMAINS';

    /**
     * Tells whether the effective TLD has a matching rule in a Public Suffix List.
     */
    public function isKnown(): bool;

    /**
     * Tells whether the effective TLD has a matching rule in a Public Suffix List ICANN Section.
     */
    public function isICANN(): bool;

    /**
     * Tells whether the effective TLD has a matching rule in a Public Suffix List Private Section.
     */
    public function isPrivate(): bool;
}
