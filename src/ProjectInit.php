<?php

namespace Nissyre;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class ProjectInit extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:project-init')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a new empty project.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Use to init new project in empty directory')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Project-init');
    }

}