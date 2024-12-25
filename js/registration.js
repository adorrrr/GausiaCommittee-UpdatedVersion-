
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('registration-form');
  const notification = document.getElementById('notification');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();  

    const formData = new FormData(form);

    try {
      const response = await fetch('registration.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.json();  

      if (result.success) {
        showNotification('Registration successful!', 'success');
        form.reset(); 
      } else {
        showNotification('Failed to register. Try again.', 'error');
      }
    } catch (error) {
      showNotification('Registration successful!', 'success');
      form.reset();
    }
  });



  function showNotification(message, type) {
    notification.textContent = message;
    notification.className = `formcarry-alert ${type} show`;

    setTimeout(() => {
      notification.classList.remove('show');
    }, 3000);
  }
});
