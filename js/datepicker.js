

document.addEventListener("DOMContentLoaded", function() {
    const currentDate = new Date();
    
    flatpickr("#datetime-picker", {
      enableTime: true,
      minDate: currentDate,
      minTime: currentDate,
      defaultDate: currentDate,
      "locale": "fr" ,
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    const currentDate = new Date();
    
    flatpickr("#datetime-picker2", {
      enableTime: true,
      maxDate: currentDate,
      maxTime: currentDate,
      defaultDate: currentDate,
      "locale": "fr" ,
    });
  });
