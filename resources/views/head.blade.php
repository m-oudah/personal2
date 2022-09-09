<!doctype html>
<?php $lang = app()->getLocale(); 

?>

<!DOCTYPE html>
<html lang="{{$lang}}">

<head>
    <meta charset="utf-8">
    <title>Personal Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Personal Template" name="keywords">
    <meta content="Personal Template" name="description">

    
       <!-- CSS FILES -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        


    @if ($lang =='ar')
    <link href="{{asset('assets/css-rtl/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css-rtl/templatemo-first-portfolio-style.css')}}" rel="stylesheet">      
    
    @else
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">

    @endif
</head>
<head>
        <meta charset="utf-8">
        <title>Personal Portfolio </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Personal Portfolio " name="keywords">
        <meta content="Personal Portfolio " name="description">

        <!-- Favicon -->
        <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      
      @if($lang=='ar')
      <link href="{{asset('assets/css-rtl/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css-rtl/style.css')}}" rel="stylesheet">
        @else
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        @endif
    </head>
