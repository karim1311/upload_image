<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image uploader</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="/src/js/main.js" defer></script>
</head>

<body>
    <main class="min-h-screen flex justify-center items-center">
        <div class="h-[400px] w-[400px] bg-slate-200 flex flex-col justify-center items-center gap-4">
            <div class="text-center">
                <h2 class="text-xl">Upload your image</h2>
                <span class="text-sm text-[#828282]">File should be jpg, png</span>
            </div>
            <form method="post" enctype="multipart/form-data" action="/src/handle_db/upload_image.php" class="relative h-[200px] border-[#97BEF4] border border-dashed rounded-md">
                <input type="file" name="img" id="img" class="h-full opacity-0 relative z-10">
                <div class="absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center flex-col">
                    <div class="h-[100px]">
                        <img src="/public/gato.webp" alt="Picture" class="h-full rounded-md">
                    </div>
                    <span class="text-[#BDBDBD]">Drag & Drop your image here</span>
                </div>
            </form>

            <span class="text-[#BDBDBD]">Or</span>

            <div>
                <label for="img" class="px-4 py-2 bg-[#2F80ED] text-white rounded-md cursor-pointer">Choose a file</label>
            </div>
        </div>
    </main>n

</body>

</html>