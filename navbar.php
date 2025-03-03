<?php
// navbar.php
// Make sure session_start() has been called in the including file.
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Kisan.ai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
             <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="ecommerce.php">Marketplace</a>
          </li>
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'farmer'): ?>
          <li class="nav-item">
             <a class="nav-link" href="profile.php">My Profile</a>
          </li>
          <?php endif; ?>
       </ul>
       <ul class="navbar-nav">
          <li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
          </li>
       </ul>
    </div>
  </div>
</nav>
