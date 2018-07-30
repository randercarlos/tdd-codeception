<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I can see Laravel in home page');
$I->amOnPage('/');
$I->canSee('Laravel');
