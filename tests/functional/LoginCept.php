<?php
$I = new FunctionalTester($scenario);
$I->wantTo("Doesn't login a user with a wrong email or password");
$I->amOnPage('/login');
$I->canSee('E-Mail Address');
$I->fillField('email', 'teste@teste2.com');
$I->canSee('Password');
$I->fillField('password', '1234567');
$I->click('button[type="submit"]');
$I->seeCurrentUrlEquals('/login');
$I->see("These credentials do not match our records.");


$I->wantTo('Login a user successfully');
$I->amOnPage('/login');
$I->canSee('E-Mail Address');
$I->fillField('email', 'teste@teste.com');
$I->canSee('Password');
$I->fillField('password', '123456');
$I->click('button[type="submit"]');
$I->seeCurrentUrlEquals('/home');
$I->see("You are logged in!");

