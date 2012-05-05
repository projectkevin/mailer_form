======== INTRODUCTION

This is a simple form & php script that performs a GET request to utilise the mail() function in PHP.

The reason behind this stems from a request in my workplace to have an easy-to-see place for technicians in the company to send emails to customers. They, not being that web savvy, needed a nice, clean interface to send emails out to clients & customers in a way that they could see the finished product. As such I have a form laid out like the text in the email. It should be easy to see the flow there, and change as required.

The PHP script is very simple. It creates a simple header to denote a HTML email (which is denoted in both the header as well as the body of the email... this is important) and fills in the blanks where the form was filled out. The mail.php page also echo's what the email will have, just for the sake of showing the user what they've done (sometimes required for printing/papertrail).


======== INSTALLATION

All you need is a server capable of running PHP with the mail() function enabled. Most web hosts have this. For self-testing you can use XAMPP or similar.

Once your server is good-to-go, just copy the files to your destination folder and point a web browser to them. The only reason to edit the code is to add/remove parts of the form.


======== EDITING THE FORM

When editing the HTML text in mail_form.html do as you wish, but make sure when you're putting a form element in you use the code <input type="text" value="Whatever appears on-screen" name="variable_for_php" /> and inside the mail.php code you use _GET["variable_for_php"]...

Maybe I'll write something a little nicer in future to add/remove form elements via jQuery.
