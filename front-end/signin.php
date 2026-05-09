<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arc - login</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<div  class="bg-black w-full h-full" style="background-image: url('arc2.gif'); color: white;">
           <marquee class="text-white text-bold bg-red-300" behavior="scroll" direction="left">Welcome to Arc  - Your AI Chatbot Companion Develop with love for RiiT</marquee>

    <fieldset>
    <div class="flex flex-col items-center justify-center h-screen">
    <form action="login.php" method="post" class="flex flex-col gap-5 p-5 border border-gray-300 rounded-md">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="border border-gray-300 rounded-md p-2" placeholder="Enter your email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="border border-gray-300 rounded-md p-2" placeholder="Enter your password">
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2">Login</button>
        <p class="text-center">Don't have an account? <a href="signup.php">Sign up</a></p>
            <p class="text-center">Forgot your password? <a href="forgot_password.php">Reset password</a></p>
    </form>
</div>  

    </fieldset>
</div>    

</body>
</html>