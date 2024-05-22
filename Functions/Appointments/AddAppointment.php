<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΡΑΝΤΕΒΟΥ</h2>
    <form action="" method="post">
        
        <div class="form-group">
            <label for="app-type">Είδος Ραντεβού:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="normal">Κανονικό Ραντεβού</option>
                <option value="emergency">Επείγον Ραντεβού</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="app-dt">Ημερομηνία Ραντεβού:</label>
            <input type="date" class="form-control" id="app-dt" name="app-dt" required>
        </div>
        
        <div class="form-group">
            <label for="app-tm-td"> 'Ωρα Έναρξης Ραντεβού:</label>
            <input type="time" class="form-control" id="app-tm-td" name="app-tm-td" required>
        </div>
        
        <div class="form-group">
            <label for="app-tm-end">'Ωρα Λήξης Ραντεβού:</label>
            <input type="time" class="form-control" id="app-tm-end" name="app-tm-end" required>
        </div>

        <div class="form-group">
            <label for="app-pat-id">Patient ID:</label>
            <input type="number" class="form-control" id="app-pat-id" name="app-pat-id" required>
        </div>

        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>