<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected $hashPassword;
    public function __construct(UserPasswordHasherInterface $hashPassword)
    {
        $this->hashPassword = $hashPassword;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Chloé')
            ->setEmail('Chloe@escapade.fr')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($this->hashPassword->hashPassword($user, '!@0105@!'));
        $manager->persist($user);

        $user = new User();
        $user->setName('Michael')
            ->setEmail('Michael@escapade.fr')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($this->hashPassword->hashPassword($user, '!@0105@!'));
        $manager->persist($user);


        $manager->flush();
    }
}
