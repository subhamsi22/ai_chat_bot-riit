<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1>Signup</h1>
    <form action="singupdb.php" method="post" class="flex flex-col gap-5 p-5 border border-gray-300 rounded-md">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="border border-gray-300 rounded-md p-2" placeholder="Enter your name">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="border border-gray-300 rounded-md p-2" placeholder="Enter your email">
        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone" class="border border-gray-300 rounded-md p-2" placeholder="Enter your phone">
        <label for="specialization">Specialization</label>
        <input type="text" id="specialization" name="specialization" class="border border-gray-300 rounded-md p-2" placeholder="Enter your specialization">
        <label for="year">year</label>
        <select name="year" id="year" class="border border-gray-300 rounded-md p-2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        
        
        <label for="">gender</label>
        <div class="flex gap-5 items-center">
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
        </div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="border border-gray-300 rounded-md p-2" placeholder="Enter your password">
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2">Signup</button>
    </form>
</body>
</html>