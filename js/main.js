var editor = ace.edit(document.querySelector("#editor"), {
 theme: "ace/theme/cobalt",
 mode: "ace/mode/javascript"});

var textarea = document.querySelector('#hidden_editor'); 

editor.session.on('change', function () {
	textarea.textContent = editor.getValue();
});
