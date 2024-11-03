<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>My Doctor Online</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Dashboard/Title_Log.jpg') }}">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
            <link rel="stylesheet" href="{{ asset('css/asideMain.css') }}"> 
       
    </head>
    <body>
    <div class="container">
        @include('Layouts.aside_Main')
        <!-- Sidebar -->
        <aside id="nav-bar">
            <input id="nav-toggle" type="checkbox"/>
            <div id="nav-header">
                <a id="nav-title" target="_blank">
                    <i class="fab fa-codepen"></i> My Doctor Online
                </a>
                <label for="nav-toggle">
                    <span id="nav-toggle-burger"></span>
                </label>
                <hr/>
            </div>

            <div id="nav-content">
                <div class="nav-button"><i class="fas fa-palette"></i><span>My Profile</span></div>
                <div class="nav-button"><i class="fas fa-images"></i><span>My Doctors</span></div>
                <div class="nav-button"><i class="fas fa-thumbtack"></i><span>Booking</span></div>
                <hr/>
                <div class="nav-button"><i class="fas fa-heart"></i><span>Notification</span></div>
                <div class="nav-button"><i class="fas fa-chart-line"></i><span>History</span></div>
                <hr/>
                <div id="nav-content-highlight"></div>
            </div>
        </aside>

        <!-- Main content -->
        <div class="main-content">
            <h1>Welcome to My Doctor Online</h1>
            <p>This is the main content area where information will appear after the sidebar.</p>
        </div>
    </div>
</body>
      