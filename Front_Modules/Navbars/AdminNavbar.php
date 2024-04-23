<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DataClinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Αυτό είναι ένα dropdown menu με submenus. -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Χρήστες
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=3">Προβολή όλων των χρηστών</a>
          <a class="dropdown-item" href="">Εισαγωγή Χρήστη</a>
          <a class="dropdown-item" href="#">Αναζήτηση Χρήστη</a>
      </li>
      <!-- Eδώ κλείνει το dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ασθενείς
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=7">Προβολή όλων των Ασθενών</a>
          <a class="dropdown-item" href="">Εισαγωγή Ασθενή</a>
          <a class="dropdown-item" href="#">Αναζήτηση Ασθενή</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ραντεβού
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=40">Προβολή όλων των Ραντεβού</a>
          <a class="dropdown-item" href="index.php?action=41">Εισαγωγή Ραντεβού</a>
          <a class="dropdown-item" href="index.php?action=42">Αναζήτηση Ραντεβού</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Διαχείριση
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=3">Προβολή όλων των Ρυθμίσεων</a>
      </li>
    </ul>
    <form class="d-flex" action="Functions/Logout.php">
      <button class="btn btn-outline-success" type="submit">Logout</button>
    </form>
  </div>
  </div>
</nav>