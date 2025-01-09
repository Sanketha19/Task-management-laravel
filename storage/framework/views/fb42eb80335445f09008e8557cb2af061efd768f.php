<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>

    <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="sank.css">

    <!-- Bootstrap CSS (if you're using Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container h-100 mt-5 bg-light">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <!-- Title section with Sanketh -->
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Sanketh</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('posts.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
                            </div>

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Write your post body here..." required></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS and jQuery (if you need interactive elements) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Adarsh shetty\OneDrive\Desktop\sanketha\crudposts\resources\views/posts/create.blade.php ENDPATH**/ ?>