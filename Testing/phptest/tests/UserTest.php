<?php
class UserTest extends \PHPUnit\Framework\TestCase{

    public function testName()
    {
        $user = new App\User("abdelhameed","abdelhameed@yahoo.com");
        $this->assertEquals("abdelhameed", $user->name());
        $test_name = "Samy";
        $this->assertSame($test_name, $user->name($test_name));
    }

    public function testEmail()
    {
        $user= new App\User("abdelhameed","abdelhameed@yahoo.com");
        $this->assertEquals("abdelhameed@yahoo.com", $user->email());
        $test_email= "samy@gmail.com";
        $this->assertEquals($test_email, $user->email($test_email));

    }
}