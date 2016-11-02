PHP Admission test
==================

This test consist in implementing a simple programming exercise (FizzBuzz) in an
environment that mimics our daily workflow.
You'll have to find your way to start and run a development environment,
receive the assigned tickets, and solve them.
The test should be done within the time limit of 1 hour. Internet search and
questions to your potential co-workers is allowed.

FizzBuzz
---------
Write a program that prints the numbers from 1 to 100. But for multiples
of three print "Fizz" instead of the number and for the multiples of five
print "Buzz". For numbers which are multiples of both three and five print
"FizzBuzz".

Installation instructions
-------------------------

- Clone this git repository to your PC.
- This PC should have vagrant installed, run `vagrant up` inside the checkout
folder to start the VM.
- Open a web browser and go to the URL : http://php-admission-test.dev/ you
should see a Drupal welcome page.
- This PC should have a programmer's text editor available, if you prefer, you
can download and install your favorite, as long as it's free
(Atom, VS Code, etc...).
- After the VM is up, ask the interviewer for the tickets you have to solve.

Tips
----
Administrator login in drupal is : devops / omibee.
If you make changes in the module or template files, clear the drupal cache by
running `drush cr` on the folder /vagrant/www.
