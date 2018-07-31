<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */

class Employee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */

    private $email;

    /**
     * @var
     * @ORM\Column(name="joining_date", type="date")
     * @Assert\Date()
     */

    private $joiningDate;

    /**
     * @var
     *@ORM\Column(name="job_role", type="string", length=255)
     */

    private $jobRole;

    /**
     * @var
     * @ORM\Column(name="salary", type="decimal")
     */

    private $salary;

    /**
     * @var
     * @ORM\Column(name="employment_type", type="string", length=255)
     */

    private $employmentType;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */

    public function getJoiningDate()
    {
        return $this->joiningDate;
    }

    /**
     * @param mixed $joiningDate
     */

    public function setJoiningDate($joiningDate)
    {
        $this->joiningDate = $joiningDate;
    }

    /**
     * @return mixed
     */

    public function getJobRole()
    {
        return $this->jobRole;
    }

    /**
     * @param mixed $jobRole
     */

    public function setJobRole($jobRole)
    {
        $this->jobRole = $jobRole;
    }

    /**
     * @return mixed
     */

    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */

    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * @param mixed $employmentType
     */

    public function setEmploymentType($employmentType)
    {
        $this->employmentType = $employmentType;
    }

}

