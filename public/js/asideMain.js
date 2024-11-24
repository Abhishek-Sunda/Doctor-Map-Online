  function toggleSidebar() 
  {
    var sidebar = document.querySelector('.sidebar');
    var navbar  = document.querySelector('.navbar');
    var footer  = document.querySelector('footer');
    var formbody  = document.querySelector('form-container');
    sidebar.classList.toggle('minimized');
    navbar.classList.toggle('sidebar-minimized');
    footer.classList.toggle('sidebar-minimized');
    formbody.classList.toggle('sidebar-minimized');
  }
    