<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_migration' shared service.

$this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration('/code'), ($this->privates['maker.file_manager'] ?? $this->load(__DIR__.'/getMaker_FileManagerService.php')));

$instance->setName('make:migration');

return $instance;
