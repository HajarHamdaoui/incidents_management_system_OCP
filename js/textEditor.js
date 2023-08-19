
var quill = new Quill('#editor', {
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