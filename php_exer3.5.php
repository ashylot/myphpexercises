<?php

if (isset($_POST['display'])) {
 
    $section = $_POST['section'];
 
    $books = array(
        "Java Books" => array(
            "Introduction to Java",
            "Visually Java",
            "Java and Data Structures",
            "O'Reilly Presents Java",
            "Java for Dummies"
        ),
        "C++ Books" => array(
            "C++ by Dissection",
            "Learn C++ in 24 hrs.",
            "C++ in a Nutshell",
            "C++ Bible",
            "How to Program C++"
        ),
        "Visual Basic Books" => array(
            "Introduction to Visual Basic",
            "How to Program Visual Basic",
            "Visual Basic for Dummies",
            "Visual Basic Bible",
            "Visual Basic Direct"
        ),
        "Fiction" => array(
            "Golden Compass",
            "Twilight",
            "Harry Potter: Order of Phoenix",
            "Lord of the Rings: Return of the King",
            "Dark Towers"
        ),
        "Periodicals" => array(
            "Inquirer",
            "Manila Bulletin",
            "Sun Star",
            "Daily Star",
            "Daily Visayan Star"
        )
    );
 
    if (isset($books[$section])) {
        foreach ($books[$section] as $book) {
            echo "- " . $book . "<br>";
        }
    } else {
        echo "Please select a section.";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise 3.5</title>
</head>
<body>
 
<h1>PHP Exercise 3.5</h1>
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Book Section:
    <select name="section">
        <option value="">Select Section</option>
        <option value="Java Books">Java Books</option>
        <option value="C++ Books">C++ Books</option>
        <option value="Visual Basic Books">Visual Basic Books</option>
        <option value="Fiction">Fiction</option>
        <option value="Periodicals">Periodicals</option>
    </select>
    <input type="submit" name="display" value="Display">
</form>
</body>
</html>
