<?php

/**
 * Created by PhpStorm.
 * User: c
 * Date: 2016/12/12
 * Time: 13:57
 */
class employee
{
    protected $ename;
    protected $sal;

    function __construct($ename, $sal)
    {
        $this->ename = $ename;
        $this->sal = $sal;
    }

    function give_raise($amount)
    {
        $this->sal += $amount;
        printf("Employee %s got raise of %d dollars\n", $this->ename, $amount);
        printf("New salary is %d dollars\n", $this->sal);
    }

    function __destruct()
    {
        printf("Good bye, cruel world:EMPLOYEE:%s\n", $this->ename);
    }
}

class manager extends employee
{
    protected $dept;

    function __construct($ename, $sal, $dept)
    {
        parent::__construct($ename, $sal); // TODO: Change the autogenerated stub
        $this->dept = $dept;
    }

    function give_raise($amount)
    {
        parent::give_raise($amount); // TODO: Change the autogenerated stub
        print("This empolyee is a manager\n");
    }

    function __destruct()
    {
        printf("Good bye, cruel world:MANAGER:%s\n", $this->ename);
        parent::__destruct(); // TODO: Change the autogenerated stub
    }
}

$emp = new employee("Johnson", 100);
$emp->give_raise(50);
$mgr = new manager("Smith", 300, 200);
$mgr->give_raise(50);
