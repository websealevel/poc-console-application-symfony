<?php


namespace Wsl\App\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class SayHiCommand extends Command
{

    protected static $defaultDescription = 'Say hi to people';

    public function execute(InputInterface $input, OutputInterface $output)
    {

        $greeting = $input->getOption('polite') ? "Hello %s. I hope you are fine today." : "Hi %s ! What's up ?";

        $msg = sprintf(sprintf("%s", $greeting), implode(", ", $input->getArgument('names')));

        $output->writeln(
            $msg
        );

        return COMMAND::SUCCESS;
    }

    public function configure(): void
    {
        $this
            ->addArgument('names', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'Who you want to say hi to');

        $this->addOption(
            'polite',
            'p',
            null,
            'Greet in a more polite way'
        );
    }
}
