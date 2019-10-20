    


     <nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top" id="navbar" style="margin-bottom: 0%;">
      <button type="button" id="sidebarCollapse" class="btn1 btn btn-info">
    <i class="fas fa-align-left"></i>  <span> Toggle</span>
      </button>
      
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="text-decoration: none;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="text-decoration: none;">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="text-decoration: none;">Analytics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="text-decoration: none;">Graphs</a>
      </li>
      
    </ul>
  </div>

</nav>

<script>
    $(document).ready(function(){
      $('#sidebarCollapse').on('click',function(){
        $('#sidebar').toggleClass('active');
      });
    });  



</script>


   
