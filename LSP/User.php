<?php
// Base User class
abstract class User 
{
    protected $name;

     abstract public function getSettings();
    
 }
 
 // Candidate
 class Candidate extends User
 {
     protected $settings=[];
     
     public function __constructs(arrray $settings)
     {
         $this->settings = $settings;
     }
     
     public function getSettings()
     {
         return $this->settings;
     }
 }
 
 // Employee
 class Employee extends User
 {
     protected $settings=[];
     
     public function __constructs(arrray $settings)
     {
         $this->settings = $settings;
     }
     
     public function getSettings()
     {
         return (object) $this->settings;
     }
 }
 
 
 class UserSettings
 {
     protected $user;
     
     public function __construct(User $user)
     {
         $this->user = $user;
     }
     
     public function output()
     {
         return $this->user->getSettings();
     }
 }

$Employee = new Candidate(['hekk', 'jmljd', 'jlfjlfj']);
 $settings = new UserSettings($Employee);
 echo "\n";
print_r($settings->output());