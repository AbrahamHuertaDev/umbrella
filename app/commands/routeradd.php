<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class RouterAddMake extends Command
{
    protected $commandName = 'router:add';
    protected $commandDescription = "Agrega una nueva ruta";

    protected $commandArgumentType = "type";
    protected $commandArgumentRoute = "route";
    protected $commandArgumentController = "controller";
    protected $commandArgumentMethod = "method";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->addArgument(
                $this->commandArgumentType,
                InputArgument::OPTIONAL
            )
            ->addArgument(
                $this->commandArgumentRoute,
                InputArgument::OPTIONAL
            )
            ->addArgument(
                $this->commandArgumentController,
                InputArgument::OPTIONAL
            )
            ->addArgument(
                $this->commandArgumentMethod,
                InputArgument::OPTIONAL
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $type = $input->getArgument($this->commandArgumentType);
        $route = $input->getArgument($this->commandArgumentRoute);
        $controller = $input->getArgument($this->commandArgumentController);
        $method = $input->getArgument($this->commandArgumentMethod);

        if ($type || $route || $controller || $method) {

            $migration = file_get_contents(APP . '/routes.php');

            $add = "
Route::" . $type . "('/". $route ."','". ucfirst($controller) ."Controller@". $method ."');";;

            $migration .= $add;


            file_put_contents(APP . '/routes.php', $migration);

            $output->writeln('Ruta ' . $add . ' 
agregada correctamente');

        } else {


        }

    }
}
