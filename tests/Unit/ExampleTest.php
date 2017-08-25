<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\OOP\Student;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    public function testOOP() {

    	//instantiate student Object
    	$student = new Student();
        $student->setName("Seun Matt");
    	$student->setBirthDate("1", "7", "2017");
    	$student->setGender("male");
    	$student->setUniform("Student 1 Uniform");

    	$student2 = new Student();
    	$student2->setName("Student Two");
    	$student2->setBirthDate("1", "9", "2020");
    	$student2->setGender("female");

    	echo $student->toString();
    	echo "\n";
    	echo $student2->toString();

    	//$student->setAddress("New Address");


    }
}
