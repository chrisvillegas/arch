<?php
declare(strict_types=1);
namespace App\Domain\Entities;
use DateTimeInterface;
//Final previene de la extensión o del overriding en métodos para mantener
//el desacoplamiento de la arquitectura, ya que si alguien externo puede extender mi clase de
//dominio, entonces se pierde el dependency inversion
final class Registration
{
    private string $name;
    private string $email;
    private string $registrationNumber;
    private DateTimeInterface  $birthDate;
    private DateTimeInterface  $registrationAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber(string $registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * @param DateTimeInterface $birthDate
     */
    public function setBirthDate(DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return DateTimeInterface
     */
    public function getRegistrationAt(): DateTimeInterface
    {
        return $this->registrationAt;
    }

    /**
     * @param DateTimeInterface $registrationAt
     */
    public function setRegistrationAt(DateTimeInterface $registrationAt): void
    {
        $this->registrationAt = $registrationAt;
    }


}