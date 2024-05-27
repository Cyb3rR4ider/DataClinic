<nav class="navbar navbar-expand-lg navbar-light "style="background-color: #e3f2fd;" id="usernavbar">
  <a class="navbar-brand" href="index.php">DataClinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto"> <!-- changed mr-auto to mx-auto for center -->
      <!-- Αυτό είναι ένα dropdown menu με submenus. -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Χρήστες
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=3">Προβολή όλων των Xρηστών</a>
          <a class="dropdown-item" href="index.php?action=10">Εισαγωγή Χρήστη</a>
          <a class="dropdown-item" href="index.php?action=5">Αναζήτηση Χρήστη</a>
      </li>
      <!-- Eδώ κλείνει το dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ασθενείς
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=7">Προβολή όλων των Ασθενών</a>
          <a class="dropdown-item" href="index.php?action=22">Εισαγωγή Ασθενή</a>
          <a class="dropdown-item" href="#">Αναζήτηση Ασθενή</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ραντεβού
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=8">Προβολή όλων των Ραντεβού</a>
          <a class="dropdown-item" href="index.php?action=21">Εισαγωγή Ραντεβού</a>
          <a class="dropdown-item" href="#">Αναζήτηση Ραντεβού</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Διαγνώσεις
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=23">Προβολή όλων των Διαγνωσεων</a>
          <a class="dropdown-item" href="index.php?action=28">Εισαγωγή Διάγνωσης</a>
          <a class="dropdown-item" href="">Αναζήτηση Διαγνωσεων</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Θεραπείες
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=24">Προβολή όλων των Θεραπειών</a>
          <a class="dropdown-item" href="">Εισαγωγή Αγωγής</a>
          <a class="dropdown-item" href="#">Αναζήτηση Αγωγών</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ιατρικό Ιστορικό
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=25">Προβολή Ιατρικόυ Ιστορικού</a>
          <a class="dropdown-item" href="">Εισαγωγή Ιατρικόυ Ιστορικού</a>
          <a class="dropdown-item" href="#">Αναζήτηση Ιατρικόυ Ιστορικού</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ιστορικό Πληρωμών
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=26">Προβολή Ιστορικού Πληρωμών</a>
          <a class="dropdown-item" href="">Εισαγωγή Πληρωμής</a>
          <a class="dropdown-item" href="#">Αναζήτηση Πληρωμής</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ρόλοι Χρηστών
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=27">Προβολή Ρόλων</a>
          <a class="dropdown-item" href="">Εισαγωγή Ρόλου</a>
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
      <button class="btn btn-outline-primary" type="submit">Logout</button>
    </form>
  </div>
  </div>
</nav>