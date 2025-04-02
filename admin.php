<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Admin Panel - Manage Photos</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --primary: #4f46e5;
      --primary-light: #6366f1;
      --dark: #1f2937;
      --light: #f9fafb;
    }
    body {
      font-family: 'Inter', sans-serif;
    }
    .sidebar-item {
      position: relative;
      overflow: hidden;
    }
    .sidebar-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 4px;
      background: var(--primary);
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }
    .sidebar-item:hover::before {
      transform: translateX(0);
    }
    .active-section {
      display: block;
      animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-lg flex flex-col">
      <div class="p-6 flex flex-col items-center border-b border-gray-200">
        <img alt="Admin profile picture" class="w-20 h-20 rounded-full object-cover border-4 border-indigo-100" 
             src="https://t4.ftcdn.net/jpg/04/75/00/99/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg"/>
        <h1 class="mt-3 text-lg font-medium text-gray-800">Admin</h1>
        <p class="text-sm text-gray-500">Administrator</p>
      </div>
      <nav class="flex-1 px-4 py-6 space-y-1">
        <a class="sidebar-item flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition-colors cursor-pointer" 
           onclick="showSection('uploadPhotoSection')">
          <i class="fas fa-upload mr-3 text-indigo-500"></i>
          <span>Upload Photo</span>
        </a>
        <a class="sidebar-item flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition-colors cursor-pointer" 
           onclick="showSection('addPhotographerSection')">
          <i class="fas fa-user-plus mr-3 text-indigo-500"></i>
          <span>Add Photographer</span>
        </a>
        <a class="sidebar-item flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition-colors cursor-pointer" 
           onclick="showSection('viewContactDetailsSection')">
          <i class="fas fa-envelope mr-3 text-indigo-500"></i>
          <span>View Contact Details</span>
        </a>
        <a class="sidebar-item flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition-colors" 
           href="logout.php">
          <i class="fas fa-sign-out-alt mr-3 text-indigo-500"></i>
          <span>Logout</span>
        </a>
      </nav>
    </div>

    <!-- Main content -->
    <div class="flex-1 p-8">
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Photo Management Dashboard</h1>
        <p class="text-gray-600">Manage your photography content and photographers</p>
      </div>

      <!-- Upload Photo Section -->
      <div class="active-section bg-white rounded-xl shadow-sm p-6 mb-8" id="uploadPhotoSection">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-semibold text-gray-800">Upload New Photo</h2>
          <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Active</span>
        </div>
        
        <form action="upload.php" enctype="multipart/form-data" id="uploadForm" method="post" class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="photo">Choose a photo</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="photo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
                    <span>Upload a file</span>
                    <input id="photo" name="photo" type="file" class="sr-only" required>
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="category">Category</label>
              <select id="category" name="category" required class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="nature">Nature</option>
                <option value="portrait">Portrait</option>
                <option value="wedding">Wedding</option>
                <option value="animals">Animals</option>
                <option value="event">Event</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Photo Name</label>
              <input type="text" id="name" name="name" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <i class="fas fa-upload mr-2"></i>
              Upload Photo
            </button>
          </div>
        </form>

        <!-- Photo Table -->
        <div class="mt-10">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Uploaded Photos</h2>
          <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                  <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200" id="photoTable">
                <?php include "fetch_photos.php"; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Add Photographer Section -->
      <div class="hidden bg-white rounded-xl shadow-sm p-6 mb-8" id="addPhotographerSection">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-semibold text-gray-800">Add New Photographer</h2>
          <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Team</span>
        </div>
        
        <form action="add_photography.php" enctype="multipart/form-data" id="addPhotographerForm" method="post" class="space-y-5">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="photographer_name">Full Name</label>
              <input type="text" id="photographer_name" name="photographer_name" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="photographer_email">Email Address</label>
              <input type="email" id="photographer_email" name="photographer_email" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="photographer_photo">Profile Photo</label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
                <input type="file" id="photographer_photo" name="photographer_photo" required class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1" for="photographer_speciality">Speciality</label>
              <input type="text" id="photographer_speciality" name="photographer_speciality" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
              <i class="fas fa-user-plus mr-2"></i>
              Add Photographer
            </button>
          </div>
        </form>
      </div>

      <!-- View Contact Details Section -->
      <div class="hidden bg-white rounded-xl shadow-sm p-6 mb-8" id="viewContactDetailsSection">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-semibold text-gray-800">Contact Messages</h2>
          <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Messages</span>
        </div>
        
        <div class="text-center py-12">
          <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <h3 class="mt-2 text-lg font-medium text-gray-900">View contact messages</h3>
          <p class="mt-1 text-sm text-gray-500">Click the button below to view all contact messages from users.</p>
          <div class="mt-6">
            <a href="view_message.php" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              <i class="fas fa-envelope-open-text mr-2"></i>
              View Messages
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showSection(sectionId) {
      document.getElementById('uploadPhotoSection').classList.remove('active-section');
      document.getElementById('uploadPhotoSection').classList.add('hidden');
      document.getElementById('addPhotographerSection').classList.remove('active-section');
      document.getElementById('addPhotographerSection').classList.add('hidden');
      document.getElementById('viewContactDetailsSection').classList.remove('active-section');
      document.getElementById('viewContactDetailsSection').classList.add('hidden');
      
      document.getElementById(sectionId).classList.remove('hidden');
      document.getElementById(sectionId).classList.add('active-section');
    }

    function deletePhoto(id) {
      if (confirm("Are you sure you want to delete this photo?")) {
        window.location.href = `delete.php?id=${id}`;
      }
    }
  </script>
</body>
</html>