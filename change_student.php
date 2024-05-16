<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
        include "header.php";
    ?>
    <label for="nama">
        <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Nama</span>
        <input type="text" id="nama" placeholder="Nama kamu.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
    </label>
    <?php 
        include "footer.php"
    ?>
</body>
</html>