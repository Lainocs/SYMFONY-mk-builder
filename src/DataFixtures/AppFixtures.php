<?php

namespace App\DataFixtures;

use App\Entity\Kart;
use App\Entity\Wheel;
use App\Entity\Character;
use App\Entity\Hanglider;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        #KARTS
        ########################################################################################################################

        $kart = new Kart();
        $kart->setName('Kart Standard');
        $kart->setImage('Kart-01.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Rétro');
        $kart->setImage('Kart-02.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Proto 8');
        $kart->setImage('Kart-03.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Nautomobile');
        $kart->setImage('Kart-04.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Chabriolet');
        $kart->setImage('Kart-05.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Match-célèbre');
        $kart->setImage('Kart-06.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Tubul R3');
        $kart->setImage('Kart-07.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Beat-bolide');
        $kart->setImage('Kart-08.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Cavalkart');
        $kart->setImage('Kart-09.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Paracoccinelly');
        $kart->setImage('Kart-10.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Caravéloce');
        $kart->setImage('Kart-11.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Sneakart');
        $kart->setImage('Kart-12.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Propulsar');
        $kart->setImage('Kart-13.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Or');
        $kart->setImage('Kart-14.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('GLA');
        $kart->setImage('Kart-15.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('W 25 Silver Arrow');
        $kart->setImage('Kart-16.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('300 SL Roadster');
        $kart->setImage('Kart-17.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Blue Falcon');
        $kart->setImage('Kart-18.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Tanooki');
        $kart->setImage('Kart-19.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('B Dasher');
        $kart->setImage('Kart-20.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Autorhino');
        $kart->setImage('Kart-21.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Magikart');
        $kart->setImage('Kart-22.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Moto Standard');
        $kart->setImage('Moto-01.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Météore');
        $kart->setImage('Moto-02.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Sport GP');
        $kart->setImage('Moto-03.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Cybertombe');
        $kart->setImage('Moto-04.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Flamboyante');
        $kart->setImage('Moto-05.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Mécabécane');
        $kart->setImage('Moto-06.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Scootinette');
        $kart->setImage('Moto-07.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Épervier');
        $kart->setImage('Moto-08.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Yoshimoto');
        $kart->setImage('Moto-09.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Master-bécane');
        $kart->setImage('Moto-10.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('City Tripper');
        $kart->setImage('Moto-11.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Quad Standard');
        $kart->setImage('Moto-12.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Quad Wiggler');
        $kart->setImage('Moto-13.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Quad Nounours');
        $kart->setImage('Moto-14.png');
        $manager->persist($kart);

        $kart = new Kart();
        $kart->setName('Bone Rattler');
        $kart->setImage('Moto-15.png');
        $manager->persist($kart);

        #WHEELS
        ########################################################################################################################

        $wheel = new Wheel();
        $wheel->setName('Roue Standard');
        $wheel->setImage('Roues-01.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Mastodonte');
        $wheel->setImage('Roues-02.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Roller');
        $wheel->setImage('Roues-03.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Classique');
        $wheel->setImage('Roues-04.png');
        $manager->persist($wheel);


        $wheel = new Wheel();
        $wheel->setName('Lisse');
        $wheel->setImage('Roues-05.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Métal');
        $wheel->setImage('Roues-06.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Bouton');
        $wheel->setImage('Roues-07.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Hors-piste');
        $wheel->setImage('Roues-08.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Éponge');
        $wheel->setImage('Roues-09.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Bois');
        $wheel->setImage('Roues-10.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Coussin');
        $wheel->setImage('Roues-11.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Standard bleu');
        $wheel->setImage('Roues-12.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Masto-flamme');
        $wheel->setImage('Roues-13.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Roller Azur');
        $wheel->setImage('Roues-14.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Classique rouge');
        $wheel->setImage('Roues-15.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Cyber-lisse');
        $wheel->setImage('Roues-16.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Hors-piste rétro');
        $wheel->setImage('Roues-17.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Or');
        $wheel->setImage('Roues-18.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Roues GLA');
        $wheel->setImage('Roues-19.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Roues Triforce');
        $wheel->setImage('Roues-20.png');
        $manager->persist($wheel);

        $wheel = new Wheel();
        $wheel->setName('Roues Feuilles');
        $wheel->setImage('Roues-21.png');
        $manager->persist($wheel);

        #HANGLIDERS
        ########################################################################################################################

        $hanglider = new Hanglider();
        $hanglider->setName('Standard');
        $hanglider->setImage('Voile-01.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Ailes nuages');
        $hanglider->setImage('Voile-02.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Aile Wario');
        $hanglider->setImage('Voile-03.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Dendinaile');
        $hanglider->setImage('Voile-04.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Ombrelle Peach');
        $hanglider->setImage('Voile-05.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Parachute');
        $hanglider->setImage('Voile-06.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Parapente');
        $hanglider->setImage('Voile-07.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Aile fleurie');
        $hanglider->setImage('Voile-08.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Bowser-volant');
        $hanglider->setImage('Voile-09.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Planeur');
        $hanglider->setImage('Voile-10.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Parapente MKTV');
        $hanglider->setImage('Voile-11.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Or');
        $hanglider->setImage('Voile-12.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Voile Hylienne');
        $hanglider->setImage('Voile-13.png');
        $manager->persist($hanglider);

        $hanglider = new Hanglider();
        $hanglider->setName('Avion en papier');
        $hanglider->setImage('Voile-14.png');
        $manager->persist($hanglider);

        #CHARACTERS
        ########################################################################################################################

        $character = new Character();
        $character->setName('Mario');
        $character->setImage('Mario.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Luigi');
        $character->setImage('Luigi.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Peach');
        $character->setImage('Peach.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Daisy');
        $character->setImage('Daisy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Harmonie');
        $character->setImage('Harmonie.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Mario Tanuki');
        $character->setImage('Tanuki.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Peach Chat');
        $character->setImage('PeachChat.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Yoshi');
        $character->setImage('Yoshi.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Toad');
        $character->setImage('Toad.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Koopa');
        $character->setImage('Koopa.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Maskass');
        $character->setImage('Maskass.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Lakitu');
        $character->setImage('Lakitu.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Toadette');
        $character->setImage('Toadette.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Roi Boo');
        $character->setImage('RoiBoo.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bébé Mario');
        $character->setImage('BebeMario.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bébé Luigi');
        $character->setImage('BebeLuigi.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bébé Peach');
        $character->setImage('BebePeach.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bébé Daisy');
        $character->setImage('BebeDaisy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bébé Harmonie');
        $character->setImage('BebeHarmonie.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Mario de Métal');
        $character->setImage('MarioMetal.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Peach d\'or rose');
        $character->setImage('PeachOrRose.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Wario');
        $character->setImage('Wario.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Waluigi');
        $character->setImage('Waluigi.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Donkey Kong');
        $character->setImage('DonkeyKong.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bowser');
        $character->setImage('Bowser.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Skelerex');
        $character->setImage('Skelerex.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Bowser Jr');
        $character->setImage('BowserJr.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Skelbowser');
        $character->setImage('Skelbowser.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Lemmy');
        $character->setImage('Lemmy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Larry');
        $character->setImage('Larry.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Wendy');
        $character->setImage('Wendy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Ludwig');
        $character->setImage('Ludwig.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Iggy');
        $character->setImage('Iggy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Roy');
        $character->setImage('Roy.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Morton');
        $character->setImage('Morton.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Inkling Fille');
        $character->setImage('InkF.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Inkling Garçon');
        $character->setImage('InkG.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Link');
        $character->setImage('Link.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Villageois');
        $character->setImage('Villageois.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Villageoise');
        $character->setImage('Villageoise.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Marie');
        $character->setImage('Marie.png');
        $manager->persist($character);

        $character = new Character();
        $character->setName('Mii & Amiibo');
        $character->setImage('Amiibo.png');
        $manager->persist($character);

        $manager->flush();
    }
}
