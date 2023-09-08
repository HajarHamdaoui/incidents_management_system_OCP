
function modalbox(i){


  const modal = document.getElementById(`myModal${i}`);
  const openModalBtn = document.getElementById(`openModalBtn${i}`);
  const closeBtn = document.getElementsByClassName(`close${i}`)[0];
  const cancelBtn = document.getElementById(`cancelBtn${i}`);
  
  // Flag to track if the modal has been shown
  let hasModalBeenShown = false;
  
  // Open the modal when the button is clicked
  openModalBtn.addEventListener("click", () => {
    modal.style.display = "flex";
    hasModalBeenShown = true;
  });
  
  // Close the modal when the close button or cancel button is clicked
  function closeModal() {
    modal.style.display = "none";
  }
  
  closeBtn.addEventListener("click", closeModal);
  cancelBtn.addEventListener("click", closeModal);
  
  // Close the modal when the user clicks outside the modal content
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      closeModal();
    }
  });
  
  // Perform the action when the user confirms

  
  // When the page loads, make sure the modal is not shown
  if (!hasModalBeenShown) {
    modal.style.display = "none";
  }
  }