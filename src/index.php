<!DOCTYPE html>
<html>

<head>
    <title>Welcome to EKGViewer</title>
    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./templates/css/page-template.css" rel="stylesheet" />
    <link href="./css/index.css" rel="stylesheet" />
</head>

<body>
    <?php include "./templates/page-header.php" ?>
    <section id="content-wrapper">
        <article id="welcome-wrapper">
            <header>
                <h1>Welcome to EKGViewer</h1>
            </header>
            <p>
                EKGViewer is an online platform for learning about EKG. Check out the categories below to learn more about EKG.
            </p>
        </article>
        <section id="page-info-container">
            <article>
                <header>
                    <h2>History</h2>
                </header>
                <p>
                    This history of EKG's easily dates back to the Late 1700's, but many significant discoveries helped make it the device it is today.
                    <br /><br />
                    Learn more <a href="./history.php">here.</a>
                </p>
            </article>
            <article>
                <header>
                    <h2>Definitions</h2>
                </header>
                <p>
                    Understanding EKG's may come tricky without knowing the terms involed. Learning the talk of the trade is worth the while.
                    <br /><br />
                    Learn more <a href="./definitions.php">here.</a>
                </p>
            </article>
            <article>
                <header>
                    <h2>How To Place EKG Leads</h2>
                </header>
                <p>
                    Learn the proper steps and procedure for administering an EKG. Includes information on
                    preparing the patient, placing the leads, and cleaning up after the procedure. 
                    <br/><br/>
                    This guide sues the popular Angle of Louie method in applying EKG electrodes.
                    <br /><br />
                    Learn more <a href="./how-to-place.php">here.</a>
                </p>
            </article>
            <article>
                <header>
                    <h2>How To Interpret EKG Signals</h2>
                </header>
                <p>
                    Knowing how to read EKG signals is an important skill. Learn about six different kinds of signals and the key characteristics of them.
                    <br /><br />
                    Learn more <a href="./how-to-interpret.php">here.</a>
                </p>
            </article>
            <article>
                <header>
                    <h2>Quiz</h2>
                </header>
                <p>
                    Try our quiz to see how much you have learned about EKG.
                    <br /><br />
                    Test your knowledge <a href="./quiz.php">here.</a>
                </p>
            </article>
        </section>
    </section>
    <?php include "./templates/page-footer.php" ?>
</body>

</html>
