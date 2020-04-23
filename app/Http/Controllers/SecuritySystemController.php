<?php

namespace App\Http\Controllers;

use App\Entities\SecuritySystem;
use App\Transformers\SecuritySystemTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Http\Request;

class SecuritySystemController extends Controller
{
    public function index(EntityManagerInterface $entityManager) {

        $security_systems = $entityManager
            ->getRepository(SecuritySystem::class)
            ->findAll();

        $transformer = new SecuritySystemTransformer();
        return $transformer->transformAll($security_systems);
     }

     public function show($id, EntityManagerInterface $entityManager) {
        $security_system = $entityManager
            ->getRepository(SecuritySystem::class)
            ->findOneBy([
                'id' => $id
            ]);

        $transformer = new SecuritySystemTransformer();
       return $transformer->transform($security_system);
     }

    public function store(Request $request, EntityManagerInterface $entityManager) {
        $security_system = new SecuritySystem(
            $request->get('description'),
            $request->get('acronyms'),
            $request->get('email'),
            $request->get('url')
        );

        $entityManager->persist($security_system);
        $entityManager->flush();

        return response()->json(['ok' => true], 201);
    }

    public function update($id, Request $request, EntityManagerInterface $entityManager) {
        //try {
            $security_system = $entityManager
                ->getRepository(SecuritySystem::class)
                ->findOneBy([
                    'id' => $id
                ]);

            $security_system->setDescription($request->get('description'));
            $security_system->setAcronyms($request->get('acronyms'));
            $security_system->setEmail($request->get('email'));
            $security_system->setUrl($request->get('url'));
            $security_system->setStatus($request->get('status'));
            $security_system->setUpdatedAt(null);
            $security_system->setResponsibleUser($request->get('responsible_user'));
            $security_system->setNewJustificative($request->get('new_justificative'));
            $security_system->setLastJustificative($security_system->getNewJustificative());

            $entityManager->flush();

            $transformer = new SecuritySystemTransformer();

            return response()->json(
                [
                    'ok' => true,
                    'data' => $transformer->transform($security_system)
                ],
                201
            );
        /*} catch (\Exception $e) {
            return response()->json(['ok' => false], 500);
        }*/

     }
}
