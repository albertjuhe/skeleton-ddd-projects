<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    JMS\SerializerBundle\JMSSerializerBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Knp\Bundle\MarkdownBundle\KnpMarkdownBundle::class => ['all' => true],
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
    App\Infrastructure\CoreBundle\CoreBundle::class => ['all' => true],
    App\Infrastructure\UserBundle\UserBundle::class => ['all' => true],
    App\Infrastructure\EventBundle\EventBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    League\Tactician\Bundle\TacticianBundle::class => ['all' => true],
    FOS\ElasticaBundle\FOSElasticaBundle::class => ['all' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
];
