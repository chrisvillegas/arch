<?php
declare(strict_types=1);

namespace App\Application\Usecases\ExportRegistration;

use App\Domain\ValueObjects\Cpf;
use App\Domain\ValueObjects\Email;

final class OutputBoundary
{
    private string $name;
    private string $email; //Require validation: not valid object should not make it to memory
    private string $registrationNumber;
    private string $birthDate;
    private string $registrationAt;

    public function __construct(array $values)
    {
        $this->name = $values['name'] ?? '';
        $this->email = $values['email'] ?? '';
        $this->birthDate = $values['birthDate'] ?? '';
        $this->registrationAt = $values['registrationAt'] ?? '';
    }
    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @return mixed|string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return mixed|string
     */
    public function getRegistrationAt()
    {
        return $this->registrationAt;
    }

}