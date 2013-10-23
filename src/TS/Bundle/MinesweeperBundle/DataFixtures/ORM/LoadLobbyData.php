<?php

namespace TS\Bundle\MinesweeperBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use TS\Bundle\MinesweeperBundle\Entity\Lobby;

class LoadLobbyData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $lobby = new Lobby();

        $lobby->addOnlineUser($this->getReference('user1'))
            ->addOnlineUser($this->getReference('user2'))
            ->setChat('You are on Example Lobby');

        $manager->persist($lobby);
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
