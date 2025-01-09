<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Here</title>

    <style>
        /* Change the background color of the whole page */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Customize the navbar background color */
        .navbar {
            background-color: #ff9800;
        }

        /* Change the color of navbar brand text */
        .navbar-brand {
            color: white !important;
        }

        /* Customize the card container */
        .container {
            margin-top: 50px;
        }

        /* Update the form title */
        h3 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Update form background color */
        .form-control {
            background-color: #f1f3f5;
        }

        /* Style the update button */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Form group */
        .form-group label {
            font-weight: bold;
            color: #495057;
        }

        /* Card background color */
        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Customize button and link color */
        .btn-sm {
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 5px;
        }

        /* Green Edit Button */
        .btn-edit {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-edit:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        /* Red Delete Button */
        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>

</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="<?php echo e(route('posts.index')); ?>">CRUD</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="<?php echo e(route('posts.create')); ?>">Add Post</a>
                </div>
            </div>
        </div>
    </nav> -->

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-info text-white text-center">
                        <h3>Update Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="3" required><?php echo e($post->body); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\Users\Adarsh shetty\OneDrive\Desktop\sanketha\crudposts\resources\views/posts/edit.blade.php ENDPATH**/ ?>