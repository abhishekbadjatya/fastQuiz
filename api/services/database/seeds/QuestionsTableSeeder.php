<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'questionId' => 1,
                'questionText' => 'Which is the valid declarations within an interface definition?',
                'questionLevel' => 1,
            ),
            1 => 
            array (
                'questionId' => 2,
                'questionText' => 'Which cause a compiler error?',
                'questionLevel' => 1,
            ),
            2 => 
            array (
                'questionId' => 3,
                'questionText' => 'You want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective?',
                'questionLevel' => 1,
            ),
            3 => 
            array (
                'questionId' => 4,
                'questionText' => 'Which is a valid declarations of a String?',
                'questionLevel' => 1,
            ),
            4 => 
            array (
                'questionId' => 5,
                'questionText' => 'Which one of these lists contains only Java programming language keywords?',
                'questionLevel' => 1,
            ),
            5 => 
            array (
                'questionId' => 6,
                'questionText' => 'Which is true about an anonymous inner class?',
                'questionLevel' => 2,
            ),
            6 => 
            array (
                'questionId' => 7,
            'questionText' => 'Which two are valid constructors for Thread? Thread(Runnable r, String name) Thread() Thread(int priority) Thread(Runnable r, ThreadGroup g) Thread(Runnable r, int priority)',
                'questionLevel' => 2,
            ),
            7 => 
            array (
                'questionId' => 8,
                'questionText' => 'Which cannot directly cause a thread to stop executing?',
                'questionLevel' => 2,
            ),
            8 => 
            array (
                'questionId' => 9,
                'questionText' => 'Which is true about a method-local inner class?',
                'questionLevel' => 2,
            ),
            9 => 
            array (
                'questionId' => 10,
            'questionText' => 'What is the value of ?d? after this line of code has been executed? double d = Math.round ( 2.5 + Math.random() );',
                'questionLevel' => 2,
            ),
            10 => 
            array (
                'questionId' => 11,
                'questionText' => 'Given a method in a protected class, what access modifier do you use to restrict access to that method to only the other members of the same class?',
                'questionLevel' => 3,
            ),
            11 => 
            array (
                'questionId' => 12,
                'questionText' => 'Which one creates an instance of an array?',
                'questionLevel' => 3,
            ),
            12 => 
            array (
                'questionId' => 13,
                'questionText' => 'Which constructs an anonymous inner class instance?',
                'questionLevel' => 3,
            ),
            13 => 
            array (
                'questionId' => 14,
                'questionText' => 'Which statement is true about a static nested class?',
                'questionLevel' => 3,
            ),
            14 => 
            array (
                'questionId' => 15,
                'questionText' => 'You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective?',
                'questionLevel' => 3,
            ),
            15 => 
            array (
                'questionId' => 16,
                'questionText' => 'Which interface does java.util.Hashtable implement?',
                'questionLevel' => 4,
            ),
            16 => 
            array (
                'questionId' => 17,
            'questionText' => 'Assume the following method is properly synchronized and called from a thread A on an object B: wait(2000); After calling this method, when will the thread A become a candidate to get another turn at the CPU?',
                'questionLevel' => 4,
            ),
            17 => 
            array (
                'questionId' => 18,
                'questionText' => 'Which of the following will not directly cause a thread to stop?',
                'questionLevel' => 4,
            ),
            18 => 
            array (
                'questionId' => 19,
            'questionText' => 'Which of the following statements about the hashcode() method are incorrect? The value returned by hashcode() is used in some collection classes to help locate objects. The hashcode() method is required to return a positive int value. The hashcode() ',
                'questionLevel' => 4,
            ),
            19 => 
            array (
                'questionId' => 20,
                'questionText' => 'Which will contain the body of the thread?',
                'questionLevel' => 4,
            ),
            20 => 
            array (
                'questionId' => 21,
                'questionText' => 'Which collection class allows you to access its elements by associating a key with an element?s value, and provides synchronization?',
                'questionLevel' => 5,
            ),
            21 => 
            array (
                'questionId' => 22,
                'questionText' => 'Suppose that you would like to create an instance of a new Map that has an iteration order that is the same as the iteration order of an existing instance of a Map. Which concrete implementation of the Map interface should be used for the new instanc',
                'questionLevel' => 5,
            ),
            22 => 
            array (
                'questionId' => 23,
            'questionText' => 'Which class does not override the equals() and hashCode() methods, inheriting them directly from class Object?',
                'questionLevel' => 5,
            ),
            23 => 
            array (
                'questionId' => 24,
                'questionText' => 'Which collection class allows you to grow or shrink its size and provides indexed access to its elements, but whose methods are not synchronized?',
                'questionLevel' => 5,
            ),
            24 => 
            array (
                'questionId' => 25,
                'questionText' => 'Which method registers a thread in a thread scheduler?',
                'questionLevel' => 5,
            ),
            25 => 
            array (
                'questionId' => 26,
                'questionText' => 'Which interface provides the capability to store objects using a key-value pair?',
                'questionLevel' => 6,
            ),
            26 => 
            array (
                'questionId' => 27,
                'questionText' => 'You need to store elements in a collection that guarantees that no duplicates are stored and all elements can be accessed in natural order. Which interface provides that capability?',
                'questionLevel' => 6,
            ),
            27 => 
            array (
                'questionId' => 28,
                'questionText' => 'Which is valid declaration of a float?',
                'questionLevel' => 6,
            ),
            28 => 
            array (
                'questionId' => 29,
            'questionText' => 'Which collection class allows you to associate its elements with key values, and allows you to retrieve objects in FIFO (first-in, first-out) sequence?',
                'questionLevel' => 6,
            ),
            29 => 
            array (
                'questionId' => 30,
                'questionText' => 'Which method must be defined by a class implementing the java.lang.Runnable interface?',
                'questionLevel' => 6,
            ),
            30 => 
            array (
                'questionId' => 31,
                'questionText' => 'What is the numerical range of char?',
                'questionLevel' => 7,
            ),
            31 => 
            array (
                'questionId' => 32,
                'questionText' => 'Which of the following will directly stop the execution of a Thread?',
                'questionLevel' => 7,
            ),
            32 => 
            array (
                'questionId' => 33,
                'questionText' => 'Which of the following are Java reserved words? run import default implement',
                'questionLevel' => 7,
            ),
            33 => 
            array (
                'questionId' => 34,
            'questionText' => 'Which class or interface defines the wait(), notify(),and notifyAll() methods?',
                'questionLevel' => 7,
            ),
            34 => 
            array (
                'questionId' => 35,
                'questionText' => 'Which statement is true?',
                'questionLevel' => 7,
            ),
            35 => 
            array (
                'questionId' => 36,
                'questionText' => 'Which statement is true?',
                'questionLevel' => 8,
            ),
            36 => 
            array (
                'questionId' => 37,
                'questionText' => 'Which statement is true?',
                'questionLevel' => 8,
            ),
            37 => 
            array (
                'questionId' => 38,
                'questionText' => 'Which of the following statements is true?',
                'questionLevel' => 8,
            ),
            38 => 
            array (
                'questionId' => 39,
                'questionText' => 'Which is a valid declaration within an interface?',
                'questionLevel' => 8,
            ),
            39 => 
            array (
                'questionId' => 40,
            'questionText' => 'Which two cause a compiler error? float[ ] f = new float(3); float f2[ ] = new float[ ]; float[ ]f1 = new float[3]; float f3[ ] = new float[3]; float f5[ ] = {1.0f, 2.0f, 2.0f};',
                'questionLevel' => 8,
            ),
            40 => 
            array (
                'questionId' => 41,
                'questionText' => 'Which of the following would compile without error?',
                'questionLevel' => 9,
            ),
            41 => 
            array (
                'questionId' => 42,
            'questionText' => 'Which of the following class level (nonlocal) variable declarations will not compile?',
                'questionLevel' => 9,
            ),
            42 => 
            array (
                'questionId' => 43,
            'questionText' => 'Which of the following are valid calls to Math.max? Math.max(1,4) Math.max(2.3, 5) Math.max(1, 3, 5, 7) Math.max(-1.5, -2.8f)',
                'questionLevel' => 9,
            ),
            43 => 
            array (
                'questionId' => 44,
                'questionText' => 'What is the name of the method used to start a thread execution?',
                'questionLevel' => 9,
            ),
            44 => 
            array (
                'questionId' => 45,
            'questionText' => 'Which three are methods of the Object class? notify(); notifyAll(); isInterrupted(); synchronized(); interrupt(); wait(long msecs); sleep(long msecs); yield();',
                'questionLevel' => 9,
            ),
            45 => 
            array (
                'questionId' => 46,
            'questionText' => 'Which two of the following methods are defined in class Thread? start() wait() notify() run() terminate()',
                'questionLevel' => 10,
            ),
            46 => 
            array (
                'questionId' => 47,
                'questionText' => 'Which two of the following are legal declarations for nonnested classes and interfaces? final abstract class Test {} public static interface Test {} final public class Test {} protected abstract class Test {} protected interface Test {} abstract publ',
                'questionLevel' => 10,
            ),
            47 => 
            array (
                'questionId' => 48,
            'questionText' => 'Which three guarantee that a thread will leave the running state? yield() wait() notify() notifyAll() sleep(1000) aLiveThread.join() Thread.killThread()',
                'questionLevel' => 10,
            ),
            48 => 
            array (
                'questionId' => 49,
                'questionText' => 'Which is a valid keyword in java?',
                'questionLevel' => 10,
            ),
            49 => 
            array (
                'questionId' => 50,
                'questionText' => 'What is the numerical range of a char?',
                'questionLevel' => 10,
            ),
        ));
        
        
    }
}
