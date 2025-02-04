<?php


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Fixtures\Tasks;

use Phalcon\Cli\Task;

class MainTask extends Task
{
    public function mainAction()
    {
        return 'mainAction';
    }

    public function requestRegistryAction()
    {
        return $this->di['registry']->data;
    }

    public function helloAction($world = '', $symbol = '!')
    {
        return 'Hello ' . $world . $symbol;
    }

    public function noopAction()
    {
        return;
    }
}
