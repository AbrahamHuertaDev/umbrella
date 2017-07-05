<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class DatabaseBackupMake extends Command
{
    protected $commandName = 'database:backup';
    protected $commandDescription = "Respalda tu base de datos";

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

        $config = json_decode(file_get_contents(ROOT . '/config.umbrella'), true);

        if ($name) {

                $filename= $name . '.sql';
                $tables = '*';

                $link = mysql_connect($config['database']['host'],$config['database']['username'],$config['database']['password']);
                mysql_select_db($config['database']['database'],$link);
                
                //get all of the tables
                if($tables == '*')
                {
                    $tables = array();
                    $result = mysql_query('SHOW TABLES');
                    while($row = mysql_fetch_row($result))
                    {
                        $tables[] = $row[0];
                    }
                }
                else
                {
                    $tables = is_array($tables) ? $tables : explode(',',$tables);
                }

                $return = '';
                
                //cycle through
                foreach($tables as $table)
                {
                    $result = mysql_query('SELECT * FROM '.$table);
                    $num_fields = mysql_num_fields($result);
                    
                    $return.= 'DROP TABLE '.$table.';';
                    $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                    $return.= "\n\n".$row2[1].";\n\n";
                    
                    for ($i = 0; $i < $num_fields; $i++) 
                    {
                        while($row = mysql_fetch_row($result))
                        {
                            $return.= 'INSERT INTO '.$table.' VALUES(';
                            for($j=0; $j < $num_fields; $j++) 
                            {
                                $row[$j] = addslashes($row[$j]);
                                $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                                if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                                if ($j < ($num_fields-1)) { $return.= ','; }
                            }
                            $return.= ");\n";
                        }
                    }
                    $return.="\n\n\n";
                }
                
                //save file
                $handle = fopen(ROOT . 'backup/' . $filename,'w+');
                fwrite($handle,$return);
                fclose($handle);

                $output->writeln('Backup de ' . $config['database']['database'] . ' generado correctamente en ' . ROOT . 'backup/' . $filename);

        } else {


        }

        

    }
}
