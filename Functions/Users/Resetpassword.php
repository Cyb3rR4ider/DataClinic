<?php
$allagipass = new Users(); // Μετακινήστε τη δημιουργία του αντικειμένου έξω από το if block

if (!isset($_POST['newPassword'])) {
    // Αν δεν έχει υποβληθεί η φόρμα για αλλαγή κωδικού
    if (isset($_POST['user_id'])) {
        // Ελέγχουμε αν έχει περαστεί η τιμή user_id
        $allagipass->user_id = $_POST['user_id'];
        $allagipass->getUser();
    } else {
        // Αν δεν έχει περαστεί η τιμή user_id
        echo "User ID not provided.";
    }
?>
    <!-- Φόρμα για επαναφορά κωδικού -->
    <h2 class="info">Επαναφορά κωδικού για τον χρήστη: <?php echo $allagipass->username; ?></h2>
    <form action="" method="post">
        <input type="hidden" name="passidres" value="<?php echo $allagipass->user_id; ?>"> <!-- Κρυφό πεδίο για το user id -->
        <label for="newPassword">Νέος κωδικός:</label>
        <input type="password" id="newPassword" name="newPassword" required><br>
        <label for="confirmPassword">Επιβεβαίωση κωδικού:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>
        <!-- Κουμπί υποβολής φόρμας -->
        <button type="submit" name="resetPassword">Επαναφορά κωδικού</button>
        <button type="button" onclick="resetForm()">Καθαρισμός</button> <!-- Κουμπί για εκκαθάριση της φόρμας -->
    </form>

<?php
} else {
    // Αν έχει υποβληθεί η φόρμα για αλλαγή κωδικού
    $changedpass = new Users();
    $id = $_POST['passidres'];
    $pass = $_POST['newPassword'];
    $confirmPass = $_POST['confirmPassword'];
    if ($pass !== $confirmPass) { // Αν οι κωδικοί δεν ταιριάζουν
        echo "<p class='error'>Ο κωδικός δεν ταιριάζει. Προσπαθήστε ξανά.</p>";
        // Εμφανίζουμε ξανά τη φόρμα
?>
        <!-- Φόρμα για επαναφορά κωδικού -->
        <h2 class="info">Επαναφορά κωδικού για τον χρήστη: <?php echo $allagipass->username; ?></h2>
        <form action="" method="post">
            <input type="hidden" name="passidres" value="<?php echo $allagipass->user_id; ?>"> <!-- Κρυφό πεδίο για το user id -->
            <label for="newPassword">Νέος κωδικός:</label>
            <input type="password" id="newPassword" name="newPassword" required><br>
            <label for="confirmPassword">Επιβεβαίωση κωδικού:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br>
            <!-- Κουμπί υποβολής φόρμας -->
            <button type="submit" name="resetPassword">Επαναφορά κωδικού</button>
            <button type="button" onclick="resetForm()">Καθαρισμός</button> <!-- Κουμπί για εκκαθάριση της φόρμας -->
        </form>
<?php
    } else {
        // Εάν οι κωδικοί ταιριάζουν, εκτελούμε την αλλαγή
        $changedpass->user_id = $id;
        $changedpass->updatePasswordUser($pass);
        echo "<p class='success'>Επιτυχής Αλλαγή Κωδικού.</p>";
    }
}
?>
