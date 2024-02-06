<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #image-preview {
            max-width: 100%;
            max-height: 200px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

    <h2>Add Product</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form  action="{{route('store.photo')}}"  method="get" enctype="multipart/form-data">
        @csrf
        <label for="photo">Photo:</label>
        <input type="file" name="photo_name" id="photo" accept="image/*" onchange="previewImage(event)" >

        <!-- Image preview container -->
        <div id="image-preview"></div>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" ></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" >

        <label for="product_type">Name:</label>
        <select name="product_type" id="product_type" >
            <option value="T-shirt">T-shirt</option>
            <option value="Classic">Classic</option>
            <option value="trouser">trouser</option>
        </select>
        <button type="submit">Add Product</button>
    </form>

    <script>
        // Function to preview the selected image
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('image-preview');
            
            // Ensure that a file is selected
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // Update the image preview
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                // Clear the preview if no file is selected
                preview.innerHTML = '';
            }
        }
    </script>

</body>
</html>
