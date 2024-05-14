<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;700;500;600;700;800;900&family=Montserrat:wght@100;500;600&display=swap" rel="stylesheet">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[inter]">
<header class="bg-gray-100 shadow-lg">
        <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <img class="w-16" src="./image-src/ts-mark.png" alt="logo">
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-3 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-100 md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-100">
                  <li><a href="./siswa/add_student.php" class="font-regular block md:py-3 md:px-5 text-gray-900 rounded-md hover:font-bold hover:py-3 hover:px-5 md:hover:bg-gray-100 md:hover:bg-red-700 md:border-0 md:hover:text-gray-100 md:p-0 transition delay-5s">Add Student</a></li>
                  <li><a href="./petugas/add_employee.php" class="font-regular block md:py-3 md:px-5 text-gray-900 rounded-md hover:font-bold hover:py-3 hover:px-5 md:hover:bg-gray-100 md:hover:bg-red-700 md:border-0 md:hover:text-gray-100 md:p-0 transition delay-5s">Add Employee</a></li>
                  <li><a href="./buku/add_book.php" class="font-regular block md:py-3 md:px-5 text-gray-900 rounded-md hover:font-bold hover:py-3 hover:px-5 md:hover:bg-gray-100 md:hover:bg-red-700 md:border-0 md:hover:text-gray-100 md:p-0 transition delay-5s">Add Book</a></li>
                  <li><a href="student_data.php" class="font-regular block md:py-3 md:px-5 text-gray-900 rounded-md hover:font-bold hover:py-3 hover:px-5 md:hover:bg-gray-100 md:hover:bg-red-700 md:border-0 md:hover:text-gray-100 md:p-0 transition delay-5s">Student Data</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>