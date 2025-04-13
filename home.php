<?php
session_start();
$registered = isset($_SESSION['registered']) && $_SESSION['registered'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title >EVENTS PORTAL</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-[#0f2027] via-[#203a43] to-[#2c5364] text-white min-h-screen">
  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 z-50 bg-[#1e293b]/80 backdrop-blur border-b border-white/10 shadow-md">
    <div class="max-w-7xl mx-auto px-6">
      <nav class="flex justify-between items-center h-16">
        <a href="/" class="flex items-center gap-2">
          <img src="/gdgico.svg" alt="GDG Logo" class="w-10 h-10" />
          <span class="text-xl font-semibold text-white"> EVENTS PORTAL</span>
        </a>
        <div class="hidden md:flex gap-6 items-center text-sm">
          <a href="/" class="hover:text-blue-400 transition">Home</a>
          <a href="/events" class="hover:text-blue-400 transition">Events</a>
          <a href="/blog" class="hover:text-blue-400 transition">Blogs</a>
          <a href="/team" class="hover:text-blue-400 transition">Team</a>
          <a href="/domains" class="hover:text-blue-400 transition">Domains</a>
          <?php if (!$registered): ?>
       
    
          <a href="/sign-in" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-[#0f2027] transition">Sign In</a>
          <a href=" login.html"   class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-700 transition">Sign Up</a>
          <?php endif; ?> </div>
      </nav>
    </div>
  </header>
<br><br><br><br><br><br><br><br>
  <marquee style="font-size:40;" bgcolor="grey" heigh"1000" width=" full" class="text-xl font-semibold text-white"> UPCOMING EVENTSS!!</marquee>
  <div class="max-w-7xl mx-auto px-6 py-16">
    <h1 class="text-4xl font-bold text-center mb-8">RBU Events Portal</h1>
    <p class="text-lg text-center mb-8">Discover and participate in exciting events!</p>
    <marquee behavior="scroll" direction="left" scrollamount="10" class="full">
  <div class="flex gap-8 px-4">
    
    <!-- Event Card 1 -->
    <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden">
      <img src="/event1.jpg" alt="Event 1" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h2 class="text-xl font-semibold mb-2">Event Title 1</h2>
        <p class="text-gray-700 mb-4"> WELL WELLL WELLLLL.</p>
        <a href="login.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Register Now</a>
      </div>
    </div>

    <!-- Event Card 2 -->
    <div class="w-80 bg-white rounded-lg shadow-lg overflow-hidden">
      <img src="/event2.jpg" alt="Event 2" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h2 class="text-xl font-semibold mb-2">Event Title 2</h2>
        <p class="text-gray-700 mb-4"> EVENTTTT 2222 LESS GGOOOO.</p>
        <a href="login.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Register Now</a>
      </div>
    </div>

    <!-- Add more cards here if needed -->
    
  </div>
</marquee>
<br><br><br><br><br><br><br><br>
<marquee style="font-size:40;" bgcolor="grey" heigh"1000" width=" full" class="text-xl font-semibold text-white"> UPCOMING EVENTSS!!</marquee>

      










