<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birros Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-gray-900 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">Birros</a>
            <div class="space-x-6">
                <a href="#about" class="text-white">About</a>
                <a href="#projects" class="text-white">Projects</a>
                <a href="#skills" class="text-white">Skills</a>
                <a href="#contact" class="text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen text-white" style="background-image: url('https://source.unsplash.com/1600x900/?nature');">
        <div class="container mx-auto flex flex-col items-center justify-center h-full">
            <h1 class="text-5xl font-bold mb-4">Hello, I'm Birros</h1>
            <p class="text-xl mb-8">A Passionate Developer from Banjarnegara</p>
            <a href="#about" class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-700">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">About Me</h2>
            <p class="text-lg text-gray-700">I am Birros Abigail Azzidane, a web developer who loves creating interactive web applications. My journey started in Banjarnegara, and I've been coding since I was 16.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-10">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="https://source.unsplash.com/400x300/?website" alt="Project 1" class="mb-4 rounded">
                    <h3 class="text-2xl font-bold mb-2">Project One</h3>
                    <p class="text-gray-600">A web application that I built using React and Tailwind CSS.</p>
                </div>
                <!-- Project 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="https://source.unsplash.com/400x300/?coding" alt="Project 2" class="mb-4 rounded">
                    <h3 class="text-2xl font-bold mb-2">Project Two</h3>
                    <p class="text-gray-600">A mobile app that I developed with Flutter and Firebase integration.</p>
                </div>
                <!-- Project 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="https://source.unsplash.com/400x300/?app" alt="Project 3" class="mb-4 rounded">
                    <h3 class="text-2xl font-bold mb-2">Project Three</h3>
                    <p class="text-gray-600">An E-commerce platform built with Node.js and MongoDB.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-10">Skills</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">HTML</span>
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">CSS</span>
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">JavaScript</span>
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">React</span>
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">Node.js</span>
                <span class="bg-blue-500 text-white px-4 py-2 rounded-full">Tailwind CSS</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Contact Me</h2>
            <p class="text-lg text-gray-700 mb-8">Let's connect! Feel free to reach out via email or phone.</p>
            <p class="text-lg text-gray-700"><strong>Email:</strong> birros.a.a.zefiryuz@gmail.com</p>
            <p class="text-lg text-gray-700"><strong>Phone:</strong> 089527309388</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Birros. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
