document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registration-form');
    const notification = document.getElementById('notification');

    form.addEventListener('submit', (e) => {
      e.preventDefault(); // Prevent form submission
      showNotification();
    });

    function showNotification() {
      notification.classList.add('show');
  
      // Automatically hide the notification after 3 seconds
      setTimeout(() => {
        notification.classList.remove('show');
      }, 3000);
    }
  });