const uploadInp = document.getElementsByClassName('upload-input')[0]
const form = document.getElementsByClassName('upload-form')[0]
const formContainer = document.getElementsByClassName('form-container')[0]
const progressBarContainer = document.getElementsByClassName('progress-bar-container')[0]
const meter = document.getElementsByClassName('meter')[0]
const uploadResultContainer = document.getElementsByClassName('upload-result-container')[0]

let xhr = new XMLHttpRequest()

uploadInp.addEventListener('change', () => {
    const byteLimit = 20971520

    let formData = new FormData(form)

    if (formData.get('document').size > byteLimit) {
        console.log(`Upload file size: ${formData.get("document").size}`)
        console.log('File is too big!');
    } else {
        xhr.open('POST', 'http://localhost:3000/upload')
        xhr.send(formData)
    }
})

xhr.upload.onloadstart = function () {
    formContainer.classList.toggle('show')
    progressBarContainer.classList.toggle('show')
}

xhr.upload.onprogress = function (event) {
    console.log(`Received: ${event.loaded} of ${event.total}`)

    let currentPercent = (event.loaded * 100) / event.total

    meter.style.width = currentPercent + "%"
}

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        console.log("I'm Done")
        progressBarContainer.classList.toggle('show')
        uploadResultContainer.classList.toggle('show')
        console.log(xhr.response)
        const dLink = document.getElementsByClassName('d-link')[0]
        dLink.value = xhr.response
    }
}
