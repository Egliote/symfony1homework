<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_form' shared service.

$this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_entity_helper'] ?? $this->privates['maker.doctrine_entity_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineEntityHelper(NULL))), ($this->privates['maker.file_manager'] ?? $this->load(__DIR__.'/getMaker_FileManagerService.php')));

$instance->setName('make:form');

return $instance;
