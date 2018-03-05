<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'security.csrf.token_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenGenerator\\TokenGeneratorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenStorage\\TokenStorageInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\TokenStorage\\SessionTokenStorage.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\CsrfTokenManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Csrf\\CsrfTokenManager.php';

return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->load(__DIR__.'/getSessionService.php'))), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
