<head>
    <link rel="stylesheet" href="../../assests/css/pop-up.css">
</head>

<div class="popup-overlay" id="popupOverlay" style="display: none;">
    <div class="popup-form-container" id="popupFormContainer">
        <div class="popup-form" id="popupForm">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <div class="add-user-section">
                <h2>Add New User</h2>
            </div>
            
            <form action="/GED/src/controllers/addSQL.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group">
                        <!-- <label for="fname">First Name</label> -->
                        <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <!-- <label for="lname">Last Name</label> -->
                        <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <!-- <label for="email">Email</label> -->
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <!-- <label for="phone">Phone Number</label> -->
                        <input type="tel" id="number" name="number" placeholder="Enter your phone number" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select id="city" name="city" required>
                            <option value="">Select your city</option>
                            <option value="rabat">Rabat</option>
                            <option value="casablanca">Casablanca</option>
                            <option value="fes">Fes</option>
                            <option value="tangier">Tangier</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!-- <label for="description">Description</label> -->
                        <textarea id="description" name="description" placeholder="Enter your description" required></textarea>
                    </div>
                    <div class="form-group radio-group">
                        <label>Gender:</label>
                        <div>
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male</label>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" value="female" required>
                            <label for="female">Female</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <!-- File upload field -->
                        <label for="file">Upload File:</label>
                        <input type="file" id="file" name="file" required>
                    </div>
                </div>
                <button type="submit" name="submit">Add</button>
            </form>
        </div>
    </div>
</div>
<script >
    const addButton = document.getElementById('addButton');
const popupOverlay = document.getElementById('popupOverlay');

addButton.addEventListener('click', function () {
    popupOverlay.style.display = 'flex'; // Display the pop-up overlay
});

function closePopup() {
    popupOverlay.style.display = 'none'; // Hide the pop-up overlay
}
</script>
