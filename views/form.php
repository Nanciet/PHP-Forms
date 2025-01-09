<?php
require_once "../layout.php"; // Include the reusable layout file

// Dynamic content for the form page
$content = "
    <div class='container'>
        <h1>Submit Your Details</h1>
        <form action='../process_form.php' method='POST'>
            <label for='name'>Name:</label>
            <input type='text' id='name' name='name' required>
            
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email' required>

            <label for='website'>Website:</label>
            <input type='url' id='website' name='website'>

            <label for='comment'>Comment:</label>
            <textarea id='comment' name='comment'></textarea>

            <label for='gender'>Gender:</label>
            <select id='gender' name='gender'>
                <option value='male'>Male</option>
                <option value='female'>Female</option>
                <option value='other'>Other</option>
            </select>

            <button type='submit'>Submit</button>
        </form>
    </div>
";

// Render the page using the layout
renderLayout("Form Page", $content);
?>
