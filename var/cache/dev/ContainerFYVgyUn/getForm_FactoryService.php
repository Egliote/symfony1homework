<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.factory' shared service.

return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->load(__DIR__.'/getForm_RegistryService.php')), ($this->privates['form.resolved_type_factory'] ?? $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory()));
