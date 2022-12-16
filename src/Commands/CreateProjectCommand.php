<?php


namespace Wsl\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreateProjectCommand extends Command
{


    protected static $defaultDescription = 'Creates a new project';

    public function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([

            sprintf("Creating a new project %s", $input->getArgument('projectname')), //recuperer l'argument passé en input
            '============',
            '',
        ]);

        //Do stuff...

        return Command::SUCCESS;
    }

    public function configure(): void
    {

        //Configure input
        $this
            // configure an argument
            ->addArgument('projectname', InputArgument::REQUIRED, 'The name of the project.')
            // ...
        ;

        //The configure() method is called automatically at the end of the command constructor
        $this->setHelp("This command allows you to create a new empty project.");
    }
}
