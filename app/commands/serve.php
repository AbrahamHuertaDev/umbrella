<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ServeMake extends Command
{
    protected $commandName = 'serve';
    protected $commandDescription = "Greets Someone";

    protected $commandArgumentName = "localhost:3333";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument($this->commandArgumentName);

        if ($name) {

            $output->writeln('Servidor umbrella corriendo en ' . $name);
            exec('php -S ' . $name . ' index.php');


        } else {

            $output->writeln('Servidor umbrella corriendo en http://localhost:3333');
            exec('php -S localhost:3333 index.php');

        }


    }
}
