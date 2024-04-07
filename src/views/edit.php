<?php
require_once(__DIR__.'/../db/db.php');

$id = $_GET["id"];
$sql = "SELECT * FROM `users` where id=$id";
$result = mysqli_query($connection, $sql);
$resultData = mysqli_fetch_assoc($result);

$fname = $resultData["fname"];
$lname = $resultData["lname"];
$email = $resultData["email"];
$number = $resultData["number"];
$city = $resultData["city"];
$gender = $resultData["gender"];
$description = $resultData["description"];
$file_path = $resultData["file_path"];
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-xl w-full bg-white p-8 rounded-lg shadow-lg">
        <form action="../controllers/editSQL.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="fname" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo $fname ?>" required class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="lname" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name" value="<?php echo $lname ?>" required class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email ?>" required class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <input type="tel" id="number" name="number" placeholder="Enter your phone number" value="<?php echo $number ?>" required class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <span class="block text-gray-700 text-sm font-bold mb-2">Gender</span>
                <div class="flex items-center">
                    <div class="mr-4">
                        <input type="radio" id="male" name="gender" value="male" <?php echo ($gender === 'male') ? 'checked' : ''; ?> class="mr-2 leading-tight">
                        <label for="male" class="text-sm">Male</label>
                    </div>
                    <div>
                        <input type="radio" id="female" name="gender" value="female" <?php echo ($gender === 'female') ? 'checked' : ''; ?> class="mr-2 leading-tight">
                        <label for="female" class="text-sm">Female</label>
                    </div>
                </div>
            </div>


            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="description" name="description" placeholder="Enter your description" required class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo $description ?></textarea>
            </div>
            <div class="mb-4">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">Upload New File</label>
                <input type="file" id="file" name="file" value="<?php echo $file_path ?>" class="appearance-none border-b border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
        </form>
    </div>
</body>