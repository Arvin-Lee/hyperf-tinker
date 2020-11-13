<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTinker\Commands;

use Hyperf\Command\Command as HyperfCommand;
use Psr\Container\ContainerInterface;
use Psy\Shell;

class TinkerCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected $shell;

    public function __construct(ContainerInterface $container, Shell $shell)
    {
        $this->container = $container;
        $this->shell = $shell;

        parent::__construct('tinker');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Interact with your application');
    }

    public function handle()
    {
        $this->shell->run();
    }
}
