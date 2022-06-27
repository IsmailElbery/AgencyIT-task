# AgencyIT-Task
***
- Admin and Employee are the same user entity distinguished by role (is_admin:
 false/true)
- Admin user can
 - create a performance review for an employee
 - assign multiple employees As reviewers To write review about them
- A reviewer can submit only one review feedback for each review
- ## Technologies
***
A list of technologies used within the project:
* [Laravel]: Version  
* [PHP]: Version 7.4.19
* [MYSQL]
* 
* ## Installation
***
to install this task. 
```
$ git clone https://github.com/IsmailElbery/AgencyIT-task.git
$ cd ../path/to/the/file
$ composer install
$ create your .env file
$ customize your .env file to a MYSQL database
*
* ## About Task
***
$ User authentication 
* Register
* Login
* Logout
$ Admin and Employee are the same user entity distinguished by role (is_admin:
 false/true)
$ Admin user can
* create a performance review for an employee
* assign multiple employees As reviewers To write review about them
* create/view/update/ delete users.
* create/view/update performance review to employee with the ability to assign
$ reviewer user can do this actions
* A reviewer can submit only one review feedback for each review
* Once submitted, the feedback cannot be edited or resubmitted
* Displays a list of reviews and it’s feedback to the authenticated user.
* Once submitted, the reviewer cannot resubmit the feedback for the same request.
