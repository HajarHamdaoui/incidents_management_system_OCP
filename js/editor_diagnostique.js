document.addEventListener('DOMContentLoaded', function() {

var editor2 = new Quill('#editor2', {
    theme: 'snow', 
    modules: 
    {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'link'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'align': [] }],
          ],
    }
});

let hiddenInput2=document.getElementById("diagnostic_hidden_input");
var form2=document.getElementById("diagnostic_sub");
let submitButton = document.getElementById("diag_btn");
form2.addEventListener('submit', async function(e) {
    e.preventDefault(); // Prevent the default form submission.
    submitButton.disabled = true; // Disable the submit button.
    let quillContent = editor2.root.innerHTML;
      hiddenInput2.value = quillContent;
      alert(hiddenInput2.value);
      submitButton.disabled = true;

      // Trigger form submission after a slight delay (adjust as needed).
      setTimeout(function() {
        form2.submit();
      }, 200);
  });
});