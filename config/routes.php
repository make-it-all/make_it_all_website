<?php

$r->root('pages#home');

$r->resources('calls', ['except'=>['show']]);
$r->resources('problems', ['except'=>['show']]);
$r->resources('personnel', ['except'=>['show']]);
$r->resources('users', ['except'=>['show']]);

$r->resources('sessions', ['only'=>['new', 'create', 'destroy']]);
