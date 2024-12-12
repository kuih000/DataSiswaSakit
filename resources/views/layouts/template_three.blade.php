<!doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Sistem Pendataan Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
 
    body{
      font-family: Inter;
    }
  </style>
 
</head>
 
<body>
  <body>
    <div id="loading-screen" style="--fade-time:2.5s;">
      <div class="dot-container">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<style>
#loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
  backdrop-filter: blur(10px); /* Background blur effect */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  opacity: 1; /* Fully visible */
  animation: fade-out var(--fade-time) ease forwards;
}


/* Keyframes for Fading Out */
@keyframes fade-out {
  0% {
      opacity: 1;
      visibility: visible;
  }
  100% {
      opacity: 0;
      visibility: hidden;
  }
}

/* Dots Animation */
.dot-container {
  display: flex;
  gap: 10px;
}

.dot {
  width: 10px;
  height: 10px;
  background-color: #333;
  border-radius: 50%;
  opacity: 0;
  animation: dot-animation 3.5s infinite;
}

.dot:nth-child(1) {
  animation-delay: 0s;
}

.dot:nth-child(2) {
  animation-delay: 0.2s;
}

.dot:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes dot-animation {
  0%, 80%, 100% {
      opacity: 0;
  }
  40% {
      opacity: 1;
  }
}

/* Progress Bar Container */


/* Keyframe for Progress Animation */


</style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const loadingScreen = document.getElementById('loading-screen');

      // Show the loading screen on link clicks
      document.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', function (event) {
              const target = this.getAttribute('target');
              const href = this.getAttribute('href');

              // Show loading only for internal navigation (not external links or new tabs)
              if (href && !href.startsWith('http') && target !== '_blank') {
                  loadingScreen.style.display = 'flex';
                  loadingScreen.classList.remove('hidden');

                  // Give time for navigation before hiding the screen
                  setTimeout(() => {
                      loadingScreen.style.display = 'none';
                  }, 5000);
              }
          });
      });

      // Optionally hide the loading screen after the page loads
      window.addEventListener('load', function () {
        setTimeout(() => {
          loadingScreen.classList.add('hidden'); // Apply the hidden class
      }, 500); // Optional delay for better effect
      });
  });
</script>
</html>
