<?php
/**
 * This file is a part of "bert86014/erc20-php" package.
 * https://github.com/bert86014/erc20-php
 *
 * Copyright (c) 2020 Furqan A. Siddiqui <hello@bert86014.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit following link:
 * https://github.com/bert86014/erc20-php/blob/master/LICENSE
 */

declare(strict_types=1);

namespace ERC20\Exception;

use EthereumRPC\Exception\ContractsException;

/**
 * Class ERC20Exception
 * @package ERC20\Exception
 */
class ERC20Exception extends ContractsException
{
}
