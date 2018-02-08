## CodeIgniter Session tester

This controller and view provide a quick and accurate test for determining if the CodeIgniter `session` 
class is working in your CI project.


## Requirements
* PHP version 5.6 or newer is recommended.
* CodeIgniter (CI) version > 3.0.0 and < 4.x.x. Using the latest 3.x.x version is strongly recommended. 

The current CI release [is found here](https://codeigniter.com/).


## Installation
Put the file `Test_sessions.php` in your "controllers" folder.
Put the file `test_sessions_view.php` in your "views" folders.


## Use
After putting the files in place, direct your browser to *http://{yoursite.com}/test_sessions*

The view is very simple. It shows: 
* Text with the date and time the view was loaded
* A message describing the "status" of the user, either "You are logged in" or "You are logged out"
* A submit button. The text of the button reflects how the "status" of the user will change.

If `session` is properly configured then each click of the button will toggle the "status" of the user.
Both the message text and the button label should change on each button press.

Additionally, if sessions are working a reload of the page or navigating away from and then returning 
to the page should not change the "status".

## Troubleshooting sessions
The most common reason for `session` not working is because of configuration errors.
Take great care in following the documentation for the 
[Session Driver](https://www.codeigniter.com/user_guide/libraries/sessions.html#session-drivers)
you are using. The "Session Variables" and the "Cookie Related Variables" in config.php must be
set appropriately for your driver choice.

In particular these two items seem to be the problem for many setups.

1. If using the 'files' driver the path set as the value to $config['sess_save_path'] must be a complete (absolute) path. 
Make sure the path you provide exists and has appropriate permissions.
1. If using the 'database' driver the table is not defined correctly. Double check that your table schema 
matches the one described in the documentation.

Another other reason that "My sessions don't work!" might be the logic of your code. By using this test "as-is"
you eliminate that possibility. If it works here but not in "your code" then suspect your code.
