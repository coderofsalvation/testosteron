<p align="center"><img src="https://www.dropbox.com/s/fu1cdwd3it31qvq/yoda-deploy.jpg?dl=1"/></p>

testosteron
===========

simple unit/box/regression-testing-tool using bash, directories and files in whatever programming language you want (simplified alternative to PHPUnit)

Why
===
PHPUnit is great but has its bloatedness. In case you are looking for a tool which you can use as a swiss armyknife: testosteron is here.
Most of the time developers know multiple programming language, so testosteron allows testing in *any* programming language.
Testscripts are very easy, they just pass or fail using exitcode 0 or more.

How
===
Just drop this repository in your webapplication rootdir, and you are ready to go write some testscripts.
After that, just run:

    ./test all white
    ./test all gray

Gray are [graybox test](http://en.wikipedia.org/wiki/Gray_box_testing), white are more detailed [whitebox tests](http://en.wikipedia.org/wiki/White-box_testing)
Optionally, make sure you have some cli-entrypoints in your webapplication, so you can easily access website variables within bash.

Advanced Usage
==============
Testosteron was made with autodeployment in mind, therefore it works great with GIT & [Deployogi](https://github.com/coderofsalvation/deployogi).
If one pushes a new website to the server, deployogi runs all the tests, if the test fail, deployment will halt.
