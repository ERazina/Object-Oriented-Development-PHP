<?php//создадим класс юзер и в классе укажемclass User{    //задаем свойства    public $name;    protected $login;    private $surname;    public $mail;    //определяем методы    public function getName(){        //тело функции    }    public function sendMail(){        //тело функции    }}//создаем объект юзер$User = new User;//Задаем значение свойства name равное Админ$User->name = 'Админ';//обращаемся в функции getNameecho $User->getName();?>