<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="bg-black w-full min-h-screen bg-cover bg-center flex flex-col justify-between" style="background-image: url('arc2.gif'); color: white;">
        <div class="profile bg-white/5 backdrop-blur-sm rounded-lg p-4">
<div class="flex items-center gap-4">
    

</div>
        </div>
        <!-- Header Section -->
        <div class="flex flex-col items-center text-center px-4 pt-12 md:pt-20">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 drop-shadow-lg">Arc - Your AI Chatbot Companion</h1>
            <p class="text-sm md:text-xl mb-2 drop-shadow-md">Developed with love for RiiT</p>
            <p class="text-xs md:text-base max-w-2xl drop-shadow">Arc is an AI chatbot developed for educational purposes to help students with their academic needs.</p>
        </div>

        <!-- Center Animation Section -->
        <div class="flex-grow flex items-center justify-center w-full px-4 overflow-hidden">
            <div class="flex items-center justify-center gap-6 md:gap-12 lg:gap-20">
                <!-- RiiT Logo -->
                <h2 id="riit_logo" class="text-5xl md:text-7xl lg:text-8xl font-bold drop-shadow-xl">RiiT</h2>
                
                <!-- Cross Icon -->
                <p id="cross_icon" class="text-6xl md:text-8xl lg:text-9xl leading-none font-light drop-shadow-xl "> + </p>
                
                <!-- Arc Logo -->
                <img id="arc_logo" src="https://i.ibb.co/C5SmNfmC/Add-a-subheading-removebg-preview.png" alt="Arc Logo" class="w-32 md:w-48 lg:w-64 h-auto drop-shadow-xl ">
            </div>
        </div>

        <!-- Bottom Input Section -->
        <div class="w-full pb-10 px-4 flex justify-center">
            <div class="relative w-full max-w-3xl md:max-w-4xl">
                <input type="text" id="chat_input" placeholder="Ask a question..." 
                    class="w-full bg-black/40 backdrop-blur-sm border border-white/50 rounded-xl px-6 py-4 md:py-5 text-lg md:text-xl outline-none focus:bg-white/10 transition-all text-white placeholder-gray-300 shadow-lg">
                <i class="fa fa-paper-plane absolute right-6 top-1/2 transform -translate-y-1/2 text-2xl md:text-3xl cursor-pointer hover:text-gray-400 transition-colors drop-shadow-md" aria-hidden="true"></i>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        gsap.from("#arc_logo", { 
            duration: 1, 
            x: -100, 
            delay: 1,
            ease: "power2.out" ,
            opacity: 0,
            stagger: 0.2,
            
        });

        gsap.from("#riit_logo", { 
            duration: 1, 
            x: 100, 
            delay: 1,
            ease: "power2.out" ,
            opacity: 0,
            stagger: 0.2,
            
        });

        gsap.to("#cross_icon", {
            rotation: 45,
            duration: 0.8,
            delay: 2,
            ease: "back.out(1.7)"
        });
        
    </script>
</body>
</html>