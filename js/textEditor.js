
var editor = new Quill('#editor', {
    theme: 'snow', 
    modules: 
    {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'link','image'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'align': [] }],
          ],
    }
});
var form = document.getElementById("myform");
let hiddenInput=document.getElementById("detail_hidden_input");

form.addEventListener('submit', function(e){
    hiddenInput.value = editor.root.innerHTML;
  });