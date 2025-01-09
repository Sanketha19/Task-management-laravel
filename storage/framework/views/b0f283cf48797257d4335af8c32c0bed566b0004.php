<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <title>Add Post Website</title>

    
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4; /* Set the background color for the page */
        }

        .navbar {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f0ad4e; /* Change navbar color */
        }

        .navbar a {
            color: white !important; /* Ensure text color is white */
        }

        .post-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
            background-color: white; /* Make each post's background white */
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .post-item:last-child {
            border-bottom: none;
        }

        .post-title {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .post-body {
            font-size: 1.1rem;
            color: #555;
        }

        .post-actions {
            margin-top: 10px;
        }

        .post-actions a,
        .post-actions button {
            margin-right: 10px;
        }

        .btn-success {
            background-color: #5cb85c; 
        }

        .add-post-section {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .add-post-section h3 {
            margin-bottom: 20px;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="<?php echo e(route('posts.index')); ?>">Add Your Post</a>
            <div class="justify-end">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
  
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12">
                    <div class="post-item">
                        <h5 class="post-title"><?php echo e($post->title); ?></h5>
                        <p class="post-body"><?php echo e($post->body); ?></p>
                        <div class="post-actions">
                            <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


        <div class="add-post-section mt-5">
            <h3>Create a New Post</h3>
            <form action="<?php echo e(route('posts.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="" required>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" placeholder="" required></textarea>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success w-100">Add Post</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\Users\Adarsh shetty\OneDrive\Desktop\sanketha\crudposts\resources\views/posts/index.blade.php ENDPATH**/ ?>