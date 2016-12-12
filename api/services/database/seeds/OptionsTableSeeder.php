<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'optionId' => 1,
            'optionLabel' => 'public final double methoda();',
                'questionId' => 1,
                'isCorrect' => 0,
            ),
            1 => 
            array (
                'optionId' => 2,
            'optionLabel' => 'public double methoda();',
                'questionId' => 1,
                'isCorrect' => 1,
            ),
            2 => 
            array (
                'optionId' => 3,
            'optionLabel' => 'protected void methoda(double d1);',
                'questionId' => 1,
                'isCorrect' => 0,
            ),
            3 => 
            array (
                'optionId' => 4,
            'optionLabel' => 'static void methoda(double d1);',
                'questionId' => 1,
                'isCorrect' => 0,
            ),
            4 => 
            array (
                'optionId' => 5,
                'optionLabel' => 'int[ ] scores = {3, 5, 7};',
                'questionId' => 2,
                'isCorrect' => 0,
            ),
            5 => 
            array (
                'optionId' => 6,
                'optionLabel' => 'int [ ][ ] scores = {2,7,6}, {9,3,45};',
                'questionId' => 2,
                'isCorrect' => 1,
            ),
            6 => 
            array (
                'optionId' => 7,
                'optionLabel' => 'String cats[ ] = {"Fluffy", "Spot", "Zeus"};',
                'questionId' => 2,
                'isCorrect' => 0,
            ),
            7 => 
            array (
                'optionId' => 8,
                'optionLabel' => 'boolean results[ ] = new boolean [] {true, false, true};',
                'questionId' => 2,
                'isCorrect' => 0,
            ),
            8 => 
            array (
                'optionId' => 9,
                'optionLabel' => 'public',
                'questionId' => 3,
                'isCorrect' => 0,
            ),
            9 => 
            array (
                'optionId' => 10,
                'optionLabel' => 'protected',
                'questionId' => 3,
                'isCorrect' => 1,
            ),
            10 => 
            array (
                'optionId' => 11,
                'optionLabel' => 'private',
                'questionId' => 3,
                'isCorrect' => 0,
            ),
            11 => 
            array (
                'optionId' => 12,
                'optionLabel' => 'transient',
                'questionId' => 3,
                'isCorrect' => 0,
            ),
            12 => 
            array (
                'optionId' => 13,
                'optionLabel' => 'String s1 = null;',
                'questionId' => 4,
                'isCorrect' => 1,
            ),
            13 => 
            array (
                'optionId' => 14,
                'optionLabel' => 'String s2 = \'null\';',
                'questionId' => 4,
                'isCorrect' => 0,
            ),
            14 => 
            array (
                'optionId' => 15,
            'optionLabel' => 'String s3 = (String) \'abc\';',
                'questionId' => 4,
                'isCorrect' => 0,
            ),
            15 => 
            array (
                'optionId' => 16,
            'optionLabel' => 'String s4 = (String) \'\\ufeed\';',
                'questionId' => 4,
                'isCorrect' => 0,
            ),
            16 => 
            array (
                'optionId' => 17,
                'optionLabel' => 'class, if, void, long, Int, continue',
                'questionId' => 5,
                'isCorrect' => 0,
            ),
            17 => 
            array (
                'optionId' => 18,
                'optionLabel' => 'goto, instanceof, native, finally, default, throws',
                'questionId' => 5,
                'isCorrect' => 1,
            ),
            18 => 
            array (
                'optionId' => 19,
                'optionLabel' => 'try, virtual, throw, final, volatile, transient',
                'questionId' => 5,
                'isCorrect' => 0,
            ),
            19 => 
            array (
                'optionId' => 20,
                'optionLabel' => 'strictfp, constant, super, implements, do',
                'questionId' => 5,
                'isCorrect' => 0,
            ),
            20 => 
            array (
                'optionId' => 21,
                'optionLabel' => 'It can extend exactly one class or implement exactly one interface.',
                'questionId' => 6,
                'isCorrect' => 1,
            ),
            21 => 
            array (
                'optionId' => 22,
                'optionLabel' => 'It can extend exactly one class and implement exactly one interface.',
                'questionId' => 6,
                'isCorrect' => 0,
            ),
            22 => 
            array (
                'optionId' => 23,
                'optionLabel' => 'It can implement multiple interfaces regardless of whether it also extends a class.',
                'questionId' => 6,
                'isCorrect' => 0,
            ),
            23 => 
            array (
                'optionId' => 24,
                'optionLabel' => 'It can extend exactly one class and can implement multiple interfaces.',
                'questionId' => 6,
                'isCorrect' => 0,
            ),
            24 => 
            array (
                'optionId' => 25,
                'optionLabel' => '2 and 4',
                'questionId' => 7,
                'isCorrect' => 0,
            ),
            25 => 
            array (
                'optionId' => 26,
                'optionLabel' => '1 and 2',
                'questionId' => 7,
                'isCorrect' => 1,
            ),
            26 => 
            array (
                'optionId' => 27,
                'optionLabel' => '2 and 5',
                'questionId' => 7,
                'isCorrect' => 0,
            ),
            27 => 
            array (
                'optionId' => 28,
                'optionLabel' => '1 and 3',
                'questionId' => 7,
                'isCorrect' => 0,
            ),
            28 => 
            array (
                'optionId' => 29,
            'optionLabel' => 'Calling the SetPriority() method on a Thread object.',
                'questionId' => 8,
                'isCorrect' => 0,
            ),
            29 => 
            array (
                'optionId' => 30,
            'optionLabel' => 'Calling the wait() method on an object.',
                'questionId' => 8,
                'isCorrect' => 0,
            ),
            30 => 
            array (
                'optionId' => 31,
            'optionLabel' => 'Calling notify() method on an object.',
                'questionId' => 8,
                'isCorrect' => 1,
            ),
            31 => 
            array (
                'optionId' => 32,
            'optionLabel' => 'Calling read() method on an InputStream object.',
                'questionId' => 8,
                'isCorrect' => 0,
            ),
            32 => 
            array (
                'optionId' => 33,
                'optionLabel' => 'It must be marked final.',
                'questionId' => 9,
                'isCorrect' => 0,
            ),
            33 => 
            array (
                'optionId' => 34,
                'optionLabel' => 'It can be marked public.',
                'questionId' => 9,
                'isCorrect' => 0,
            ),
            34 => 
            array (
                'optionId' => 35,
                'optionLabel' => 'It can be marked abstract.',
                'questionId' => 9,
                'isCorrect' => 1,
            ),
            35 => 
            array (
                'optionId' => 36,
                'optionLabel' => 'It can be marked static.',
                'questionId' => 9,
                'isCorrect' => 0,
            ),
            36 => 
            array (
                'optionId' => 37,
                'optionLabel' => '2',
                'questionId' => 10,
                'isCorrect' => 0,
            ),
            37 => 
            array (
                'optionId' => 38,
                'optionLabel' => '5',
                'questionId' => 10,
                'isCorrect' => 0,
            ),
            38 => 
            array (
                'optionId' => 39,
                'optionLabel' => '3',
                'questionId' => 10,
                'isCorrect' => 1,
            ),
            39 => 
            array (
                'optionId' => 40,
                'optionLabel' => '4',
                'questionId' => 10,
                'isCorrect' => 0,
            ),
            40 => 
            array (
                'optionId' => 41,
                'optionLabel' => 'final',
                'questionId' => 11,
                'isCorrect' => 0,
            ),
            41 => 
            array (
                'optionId' => 42,
                'optionLabel' => 'volatile',
                'questionId' => 11,
                'isCorrect' => 0,
            ),
            42 => 
            array (
                'optionId' => 43,
                'optionLabel' => 'private',
                'questionId' => 11,
                'isCorrect' => 1,
            ),
            43 => 
            array (
                'optionId' => 44,
                'optionLabel' => 'protected',
                'questionId' => 11,
                'isCorrect' => 0,
            ),
            44 => 
            array (
                'optionId' => 45,
                'optionLabel' => 'int ia[ ] [ ] = { 4, 5, 6 }, { 1,2,3 };',
                'questionId' => 12,
                'isCorrect' => 0,
            ),
            45 => 
            array (
                'optionId' => 46,
                'optionLabel' => 'char[ ] ca = "Some String";',
                'questionId' => 12,
                'isCorrect' => 0,
            ),
            46 => 
            array (
                'optionId' => 47,
                'optionLabel' => 'float fa = new float[20];',
                'questionId' => 12,
                'isCorrect' => 0,
            ),
            47 => 
            array (
                'optionId' => 48,
                'optionLabel' => 'int[ ] ia = new int[15];',
                'questionId' => 12,
                'isCorrect' => 1,
            ),
            48 => 
            array (
                'optionId' => 49,
            'optionLabel' => 'System.out.println(new Runnable() {public void run() { }});',
                'questionId' => 13,
                'isCorrect' => 1,
            ),
            49 => 
            array (
                'optionId' => 50,
            'optionLabel' => 'Runnable r = new Runnable() { };',
                'questionId' => 13,
                'isCorrect' => 0,
            ),
            50 => 
            array (
                'optionId' => 51,
            'optionLabel' => 'Runnable r = new Runnable(public void run() { });',
                'questionId' => 13,
                'isCorrect' => 0,
            ),
            51 => 
            array (
                'optionId' => 52,
            'optionLabel' => 'Runnable r = new Runnable { public void run(){}};',
                'questionId' => 13,
                'isCorrect' => 0,
            ),
            52 => 
            array (
                'optionId' => 53,
                'optionLabel' => 'It does not have access to nonstatic members of the enclosing class.',
                'questionId' => 14,
                'isCorrect' => 1,
            ),
            53 => 
            array (
                'optionId' => 54,
                'optionLabel' => 'It must extend the enclosing class.',
                'questionId' => 14,
                'isCorrect' => 0,
            ),
            54 => 
            array (
                'optionId' => 55,
                'optionLabel' => 'You must have a reference to an instance of the enclosing class in order to instantiate it.',
                'questionId' => 14,
                'isCorrect' => 0,
            ),
            55 => 
            array (
                'optionId' => 56,
                'optionLabel' => 'It\'s variables and methods must be static.',
                'questionId' => 14,
                'isCorrect' => 0,
            ),
            56 => 
            array (
                'optionId' => 57,
                'optionLabel' => 'protected',
                'questionId' => 15,
                'isCorrect' => 0,
            ),
            57 => 
            array (
                'optionId' => 58,
                'optionLabel' => 'public',
                'questionId' => 15,
                'isCorrect' => 0,
            ),
            58 => 
            array (
                'optionId' => 59,
                'optionLabel' => 'private',
                'questionId' => 15,
                'isCorrect' => 0,
            ),
            59 => 
            array (
                'optionId' => 60,
                'optionLabel' => 'default access',
                'questionId' => 15,
                'isCorrect' => 1,
            ),
            60 => 
            array (
                'optionId' => 61,
                'optionLabel' => 'Java.util.HashTable',
                'questionId' => 16,
                'isCorrect' => 0,
            ),
            61 => 
            array (
                'optionId' => 62,
                'optionLabel' => 'Java.util.List',
                'questionId' => 16,
                'isCorrect' => 0,
            ),
            62 => 
            array (
                'optionId' => 63,
                'optionLabel' => 'Java.util.Collection',
                'questionId' => 16,
                'isCorrect' => 0,
            ),
            63 => 
            array (
                'optionId' => 64,
                'optionLabel' => 'Java.util.Map',
                'questionId' => 16,
                'isCorrect' => 1,
            ),
            64 => 
            array (
                'optionId' => 65,
                'optionLabel' => 'Two seconds after thread A is notified.',
                'questionId' => 17,
                'isCorrect' => 0,
            ),
            65 => 
            array (
                'optionId' => 66,
                'optionLabel' => 'After the lock on B is released, or after two seconds',
                'questionId' => 17,
                'isCorrect' => 0,
            ),
            66 => 
            array (
                'optionId' => 67,
                'optionLabel' => 'Two seconds after lock B is released.',
                'questionId' => 17,
                'isCorrect' => 0,
            ),
            67 => 
            array (
                'optionId' => 68,
                'optionLabel' => 'After thread A is notified, or after two seconds.',
                'questionId' => 17,
                'isCorrect' => 1,
            ),
            68 => 
            array (
                'optionId' => 69,
            'optionLabel' => 'notify()',
                'questionId' => 18,
                'isCorrect' => 1,
            ),
            69 => 
            array (
                'optionId' => 70,
                'optionLabel' => 'InputStream access',
                'questionId' => 18,
                'isCorrect' => 0,
            ),
            70 => 
            array (
                'optionId' => 71,
            'optionLabel' => 'wait()',
                'questionId' => 18,
                'isCorrect' => 0,
            ),
            71 => 
            array (
                'optionId' => 72,
            'optionLabel' => 'sleep()',
                'questionId' => 18,
                'isCorrect' => 0,
            ),
            72 => 
            array (
                'optionId' => 73,
                'optionLabel' => '1 and 2',
                'questionId' => 19,
                'isCorrect' => 0,
            ),
            73 => 
            array (
                'optionId' => 74,
                'optionLabel' => '3 and 4',
                'questionId' => 19,
                'isCorrect' => 0,
            ),
            74 => 
            array (
                'optionId' => 75,
                'optionLabel' => '2 and 3',
                'questionId' => 19,
                'isCorrect' => 1,
            ),
            75 => 
            array (
                'optionId' => 76,
                'optionLabel' => '1 and 4',
                'questionId' => 19,
                'isCorrect' => 0,
            ),
            76 => 
            array (
                'optionId' => 77,
            'optionLabel' => 'run();',
                'questionId' => 20,
                'isCorrect' => 1,
            ),
            77 => 
            array (
                'optionId' => 78,
            'optionLabel' => 'main();',
                'questionId' => 20,
                'isCorrect' => 0,
            ),
            78 => 
            array (
                'optionId' => 79,
            'optionLabel' => 'stop();',
                'questionId' => 20,
                'isCorrect' => 0,
            ),
            79 => 
            array (
                'optionId' => 80,
            'optionLabel' => 'start();',
                'questionId' => 20,
                'isCorrect' => 0,
            ),
            80 => 
            array (
                'optionId' => 81,
                'optionLabel' => 'java.util.TreeMap',
                'questionId' => 21,
                'isCorrect' => 0,
            ),
            81 => 
            array (
                'optionId' => 82,
                'optionLabel' => 'java.util.SortedMap',
                'questionId' => 21,
                'isCorrect' => 0,
            ),
            82 => 
            array (
                'optionId' => 83,
                'optionLabel' => 'java.util.TreeSet',
                'questionId' => 21,
                'isCorrect' => 0,
            ),
            83 => 
            array (
                'optionId' => 84,
                'optionLabel' => 'java.util.Hashtable',
                'questionId' => 21,
                'isCorrect' => 1,
            ),
            84 => 
            array (
                'optionId' => 85,
                'optionLabel' => 'LinkedHashMap',
                'questionId' => 22,
                'isCorrect' => 1,
            ),
            85 => 
            array (
                'optionId' => 86,
                'optionLabel' => 'HashMap',
                'questionId' => 22,
                'isCorrect' => 0,
            ),
            86 => 
            array (
                'optionId' => 87,
                'optionLabel' => 'TreeMap',
                'questionId' => 22,
                'isCorrect' => 0,
            ),
            87 => 
            array (
                'optionId' => 88,
                'optionLabel' => 'The answer depends on the implementation of the existing instance.',
                'questionId' => 22,
                'isCorrect' => 0,
            ),
            88 => 
            array (
                'optionId' => 89,
                'optionLabel' => 'java.lang.String',
                'questionId' => 23,
                'isCorrect' => 0,
            ),
            89 => 
            array (
                'optionId' => 90,
                'optionLabel' => 'java.lang.Character',
                'questionId' => 23,
                'isCorrect' => 0,
            ),
            90 => 
            array (
                'optionId' => 91,
                'optionLabel' => 'java.lang.StringBuffer',
                'questionId' => 23,
                'isCorrect' => 1,
            ),
            91 => 
            array (
                'optionId' => 92,
                'optionLabel' => 'java.lang.Double',
                'questionId' => 23,
                'isCorrect' => 0,
            ),
            92 => 
            array (
                'optionId' => 93,
                'optionLabel' => 'java.util.HashSet',
                'questionId' => 24,
                'isCorrect' => 0,
            ),
            93 => 
            array (
                'optionId' => 94,
                'optionLabel' => 'java.util.List',
                'questionId' => 24,
                'isCorrect' => 0,
            ),
            94 => 
            array (
                'optionId' => 95,
                'optionLabel' => 'java.util.LinkedHashSet',
                'questionId' => 24,
                'isCorrect' => 0,
            ),
            95 => 
            array (
                'optionId' => 96,
                'optionLabel' => 'java.util.ArrayList',
                'questionId' => 24,
                'isCorrect' => 1,
            ),
            96 => 
            array (
                'optionId' => 97,
            'optionLabel' => 'construct();',
                'questionId' => 25,
                'isCorrect' => 0,
            ),
            97 => 
            array (
                'optionId' => 98,
            'optionLabel' => 'run();',
                'questionId' => 25,
                'isCorrect' => 0,
            ),
            98 => 
            array (
                'optionId' => 99,
            'optionLabel' => 'register();',
                'questionId' => 25,
                'isCorrect' => 0,
            ),
            99 => 
            array (
                'optionId' => 100,
            'optionLabel' => 'start();',
                'questionId' => 25,
                'isCorrect' => 1,
            ),
            100 => 
            array (
                'optionId' => 101,
                'optionLabel' => 'Java.util.List',
                'questionId' => 26,
                'isCorrect' => 0,
            ),
            101 => 
            array (
                'optionId' => 102,
                'optionLabel' => 'Java.util.Map',
                'questionId' => 26,
                'isCorrect' => 1,
            ),
            102 => 
            array (
                'optionId' => 103,
                'optionLabel' => 'Java.util.Set',
                'questionId' => 26,
                'isCorrect' => 0,
            ),
            103 => 
            array (
                'optionId' => 104,
                'optionLabel' => 'Java.util.Collection',
                'questionId' => 26,
                'isCorrect' => 0,
            ),
            104 => 
            array (
                'optionId' => 105,
                'optionLabel' => 'java.util.List',
                'questionId' => 27,
                'isCorrect' => 0,
            ),
            105 => 
            array (
                'optionId' => 106,
                'optionLabel' => 'java.util.Map',
                'questionId' => 27,
                'isCorrect' => 0,
            ),
            106 => 
            array (
                'optionId' => 107,
                'optionLabel' => 'java.util.Collection',
                'questionId' => 27,
                'isCorrect' => 0,
            ),
            107 => 
            array (
                'optionId' => 108,
                'optionLabel' => 'java.util.Set',
                'questionId' => 27,
                'isCorrect' => 1,
            ),
            108 => 
            array (
                'optionId' => 109,
                'optionLabel' => 'float f = 1F;',
                'questionId' => 28,
                'isCorrect' => 1,
            ),
            109 => 
            array (
                'optionId' => 110,
                'optionLabel' => 'float f = "1";',
                'questionId' => 28,
                'isCorrect' => 0,
            ),
            110 => 
            array (
                'optionId' => 111,
                'optionLabel' => 'float f = 1.0;',
                'questionId' => 28,
                'isCorrect' => 0,
            ),
            111 => 
            array (
                'optionId' => 112,
                'optionLabel' => 'float f = 1.0d;',
                'questionId' => 28,
                'isCorrect' => 0,
            ),
            112 => 
            array (
                'optionId' => 113,
                'optionLabel' => 'java.util.ArrayList',
                'questionId' => 29,
                'isCorrect' => 0,
            ),
            113 => 
            array (
                'optionId' => 114,
                'optionLabel' => 'java.util.HashMap',
                'questionId' => 29,
                'isCorrect' => 0,
            ),
            114 => 
            array (
                'optionId' => 115,
                'optionLabel' => 'java.util.TreeMap',
                'questionId' => 29,
                'isCorrect' => 0,
            ),
            115 => 
            array (
                'optionId' => 116,
                'optionLabel' => 'java.util.LinkedHashMap',
                'questionId' => 29,
                'isCorrect' => 1,
            ),
            116 => 
            array (
                'optionId' => 117,
            'optionLabel' => 'public void run()',
                'questionId' => 30,
                'isCorrect' => 1,
            ),
            117 => 
            array (
                'optionId' => 118,
            'optionLabel' => 'public void start()',
                'questionId' => 30,
                'isCorrect' => 0,
            ),
            118 => 
            array (
                'optionId' => 119,
            'optionLabel' => 'void run()',
                'questionId' => 30,
                'isCorrect' => 0,
            ),
            119 => 
            array (
                'optionId' => 120,
            'optionLabel' => 'void run(int priority)',
                'questionId' => 30,
                'isCorrect' => 0,
            ),
            120 => 
            array (
                'optionId' => 121,
                'optionLabel' => '0 to 32767',
                'questionId' => 31,
                'isCorrect' => 0,
            ),
            121 => 
            array (
                'optionId' => 122,
                'optionLabel' => '0 to 65535',
                'questionId' => 31,
                'isCorrect' => 1,
            ),
            122 => 
            array (
                'optionId' => 123,
                'optionLabel' => '-32768 to 32767',
                'questionId' => 31,
                'isCorrect' => 0,
            ),
            123 => 
            array (
                'optionId' => 124,
                'optionLabel' => '-256 to 255',
                'questionId' => 31,
                'isCorrect' => 0,
            ),
            124 => 
            array (
                'optionId' => 125,
            'optionLabel' => 'notifyall()',
                'questionId' => 32,
                'isCorrect' => 0,
            ),
            125 => 
            array (
                'optionId' => 126,
            'optionLabel' => 'notify()',
                'questionId' => 32,
                'isCorrect' => 0,
            ),
            126 => 
            array (
                'optionId' => 127,
            'optionLabel' => 'wait()',
                'questionId' => 32,
                'isCorrect' => 1,
            ),
            127 => 
            array (
                'optionId' => 128,
                'optionLabel' => 'exits synchronized code',
                'questionId' => 32,
                'isCorrect' => 0,
            ),
            128 => 
            array (
                'optionId' => 129,
                'optionLabel' => '1 and 2',
                'questionId' => 33,
                'isCorrect' => 0,
            ),
            129 => 
            array (
                'optionId' => 130,
                'optionLabel' => '2 and 3',
                'questionId' => 33,
                'isCorrect' => 1,
            ),
            130 => 
            array (
                'optionId' => 131,
                'optionLabel' => '2 and 4',
                'questionId' => 33,
                'isCorrect' => 0,
            ),
            131 => 
            array (
                'optionId' => 132,
                'optionLabel' => '3 and 4',
                'questionId' => 33,
                'isCorrect' => 0,
            ),
            132 => 
            array (
                'optionId' => 133,
                'optionLabel' => 'Runnable',
                'questionId' => 34,
                'isCorrect' => 0,
            ),
            133 => 
            array (
                'optionId' => 134,
                'optionLabel' => 'Object',
                'questionId' => 34,
                'isCorrect' => 1,
            ),
            134 => 
            array (
                'optionId' => 135,
                'optionLabel' => 'Thread',
                'questionId' => 34,
                'isCorrect' => 0,
            ),
            135 => 
            array (
                'optionId' => 136,
                'optionLabel' => 'Class',
                'questionId' => 34,
                'isCorrect' => 0,
            ),
            136 => 
            array (
                'optionId' => 137,
                'optionLabel' => 'Variables can be protected from concurrent access problems by marking them with the synchronized keyword.',
                'questionId' => 35,
                'isCorrect' => 0,
            ),
            137 => 
            array (
                'optionId' => 138,
                'optionLabel' => 'If a class has synchronized code, multiple threads can still access the nonsynchronized code.',
                'questionId' => 35,
                'isCorrect' => 1,
            ),
            138 => 
            array (
                'optionId' => 139,
                'optionLabel' => 'A static method cannot be synchronized.',
                'questionId' => 35,
                'isCorrect' => 0,
            ),
            139 => 
            array (
                'optionId' => 140,
                'optionLabel' => 'When a thread sleeps, it releases its locks.',
                'questionId' => 35,
                'isCorrect' => 0,
            ),
            140 => 
            array (
                'optionId' => 141,
                'optionLabel' => 'Multiple catch statements can catch the same class of exception more than once.',
                'questionId' => 36,
                'isCorrect' => 0,
            ),
            141 => 
            array (
                'optionId' => 142,
                'optionLabel' => 'An Error that might be thrown in a method must be declared as thrown by that method, or be handled within that method.',
                'questionId' => 36,
                'isCorrect' => 0,
            ),
            142 => 
            array (
                'optionId' => 143,
                'optionLabel' => 'A try statement must have at least one corresponding catch block.',
                'questionId' => 36,
                'isCorrect' => 0,
            ),
            143 => 
            array (
                'optionId' => 144,
                'optionLabel' => 'Except in case of VM shutdown, if a try block starts to execute, a corresponding finally block will always start to execute.',
                'questionId' => 36,
                'isCorrect' => 1,
            ),
            144 => 
            array (
                'optionId' => 145,
                'optionLabel' => 'Any statement that can throw an Exception must be enclosed in a try block.',
                'questionId' => 37,
                'isCorrect' => 0,
            ),
            145 => 
            array (
                'optionId' => 146,
                'optionLabel' => 'The Error class is a RuntimeException.',
                'questionId' => 37,
                'isCorrect' => 0,
            ),
            146 => 
            array (
                'optionId' => 147,
            'optionLabel' => 'catch(X x) can catch subclasses of X where X is a subclass of Exception.',
                'questionId' => 37,
                'isCorrect' => 1,
            ),
            147 => 
            array (
                'optionId' => 148,
                'optionLabel' => 'Any statement that can throw an Error must be enclosed in a try block.',
                'questionId' => 37,
                'isCorrect' => 0,
            ),
            148 => 
            array (
                'optionId' => 149,
            'optionLabel' => 'Private getter() and setter() methods should not use assertions to verify arguments.',
                'questionId' => 38,
                'isCorrect' => 0,
            ),
            149 => 
            array (
                'optionId' => 150,
            'optionLabel' => 'It is proper to handle assertion statement failures using a catch (AssertionException ae) block.',
                'questionId' => 38,
                'isCorrect' => 0,
            ),
            150 => 
            array (
                'optionId' => 151,
                'optionLabel' => 'If an AssertionError is thrown in a try-catch block, the finally block will be bypassed.',
                'questionId' => 38,
                'isCorrect' => 0,
            ),
            151 => 
            array (
                'optionId' => 152,
                'optionLabel' => 'It is sometimes good practice to throw an AssertionError explicitly.',
                'questionId' => 38,
                'isCorrect' => 1,
            ),
            152 => 
            array (
                'optionId' => 153,
                'optionLabel' => 'public static short stop = 23;',
                'questionId' => 39,
                'isCorrect' => 1,
            ),
            153 => 
            array (
                'optionId' => 154,
                'optionLabel' => 'protected short stop = 23;',
                'questionId' => 39,
                'isCorrect' => 0,
            ),
            154 => 
            array (
                'optionId' => 155,
                'optionLabel' => 'transient short stop = 23;',
                'questionId' => 39,
                'isCorrect' => 0,
            ),
            155 => 
            array (
                'optionId' => 156,
            'optionLabel' => 'final void madness(short stop);',
                'questionId' => 39,
                'isCorrect' => 0,
            ),
            156 => 
            array (
                'optionId' => 157,
                'optionLabel' => '2, 4',
                'questionId' => 40,
                'isCorrect' => 0,
            ),
            157 => 
            array (
                'optionId' => 158,
                'optionLabel' => '4, 5',
                'questionId' => 40,
                'isCorrect' => 0,
            ),
            158 => 
            array (
                'optionId' => 159,
                'optionLabel' => '1 , 2',
                'questionId' => 40,
                'isCorrect' => 1,
            ),
            159 => 
            array (
                'optionId' => 160,
                'optionLabel' => '3, 5',
                'questionId' => 40,
                'isCorrect' => 0,
            ),
            160 => 
            array (
                'optionId' => 161,
            'optionLabel' => 'int c = Math.abs(5.5F);',
                'questionId' => 41,
                'isCorrect' => 0,
            ),
            161 => 
            array (
                'optionId' => 162,
            'optionLabel' => 'int b = Math.abs(5.0);',
                'questionId' => 41,
                'isCorrect' => 0,
            ),
            162 => 
            array (
                'optionId' => 163,
            'optionLabel' => 'int a = Math.abs(-5);',
                'questionId' => 41,
                'isCorrect' => 1,
            ),
            163 => 
            array (
                'optionId' => 164,
            'optionLabel' => 'int d = Math.abs(5L);',
                'questionId' => 41,
                'isCorrect' => 0,
            ),
            164 => 
            array (
                'optionId' => 165,
                'optionLabel' => 'volatile int d;',
                'questionId' => 42,
                'isCorrect' => 1,
            ),
            165 => 
            array (
                'optionId' => 166,
                'optionLabel' => 'private synchronized int e;',
                'questionId' => 42,
                'isCorrect' => 0,
            ),
            166 => 
            array (
                'optionId' => 167,
                'optionLabel' => 'transient int b = 3;',
                'questionId' => 42,
                'isCorrect' => 0,
            ),
            167 => 
            array (
                'optionId' => 168,
                'optionLabel' => 'protected int a;',
                'questionId' => 42,
                'isCorrect' => 0,
            ),
            168 => 
            array (
                'optionId' => 169,
                'optionLabel' => '1, 2 and 4',
                'questionId' => 43,
                'isCorrect' => 1,
            ),
            169 => 
            array (
                'optionId' => 170,
                'optionLabel' => '2, 3 and 4',
                'questionId' => 43,
                'isCorrect' => 0,
            ),
            170 => 
            array (
                'optionId' => 171,
                'optionLabel' => '3 and 4',
                'questionId' => 43,
                'isCorrect' => 0,
            ),
            171 => 
            array (
                'optionId' => 172,
                'optionLabel' => '1, 2 and 3',
                'questionId' => 43,
                'isCorrect' => 0,
            ),
            172 => 
            array (
                'optionId' => 173,
            'optionLabel' => 'run();',
                'questionId' => 44,
                'isCorrect' => 0,
            ),
            173 => 
            array (
                'optionId' => 174,
            'optionLabel' => 'init();',
                'questionId' => 44,
                'isCorrect' => 0,
            ),
            174 => 
            array (
                'optionId' => 175,
            'optionLabel' => 'start();',
                'questionId' => 44,
                'isCorrect' => 1,
            ),
            175 => 
            array (
                'optionId' => 176,
            'optionLabel' => 'resume();',
                'questionId' => 44,
                'isCorrect' => 0,
            ),
            176 => 
            array (
                'optionId' => 177,
                'optionLabel' => '1, 2, 6',
                'questionId' => 45,
                'isCorrect' => 1,
            ),
            177 => 
            array (
                'optionId' => 178,
                'optionLabel' => '1, 2, 4',
                'questionId' => 45,
                'isCorrect' => 0,
            ),
            178 => 
            array (
                'optionId' => 179,
                'optionLabel' => '2, 4, 5',
                'questionId' => 45,
                'isCorrect' => 0,
            ),
            179 => 
            array (
                'optionId' => 180,
                'optionLabel' => '2, 3, 4',
                'questionId' => 45,
                'isCorrect' => 0,
            ),
            180 => 
            array (
                'optionId' => 181,
                'optionLabel' => '2 and 3',
                'questionId' => 46,
                'isCorrect' => 0,
            ),
            181 => 
            array (
                'optionId' => 182,
                'optionLabel' => '2 and 4',
                'questionId' => 46,
                'isCorrect' => 0,
            ),
            182 => 
            array (
                'optionId' => 183,
                'optionLabel' => '1 and 4',
                'questionId' => 46,
                'isCorrect' => 1,
            ),
            183 => 
            array (
                'optionId' => 184,
                'optionLabel' => '3 and 4',
                'questionId' => 46,
                'isCorrect' => 0,
            ),
            184 => 
            array (
                'optionId' => 185,
                'optionLabel' => '2,6',
                'questionId' => 47,
                'isCorrect' => 0,
            ),
            185 => 
            array (
                'optionId' => 186,
                'optionLabel' => '1,4',
                'questionId' => 47,
                'isCorrect' => 0,
            ),
            186 => 
            array (
                'optionId' => 187,
                'optionLabel' => '3,6',
                'questionId' => 47,
                'isCorrect' => 1,
            ),
            187 => 
            array (
                'optionId' => 188,
                'optionLabel' => '3,4',
                'questionId' => 47,
                'isCorrect' => 0,
            ),
            188 => 
            array (
                'optionId' => 189,
                'optionLabel' => '3, 4 and 7',
                'questionId' => 48,
                'isCorrect' => 0,
            ),
            189 => 
            array (
                'optionId' => 190,
                'optionLabel' => '1, 2 and 4',
                'questionId' => 48,
                'isCorrect' => 0,
            ),
            190 => 
            array (
                'optionId' => 191,
                'optionLabel' => '2, 5 and 6',
                'questionId' => 48,
                'isCorrect' => 1,
            ),
            191 => 
            array (
                'optionId' => 192,
                'optionLabel' => '4, 5 and 7',
                'questionId' => 48,
                'isCorrect' => 0,
            ),
            192 => 
            array (
                'optionId' => 193,
                'optionLabel' => 'interface',
                'questionId' => 49,
                'isCorrect' => 1,
            ),
            193 => 
            array (
                'optionId' => 194,
                'optionLabel' => 'string',
                'questionId' => 49,
                'isCorrect' => 0,
            ),
            194 => 
            array (
                'optionId' => 195,
                'optionLabel' => 'Float',
                'questionId' => 49,
                'isCorrect' => 0,
            ),
            195 => 
            array (
                'optionId' => 196,
                'optionLabel' => 'unsigned',
                'questionId' => 49,
                'isCorrect' => 0,
            ),
            196 => 
            array (
                'optionId' => 197,
                'optionLabel' => '0 to 65555',
                'questionId' => 50,
                'isCorrect' => 0,
            ),
            197 => 
            array (
                'optionId' => 198,
                'optionLabel' => '0 to 32767',
                'questionId' => 50,
                'isCorrect' => 0,
            ),
            198 => 
            array (
                'optionId' => 199,
                'optionLabel' => '-128 to 127',
                'questionId' => 50,
                'isCorrect' => 0,
            ),
            199 => 
            array (
                'optionId' => 200,
                'optionLabel' => '0 to 65535',
                'questionId' => 50,
                'isCorrect' => 1,
            ),
        ));
        
        
    }
}
