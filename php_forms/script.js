document.getElementById('userForm').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const gender = document.getElementById('gender').value;

    if (!name || !email || !gender) {
        alert('Please fill out all required fields.');
        e.preventDefault();
    }
});
