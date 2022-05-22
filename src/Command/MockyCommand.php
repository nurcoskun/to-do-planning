<?php

namespace App\Command;

use App\Entity\Developer;
use App\Entity\Provider;
use App\Entity\ToDoList;
use App\Factory\ProviderFactory;
use App\Service\AssignmentService;
use App\Service\RequestService;
use App\Service\ToDoListService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MockyCommand extends Command
{
    protected static $defaultName = 'mocky:to-do-list';

    /** @var RequestService */
    private $requestService;

    /** @var ProviderFactory */
    private $providerFactory;

    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var ToDoListService */
    private $toDoListService;

    /** @var AssignmentService */
    private $assignmentService;

    public function __construct
    (
        RequestService $requestService,
        ProviderFactory $providerFactory,
        EntityManagerInterface $entityManager,
        ToDoListService $toDoListService,
        AssignmentService $assignmentService
    )
    {
        parent::__construct();
        $this->requestService = $requestService;
        $this->providerFactory = $providerFactory;
        $this->entityManager = $entityManager;
        $this->toDoListService = $toDoListService;
        $this->assignmentService = $assignmentService;
    }

    protected function configure()
    {
        $this->setDescription('Mocky get to do list command.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Process Started | '.date("d.m.Y H:i:s"));

        try {
           $providers = $this->entityManager->getRepository(Provider::class)->findAll();

            foreach ($providers as $provider){

                $request = array(
                    'type' => $provider->getMethod(),
                    'uri' => $provider->getUrl()
                );

                $response = $this->requestService->makeRequest($request, $provider->getName(),$provider->getUrl());

                $toDoList = $this->providerFactory->callProvider($provider->getName());
                $toDoList->normalize($response);
                $normalized = $toDoList->getToDoList();

                $this->toDoListService->createToDoList($normalized);

            }

            $list = $this->entityManager->getRepository(ToDoList::class)->findAll();

            foreach ($list as $item){
              $array[] = array(
                  $item,
                  $item->getEstimatedDuration() * $item-> getLevel()
              );
            }

            usort($array, function ($item1, $item2) {
                return $item2['1'] <=> $item1['1'];
            });

            $this->assignmentService->assignmentTask($array);

            $io->success("Process Complete | ".date("d.m.Y H:i:s"));

        } catch (\Exception $exception) {
            $io->writeln($exception->getMessage());
        }

        return Command::SUCCESS;

    }


}
