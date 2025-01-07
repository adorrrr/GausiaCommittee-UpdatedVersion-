// JavaScript (AJAX) for handling logout
document.getElementById("logoutButton").addEventListener("click", function() {
    fetch('logout.php', {
        method: 'GET',
    })
    .then(response => {
        window.location.href = 'login.php';
    })
    .catch(error => {
        console.error('Logout failed:', error);
    });
});
