<?php 
$I = new \AcceptanceTester\CRMOperatorSteps($scenario);
$I->wantTo('add two different customers to database');

$I->amInAddCustomerUi();
$first_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($first_customer);
$I->submitCustomerDataForm();

$I->seeIAmInListCustomersUi();

$I = new \AcceptanceTester\CRMUserSteps($scenario);
$I->wantTo('query the customer info using his phone number');

$I->amInQueryCustomerUi();
$->fillInPhoneFieldWithDataFrom($first_customer);
$I->clickSearchButton();

$I->seeIAmInListCustomersUi();
$I->seeCustomerInList($first_customer);
$I->dontSeeCustomerInList($second_customer);
?>
 