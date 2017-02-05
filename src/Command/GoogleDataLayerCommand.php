<?php

namespace StudioArtCz\GoogleDataLayer\Command;

use Symfony\Component\Console\Command\Command,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface,
    Symfony\Component\Console\Input\InputOption;

/**
 * see: https://github.com/martinknor/feed/blob/master/src/Command/FeedCommand.php
 * Class GoogleDataLayerCommand
 * @package StudioArtCz\GoogleDataLayer\Command
 */
class GoogleDataLayerCommand extends Command
{

    /** @var \Nette\DI\Container */
    private $container;

    /** @var array */
    private $config;

    public function __construct(array $config = array(), Nette\DI\Container $container)
    {
        parent::__construct();
        $this->container = $container;
        $this->config = $config;
    }

    protected function configure()
    {
        $this->setName('GTM:info')
            ->setDescription('todo');
            //->addOption('show', 's', InputOption::VALUE_NONE, 'Print available exports')
            //->addOption('feed', 'f', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }

}