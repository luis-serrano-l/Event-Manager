<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function list(): Response
    {
        $events = $this->entityManager->getRepository(Event::class)->findAll();
        return $this->render('event/index.html.twig', [
            'events' => $events
        ]);
    }

    public function create(Request $request, FormFactoryInterface $formFactory): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('event/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function edit(Request $request, $id): Response
    {
        $event = $this->entityManager->getRepository(Event::class)->find($id);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render('event/edit.html.twig', [
            'form' => $form->createView(),
            'event' => $event,
        ]);
    }



    public function delete($id): Response
    {
        $id = (int) $id;
        $event = $this->entityManager->getRepository(Event::class)->find($id);
        $this->entityManager->remove($event);
        $this->entityManager->flush();
        return $this->redirectToRoute('index');
    }

    public function show($id): Response
    {
        $id = (int) $id;
        $event = $this->entityManager->getRepository(Event::class)->find($id);
        return $this->render('event/show.html.twig', [
            'event' => $event
        ]);
    }
}
