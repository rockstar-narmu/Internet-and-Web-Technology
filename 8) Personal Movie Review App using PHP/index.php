<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Form</title>
</head>
<body>
    <h2>Form with CRUD Operations</h2>
    <form action="crud.php" method="POST">
        <input type="hidden" name="id" id="id">

        <label>Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label>Hobbies:</label>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br><br>

        <label>Country:</label>
        <select name="country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
        </select><br><br>

        <button type="submit" name="add">Add</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>
