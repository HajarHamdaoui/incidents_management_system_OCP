document.getElementById('showConfirm').addEventListener('click', function() {
	document.getElementById('confirmOverlay').classList.remove('hidden');
  });
  
  document.getElementById('confirmYes').addEventListener('click', function() {
	alert('Confirmed!');
	document.getElementById('confirmOverlay').classList.add('hidden');
  });
  
  document.getElementById('confirmNo').addEventListener('click', function() {
	alert('Cancelled.');
	document.getElementById('confirmOverlay').classList.add('hidden');
  });
  