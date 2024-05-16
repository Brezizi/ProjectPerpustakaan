<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <?php 
        include "header.php";
    ?>

    <!-- Form -->
    <div class="max-w-screen-lg mx-auto my-16">
        <h2 class="font-extrabold text-4xl my-16">Add Student</h2>
        <form action="how_add_student.php" method="post">
            <label for="nisn_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">NISN</span>
                <input type="text" id="nisn_siswa" placeholder="Your NISN.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
            </label>
            <label for="nama_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Nama</span>
                <input type="text" id="nama_siswa" placeholder="Your Name.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
            </label>
            <label for="kelas_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Kelas</span>
                <input type="text" id="kelas_siswa" placeholder="Your Class.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
            </label>
            <label for="jk_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Gender</span>
                <select name="jk_siswa" required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
                    <option value="-">Choose Your Gender</option>
                    <option value="L">Boy</option>
                    <option value="P">Girl</option>
                </select>
            </label>
            <label for="usn_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Username</span>
                <input type="text" id="usn_siswa" placeholder="Your Username.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
            </label>
            <label for="pass_siswa">
                <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Password</span>
                <input type="password" id="pass_siswa" placeholder="Your Password.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-md bg-gray-50 border ring-2 focus:outline-none focus:ring-sky-500 focus:ring-opacity-50 focus:border-sky-500 focus:transition delay-5s">
            </label>
            <button class="block w-full font-semibold mb-2 bg-red-700 text-gray-50 py-2 px-3 rounded-lg hover:bg-red-800 hover:transition delay-5s active:bg-red-900 active:transition delay-5s">
                Submit
            </button>
        </form>
    </div>

    <!-- Footer -->
    <?php 
        include "footer.php"
    ?>
</body>
</html>