<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Anmay Foundation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">

  <!-- Navbar -->
  <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        
        <!-- Left Section -->
        <div class="flex items-center">
          <!-- Sidebar Toggle -->
          <button id="sidebarToggle" class="p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
            <span class="material-icons">menu</span>
          </button>
          <a href="#" class="ml-4 text-xl font-bold text-gray-800 dark:text-gray-200">Admin Panel</a>
        </div>

        <!-- Right Section -->
        <div class="flex items-center">
            <!-- Profile Dropdown -->
          <div class="relative ml-3">
            <button id="profileMenuBtn" class="flex items-center text-sm rounded-full focus:outline-none">
              <img class="h-8 w-8 rounded-full" src="https://i.pravatar.cc/40" alt="User">
              <span class="ml-2 text-gray-600 dark:text-gray-300">John Doe</span>
              <span class="material-icons ml-1 text-gray-500">expand_more</span>
            </button>
            <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-2">
              <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
              <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
              <hr class="border-gray-200 dark:border-gray-700">
              <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700">Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
<!-- Sidebar -->
<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-white dark:bg-gray-800 shadow-lg transition-transform duration-300 z-20">
  <div class="flex items-center justify-between px-4 h-16 border-b border-gray-200 dark:border-gray-700">
    <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Menu</h1>
    <button id="closeSidebar" class="p-1 text-gray-600 dark:text-gray-300">
      <span class="material-icons">close</span>
    </button>
  </div>
  <nav class="mt-4 space-y-2">
    <a href="#" class="menu-link flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-indigo-500 hover:text-white rounded-md active">
      <span class="material-icons mr-3">dashboard</span> Dashboard
    </a>
   <a href="" class="menu-link flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-indigo-500 hover:text-white rounded-md">
  <span class="material-icons mr-3">chat</span>
  Whatsapp Contacts
</a>
  </nav>
</aside>
<style>
  .menu-link.active {
    background-color: #6366f1; /* indigo-500 */
    color: white !important;
  }
</style>



  <!-- Main Content -->

  @yield('content')
  <!-- Scripts -->
   <script>
  // Sidebar toggle
  const sidebar = document.getElementById('sidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  const closeSidebar = document.getElementById('closeSidebar');
  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
  });
  closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
  });

  // Profile dropdown
  const profileMenuBtn = document.getElementById('profileMenuBtn');
  const profileMenu = document.getElementById('profileMenu');
  profileMenuBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
  });
  window.addEventListener('click', (e) => {
    if (!profileMenuBtn.contains(e.target) && !profileMenu.contains(e.target)) {
      profileMenu.classList.add('hidden');
    }
  });

  // Active sidebar menu
  const menuLinks = document.querySelectorAll('.menu-link');
  menuLinks.forEach(link => {
    link.addEventListener('click', function () {
      menuLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>

  <script>
    // Sidebar toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const closeSidebar = document.getElementById('closeSidebar');
    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
    closeSidebar.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
    });

    // Profile dropdown
    const profileMenuBtn = document.getElementById('profileMenuBtn');
    const profileMenu = document.getElementById('profileMenu');
    profileMenuBtn.addEventListener('click', () => {
      profileMenu.classList.toggle('hidden');
    });
    window.addEventListener('click', (e) => {
      if (!profileMenuBtn.contains(e.target) && !profileMenu.contains(e.target)) {
        profileMenu.classList.add('hidden');
      }
    });
  </script>

</body>
</html>
