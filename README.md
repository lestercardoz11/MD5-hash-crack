# MD5 Reverse Hash Application

This basic project was done with regards to a course on Coursera, by University of Michigan.

This is a basic PHP project that uses a very simple brute force attack to "reverse" an MD5 hash.  It is really not reversing the hash at all as that would be impossible.  Instead it knows that the original pre hash text was a lower case character string with exactly two characters.

So the application uses two nested loops and tests all 26*26 combinations of two lower case letters, and computes the hashes of those values and checks to see if the computed hash matches.

You must run these files in your PHP server. Make a folder under your htdocs folder and then place your files in that folder. The htdocs folder is in different locations depending on your web server:

Windows XAMPP: c:\xampp\htdocs
