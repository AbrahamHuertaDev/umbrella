<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ControllerMake extends Command
{
    protected $commandName = 'make:controller';
    protected $commandDescription = "Greets Someone";

    protected $commandArgumentName = "name";

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

            $table = $name;

            $migration = file_get_contents(ROOT . '/bootstrap/cached/controller.txt');
            $migration = str_replace('{name}', $table . 'Controller', $migration);
            $file =  strtolower($table) . 'controller.php';

            file_put_contents(APP . 'controllers/' . $file, $migration);

            $output->writeln('Controlador ' . $table . ' creada corectamente en app/controllers/'.$file);

        } else {

        }


    }
}
