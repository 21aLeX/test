var miror;
async function to(file) {
    let formData = new FormData();
    formData.append('file', file);
    let response = await fetch('dir.php',{method: 'POST', body: formData })
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        if(miror == undefined){
            document.getElementById("some_iframe").value = body;
            miror = CodeMirror.fromTextArea(document.getElementById("some_iframe"), {
                lineNumbers: true,
                lineWrapping: true,
            });
            miror.setSize('100%', '100%')
        }
        miror.setValue(body);
    });
}

async function sentData() {
    let input = document.getElementById('id')
    let id = input.value;
    if (!id){
        alert('введите id!');
        input.focus();
    }
    let formData = new FormData();
    formData.append('id', id);
    let result = fetch('dir.php', { method: 'POST', body: formData })
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        document.getElementById("result").value = body;
    });

}

fetch('dir.php');