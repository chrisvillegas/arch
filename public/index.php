<?php

use App\Application\Usecases\ExportRegistration\ExportRegistration;
use App\Application\Usecases\ExportRegistration\InputBoundary;
use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\Cpf;
use App\Domain\ValueObjects\Email;

require_once __DIR__ . '/../vendor/autoload.php';
$registration = new Registration();

$registration->setName('Christopher')
    ->setBirthDate(new DateTimeImmutable('1978-02-14'))
    ->setEmail(new Email('cflores@innoceanmexico.com'))
    ->setRegistrationAt(new DateTimeImmutable())
    ->setRegistrationNumber(new Cpf('01234567890'));

/*echo "<pre>";
print_r($registration);*/
$exportRegistrationUseCase = new ExportRegistration();
$inputBoundary = new InputBoundary('01234567890');
$output = $exportRegistrationUseCase->handle($inputBoundary);