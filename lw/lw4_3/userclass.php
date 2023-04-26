<?php

class User {
    private ?int $userId;
    private string $first_name;
    private string $last_name;
    private string $middle_name;
    private string $gender; 
	private string $birthdate;
	private string $email;
	private string $phone;
	private string $avatar;

    public function __construct(?int $userId, string $first_name, string $last_name, string $middle_name, string $gender, string $birthdate, string $email, int $phone, string $avatar)
    {
        $this->userId = $userId;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->middle_name = $middle_name;
        $this->gender = $gender; 
        $this->birthdate = $birthdate;
        $this->email = $email;
        $this->phone = $phone;
        $this->avatar = $avatar;
    }

    public function getUserId(): ?int
    {
       return $this->userId;
    }

   public function getFirstName(): string
   {
        return $this->first_name;
   }

   public function getLastName(): string
   {
       return $this->last_name;
   }

   public function getMiddleName(): string
    {
       return $this->middle_name;
    }

   public function getGender(): string
   {
        return $this->gender;
   }

   public function getBirthDate(): string
   {
       return $this->birthdate;
   }

   public function getEmail(): string
    {
       return $this->email;
    }

   public function getPhone(): int
   {
        return $this->phone;
   }

   public function getAvatarPath(): string
   {
       return $this->avatar;
   }

}