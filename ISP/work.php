<?php

interface Workable
{
   public function work();
}

interface Eatable
{
    public function eat();
}

interface Sleepable
{
	public function sleep();
}

class Human implements Workable, Sleepable, Eatable
{
    public function sleep()
    {
        return true;
    }
    
    public function eat()
    {
        return true;
    }
    public function work()
    {
        return true;
     }
}

class Android implements Workable
{    
    public function work()
    {
        return true;
     }
}
