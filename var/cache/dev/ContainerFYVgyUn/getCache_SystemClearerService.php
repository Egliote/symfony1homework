<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system_clearer' shared service.

return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.system' => ($this->services['cache.system'] ?? $this->load(__DIR__.'/getCache_SystemService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->load(__DIR__.'/getCache_AnnotationsService.php'))));
