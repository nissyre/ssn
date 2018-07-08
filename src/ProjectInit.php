<?php

namespace Nissyre;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder;

class ProjectInit extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:project-init')
            ->setDescription('Creates a new empty project.')
            ->setHelp('Use to init new project in empty directory')
            ->addArgument('root_dir', InputArgument::REQUIRED, 'Package directory');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Project-init');
        $root_dir = $input->getArgument('root_dir');
        $fileSystem = new Filesystem();
        if ($fileSystem->exists($root_dir)) {
            //todo
        }
        else {
            $output->write('Directory doesn\'t exist');
        }

    }
}