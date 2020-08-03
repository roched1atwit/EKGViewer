
# EKGViewer

An online platform for learning about EKG.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

#### Suggested Setup:

##### 1. Install XAMPP
- Download the XAMPP installer [here](https://www.apachefriends.org/download.html)
- Run the installer and follow all steps.
    - **Note**: Make sure that the MySQL component is selected on the components page of the installer. Also, make note of the folder where XAMPP is installed.

### Installing

#### 1. Clone the Repo
- Clone this repo to the htdocs folder in the XAMPP installation folder.
    - On Windows, the default path to the htdocs folder is ```C:\xampp\htdocs```
 
#### 2. Setup the Database
- Open the XAMPP Control Panel and start both the Apache and MySQL services.

- In your browser, navigate to ```http://localhost/phpmyadmin/```. 

- First, select the "User accounts" tab at the top of the page. Click the "Add user account" link near the middle of the page.

- Create a user with the username "EKGViewer" and password "wit123", and select all data privileges for this user. Click the "go" button in the bottom right corner of the page to create this user.
    
- Next, click the New button on the left side of the page to create a new database. Name this database ```ekg_viewer``` and then click "create".

- Select the "SQL" tab on the top of the page. 
    
- In the text box, paste the SQL commands from the file ```setup-db.sql``` (find this file in the root of this repo). Click the "go" button in the bottom right of the page to execute these queries.

- On the top of the page, select the "Structure" tab, and verify that there are three tables: quiz_answer, quiz_category, and quiz_question.

#### 3. Verify installation
- Finally, navigate to ```http://localhost/EKGViewer/src/quiz.php``` in your browser. 
  
- If there are questions and answers appearing on the page, then everything is setup correctly. Refresh the page to generate new questions. 
  
- If there are any errors return to steps 1 and 2 and verify that the repo was cloned to the correct directory and the database was setup correctly. If there are still issues after that, verify your XAMPP installation.

## Authors

* **Anthony Morganelli** - Definitions and History Pages - GITHUB HERE
* **Dan Roche** - How to Place and Quiz Results Pages - GITHUB HERE
* **Hunter Wintle** - Home, How to Interpret, and Quiz Pages - [wintleh](https://github.com/wintleh)

See also the list of [contributors](https://github.com/wintleh/EKGViewer/contributors) who participated in this project.

---
Created for Web Development (COMP-4650) at Wentworth Institue of Technology - Summer 2020

=======

# EKGViewer

An online platform for learning about EKG.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Give examples
```

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Authors

* **Anthony Morganelli** - Definitions and History Pages - GITHUB HERE
* **Dan Roche** - How to Place and Test Results Pages - [roched1atwit](https://github.com/roched1atwit)
* **Hunter Wintle** - Home, How to Interpret, and Test Pages - [wintleh](https://github.com/wintleh)

See also the list of [contributors](https://github.com/wintleh/EKGViewer/contributors) who participated in this project.

---
Created for Web Development (COMP-4650) at Wentworth Institue of Technology - Summer 2020
