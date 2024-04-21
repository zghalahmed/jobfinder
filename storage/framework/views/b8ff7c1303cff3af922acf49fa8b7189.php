<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votre Titre</title>
  <!-- Liens vers les fichiers CSS externes -->
  <link rel="stylesheet" href="path/to/external/styles.css">
  <link rel="stylesheet" href="path/to/another/external/styles.css">
  <!-- Style CSS en ligne -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }

    .site-section {
      padding: 50px 0;
    }

    .feature-item {
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      width: 150px; /* ajustez la taille du cercle selon vos besoins */
      height: 150px; /* ajustez la taille du cercle selon vos besoins */
      background-size: cover;
      background-position: center;
      text-align: center;
      color: #fff;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .feature-item:hover {
      transform: scale(1.05);
    }

    .feature-item h2 {
      margin: 0;
      font-size: 16px;
      font-weight: bold;
    }

    .counting {
      font-size: 14px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin: -15px;
    }

    .col-sm-6, .col-md-4, .col-lg-3 {
      flex: 0 0 25%;
      max-width: 25%;
      padding: 15px;
    }

    @media (max-width: 992px) {
      .col-sm-6, .col-md-4, .col-lg-3 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }
    }

    @media (max-width: 768px) {
      .col-sm-6, .col-md-4, .col-lg-3 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media (max-width: 576px) {
      .col-sm-6, .col-md-4, .col-lg-3 {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Popular Categories</h2>
      </div>
    </div>
    <div class="row">
      <!-- Vous pouvez ajouter vos catégories ici -->
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
        <a href="<?php echo e(route('category.index', [$category->id,$category->slug ])); ?>" class="feature-item" style="background-image: url('<?php echo e($category->background_image); ?>');">
          <h2><?php echo e($category->name); ?></h2>
          <span class="counting"><?php echo e($category->jobs->count()); ?></span>
        </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>

<!-- Le reste du contenu de votre page -->

</body>
</html><?php /**PATH C:\Users\zghal\Downloads\jobFinder-main\resources\views/frontend/partials/category.blade.php ENDPATH**/ ?>