<p align="center"><img src="https://www.dropbox.com/s/fu1cdwd3it31qvq/yoda-deploy.jpg?dl=1"/></p>

testosteron
===========

deadsimple unit/box/regression-testing-tool using bash, directories and files in *any* programminglanguage.

Why
===
PHPUnit or whatever-cool-programminglanguage-Unit is great but has its bloatedness. In case you are looking for a tool which you can use as a swiss armyknife: testosteron is here.
Most of the time developers know multiple programming language, so testosteron allows testing in *any* programming language.
Testscripts are very easy, they just pass or fail using exitcode 0 or more.

How
===
Just drop this repository in your webapplication rootdir, and you are ready to go write some testscripts.
After that, just run:

    ./test run tests/white/10001-test.js 

Or for a whole dir with tests:

    ./test rundir tests/white 

Or a certain preset:

    ./test rundir presets/offline

Or if you want your tests to fail after a certain executiontime:

    PREFIX="timeout 1.3s" ./testosteron rundir presets/stress

Output example
==============

NOTE: The following output does not show the amazing colorsupport :)

    $ ./testosteron /foo/bar/tests/white

    ==>  10000-test.php
    
    cpu  i/o  memory  time
    ____ ___  _______ ____________
    0.86 0.77 5308688 04:474544228 Hello world!
    0.86 0.77 5308672 04:479756314 Hello world!
    0.86 0.77 5308680 04:486200481 Hello world!
    0.86 0.77 5308376 04:492387336 Hello world!
    0.86 0.77 5308648 04:499167841 Hello world!
    
    ==>  10001-test.js
    
    cpu  i/o  memory  time
    ____ ___  _______ ____________
    0.86 0.77 5308680 04:568243333 hello world!
    
    ==>  10002-test.pl
    
    cpu  i/o  memory  time
    ____ ___  _______ ____________
    0.86 0.77 5308532 04:578503135 Hello World.
    
    ==>  10003-test.py
    
    cpu  i/o  memory  time
    ____ ___  _______ ____________
    0.86 0.77 5308796 04:617758460 Hello World!
    
    ==>  10004-test.rb
    
    cpu  i/o  memory  time
    ____ ___  _______ ____________
    0.86 0.77 5308508 04:627352045 ERROR: :(
    
    testosteron>  tests executed: 57
    testosteron>  tests succes  : 56
    testosteron>  tests fail    : 1
    testosteron>    -> 10004-test.rb

What are these colornames?
==========================
Gray are [graybox test](http://en.wikipedia.org/wiki/Gray_box_testing), white are more detailed [whitebox tests](http://en.wikipedia.org/wiki/White-box_testing)
Optionally, make sure you have some cli-entrypoints in your webapplication, so you can easily access website variables within bash.

Advanced Usage
==============
Testosteron was made with autodeployment in mind, therefore it works great with GIT & [Deployogi](https://github.com/coderofsalvation/deployogi).
If one pushes a new website to the server, deployogi runs all the tests, if the test fail, deployment will halt.
