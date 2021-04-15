<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">MyCollege Website</a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      
      <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculyies.php">Faculyies</a>
        </li>

        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Dropdown
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dcs.php">Department of Computer Science</a></li>
            <li><a class="dropdown-item" href="dc.php">Department of Commerece</a></li>
            <li><a class="dropdown-item" href="da.php">Department of Arts</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Search form -->
      <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control"
          placeholder="Type query"
          aria-label="Search"
        />
        <button
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          Search
        </button>
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->