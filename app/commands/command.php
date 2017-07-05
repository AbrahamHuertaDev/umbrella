<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class CommandMake extends Command
{
    protected $commandName = 'make:command';
    protected $commandDescription = "Agrega comandos a tu umbrella-cli";

    protected $commandArgumentName = "name";
    protected $commandArgumentCommand = "cli";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL
            )
            ->addArgument(
                $this->commandArgumentCommand,
                InputArgument::OPTIONAL
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument($this->commandArgumentName);
        $command = $input->getArgument($this->commandArgumentCommand);

        if ($name) {

            $table = $name;

            $migration = file_get_contents(ROOT . '/bootstrap/cached/command.txt');
            $migration = str_replace('{name}', $table . 'Make', $migration);
            $migration = str_replace('{command}', $command, $migration);
            $file =  strtolower($table) . '.php';

            file_put_contents(APP . 'commands/' . $file, $migration);

            $umbrella = file_get_contents(ROOT . '/umbrella');
            $umbrella = str_replace('# your commands', '
$application->add(new '. $name .'Make());
# your commands
            ', $umbrella);

            file_put_contents(ROOT . '/umbrella', $umbrella);

            $output->writeln('Comando ' . $table . ' creado corectamente en app/commands/'.$file);
            $output->writeln('Para utilizar este comando sigue estos pasos:');
            $output->writeln('1.- ejecuta composer dumpautoload');
            #$output->writeln('2.- agrega $application->add(new '. $name .'Make());  al archivo umbrella');
            $output->writeln('2.- ejecuta en tu consola php umbrella ' . $command);

        } else {

        }


    }
}
