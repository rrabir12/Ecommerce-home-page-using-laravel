<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce | Home</title>

  {{-- bootstrap css --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  {{-- external css --}}
  <link rel="stylesheet" href="css/style.css">

  {{-- external js --}}
  {{-- <script src="js/script.js"></script> --}}

  {{-- font awesome link --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
  hr{
  height: 3px;
  width: 45px;
  opacity: 1 !important;
  background-color: rgb(13, 96, 179);
  
}
</style>
<body>

  <x-navbar />
  <x-hero />

  <button id="backTotop" class="btn up-arrow">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>

  <x-brand />
  <x-featured />
  <x-service />
  <x-newarrival />
  <x-footer />
 
  <script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>